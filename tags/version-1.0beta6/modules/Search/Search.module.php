<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://cmsmadesimple.sf.net
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id: News.module.php 2114 2005-11-04 21:51:13Z wishy $

include_once(dirname(__FILE__) . '/PorterStemmer.class.php');

define( "NON_INDEXABLE_CONTENT", "<!-- pageAttribute: NotSearchable -->" );

class SearchItemCollection
{
  var $_ary;
  var $maxweight;
  
  function SearchItemCollection()
  {
    $this->_ary = array();
    $this->maxweight = 1;
  }
  
  function AddItem($title, $url, $txt, $weight = 1)
  {
    if( $txt == '' ) { $txt = $url; }
    $exists = false;
    
    foreach ($this->_ary as $oneitem)
      {
	if ($url == $oneitem->url)
	  {
	    $exists = true;
	    break;
	  }
      }

    if (!$exists)
      {
	$newitem = new StdClass();
	$newitem->url = $url;
	$newitem->urltxt = $txt;
	$newitem->title = $title;
	$newitem->intweight = intval($weight);
	if (intval($weight) > $this->maxweight)
	  $this->maxweight = intval($weight);
	array_push($this->_ary, $newitem);
      }
  }
	
  function CalculateWeights()
  {
    reset($this->_ary);
    while (list($key) = each($this->_ary))
      {
	$oneitem =& $this->_ary[$key];
	$oneitem->weight = intval(($oneitem->intweight / $this->maxweight) * 100);
      }
  }
}

class Search extends CMSModule
{
  function GetName()
  {
    return 'Search';
  }

  function GetFriendlyName()
  {
    return $this->Lang('search');
  }

  function IsPluginModule()
  {
    return true;
  }

  function HasAdmin()
  {
    return true;
  }

  /*---------------------------------------------------------
   HandlesEvents()
   ---------------------------------------------------------*/
  function HandlesEvents ()
  {
    return true;
  }

  function GetVersion()
  {
    return '1.0.3';
  }

  function MinimumCMSVersion()
  {
    return '1.0-svn';
  }

  function GetAdminDescription()
  {
    return $this->Lang('description');
  }

  function VisibleToAdminUser()
  {
    return true;
  }

  function SetParameters()
  {
    $this->CreateParameter('resultpage', 'null', $this->Lang('param_resultpage'));
    $this->CreateParameter('searchtext','null',$this->Lang('param_searchtext'));
    $this->CreateParameter('submit',$this->Lang('searchsubmit'),
			   $this->Lang('param_submit'));
  }

  function GetSearchHtmlTemplate()
  {
    return '{$startform}

{$label}:&nbsp;{$inputbox}{$submitbutton}{$hidden}

{$endform}';
  }
	
  function GetResultsHtmlTemplate()
  {
    return '<h3>{$searchresultsfor} &quot;{$phrase}&quot;</h3>
{if $itemcount > 0}
	<ul>
	{foreach from=$results item=entry}
		<li>{$entry->title} - <a href="{$entry->url}">{$entry->urltxt}</a> ({$entry->weight}%)</li>
	{/foreach}
	</ul>

	<p>{$timetaken}: {$timetook}</p>
{else}
	<p><strong>{$noresultsfound}</strong></p>
{/if}';
  }
	
  function DefaultStopWords()
  {
    return 'i, me, my, myself, we, our, ours, ourselves, you, your, yours, 
yourself, yourselves, he, him, his, himself, she, her, hers, 
herself, it, its, itself, they, them, their, theirs, themselves, 
what, which, who, whom, this, that, these, those, am, is, are, 
was, were, be, been, being, have, has, had, having, do, does, 
did, doing, a, an, the, and, but, if, or, because, as, until, 
while, of, at, by, for, with, about, against, between, into, 
through, during, before, after, above, below, to, from, up, down, 
in, out, on, off, over, under, again, further, then, once, here, 
there, when, where, why, how, all, any, both, each, few, more, 
most, other, some, such, no, nor, not, only, own, same, so, 
than, too, very';
  }

  function RemoveStopWordsFromArray($words)
  {
    $stop_words = preg_split("/[\s,]+/", $this->GetPreference('stopwords', $this->DefaultStopWords()));
    return array_diff($words, $stop_words);
  }

  function StemPhrase($phrase)
  {
    // strip out smarty tags
    $phrase = preg_replace('/\{.*?\}/', '', $phrase);

    // strip out html and php stuff
    $phrase = strip_tags($phrase);

    // split into words
    $words = str_word_count(strtolower($phrase), 1);

    // ignore stop words
    $words = $this->RemoveStopWordsFromArray($words);

    $stemmer = new PorterStemmer();

    // stem words
    $stemmed_words = array();
    $stem_pref = $this->GetPreference('usestemming', 'false');
    foreach ($words as $word)
      {
	//trim words get rid of wrapping quotes
	$word = trim($word, ' \'"');
			
	// ignore 1 and 2 letter words
	if (strlen($word) <= 2)
	  {
	    continue;
	  }

	if ($stem_pref == 'true')
	  $stemmed_words[] = $stemmer->stem($word, true);
	else
	  $stemmed_words[] = $word;
      }

    return $stemmed_words;
  }

  function AddWords($module = 'Search', $id = -1, $attr = '', $content = '')
  {
    $this->DeleteWords($module, $id, $attr);
    $db =& $this->GetDb();
		
    @$this->SendEvent('SearchItemAdded', array($module, $id, $attr, &$content));
		
    if ($content != "")
      {		
	//Clean up the content
	$stemmed_words = $this->StemPhrase($content);
	$words = array_count_values($stemmed_words);
		
	foreach ($words as $word=>$count)
	  {
	    $db->Execute('INSERT INTO '.cms_db_prefix().'module_search_index (module_name, content_id, extra_attr, word, count) VALUES (?,?,?,?,?)', array($module, $id, $attr, $word, $count));
	  }
      }
  }

  function DeleteWords($module = 'Search', $id = -1, $attr = '')
  {
    $db =& $this->GetDb();
    $parms = array( $module );
    $q = "DELETE FROM ".cms_db_prefix().'module_search_index WHERE module_name=?';
    if( $id != -1 )
      {
	$q .= " AND content_id=?";
	$parms[] = $id;
      }
    if( $attr != '' )
      {
	$q .= " AND extra_attr=?";
	$parms[] = $attr;
      }
    $db->Execute($q, $parms);
    @$this->SendEvent('SearchItemDeleted', array($module, $id, $attr));
  }
	
  function DeleteAllWords()
  {
    $db =& $this->GetDb();
    $db->Execute('DELETE FROM '.cms_db_prefix().'module_search_index');
		
    @$this->SendEvent('SearchAllItemsDeleted');
  }

  function GetHelp($lang='en_US')
  {
    return $this->Lang('help');
  }

  function GetAuthor()
  {
    return 'Ted Kulp';
  }

  function GetAuthorEmail()
  {
    return 'ted@cmsmadesimple.org';
  }

  function GetChangeLog()
  {
    return $this->Lang('changelog');
  }
	
  function RegisterEvents()
  {
    $this->AddEventHandler( 'Core', 'ContentEditPost', false );
    $this->AddEventHandler( 'Core', 'ContentDeletePost', false );
    $this->AddEventHandler( 'Core', 'AddTemplatePost', false );
    $this->AddEventHandler( 'Core', 'EditTemplatePost', false );
    $this->AddEventHandler( 'Core', 'DeleteTemplatePost', false );
    $this->AddEventHandler( 'Core', 'AddGlobalContentPost', false );
    $this->AddEventHandler( 'Core', 'EditGlobalContentPost', false );
    $this->AddEventHandler( 'Core', 'DeleteGlobalContentPost', false );
    $this->AddEventHandler( 'Core', 'ModuleUninstalled', false );
  }

  function Reindex()
  {
    $this->DeleteAllWords();
		
//     $allcontent =& ContentManager::GetAllContent(false);
//     reset($allcontent);
//     while (list($key) = each($allcontent))
//       {
// 	$onecontent =& $allcontent[$key];
// 	if( $onecontent->Active() )
// 	  {
// 	    //$this->ContentEditPost($onecontent);
// 	    $params = array('content' => &$onecontent);
// 	    $this->DoEvent('Core', 'ContentEditPost', $params);
// 	  }
//       }

	global $gCms;
	$templateops =& $gCms->GetTemplateOperations();
    $alltemplates = $templateops->LoadTemplates();
    reset($alltemplates);
    while (list($key) = each($alltemplates))
      {
	$onetemplate =& $alltemplates[$key];
	//$this->EditTemplatePost($onetemplate);
	$params = array('template' => &$onetemplate,
                        'forceindexcontent'=>1);
	$this->DoEvent('Core', 'EditTemplatePost', $params);
      }

	$gcbops =& $gCms->GetGlobalContentOperations();
    $allblobs = $gcbops->LoadHtmlBlobs();
    reset($allblobs);
    while (list($key) = each($allblobs))
      {
	$oneblob =& $allblobs[$key];
	//$this->EditHtmlBlobPost($oneblob);
	$params = array('global_content' => &$oneblob);
	$this->DoEvent('Core', 'EditHtmlBlobPost', $params);
      }
		
    global $gCms;
    foreach($gCms->modules as $key=>$value)
      {
	if ($gCms->modules[$key]['installed'] == true &&
	    $gCms->modules[$key]['active'] == true)
	  {
	    if (method_exists($gCms->modules[$key]['object'], 'SearchReindex'))
	      {
		$gCms->modules[$key]['object']->SearchReindex($this);
	      }
	  }
      }
  }

  function GetEventDescription( $eventname )
  {
    return $this->lang('eventdesc-' . $eventname);
  }

  function GetEventHelp( $eventname )
  {
    return $this->lang('eventhelp-' . $eventname);
  }
	
  function DoEvent( $originator, $eventname, &$params )
  {
    if ($originator == 'Core')
      {
	switch ($eventname)
	  {
	  case 'ContentEditPost':
	    $content =& $params['content'];
					
            $db =& $this->GetDb();
            $q = "SELECT * FROM ".cms_db_prefix()."module_search_index WHERE
                  extra_attr = ? AND content_id = ? LIMIT 1";
            $dbresult =& $db->Execute( $q, array( 'template', $content->TemplateId() ));
            $template_indexed = ( $dbresult && ($dbresult->RecordCount() > 0) );

            if( !$template_indexed )
              {
		$this->DeleteWords($this->GetName(), $content->Id(), 'content');
                break;
              }

	    //Only index content if it's active
	    if ($content->Active()) {

	      //Weight the title and menu text higher
	      $text = str_repeat(' '.$content->Name(), 2) . ' ';
	      $text .= str_repeat(' '.$content->MenuText(), 2) . ' ';

	      $props = $content->Properties();
	      foreach ($props->mPropertyValues as $k=>$v)
		{
		  $text .= $v;
		}

	      // here check for a string to see
	      // if this content is indexable at all
	      $non_indexable = strpos($text, NON_INDEXABLE_CONTENT);
	      if (! $non_indexable)
		{
		  $this->AddWords($this->GetName(), $content->Id(), 'content', $text);
		}
	    }
	    else
	      {
		//Just in case the active flag was turned off
		$this->DeleteWords($this->GetName(), $content->Id(), 'content');
	      }
					
	    break;

	  case 'ContentDeletePost':
	    $content =& $params['content'];

	    $this->DeleteWords($this->GetName(), $content->Id(), 'content');

	    break;
					
	  case 'AddTemplatePost':
	    $template =& $params['template'];
					
	    if( $template->active != false )
	      $this->AddWords($this->GetName(), $template->id, 'template', $template->content);
	    else
	      $this->DeleteWords($this->GetName(), $template->id, 'template');
				
	    break;
					
	  case 'EditTemplatePost':
	    $template =& $params['template'];

	    if( $template->active != false )
	      {
		// here check for a string to see
		// if this content is indexable at all
		$non_indexable = strpos($template->content, NON_INDEXABLE_CONTENT);

                $db =& $this->GetDb();

                // check if the page was indexed already or not
                $q = "SELECT * FROM ".cms_db_prefix()."module_search_index WHERE content_id = ?
                      AND extra_attr = ? LIMIT 1";
                $dbresult =& $db->Execute( $q, array( $template->id, 'template' ) );
                $was_indexed = ( $dbresult && ($dbresult->RecordCount() > 0) );

		// find all of the pages tied to a template
		$q = "SELECT content_id FROM ".cms_db_prefix()."content WHERE template_id = ?";
		$dbresult =& $db->Execute( $q, array( $template->id ) );

                if( ! $non_indexable )
                  {
	            $this->AddWords($this->GetName(), $template->id, 'template', $template->content);
                  }
                else
                  {
   	            $this->DeleteWords($this->GetName(), $template->id, 'template');
                  }

                if( ($non_indexable && $was_indexed) )
                  {
		    // we can't index the template, and it was indexed
                    // meaning we need to delete all indexes from
                    // the children.
		    $q2 = "DELETE FROM ".cms_db_prefix()."module_search_index WHERE
		      extra_attr = ? AND content_id  IN (";
		    $parms = array( 'content' );

		    // delete them all from the index
		    while( $dbresult && !$dbresult->EOF )
		      {
			$q2 .= "?,";
			$parms[] = $dbresult->fields['content_id'];
			$dbresult->MoveNext();
		      }
		    $q2 = substr($q2,0,strlen($q2)-1);
		    $q2 .= ")";
                              
		    $db->Execute( $q2, $parms );
		  }
		else 
                  {
                    if (!$non_indexable && !$was_indexed)
		    { 
                      // The template is indexable, and was not indexed previously
                      // so we have to index it's children.
		      while( $dbresult && !$dbresult->EOF )
		      {
				global $gCms;
				$contentops =& $gCms->GetContentOperations();
			$onecontent =& $contentops->LoadContentFromId($dbresult->fields['content_id']);
			$parms = array('content'=>$onecontent);
			$this->DoEvent('Core','ContentEditPost',$parms);
			$dbresult->MoveNext();
		      }
		    }
                  }
              }
            else
              {
                 // template is inactive
   	         $this->DeleteWords($this->GetName(), $template->id, 'template');
              }
	    break;
					
	  case 'DeleteTemplatePost':
	    $template =& $params['template'];

	    $this->DeleteWords($this->GetName(), $template->id, 'template');

	    break;
					
	  case 'AddGlobalContentPost':
	    $global_content =& $params['global_content'];

	    $this->AddWords($this->GetName(), $global_content->id, 'global_content', $global_content->content);

	    break;
					
	  case 'EditGlobalContentPost':
	    $global_content =& $params['global_content'];

	    $this->AddWords($this->GetName(), $global_content->id, 'global_content', $global_content->content);

	    break;
					
	  case 'DeleteGlobalContentPost':
	    $global_content =& $params['global_content'];

	    $this->DeleteWords($this->GetName(), $global_content->id, 'global_content');

	    break;

	  case 'ModuleUninstalled':
	    $module_name =& $params['name'];

	    $this->DeleteWords($module_name);

	    break;
	  }
      }
  }
}

# vim:ts=4 sw=4 noet
?>
