<?php
$lang['admin']['msg_notimedifference'] = 'N&atilde;o foi encontrada nenhuma diferen&ccedil;a de tempo no filesystem';
$lang['admin']['error_timedifference'] = 'O tempo do filesystem &eacute; diferente do tempo do servidor';
$lang['admin']['server_time_diff'] = 'Verificar diferen&ccedil;a de tempo no filesystem';
$lang['admin']['tz_offset'] = 'Compensa&ccedil;&atilde;o de Fuso Hor&aacute;rio (Timezone Offset)';
$lang['admin']['gcb_name_help'] = '(apenas pode conter letras e n&uacute;meros)';
$lang['admin']['pagedefaultsupdated'] = 'Predefini&ccedil;&otilde;es de p&aacute;gina actualizadas';
$lang['admin']['help_function_module_available'] = '<h3>What does this do?</h3>
<p>A plugin to test wether a given module (by name) is installed, and available for use.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><strong>(required)module</strong> - (string) The name of the module.</li>
<li><em>(optional)assign</em> - Assign the output of the plugin to the named smarty variable.</li>
</ul>
<h3>Example:</h3>
{module_available module=&#039;News&#039; assign=&#039;havenews&#039;}{if $havenews}{cms_module module=News}{/if}
<h3>Note:</h3>
<p>You cannot use the short form of the module call, i.e: <em>{News}</em> in this type of expression.</p>';
$lang['admin']['prettyurls_noeffect'] = 'Os URLs amig&aacute;veis ​​n&atilde;o est&atilde;o configurados... URL corrente sem efeito';
$lang['admin']['help_function_cms_lang_info'] = '<h3>What does this do?</h3>
<p>This plugin returns an object containing the information that CMSMS has about the selected language.  This can include locale information, encodings, language aliases etc.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><em>(optional)lang</em> - The language to return information for.  If the lang parameter is not specified then the information for the current CMSMS language is used.</li>
<li><em>(optional)assign</em> - Assign the output of the plugin to the named smarty variable.</li>
</ul>
<h3>Example:</h3>
<pre>{cms_lang_info assign=&#039;nls&#039;}{$nls->locale()}</pre>
<h3>See Also:</h3>
<p>the CmsNls class documentation.</p>';
$lang['admin']['help_function_cms_set_language'] = '<h3>What does this do?</h3>
<p>This plugin attempts to set the current language for use by translation strings and date formatting to the desired language.  The language specified must be known to CMSMS (The nls file must exist).  When this function is called, (and unless overridden in the config.php) an attempt will be made to set the locale to the local associated with the language.  The locale for the language must be installed on the server.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><strong>(required)lang</strong> - The desired language.  The language must be known to the CMSMS installation (nls file must exist).</li>
</ul>';
$lang['admin']['help_function_cms_get_language'] = '<h3>What does this do?</h3>
<p>This plugin returns the current CMSMS language name. The language is used for translation strings and date formatting.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><em>(optional)assign</em> - Assign the output of the plugin to the named smarty variable.</li>
</ul>';
$lang['admin']['help_modifier_cms_escape'] = '<h3>What does this do?</h3>
<p>This modifier is used to escape the string in one of many ways.  This can be used for converting the string to multiple different display formats, or to make user entered data with special characters displayable on a standard web page.</p>
<h3>Usage:</h3>
<pre><code>{$some_var_with_text|cms_escape[:<escape type>|[<character set>]]}</code></pre>
<h4>Valid escape types:</h4>
<ul>
<li>html <em>(default)</em> - use htmlspecialchars.</li>
<li>htmlall - use htmlentities.</li>
<li>url - raw url encode all entities.</li>
<li>urlpathinfo - Similar to the url escape type, but also encode /.</li>
<li>quotes - Escape unescaped single quotes.</li>
<li>hex - Escape every character into hex.</li>
<li>hexentity - Hex encode every character.</li>
<li>decentity - Decimal encode every character.</li>
<li>javascript - Escape quotes, backslashes, newlines etc.</li>
<li>mail - Encode an email address into something that is safe to display.</li>
<li>nonstd - Escape non standard characters, such as document quotes.</li>
</ul>
<h4>Character Set::</h4>
<p>If the character set is not specified, utf-8 is assumed. The character set is only applicable to the &quot;html&quot; and &quot;htmlall&quot; escape types.</p>';
$lang['admin']['help_modifier_cms_date_format'] = '<h3>What does this do?</h3>
<p>This modifier is used to format dates in a suitable format. It uses the standard strftime parameters. If no format string is specified, the system will use the date format string user preference (for logged in users) or the system date format preference.</p>
<p>This modifier is capable of understanding dates in many formats.  i.e: date-time strings output from the database or integer timestamps generated by the time() function.</p>
<h3>Usage:</h3>
<pre><code>{$some_date_var|cms_date_format[:<format string>]}</code></pre>
<h3>Example:</h3>
<pre><code>{&#039;2012-03-24 22:44:22&#039;|cms_date_format}</code></pre>';
$lang['admin']['help_modifier_summarize'] = '<h3>What does this do?</h3>
<p>This modifier is used to truncate a long sequence of text to a limited number of &quot;words&quot;.</p>
<h3>Usage:</h3>
<pre><code>{$some_var_with_long_text|summarize:<number>}</code></pre>
<h3>Example:</h3>
<p>The following example would strip all html tags from the content and truncate it after 50 words.</p>
<pre><code>{content|strip_tags|summarize:50}</code></pre>';
$lang['admin']['module_param_lang'] = '<strong>Obsoleto</strong> - Substitui a linguagem actual que &eacute; usada para a selec&ccedil;&atilde;o de textos traduzidos.';
$lang['admin']['server_db_grants'] = 'Verificar os n&iacute;veis de acesso &agrave; base de dados';
$lang['admin']['error_nograntall_found'] = 'N&atilde;o foi poss&iacute;vel encontrar uma permiss&atilde;o &quot;GRANT ALL&quot; adequada. Isto poder&aacute; significar que poder&aacute; ter problemas ao instalar ou remover m&oacute;dulos. Ou at&eacute; mesmo ao adicionar e excluir itens, incluindo p&aacute;ginas';
$lang['admin']['msg_grantall_found'] = 'Encontrada uma declara&ccedil;&atilde;o &quot;GRANT ALL&quot; que parece ser adequada';
$lang['admin']['curlversion'] = 'Testar a vers&atilde;o cURL';
$lang['admin']['curl'] = 'Testar a biblioteca cURL';
$lang['admin']['test_curl'] = 'Testar a disponibilidade cURL';
$lang['admin']['test_curlversion'] = 'Testar a Vers&atilde;o CURL';
$lang['admin']['curl_versionstr'] = 'vers&atilde;o %s, a vers&atilde;o m&iacute;nima recomendada &eacute; %s';
$lang['admin']['lines_in_error'] = '%d linhas com erros';
$lang['admin']['no_files_scanned'] = 'Nenhum ficheiro foi pesquisado durante o processo de verifica&ccedil;&atilde;o (talvez o ficheiro seja inv&aacute;lido)';
$lang['admin']['stylesheetnotfound'] = 'Stylesheet %d n&atilde;o foi encontrada';
$lang['admin']['sysmain_updateurls'] = 'Actualizar Routes';
$lang['admin']['sysmain_confirmupdateurls'] = 'Tem certeza de que deseja actualizar a base de dados de &quot;route&quot;';
$lang['admin']['routesrebuilt'] = 'As Routes da base de dados foram reconstru&iacute;das';
$lang['admin']['text_changeowner'] = 'Definir P&aacute;ginas Selecionadas para um utilizador diferente';
$lang['admin']['changeowner'] = 'Alterar Propriet&aacute;rio';
$lang['admin']['xmlreader_class'] = 'Checking for the XMLReader class';
$lang['admin']['info_smarty_cacheudt'] = 'If enabled, all calls to user defined tags will be cached.  This will be useful for tags that display the output of database queries.  You can disable caching using the nocache parameter in the udt call.  i.e: <code>{myusertag nocache}</code>';
$lang['admin']['prompt_smarty_cacheudt'] = 'Cache UDT Calls';
$lang['admin']['always'] = 'Always';
$lang['admin']['never'] = 'Never';
$lang['admin']['moduledecides'] = 'Module Decides';
$lang['admin']['info_smarty_cachemodules'] = 'Select how to cache tags in various templates that call module actions.  If enabled, all module calls will be cached.  This may have negative effects on some modules, or modules with forms.  <em>(note: you can override this using the nocache option as described in the smarty manual)</em>.  If disabled no module calls will be cached which may have an effect on performance.   If you select to allow the module to decide, the default is that caching is not performed.  The module can override this, and you can disable caching using the nocache parameter when calling the module.';
$lang['admin']['prompt_smarty_cachemodules'] = 'Cache module calls';
$lang['admin']['info_smarty_compilecheck'] = 'If disabled, smarty will not check the modification dates of templates to see if they have been modified.  This can significantly improve performance.  However performing any template change (or even some content changes) may require a cache clearing';
$lang['admin']['prompt_smarty_compilecheck'] = 'Do a Compilation Check';
$lang['admin']['info_smarty_options'] = 'The following options have effect only when the above caching options are enabled';
$lang['admin']['info_smarty_caching2'] = 'When enabled, the output from various plugins will be cached to increase performance.  This only applies to output on content pages marked as cachable, and only for non-admin users.  Note, this functionality may interfere with the behavior of some modules or plugins, or plugins that use non-inline forms.  This option has no effect for users of PHP 5.2.x';
$lang['admin']['prompt_use_smartycaching'] = 'Enable Smarty Caching';
$lang['admin']['smarty_settings'] = 'Smarty Settings';
$lang['admin']['help_function_cms_init_editor'] = '<h3>What does this do?</h3>
  <p>This plugin is used to initialize the selected wysiwyg editor for display when wysiwyg functionalities are required for frontend data submission.  This module will find the selected frontend wysiwyg, determine if it has been requested, and if so generate the appropriate html code <em>(usually javascript links)</em> so that the wysiwyg will initialize properly when the page is loaded.  If no wysiwyg editors have been requested for the frontend request this plugin will produce no output.</p>
  <p><strong>Note:</strong> This plugin will work properly given the default configuration of CMSMS.  If you have modified the &quot;process_whole_template&quot; configuration variable from its default value, you may have to adjust the parameters supplied to this plugin.</p>
<h3>How do I use it?</h3>
<p>The first thing you must do is select the frontend WYSIWYG editor to use in the global settings page of the admin console.  Next If you use frontend wysiwyg editors on numerous pages, it may be best to place the {cms_init_editor} plugin directly into your page template.  If you only require the wysiwyg editor to be enabled on a limited amount of pages you may just place it into the &quot;Page Specific Metadata&quot; field in each page.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><em>(optional)wysiwyg</em> - Specify the name of the wysiwyg editor module to initialize.  Use with caution.  If you have a different wysiwyg editor selected in the global settings, this will force the specified  editor to be initialized.</li>
<li><em>(optional)force=0</em> - Normally this plugin will not initialize the specified (or detected) editor if it has not been marked as &quot;active&quot;.  This parameter will override that behavior.  This parameter may be required of the &quot;process_whole_template&quot; configuration variable is set to a non default value.</li>
<li><em>(optional)assign</em> - Assign the output of the plugin to the named smarty variable.</li>
</ul>';
$lang['admin']['info_pagedefaults'] = 'This form allows specifying various options as to the initial settings when creating new content pages.  The items in this page have no effect when editing existing pages';
$lang['admin']['default_contenttype'] = 'Default Content Type';
$lang['admin']['info_default_contenttype'] = 'Applicable when adding new content objects, this control specifies the type that is selected by default.  Please ensure that the selected item is not one of the &quot;disallowed types&quot;.';
$lang['admin']['error_contenttype'] = 'The content type associated with this page is invalid or not permitted';
$lang['admin']['info_disallowed_contenttypes'] = 'Select which content types to remove from the content type dropdown when editing or adding content.  Use CTRL+Click to select, unselect items.  Having no selected items will indicate that all content types are allowed. <em>(applies to all users)</em>';
$lang['admin']['disallowed_contenttypes'] = 'Content Types that are NOT allowed';
$lang['admin']['search_module'] = 'Search module';
$lang['admin']['info_search_module'] = 'Select the module that should be used to index words for searching, and will provide the site search capabilities';
$lang['admin']['filecreatedirbadchars'] = 'Invalid characters were detected in the submitted directory name';
$lang['admin']['modulehelp_yourlang'] = 'View in Your Language';
$lang['admin']['info_umask'] = 'The &quot;umask&quot; is an octal value that is used to specify the default permission for newly created files (this is used for files in the cache directory, and uploaded files.  For more information see the appropriate <a href="http://en.wikipedia.org/wiki/Umask">wikipedia article.</a>';
$lang['admin']['general_operation_settings'] = 'General Operation Settings';
$lang['admin']['info_checkversion'] = 'If enabled, the system will perform a daily check for a new release of CMSMS';
$lang['admin']['checkversion'] = 'Allow periodic checks for new versions';
$lang['admin']['actioncontains'] = 'Action Contains';
$lang['admin']['filterapplied'] = 'Current Filter';
$lang['admin']['automatedtask_success'] = 'Automated task performed';
$lang['admin']['siteprefsupdated'] = 'Global Settings Updated';
$lang['admin']['ip_addr'] = 'IP Address';
$lang['admin']['warn_admin_ipandcookies'] = 'Warning: Admin activities use cookies and tracks your IP address';
$lang['admin']['event_desc_loginfailed'] = 'Failed Login';
$lang['admin']['event_help_loginfailed'] = '<p>Sent after a user failed to login into the admin panel.</p>';
$lang['admin']['modulehelp_english'] = 'View In English';
$lang['admin']['nopluginabout'] = 'No about information available for this plugin';
$lang['admin']['nopluginhelp'] = 'No help available for this plugin';
$lang['admin']['moduleupgraded'] = 'Upgrade Successfull';
$lang['admin']['added_css'] = 'Added Stylesheet';
$lang['admin']['toggle'] = 'Toggle';
$lang['admin']['added_group'] = 'Added Group';
$lang['admin']['expanded_xml'] = 'Expanded XML file consisting of %s %s';
$lang['admin']['installed_mod'] = 'Installed version %s';
$lang['admin']['uninstalled_mod'] = 'Uninstalled module %s';
$lang['admin']['upgraded_mod'] = '%s Upgraded from Version %s to %s';
$lang['admin']['edited_gcb'] = 'Edited Global Content Block';
$lang['admin']['edited_content'] = 'Edited Content';
$lang['admin']['added_content'] = 'Added Content';
$lang['admin']['added_css_association'] = 'Added Stylesheet Association';
$lang['admin']['deleted_group'] = 'Deleted Group';
$lang['admin']['deleted_content'] = 'Deleted Content';
$lang['admin']['edited_user'] = 'Edited User';
$lang['admin']['edited_udt'] = 'Edited User Defined Tag';
$lang['admin']['content_copied'] = 'Content Item Copied to %s';
$lang['admin']['deleted_template'] = 'Deleted Template';
$lang['admin']['added_udt'] = 'Added User Defined Tag';
$lang['admin']['deleted_udt'] = 'Deleted User Defined Tag';
$lang['admin']['added_gcb'] = 'Added Global Content Block';
$lang['admin']['edited_group'] = 'Edited Group';
$lang['admin']['deleted_css_association'] = 'Deleted Stylesheet Association';
$lang['admin']['user_logout'] = 'User Logout';
$lang['admin']['user_login'] = 'User Login';
$lang['admin']['login_failed'] = 'User Login Failed';
$lang['admin']['deleted_css'] = 'Deleted Stylesheet';
$lang['admin']['uploaded_file'] = 'Uploaded File';
$lang['admin']['created_directory'] = 'Created Directory';
$lang['admin']['deleted_file'] = 'Deleted File';
$lang['admin']['deleted_directory'] = 'Deleted Directory';
$lang['admin']['edited_template'] = 'Edited Template';
$lang['admin']['deleted_user'] = 'Deleted User';
$lang['admin']['deleted_module'] = 'Permanently removed %s';
$lang['admin']['deleted_gcb'] = 'Deleted Global Content Block';
$lang['admin']['added_user'] = 'Added User';
$lang['admin']['edited_user_preferences'] = 'Edited User Preferences';
$lang['admin']['added_template'] = 'Added Template';
$lang['admin']['event_desc_stylesheetpostcompile'] = 'Sent after a stylesheet is compiled through smarty';
$lang['admin']['event_desc_stylesheetprecompile'] = 'Sent before a stylesheet is compiled through smarty';
$lang['admin']['confirm_uploadmodule'] = 'Are you sure you would like to upload the selected XML file. Incorrectly uploading a module file may break a functioning website';
$lang['admin']['error_module_mincmsversion'] = 'This module requires a newer version of CMS Made Simple';
$lang['admin']['info_browser_cache_expiry'] = 'Specify the amount of time (in minutes) that browsers should cache pages for.  Setting this value to 0 disables the functionality';
$lang['admin']['browser_cache_expiry'] = 'Browser Cache Expiry Period <em>(minutes)</em>';
$lang['admin']['info_browser_cache'] = 'Applicable only to cachable pages, this setting indicates that browsers should be allowed to cache the pages for an amount of time.  If enabled repeat visitors to your site may not immediately see changes to the content of the pages.';
$lang['admin']['allow_browser_cache'] = 'Allow Browser to Cache Pages';
$lang['admin']['server_cache_settings'] = 'Server Cache Settings';
$lang['admin']['browser_cache_settings'] = 'Browser Cache Settings';
$lang['admin']['help_function_browser_lang'] = '<h3>What does this do?</h3>
  <p>This plugin detects and outputs the language that the users browser accepts, and cross references it with a list of allowed languages to determine a language value for the session.</p>
<h3>How do I use it?</h3>
<p>Insert the tag early into your page template <em>(it can go above the <head> section if you want)</em> and provide it the name of the default language, and the accepted languages (only two character language names are accepted), then do something with the result.  i.e:</p>
<pre><code>{browser_lang accept=de,fr,en,es default=en assign=tmp}{session_put var=lang val=$tmp}</code></pre>
<p><em>({session_put} is a plugin provided by the CGSimpleSmarty module)</em></p>
<h3>What Parameters does it Take?</h3>
<ul>
<li><strong>accepted <em>(required)</em></strong><br/> - A comma separated list of two character language names that are accepted.</li>
<li>default<br/>- <em>(optional)</em> A default language to output if no accepted language was supported by the browser.  en is used if no other value is specified.</li>
<li>assign<br/>- <em>(optional)</em> The name of the smarty variable to assign the results to.  If not specified the results of this function are returned.</li>
</ul>';
$lang['admin']['info_target'] = 'This option may used by the Menu Manager to indicate when and how new frames or windows should be opened.  Some menu manager templates may ignore this option.';
$lang['admin']['close'] = 'Fechar';
$lang['admin']['open'] = 'Open';
$lang['admin']['revert'] = 'Reverter as altera&ccedil;&otilde;es';
$lang['admin']['autoclearcache2'] = 'Remove cache files that are older than the specified number of days';
$lang['admin']['root'] = 'Root';
$lang['admin']['info_content_autocreate_flaturls'] = 'If enabled, all urls will be created as a copy of the page alias (but not synchronized to the page alias)';
$lang['admin']['content_autocreate_flaturls'] = 'Automatically created URL&#039;s are flat';
$lang['admin']['content_autocreate_urls'] = 'Automatically create page URL&#039;s';
$lang['admin']['content_mandatory_urls'] = 'Page URLS are required';
$lang['admin']['content_imagefield_path'] = 'Path for image field';
$lang['admin']['info_content_imagefield_path'] = 'Relative to the image uploads path, specify a directory name that contains the paths containing files for the image field';
$lang['admin']['content_thumbnailfield_path'] = 'Path for thumbnail field';
$lang['admin']['info_content_thumbnailfield_path'] = 'Relative to the image uploads path, specify a directory name that contains the paths containing files for the image field.  Usually this will be the same as the path above.';
$lang['admin']['contentimage_path'] = 'Path for {content_image} tag';
$lang['admin']['info_contentimage_path'] = 'Relative to the uploads path, specify a directory name that contains the paths containing files for the {content_image} tag.  This value is used as a default for the dir parameter';
$lang['admin']['editcontent_settings'] = 'Content Editing Settings';
$lang['admin']['help_page_url'] = 'Specify an alternate URL (relative to the root of your website) that can be used to uniquely identify this page.  i.e: path/to/mypage.  The page url is only useful when pretty urls are enabled.';
$lang['admin']['help_page_alias'] = 'The alias is used as an alternate to the page id to uniquely identify a page. It must be unique across all pages.  The alias is also used to assist in building the URL for the page';
$lang['admin']['help_page_searchable'] = 'This setting indicates whether the content of this page should be indexed by the Search module';
$lang['admin']['help_page_cachable'] = 'Performance can be increased by setting as many pages as possible to cachable.  However this cannot be used for pages where content may change on a per request basis';
$lang['admin']['sitedownexcludeadmins'] = 'Exclude users logged in to the CMSMS admin console';
$lang['admin']['your_ipaddress'] = 'Your IP Address is';
$lang['admin']['use_wysiwyg'] = 'Use WYSIWYG';
$lang['admin']['contenttype_redirlink'] = 'Redirecting Link';
$lang['admin']['yes'] = 'Yes';
$lang['admin']['no'] = 'No';
$lang['admin']['listcontent_showalias'] = 'Display the &quot;Alias&quot; column';
$lang['admin']['listcontent_showurl'] = 'Display the &quot;URL&quot; column';
$lang['admin']['listcontent_showtitle'] = 'Display the Page Title or Menu Text';
$lang['admin']['listcontent_settings'] = 'Content List Settings';
$lang['admin']['lctitle_page'] = 'The title of existing content items';
$lang['admin']['lctitle_alias'] = 'The alias of existing content items. Some content items do not have aliases';
$lang['admin']['lctitle_url'] = 'The URL suffix for the content item.  If set';
$lang['admin']['lctitle_template'] = 'The selected template for the content item. Some content items do not have templates';
$lang['admin']['lctitle_owner'] = 'The owner of the content item';
$lang['admin']['lctitle_active'] = 'Indicates whether the content item is active. Inactive items cannot be displayed.';
$lang['admin']['lctitle_default'] = 'Specify the content item that is accessed when the root url is requested.  Only one item can be default';
$lang['admin']['lctitle_move'] = 'Allows arranging your content hierarchy';
$lang['admin']['lctitle_multiselect'] = 'Select All/Select None';
$lang['admin']['invalid_url2'] = 'The page URL specified is invalid.  It should contain only alphanumeric characters, or - or /.  Extensions must contain only alphanumeric chars and be less than 5 characters in length.  It is also possible that the URL specified is already in use.';
$lang['admin']['page_url'] = 'Page URL';
$lang['admin']['runuserplugin'] = 'Run User Plugin';
$lang['admin']['output'] = 'Output';
$lang['admin']['run'] = 'Run';
$lang['admin']['run_udt'] = 'Run this User Defined Tag';
$lang['admin']['stylesheetcopied'] = 'Stylesheet Copiado';
$lang['admin']['templatecopied'] = 'Template Copiado';
$lang['admin']['ecommerce_desc'] = 'M&oacute;dulos para fornecer as capacidades de E-commerce';
$lang['admin']['ecommerce'] = 'E-Commerce ';
$lang['admin']['help_function_content_module'] = '<h3>What does this do?</h3>
<p>This content block type allows interfacing with different modules to create different content block types.</p>
<p>Some modules can define content block types for use in module templates.  i.e: The FrontEndUsers module may define a group list content block type.  It will then indicate how you can use the content_module tag to utilize that block type within your templates.</p>
<p><strong>Note:</strong> This block type must be used only with compatible modules.  You should not use this in any way except for as guided by addon modules.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Ocorreu um erro ao analisar blocos de conte&uacute;do (talvez os nomes duplicados no bloco?)';
$lang['admin']['error_no_default_content_block'] = 'Nenhum bloco de conte&uacute;do padr&atilde;o foi detectado neste template. Certifique-se de que tem  um conte&uacute;do (tag) na p&aacute;gina do template.';
$lang['admin']['help_function_cms_stylesheet'] = '<h3>What does this do?</h3>
  <p>A replacement for the {stylesheet} tag, this tag provides caching of css files by generating static files in the tmp/cache directory, and smarty processing of the individual stylesheets.</p>
  <p>This plugin retrieves stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template in the order specified by the designer, and generates stylesheet tags.</p>
  <p>Generated stylesheets are uniquely named according to the last modification date in the database, and are only generated if the stylesheet has changed.</p>
  <p>This tag is the replacement for the {stylesheet} tag.</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page&#039;s head section like: <code>{cms_stylesheet}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
  <li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one specifically named one, whether it&#039;s attached to the current template or not.</li>
  <li><em>(optional)</em>templateid - If templateid is defined, this will return stylesheets associated with that template instead of the current one.</li>
  <li><em>(optional)</em>media - When used in conjunction with the name parameter this parameter will allow you to override the media type for that stylesheet.  When used in conjunction with the templateid parameter, the media parameter will only output stylesheet tags for those stylesheets that arer marked as compatible with the specified media type.</li>
  </ul>
  <h3>Smarty Processing</h3>
  <p>When generating css files this system passes the stylesheets retrieved from the database through smarty.  The smarty delimiters have been changed from the CMSMS standard { and } to [[ and ]] respectively to ease transition in stylesheets.  This allows creating smarty variables i.e.: [[assign var=&#039;red&#039; value=&#039;#900&#039;]] at the top of the stylesheet, and then using these variables later in the stylesheet, i.e:</p>
<pre>
<code>
h3 .error { color: [[$red]]; }<br/>
</code>
</pre>
<p>Because the cached files are generated in the tmp/cache directory of the CMSMS installation, the CSS relative working directory is not the root of the website.  Therefore any images, or other tags that require a url should use the [[root_url]] tag to force it to be an absolute url. i.e:</p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/error_background.gif); }<br/>
</code>
</pre>
<p><strong>Note:</strong> Due to the caching nature of the plugin, smarty variables should be placed at the top of EACH stylesheet that is attached to a template.</p>';
$lang['admin']['pseudocron_granularity'] = 'Pseudocron Granularity ';
$lang['admin']['info_pseudocron_granularity'] = 'Esta configura&ccedil;&atilde;o indica quantas vezes o sistema ir&aacute; tentar lidar com as tarefas agendadas  regularmente';
$lang['admin']['cron_request'] = 'A cada pedido';
$lang['admin']['cron_15m'] = '15 Minutos';
$lang['admin']['cron_30m'] = '30 Minutos';
$lang['admin']['cron_60m'] = '1 Hora';
$lang['admin']['cron_120m'] = '2 Horas';
$lang['admin']['cron_3h'] = '3 Horas';
$lang['admin']['cron_6h'] = '6 Horas';
$lang['admin']['cron_12h'] = '12 Horas';
$lang['admin']['cron_24h'] = '24 Horas';
$lang['admin']['adminlog_1day'] = '1 dia';
$lang['admin']['adminlog_1week'] = '1 semana';
$lang['admin']['adminlog_2weeks'] = '2 semanas';
$lang['admin']['adminlog_1month'] = '1 m&ecirc;s';
$lang['admin']['adminlog_3months'] = '3 meses';
$lang['admin']['adminlog_6months'] = '6 meses';
$lang['admin']['adminlog_manual'] = 'Manual deletion';
$lang['admin']['adminlog_lifetime'] = 'Lifetime of log-entries';
$lang['admin']['info_adminlog_lifetime'] = 'Remove log-entries that are older than the specified period.';
$lang['admin']['filteruser'] = 'Username is';
$lang['admin']['filtername'] = 'Event name contains';
$lang['admin']['filteraction'] = 'Action contains';
$lang['admin']['filterapply'] = 'Apply filters';
$lang['admin']['filterreset'] = 'Reset filters';
$lang['admin']['filters'] = 'Filters';
$lang['admin']['showfilters'] = 'Edit filter';
$lang['admin']['clearcache_taskdescription'] = 'Executado diariamente, essa tarefa ir&aacute; limpar o cache que s&atilde;o mais antigos do que os que est&atilde;o presentes nas prefer&ecirc;ncias globais';
$lang['admin']['clearcache_taskname'] = 'Limpar os ficheiros que est&atilde;o em cache';
$lang['admin']['info_autoclearcache'] = 'Especifique um valor inteiro. Digite 0 para desactivar a limpeza do cache autom&aacute;tico';
$lang['admin']['autoclearcache'] = 'Autom&aacute;ticamente limpar o cache a cada N dias';
$lang['admin']['listtemplates_pagelimit'] = 'N&uacute;mero de linhas por p&aacute;gina, quando visualizar os templates';
$lang['admin']['liststylesheets_pagelimit'] = 'N&uacute;mero de linhas por p&aacute;gina, quando visualizar os stylesheets (css)';
$lang['admin']['listgcbs_pagelimit'] = 'N&uacute;mero de linhas por p&aacute;gina, quando visualizar os Blocos de Conte&uacute;do Global';
$lang['admin']['insecure'] = 'Inseguro (HTTP)';
$lang['admin']['secure'] = 'Seguro (HTTPS)';
$lang['admin']['secure_page'] = 'Usar HTTPS neste p&aacute;gina';
$lang['admin']['thumbnail_width'] = 'Comprimento das miniaturas';
$lang['admin']['thumbnail_height'] = 'Largura das miniaturas';
$lang['admin']['E_STRICT'] = 'E_STRICT n&atilde;o est&aacute; habilitado no &quot;error_reporting&quot;';
$lang['admin']['test_estrict_failed'] = 'E_STRICT est&aacute; habilitado no seu &quot;error reporting&quot;';
$lang['admin']['info_estrict_failed'] = 'Algumas bibliotecas que o CMSMS utiliza n&atilde;o funcionam bem com E_STRICT. Desactive antes de continuar';
$lang['admin']['E_DEPRECATED'] = 'E_DEPRECATED n&atilde;o est&aacute; habilitado no &quot;error_reporting&quot;';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED est&aacute; habilitado';
$lang['admin']['info_edeprecated_failed'] = 'Se E_DEPRECATED estiver habilitado no seu &quot;error reporting&quot; os utilizadores ir&atilde;o ver bastantes mensagens de alerta';
$lang['admin']['session_use_cookies'] = 'As sess&otilde;es s&atilde;o autorizados a utilizar Cookies';
$lang['admin']['errorgettingcontent'] = 'N&atilde;o foi poss&iacute;vel recuperar as informa&ccedil;&otilde;es para o objeto de conte&uacute;do especificado';
$lang['admin']['errordeletingcontent'] = 'Erro de exclus&atilde;o do conte&uacute;do (ou esta p&aacute;gina tem sub-paginas ou &eacute; o conte&uacute;do padr&atilde;o)';
$lang['admin']['invalidemail'] = 'Ender&ccedil;o de E-mail Inv&aacute;lido';
$lang['admin']['info_deletepages'] = 'Nota: Devido a restri&ccedil;&otilde;es de permiss&otilde;es, algumas das p&aacute;ginas que seleccionou para suprimir n&atilde;o podem ser listadas abaixo';
$lang['admin']['info_pagealias'] = 'Especifique um &uacute;nico atalho para esta p&aacute;gina.';
$lang['admin']['info_autoalias'] = 'Se este campo estiver vazio, ser&aacute; criado um atalho automaticamente.';
$lang['admin']['invalidparent'] = 'Deve seleccionar uma p&aacute;gina Parente (contacte o seu administrador se n&atilde;o visualizar esta op&ccedil;&atilde;o).';
$lang['admin']['forgotpwprompt'] = 'Digite o seu nome de utilizador. Um E-mail ser&aacute; enviado para o seu endere&ccedil;o de E-mail com o nome de utilizador e com as novas informa&ccedil;&otilde;es de login';
$lang['admin']['info_basic_attributes'] = 'Este campo permite especificar qual as propriedades do conte&uacute;do que os utilizadores sem a permiss&atilde;o &quot;Gerir Todo o Conte&uacute;do&quot;  est&atilde;o autorizados a editar.';
$lang['admin']['basic_attributes'] = 'Propriedades B&aacute;sicas';
$lang['admin']['no_permission'] = 'N&atilde;o tem permiss&atilde;o para executar essa fun&ccedil;&atilde;o.';
$lang['admin']['bulk_success'] = 'A opera&ccedil;&atilde;o foi actualizada.';
$lang['admin']['no_bulk_performed'] = 'Nenhuma opera&ccedil;&atilde;o foi seleccionada.';
$lang['admin']['info_preview_notice'] = 'Aten&ccedil;&atilde;o: Este painel de pr&eacute;-visualiza&ccedil;&atilde;o tem comportamentos como se de uma janela de navegador se tratasse, permite que  navegue pelo site. No entanto, se o fizer, poder&aacute; sentir comportamentos inesperados. Este painel de pr&eacute;-visualiza&ccedil;&atilde;o foi feito com o intuito de pr&eacute;-visualizar somente a p&aacute;gina que est&aacute; a editar ou a adicionar e n&atilde;o uma  navega&ccedil;&atilde;o pelo site.';
$lang['admin']['sitedownexcludes'] = 'Excluir esses endere&ccedil;os nas Mensagens do Site em Manuten&ccedil;&atilde;o';
$lang['admin']['info_sitedownexcludes'] = 'Este par&acirc;metro permite a listagem de uma lista separada por v&iacute;rgulas de endere&ccedil;os IP ou redes, que n&atilde;o devem ser sujeitos ao mecanismo &quot;Site em Manuten&ccedil;&atilde;o&quot;. Isto permite que os administradores possam trabalhar no site enquanto os visitantes an&oacute;nimo recebem uma mensagem &quot;Site em Manuten&ccedil;&atilde;o&quot;.<br/><br/>Endere&ccedil;os podem ser especificados nos seguintes formatos:<br/>
1. xxx.xxx.xxx.xxx -- (exacto IP)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Defini&ccedil;&otilde;es Avan&ccedil;adas';
$lang['admin']['handle_404'] = 'P&aacute;gina Erro Personalizada 404';
$lang['admin']['sitedown_settings'] = 'Defini&ccedil;&otilde;es Site Manuten&ccedil;&atilde;o ';
$lang['admin']['general_settings'] = 'Defini&ccedil;&otilde;es Globais';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Forge ';
$lang['admin']['disable_wysiwyg'] = 'Desactivar editor WYSIWYG nesta p&aacute;gina (independentemente do template ou configura&ccedil;&otilde;es do utilizador)';
$lang['admin']['help_function_page_image'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the image or thumbnail fields of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_image}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li>thumbnail - Optionally display the value of the thumbnail property instead of the image property.</li>
</ul>
';
$lang['admin']['pagelink_circular'] = 'A p&aacute;gina link n&atilde;o pode linkar outra p&aacute;gina link';
$lang['admin']['destinationnotfound'] = 'A p&aacute;gina seleccionada n&atilde;o p&ocirc;de ser encontrado ou &eacute; inv&aacute;lida';
$lang['admin']['help_function_dump'] = '<h3>What does this do?</h3>
  <p>This tag can be used to dump the contents of any smarty variable in a more readable format.  This is useful for debugging, and editing templates, to know the format and types of data available.</p>
<h3>How do I use it?</h3>
<p>Insert the tag in the template like <code>{dump item=&#039;the_smarty_variable_to_dump&#039;}</code>.</p>
<h3>What parameters does it take</h3>
<ul>
<li><strong>item (required)</strong> - The smarty variable to dump the contents of.</li>
<li>maxlevel - The maximum number of levels to recurse (applicable only if recurse is also supplied.  The default value for this parameter is 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL erro em %s';
$lang['admin']['image'] = 'Imagem';
$lang['admin']['thumbnail'] = 'Miniatura';
$lang['admin']['searchable'] = 'Esta p&aacute;gina &eacute; pesquis&aacute;vel';
$lang['admin']['help_function_content_image'] = '<h3>What does this do?</h3>
<p>This plugin allows template designers to prompt users to select an image file when editing the content of a page. It behaves similarly to the content plugin, for additional content blocks.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your page template like: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>(required)</strong> block - The name for this additional content block.
  <p>Example:</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> label - A label or prompt for this content block in the edit content page.  If not specified, the block name will be used.</li>
 
  <li><em>(optional)</em> dir - The name of a directory (relative to the uploads directory, from which to select image files. If not specified, the uploads directory will be used.
  <p>Example: use images from the uploads/image directory.</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;images&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> class - The css class name to use on the img tag in frontend display.</li>

  <li><em>(optional)</em> id - The id name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> name - The tag name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> width - The desired width of the image.</li>

  <li><em>(optional)</em> height - The desired height of the image.</li>

  <li><em>(optional)</em> alt - Alternative text if the image cannot be found.</li>
  <li><em>(optional)</em> urlonly - output only the url to the image, ignoring all parameters like id, name, width, height, etc.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'Um nome v&aacute;lido de UDT come&ccedil;a com uma letra ou sublinhado(_), seguido por qualquer n&uacute;mero de letras, n&uacute;meros ou sublinhados.';
$lang['admin']['errorupdatetemplateallpages'] = 'Template n&atilde;o est&aacute; activo';
$lang['admin']['hidefrommenu'] = 'Esconder do Menu';
$lang['admin']['settemplate'] = 'Definir Template';
$lang['admin']['text_settemplate'] = 'Definir as P&aacute;ginas Seleccionadas num Template diferente';
$lang['admin']['cachable'] = 'Em Cache';
$lang['admin']['noncachable'] = 'Sem Cache';
$lang['admin']['copy_from'] = 'Copiar De';
$lang['admin']['copy_to'] = 'Copiar para';
$lang['admin']['copycontent'] = 'Copiar item de Conte&uacute;do';
$lang['admin']['md5_function'] = 'func&atilde;o md5';
$lang['admin']['tempnam_function'] = 'fun&ccedil;&atilde;o tempnam';
$lang['admin']['register_globals'] = 'PHP register_globals ';
$lang['admin']['output_buffering'] = 'PHP output_buffering ';
$lang['admin']['disable_functions'] = 'disable_functions no PHP ';
$lang['admin']['xml_function'] = 'Basic XML (expat) suporte';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes para Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Aspas simples, aspas duplas e est&atilde;o barras invertidas escaparam automaticamente. Pode ter problemas em guardar templates';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes em runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'A maior parte das fun&ccedil;&otilde;es que retornam dados t&ecirc;m aspas na sa&iacute;da com uma barra invertida. Pode ter problemas';
$lang['admin']['file_get_contents'] = 'Teste file_get_contents';
$lang['admin']['check_ini_set'] = 'Teste ini_set';
$lang['admin']['check_ini_set_off'] = 'Pode ter dificuldade em algumas das funcionalidades sem esta capacidade. Este teste pode falhar se safe_mode estiver activo';
$lang['admin']['file_uploads'] = 'Carregamento de Ficheiros';
$lang['admin']['test_remote_url'] = 'Teste para URL remoto';
$lang['admin']['test_remote_url_failed'] = 'Provavelmente n&atilde;o ser&aacute; capaz de abrir um arquivo remoto num servidor web.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Se o url fopen estiver desactivado n&atilde;o ser&aacute; capaz de aceder &agrave; URL objecto como ftp ou arquivo usando o protocolo http.';
$lang['admin']['connection_error'] = 'Conec&ccedil;&otilde;es de sa&iacute;da http n&atilde;o est&atilde;o a trabalhar! Existe uma firewall ou alguma ACL para conec&ccedil;&otilde;es externas?. Isso resultar&aacute; no m&oacute;dulo manager.';
$lang['admin']['remote_connection_timeout'] = 'Conec&ccedil;&atilde;o excedeu o tempo!';
$lang['admin']['search_string_find'] = 'Conec&ccedil;&atilde;o ok!';
$lang['admin']['connection_failed'] = 'Conec&ccedil;&atilde;o falhou!';
$lang['admin']['remote_response_ok'] = 'Resposta Remota: ok!';
$lang['admin']['remote_response_404'] = 'Resposta Remota: n&atilde;o encontrado!';
$lang['admin']['remote_response_error'] = 'Resposta Remota: erro!';
$lang['admin']['notifications_to_handle'] = 'Tem <b>%d</b> notifica&ccedil;&otilde;es no sistema';
$lang['admin']['notification_to_handle'] = 'Tem <b>%d</b> notifica&ccedil;&atilde;o no sistema';
$lang['admin']['notifications'] = 'Notifica&ccedil;&otilde;es';
$lang['admin']['dashboard'] = 'Visualizar Painel';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorar notifica&ccedil;&otilde;es para os seguintes m&oacute;dulos ';
$lang['admin']['admin_enablenotifications'] = 'Permitir utilizadores verem notifica&ccedil;&otilde;es<br /><em>(notifica&ccedil;&otilde;es mostradas em todas as p&aacute;ginas da administra&ccedil;&atilde;o)</em>';
$lang['admin']['enablenotifications'] = 'Activar notifica&ccedil;&otilde;es para o utilizador na se&ccedil;&atilde;o admin';
$lang['admin']['test_check_open_basedir_failed'] = 'As restri&ccedil;&otilde;es Open basedir est&atilde;o activas. Pode ter algumas dificuldades em alguns addons com esta restri&ccedil;&atilde;o';
$lang['admin']['config_writable'] = 'config.php tem permiss&otilde;es de escrita. &Eacute; mais seguro alterar para permiss&atilde;o de leitura';
$lang['admin']['caution'] = 'Precau&ccedil;&atilde;o';
$lang['admin']['create_dir_and_file'] = 'Verificar se o processo httpd pode criar um arquivo dentro de um diret&oacute;rio';
$lang['admin']['os_session_save_path'] = 'N&atilde;o est&aacute; marcado porque &eacute; OS path';
$lang['admin']['unlimited'] = 'Ilimitado';
$lang['admin']['open_basedir'] = 'PHP Open Basedir ';
$lang['admin']['open_basedir_active'] = 'N&atilde;o est&aacute; marcado uma vez aberta a basedir e activa';
$lang['admin']['invalid'] = 'Inv&aacute;lido';
$lang['admin']['checksum_passed'] = 'Todos as somas de verifica&ccedil;&atilde;o conferem com o ficheiro carregado';
$lang['admin']['error_retrieving_file_list'] = 'Erro ao recuperar a lista de arquivos';
$lang['admin']['files_checksum_failed'] = 'Os arquivos n&atilde;o poderam ser conferidos com a soma de verifica&ccedil;&atilde;o';
$lang['admin']['failure'] = 'Falha';
$lang['admin']['help_function_process_pagedata'] = '<h3>What does this do?</h3>
<p>This plugin will process the data in the &amp;quot;pagedata&amp;quot; block of content pages through smarty.  It allows you to specify page specific data to smarty without changing the template for each page.</p>
<h3>How do I use it?</h3>
<ol>
  <li>Insert smarty assign variables and other smarty logic into the pagedata field of some of your content pages.</li>
  <li>Insert the <code>{process_pagedata}</code> tag into the very top of your page template.</li>
</ol>
<br/>
<h3>What parameters does it take?</h3>
<p>None at this time</p>';
$lang['admin']['page_metadata'] = 'Meta-Dados Espec&iacute;ficos da P&aacute;gina';
$lang['admin']['pagedata_codeblock'] = 'Smarty dados ou l&oacute;gica que &eacute; espec&iacute;fica para esta p&aacute;gina';
$lang['admin']['error_uploadproblem'] = 'Ocorreu um erro no carregamento';
$lang['admin']['error_nofileuploaded'] = 'Nenhum ficheiro foi carregado';
$lang['admin']['files_failed'] = 'Ficheiros md5sum  falharam a verifica&ccedil;&atilde;o';
$lang['admin']['files_not_found'] = 'Ficheiros n&atilde;o encontrados';
$lang['admin']['info_generate_cksum_file'] = 'Esta fun&ccedil;&atilde;o ir&aacute; permitir-lhe gerar um ficheiro de soma de verifica&ccedil;&atilde;o e guard&aacute;-lo no seu computador para posterior valida&ccedil;&atilde;o. Dever&aacute; ser feito imediatamente antes de lan&ccedil;ar o site, e/ou ap&oacute;s qualquer actualiza&ccedil;&atilde;o, ou altera&ccedil;&otilde;es importantes.';
$lang['admin']['info_validation'] = 'Esta fun&ccedil;&atilde;o ir&aacute; comparar as somas de verifica&ccedil;&atilde;o encontrados no ficheiro carregado com os ficheiros da actual instala&ccedil;&atilde;o. Ele pode ajudar a encontrar problemas com os carregamentos, ou exactamente quais os arquivos que foram modificados caso o seu sistema tenha sido hacked. Um arquivo checksum &eacute; gerado para cada nova vers&atilde;o do CMS a partir de vers&atilde;o 1.4.';
$lang['admin']['download_cksum_file'] = 'Descarregar Ficheiro de Soma de Verifica&ccedil;&atilde;o';
$lang['admin']['perform_validation'] = 'Valida&ccedil;&atilde;o de Soma de Verifica&ccedil;&atilde;o';
$lang['admin']['upload_cksum_file'] = 'Carregar Ficheiro de Soma de Verifica&ccedil;&atilde;o';
$lang['admin']['checksumdescription'] = 'Validar a integridade dos arquivos CMS, compara&ccedil;&atilde;o contra conhecido checksums';
$lang['admin']['system_verification'] = 'Verifica&ccedil;&atilde;o Sistema';
$lang['admin']['extra1'] = 'Atributo Extra 1';
$lang['admin']['extra2'] = 'Atributo Extra 2';
$lang['admin']['extra3'] = 'Atributo Extra 3';
$lang['admin']['start_upgrade_process'] = 'Inicio do Processo de Actualiza&ccedil;&atilde;o';
$lang['admin']['warning_upgrade'] = '<em><strong>Aviso:</strong></em> CMSMS necessita de uma actualiza&ccedil;&atilde;o.';
$lang['admin']['warning_upgrade_info1'] = 'Esta a correr a vers&atilde;o schema  %s. e necessita de ser actualizado para a vers&atilde;o %s';
$lang['admin']['warning_upgrade_info2'] = 'Por Favor click no seguinte link: %s.';
$lang['admin']['warning_mail_settings'] = 'As configura&ccedil;&otilde;es de correio electr&oacute;nico n&atilde;o foram configuradas. Isto pode interferir com a capacidade do seu website de enviar mensagens de E-mail. Deve ir a <b> Extens&otilde;es>> CMSMail </b> e configurar as defini&ccedil;&otilde;es de correio electr&oacute;nico com a informa&ccedil;&atilde;o fornecida pelo seu alojamento.';
$lang['admin']['view_page'] = 'Visualizar esta p&aacute;gina em uma nova janela';
$lang['admin']['off'] = 'Off ';
$lang['admin']['on'] = 'On ';
$lang['admin']['invalid_test'] = 'Par&acirc;metro  valor de teste inv&aacute;lido';
$lang['admin']['copy_paste_forum'] = 'Seleccione este link  copy/paste para ajuda no forum';
$lang['admin']['permission_information'] = 'Informa&ccedil;&otilde;es de Permiss&otilde;es';
$lang['admin']['server_os'] = 'Sistema Operacional do Servidor';
$lang['admin']['server_api'] = 'API do Servidor';
$lang['admin']['server_software'] = 'Software do Servidor';
$lang['admin']['server_information'] = 'Informa&ccedil;&atilde;o do Servidor';
$lang['admin']['session_save_path'] = 'Caminho para Gravar Sess&otilde;es';
$lang['admin']['max_execution_time'] = 'Tempo M&aacute;ximo  de Execu&ccedil;&atilde;o';
$lang['admin']['gd_version'] = 'Vers&atilde;o GD ';
$lang['admin']['upload_max_filesize'] = 'Tamanho M&aacute;ximo Upload';
$lang['admin']['post_max_size'] = 'Tamanho M&aacute;ximo Post';
$lang['admin']['memory_limit'] = 'PHP Limite Memoria';
$lang['admin']['server_db_type'] = 'Base de Dados no Servidor';
$lang['admin']['server_db_version'] = 'Vers&atilde;o da Base de Dados no Servidor';
$lang['admin']['phpversion'] = 'Vers&atilde;o PHP';
$lang['admin']['safe_mode'] = 'PHP Safe Mode (Modo Seguro)';
$lang['admin']['php_information'] = 'Informa&ccedil;&atilde;o PHP';
$lang['admin']['cms_install_information'] = 'CMS Informa&ccedil;&atilde;o da Instala&ccedil;&atilde;o';
$lang['admin']['cms_version'] = 'Vers&atilde;o do CMS';
$lang['admin']['installed_modules'] = 'M&oacute;dulos Instalados';
$lang['admin']['config_information'] = 'Informa&ccedil;&atilde;o de Configura&ccedil;&atilde;o (config)';
$lang['admin']['systeminfo_copy_paste'] = 'Por favor, copie e cole o texto selecionado no f&oacute;rum';
$lang['admin']['help_systeminformation'] = 'As informa&ccedil;&otilde;es indicadas a seguir s&atilde;o recolhidas a partir de uma variedade de locais, est&atilde;o aqui resumidas, de modo a que possa ser capaz de encontrar convenientemente algumas das informa&ccedil;&otilde;es necess&aacute;rias para tentar diagnosticar um problema ou pedir ajuda com a sua instala&ccedil;&atilde;o do CMS Made Simple';
$lang['admin']['systeminfo'] = 'Informa&ccedil;&atilde;o do Sistema';
$lang['admin']['systeminfodescription'] = 'Mostrar v&aacute;rias informa&ccedil;&otilde;es sobre o seu sistema, o que pode ser &uacute;til no diagn&oacute;stico de problemas';
$lang['admin']['systemmaintenance'] = 'Manuten&ccedil;&atilde;o do Sistema';
$lang['admin']['systemmaintenancedescription'] = 'Various functions for maintaining the health of your system. You can also browser the changelog of CMSMadeSimple';
$lang['admin']['sysmaintab_database'] = 'Base de Dados';
$lang['admin']['sysmaintab_changelog'] = 'Changelog';
$lang['admin']['sysmaintab_content'] = 'Cache and content';
$lang['admin']['sysmain_content_status'] = 'Content status';
$lang['admin']['sysmain_cache_status'] = 'Cache status';
$lang['admin']['sysmain_database_status'] = 'Database status';
$lang['admin']['sysmain_updatehierarchy'] = 'Update page hierarchy positions';
$lang['admin']['sysmain_confirmupdatehierarchy'] = 'Are you sure you want to update page hierarchy positions?';
$lang['admin']['sysmain_update'] = 'Update';
$lang['admin']['sysmain_pagesfound'] = 'pages found';
$lang['admin']['sysmain_hierarchyupdated'] = 'Page hierarchy positions updated';
$lang['admin']['sysmain_nostr_errors'] = 'No structural errors were detected in the database';
$lang['admin']['sysmain_str_error'] = 'Structural error detected in table';
$lang['admin']['sysmain_str_errors'] = 'Structural errors detected in tables';
$lang['admin']['sysmain_tablesfound'] = 'tables found (out of which %d are not seq-tables)';
$lang['admin']['sysmain_repair'] = 'Repair';
$lang['admin']['sysmain_repairtables'] = 'Repair tables';
$lang['admin']['sysmain_tablesrepaired'] = 'Tables repaired';
$lang['admin']['sysmain_optimizetables'] = 'Optimize tables';
$lang['admin']['sysmain_tablesoptimized'] = 'Tables optimized';
$lang['admin']['sysmain_optimize'] = 'Optimize';
$lang['admin']['sysmain_confirmclearcache'] = 'Are you sure you want to clear the cache?';
$lang['admin']['sysmain_nocontenterrors'] = 'No content errors detected';
$lang['admin']['sysmain_pagesmissinalias'] = 'pages missing aliases';
$lang['admin']['sysmain_confirmfixaliases'] = 'Are you sure you want to add aliases to pages missing it?';
$lang['admin']['sysmain_fixaliases'] = 'Add aliases where missed';
$lang['admin']['sysmain_aliasesfixed'] = 'aliases fixed';
$lang['admin']['sysmain_pagesinvalidtypes'] = 'pages with invalid content type';
$lang['admin']['sysmain_confirmfixtypes'] = 'Are you sure you want to convert all with invalid content into standard content pages?';
$lang['admin']['sysmain_fixtypes'] = 'Convert into standard content pages';
$lang['admin']['sysmain_typesfixed'] = 'page content types fixed';
$lang['admin']['welcome_user'] = 'Bem-Vindo';
$lang['admin']['itsbeensincelogin'] = 'J&aacute; passou %s desde o seu &uacute;ltimo login';
$lang['admin']['days'] = 'dias';
$lang['admin']['day'] = 'dia';
$lang['admin']['hours'] = 'horas';
$lang['admin']['hour'] = 'hora';
$lang['admin']['minutes'] = 'minutos';
$lang['admin']['minute'] = 'minuto';
$lang['admin']['help_css_max_age'] = 'Este par&acirc;metro dever&aacute; ser configurado com um valor relativamente alto para sites est&aacute;ticos <br />, e ser posto a 0, durante o desenvolvimento';
$lang['admin']['css_max_age'] = 'Quantidade m&aacute;xima de tempo (segundos) que os estilos (stylesheets) devem ser armazenados na cache do navegador';
$lang['admin']['error'] = 'Erro';
$lang['admin']['new_version_available'] = '<em>Alerta:</em> Uma nova vers&atilde;o do CMS Made Simple est&aacute; dispon&iacute;vel.  Por Favor contacte o seu administrador.';
$lang['admin']['master_admintheme'] = 'Tema de Administra&ccedil;&atilde;o Padr&atilde;o (para o login e novas contas de utilizador criadas)';
$lang['admin']['contenttype_separator'] = 'Separador';
$lang['admin']['contenttype_sectionheader'] = 'Sec&ccedil;&atilde;o de Cabe&ccedil;alho';
$lang['admin']['contenttype_content'] = 'Conte&uacute;do';
$lang['admin']['contenttype_pagelink'] = 'Link P&aacute;gina Interna';
$lang['admin']['nogcbwysiwyg'] = 'Desabilitar &quot;WYSIWYG Editor&quot; no Bloco de Conte&uacute;do Global';
$lang['admin']['destination_page'] = 'P&aacute;gina de Destino';
$lang['admin']['additional_params'] = 'Par&acirc;metros Adicionais';
$lang['admin']['help_function_current_date'] = '        <h3 style=&quot;color: red;&quot;>Deprecated</h3>
	 <p>use <code>{$smarty.now|cms_date_format}</code></p>
	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
	</ul>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
	<li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://validator.w3.org/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;valid XHTML 1.0 Transitional&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;Valid CSS 2.1&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page&#039;s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it&#039;s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can bbe modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
											 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=&#039;Last Changed&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
											 	<li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=&#039;some_name&#039;}</pre></p></li>											 	
											 		<li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module help</a>.';
$lang['admin']['login_info_title'] = 'Informa&ccedil;&atilde;o';
$lang['admin']['login_info'] = 'Para a consola de administra&ccedil;&atilde;o funcionar corretamente';
$lang['admin']['login_info_params'] = '<ol>
    <li>os Cookies devem estar activados no seu navegador</li>
    <li>o Javascript deve estar activado no seu navegador </li>
    <li>as Janelas de popup devem ser permitidas para o seguinte endere&ccedil;o:</li>
  </ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module help</a>.';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>What does this do?</h3>
	<p>Displays the metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{metadata}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>What does this do?</h3>
	<p>Prints the menu text of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu_text}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_menu'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src=&quot;something.jpg&quot;}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
     <li><em>(required)</em>  <tt>src</tt> - Image filename within your images directory.</li>
     <li><em>(optional)</em>  <tt>width</tt> - Width of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>height</tt> - Height of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>alt</tt> - Alt text for the image -- needed for xhtml compliance. Defaults to filename.</li>
     <li><em>(optional)</em>  <tt>class</tt> - CSS class for the image.</li>
     <li><em>(optional)</em>  <tt>title</tt> - Mouse over text for the image. Defaults to Alt text.</li>
     <li><em>(optional)</em>  <tt>addtext</tt> - Additional text to put into the tag</li>
  </ul>';
$lang['admin']['help_function_html_blob'] = '	<h3>What does this do?</h3>
	<p>See the help for global_content for a description.</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=&#039;myblob&#039;}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>name - The name of the global content block to display.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_uploads_url'] = '	<h3>What does this do?</h3>
	<p>Prints the uploads url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{uploads_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{embed url=http://www.google.com/}</code><br></p>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <h3>What parameters does it take?</h3>
        <ul>
               <li><em>(required)</em>url - the url to be included 
               <li><em>(optional)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>

        </ul>
       <p>You must include in your page content {embed url=..} and in the &quot;Metadata:&quot; section (advanced tab) you must put {embed header=true}. Also be sure to put this in between the &quot;head&quot; tags of your template: {metadata}</p>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>Para que serve?</h3>
	<p>This is where the content for your page will be displayed.  It&#039;s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
    <p>This smarty plugin is deprecated, and may not be included with further versions of CMS Made Simple.  We recommend you use the formbuilder module and it&#039;s included contact form.</p>
	<h3>What does this do?</h3>
	<p>Display&#039;s a contact form. This can be used to allow others to send an email message to the address specified.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{contact_form email=&quot;yourname@yourdomain.com&quot;}</code><br>
	<br>
	If you would like to send an email to multiple adresses, seperate each address with a comma.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>email - The email address that the message will be sent to.</li>
		<li><em>(optional)</em>style - true/false, use the predefined styles. Default is true.</li>
		<li><em>(optional)</em>subject_get_var - string, allows you to specify which _GET var to use as the default value for subject.
               <p>Example:</p>
               <pre>{contact_form email=&quot;yourname@yourdomain.com&quot; subject_get_var=&quot;subject&quot;}</pre>
             <p>Then call the page with the form on it like this: /index.php?page=contact&amp;subject=test+subject</p>
             <p>And the following will appear in the &quot;Subject&quot; box: &quot;test subject&quot;
           </li>
		<li><em>(optional)</em>captcha - true/false, use Captcha response test (Captcha module must be installed). Default is false.</li>
	</ul>
	</p>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>Para que serve?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>Para que serve?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard <mbv@nospam.dk></p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon <coolbru@users.sf.net></p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman <tsw@backspace.fi></p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren <http://hans.bymarken.net/></p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for &quot;dir&quot;, &quot;up&quot;, for links to the parent page e.g. dir=&quot;up&quot; (Hans Mogren).<br />
		1.44 - Added new parameters &quot;ext&quot; and &quot;ext_info&quot; to allow external links with class=&quot;external&quot; and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters &quot;image&quot; and &quot;imageonly&quot; to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter &quot;anchorlink&quot; and a new option for &quot;dir&quot; namely, &quot;anchor&quot;, for internal page links. e.g. dir=&quot;anchor&quot; anchorlink=&quot;internal_link&quot;. (Russ)<br />
		1.41 - added new parameter &quot;href&quot; (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option &quot;more&quot;<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '		<h3>Para que serve?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page=&quot;1&quot;}</code> or  <code>{cms_selflink page=&quot;alias&quot;}</code></p>
		<h3>What parameters does it take?</h3>
		<p>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir =&quot;anchor&quot;</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		<B>Note!</B> Only one of the above may be used in the same cms_selflink statement!!
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  (&quot;Next Page&quot;/&quot;Previous Page&quot;) in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to &quot;left&quot;).</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href="{cms_selflink href="alias"}"><img src=&quot;&quot;></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot;}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt=&quot;&quot; will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&quot;external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&quot; defaults to (external link)</li>
		</ul>
		</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>Para que serve?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
	</p>';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href="mailto:md@zioncore.com">md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be &quot;not shown in menu&quot; except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>Para que serve?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<p>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;>>&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li>

<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li>
</ul>
</p>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>Para que serve?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=&#039;here&#039; text=&#039;Scroll Down&#039;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>Para que serve?</h3>
  <p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>Para que serve?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url to=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Para que serve?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['help_function_cms_jquery'] = '<h3>What does this do?</h3>
 <p>This plugin allows you output the javascript libraries and plugins used from the admin.</p>
<h3>How do I use it?</h3>
<p>Simply insert this tag into your page or template: <code>{cms_jquery}</code></p>

<h3>Sample</h3>
<pre><code>{cms_jquery cdn=&#039;true&#039; exclude=&#039;jquery.ui.nestedSortable-1.3.4.js&#039; append=&#039;uploads/NCleanBlue/js/ie6fix.js&#039;}</code></pre>
<h4><em>Outputs</em></h4>
<pre><code><script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;http://localhost/1.10.x/lib/jquery/js/jquery.json-2.2.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;uploads/NCleanBlue/js/ie6fix.js&quot;></script>
</code></pre>

<h3><em>Included Defaults</em></h3>
<ul>
	<li><tt>jQuery</tt><em>(1.6.2)</em> - jquery-1.7.1.min.js</li>
	<li><tt>jQuery UI</tt><em>(1.8.14)</em> - jquery-ui-1.8.16.custom.min.js</li>
	<li><tt>nestedSortable</tt>(1.3.4) - jquery/js/jquery.ui.nestedSortable-1.3.4.js</li>
	<li><tt>jQuery json</tt><em>(2.2)</em> - jquery/js/jquery.json-2.2.js</li>
</ul>
    
<h3>What parameters does it take?</h3>
<ul>
	<li><em>(optional) </em><tt>exclude</tt> - use comma seperated value(CSV) list of scripts you would like to exclude. <code>&#039;jquery.ui.nestedSortable.js,jquery.json-2.2.js&#039;</code></li>
	<li><em>(optional) </em><tt>append</tt> - use comma seperated value(CSV) list of script paths you would like to append. <code>&#039;/uploade/jquery.ui.nestedSortable.js,http://code.jquery.com/jquery-1.7.1.min.js&#039;</code></li>
	<li><em>(optional) </em><tt>cdn</tt> - cdn=&#039;true&#039; will insert jQuery and jQueryUI Frameworks using Google&#039;s Content Delivery Netwok. Default is false.</li>
	<li><em>(optional) </em><tt>ssl</tt> - use to use the ssl_url as the base path.</li>
	<li><em>(optional) </em><tt>custom_root</tt> - use to set any base path wished.<code>custom_root=&#039;http://test.domain.com/&#039;</code> <br/>NOTE: overwrites ssl option and works with the cdn option</li>
	<li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
	</ul>

';
$lang['admin']['of'] = 'de';
$lang['admin']['first'] = 'Primeiro';
$lang['admin']['last'] = '&Uacute;ltimo';
$lang['admin']['adminspecialgroup'] = 'Aviso: Os membros deste grupo t&ecirc;m por defeito todas as permiss&otilde;es';
$lang['admin']['disablesafemodewarning'] = 'Desactivar aviso admin em modo seguro';
$lang['admin']['date_format_string'] = 'String Formato de Data ';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formato da data em string. Tente pesquisar por &#039;strftime&#039;';
$lang['admin']['last_modified_at'] = '&Uacute;ltima actualiza&ccedil;&atilde;o';
$lang['admin']['last_modified_by'] = '&Uacute;ltima altera&ccedil;&atilde;o por';
$lang['admin']['read'] = 'Ler';
$lang['admin']['write'] = 'Escrever';
$lang['admin']['execute'] = 'Executar';
$lang['admin']['group'] = 'Grupo';
$lang['admin']['other'] = 'Outro';
$lang['admin']['event_desc_moduleupgraded'] = 'Enviado ap&oacute;s a actualiza&ccedil;&atilde;o de um m&oacute;dulo';
$lang['admin']['event_help_moduleupgraded'] = '<p>Enviado ap&oacute;s a actualiza&ccedil;&atilde;o de um m&oacute;dulo.</p>';
$lang['admin']['event_desc_moduleinstalled'] = 'Enviado ap&oacute;s a instala&ccedil;&atilde;o de um m&oacute;dulo';
$lang['admin']['event_help_moduleinstalled'] = '<p>Enviado ap&oacute;s a instala&ccedil;&atilde;o de um m&oacute;dulo.</p>';
$lang['admin']['event_desc_moduleuninstalled'] = 'Enviado ap&oacute;s a remo&ccedil;&atilde;o de um m&oacute;dulo';
$lang['admin']['event_help_moduleuninstalled'] = '<p>Enviado ap&oacute;s a remo&ccedil;&atilde;o de um m&oacute;dulo.</p>';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Enviado ap&oacute;s a actualiza&ccedil;&atilde;o de um &quot;user defined tag&quot;';
$lang['admin']['event_help_edituserdefinedtagpost'] = '<p>Enviado ap&oacute;s a actualiza&ccedil;&atilde;o de um &quot;user defined tag&quot;.</p>';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Enviado antes de uma actualiza&ccedil;&atilde;o a um &quot;user defined tag&quot;';
$lang['admin']['event_help_edituserdefinedtagpre'] = '<p>Enviado antes de uma actualiza&ccedil;&atilde;o a um &quot;user defined tag&quot;.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Enviado antes de a remo&ccedil;&atilde;o de um &quot;user defined tag&quot;';
$lang['admin']['event_help_deleteuserdefinedtagpre'] = '<p>Enviado antes de a remo&ccedil;&atilde;o de um &quot;user defined tag&quot;.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Enviado ap&oacute;s a remo&ccedil;&atilde;o de um &quot;user defined tag&quot;';
$lang['admin']['event_help_deleteuserdefinedtagpost'] = '<p>Enviado ap&oacute;s a remo&ccedil;&atilde;o de um &quot;user defined tag&quot;.</p>';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Enviado ap&oacute;s a inser&ccedil;&atilde;o de um &quot;user defined tag&quot;';
$lang['admin']['event_help_adduserdefinedtagpre'] = '<p>Enviado ap&oacute;s a inser&ccedil;&atilde;o de um &quot;user defined tag&quot;.</p>';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Enviado antes da inser&ccedil;&atilde;o de um &quot;user defined tag&quot;';
$lang['admin']['event_help_adduserdefinedtagpost'] = '<p>Enviado antes da inser&ccedil;&atilde;o de um &quot;user defined tag&quot;.</p>';
$lang['admin']['global_umask'] = 'Mascara de Cria&ccedil;&atilde;o de Ficheiros (umask)';
$lang['admin']['errorcantcreatefile'] = 'N&atilde;o foi poss&iacute;vel criar um ficheiro (problema de permiss&otilde;es?)';
$lang['admin']['errormoduleversionincompatible'] = 'M&oacute;dulo incompat&iacute;vel com esta vers&atilde;o do CMS';
$lang['admin']['errormodulenotloaded'] = 'Erro interno, o m&oacute;dulo n&atilde;o foi instanciado';
$lang['admin']['errormodulenotfound'] = 'Erro interno, n&atilde;o foi poss&iacute;vel encontrar a inst&acirc;ncia do m&oacute;dulo';
$lang['admin']['errorinstallfailed'] = 'A instala&ccedil;&atilde;o do m&oacute;dulo falhou';
$lang['admin']['errormodulewontload'] = 'Problema ao instanciar um m&oacute;dulo dispon&iacute;vel';
$lang['admin']['frontendlang'] = 'L&iacute;ngua Padr&atilde;o no &quot;site&quot;';
$lang['admin']['info_edituser_password'] = 'Altere este campo para alterar a password do utilizador';
$lang['admin']['info_edituser_passwordagain'] = 'Altere este campo para alterar a password do utilizador';
$lang['admin']['originator'] = 'Originador';
$lang['admin']['module_name'] = 'Nome do M&oacute;dulo';
$lang['admin']['event_name'] = 'Nome do Evento';
$lang['admin']['event_description'] = 'Descri&ccedil;&atilde;o do Evento';
$lang['admin']['error_delete_default_parent'] = 'N&atilde;o pode apagar a p&aacute;gina por defeito nem uma parente desta.';
$lang['admin']['jsdisabled'] = 'Desculpe, esta fun&ccedil;&atilde;o requer que tenha o Javascript activado';
$lang['admin']['order'] = 'Ordem';
$lang['admin']['reorderpages'] = 'Reordenar p&aacute;ginas';
$lang['admin']['reorder'] = 'Reordenar';
$lang['admin']['page_reordered'] = 'P&aacute;gina reordenada com sucesso.';
$lang['admin']['pages_reordered'] = 'P&aacute;ginas reordenadas com sucesso';
$lang['admin']['sibling_duplicate_order'] = 'Duas p&aacute;ginas filhas do mesmo parente n&atilde;o podem ter a mesma ordem. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['no_orders_changed'] = 'Escolheu reordenar as p&aacute;ginas, mas n&atilde;o alterou a ordem de nenhuma. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['order_too_small'] = 'A ordem de uma p&aacute;gina n&atilde;o pode ser zero. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['order_too_large'] = 'A ordem de uma p&aacute;ginas n&atilde;o pode ser superior ao n&uacute;mero de p&aacute;ginas nesse n&iacute;vel. As p&aacute;ginas n&atilde;o foram reordenadas.';
$lang['admin']['user_tag'] = 'Tag do Utilizador';
$lang['admin']['add'] = 'Adicionar';
$lang['admin']['CSS'] = 'CSS - Folha de Estilos';
$lang['admin']['about'] = 'Acerca';
$lang['admin']['action'] = 'Ac&ccedil;&atilde;o';
$lang['admin']['actionstatus'] = 'Ac&ccedil;&atilde;o/Estado';
$lang['admin']['active'] = 'Activo';
$lang['admin']['addcontent'] = 'Adicionar Conte&uacute;do';
$lang['admin']['cantremove'] = 'N&atilde;o pode remover';
$lang['admin']['changepermissions'] = 'Alterar Permiss&otilde;es';
$lang['admin']['changepermissionsconfirm'] = 'ATEN&Ccedil;&Atilde;O\n\nEsta ac&ccedil;&atilde;o ir&aacute; tentar assegurar que todos os ficheiros que constituem o m&oacute;dulo tenham permiss&otilde;es de escrita pelo servidor web.\nTem a certeza que quer continuar?';
$lang['admin']['contentadded'] = 'O conte&uacute;do foi adicionado &agrave; base de dados.';
$lang['admin']['contentupdated'] = 'O conte&uacute;do foi actualizado.';
$lang['admin']['contentdeleted'] = 'O conte&uacute;do foi removido da base de dados.';
$lang['admin']['success'] = 'Sucesso';
$lang['admin']['addcss'] = 'Adicionar Folha de Estilo';
$lang['admin']['addgroup'] = 'Adicionar Novo Grupo';
$lang['admin']['additionaleditors'] = 'Editores Adicionais';
$lang['admin']['addtemplate'] = 'Adicionar Novo Template';
$lang['admin']['adduser'] = 'Adicionar Novo Utilizador';
$lang['admin']['addusertag'] = 'Adicionar &quot;User Defined Tag&quot;';
$lang['admin']['adminaccess'] = 'Acesso de &quot;login&quot; para admin';
$lang['admin']['adminlog'] = 'Log Admin';
$lang['admin']['adminlogcleared'] = 'O Log Admin foi limpo';
$lang['admin']['adminlogempty'] = 'O Log Admin est&aacute; vazio';
$lang['admin']['adminsystemtitle'] = 'Sistema CMS Admin';
$lang['admin']['adminpaneltitle'] = 'Painel Admin CMS';
$lang['admin']['advanced'] = 'Avan&ccedil;ado';
$lang['admin']['aliasalreadyused'] = 'Este Atalho de P&aacute;gina est&aacute; a ser utilizada por outra p&aacute;gina. Altere o &quot;Atalho de P&aacute;gina&quot; nas &quot;Op&ccedil;&otilde;es&quot; para algo diferente.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Atalho de p&aacute;gina deve ser apenas n&uacute;meros e/ou letras';
$lang['admin']['aliasnotaninteger'] = 'Atalho de p&aacute;gina n&atilde;o pode ser apenas um n&uacute;mero';
$lang['admin']['allpagesmodified'] = 'Todas as p&aacute;ginas foram alteradas!';
$lang['admin']['assignments'] = 'Designar Utilizadores';
$lang['admin']['associationexists'] = 'Esta associa&ccedil;&atilde;o j&aacute; existe';
$lang['admin']['autoinstallupgrade'] = 'Automaticamente instalar ou actualizar';
$lang['admin']['back'] = 'Voltar ao Menu';
$lang['admin']['backtoplugins'] = 'Voltar &agrave; Lista de &quot;Plugins&quot;';
$lang['admin']['cancel'] = 'Cancelar';
$lang['admin']['cantchmodfiles'] = 'N&atilde;o foi poss&iacute;vel alterar as permiss&otilde;es em alguns ficheiros';
$lang['admin']['cantremovefiles'] = 'Problema Removendo Ficheiros (permiss&otilde;es?)';
$lang['admin']['confirmcancel'] = 'Tem a certeza que deseja desistir de todas as suas altera&ccedil;&otilde;es? Clique em Ok para continuar ou Cancelar para voltar.';
$lang['admin']['canceldescription'] = 'Desistir das  Altera&ccedil;&otilde;es';
$lang['admin']['clearadminlog'] = 'Limpar Log Admin';
$lang['admin']['code'] = 'C&oacute;digo';
$lang['admin']['confirmdefault'] = 'Tem a certeza que quer alterar a p&aacute;gina padr&atilde;o do site?';
$lang['admin']['confirmdeletedir'] = 'Tem a certeza que quer remover este direct&oacute;rio e todo o seu conte&uacute;do?';
$lang['admin']['content'] = 'Conte&uacute;do';
$lang['admin']['contentmanagement'] = 'Gestor de Conte&uacute;do';
$lang['admin']['contenttype'] = 'Tipo de Conte&uacute;do';
$lang['admin']['copy'] = 'Copiar';
$lang['admin']['copytemplate'] = 'Copiar Template';
$lang['admin']['create'] = 'Criar';
$lang['admin']['createnewfolder'] = 'Criar Nova Pasta';
$lang['admin']['cssalreadyused'] = 'Nome de CSS em utiliza&ccedil;&atilde;o';
$lang['admin']['cssmanagement'] = 'Gestor de CSS';
$lang['admin']['currentassociations'] = 'Associa&ccedil;&otilde;es Actuais ';
$lang['admin']['currentdirectory'] = 'Direct&oacute;rio Actual';
$lang['admin']['currentgroups'] = 'Grupos Actuais';
$lang['admin']['currentpages'] = 'P&aacute;ginas Actuais';
$lang['admin']['currenttemplates'] = 'Templates Actuais';
$lang['admin']['currentusers'] = 'Utilizadores Actuais';
$lang['admin']['custom404'] = 'Mensagem de Erro 404 Personalizada';
$lang['admin']['database'] = 'Base de Dados';
$lang['admin']['databaseprefix'] = 'Prefixo de Base de Dados';
$lang['admin']['databasetype'] = 'Tipo de Base de Dados';
$lang['admin']['date'] = 'Data';
$lang['admin']['default'] = 'Por Defeito';
$lang['admin']['delete'] = 'Remover';
$lang['admin']['deleteconfirm'] = 'Tem a certeza que quer remover?';
$lang['admin']['deleteassociationconfirm'] = 'Tem certeza de que deseja apagar a associa&ccedil;&atilde;o para - %s - ?';
$lang['admin']['deletecss'] = 'Remover CSS';
$lang['admin']['dependencies'] = 'Depend&ecirc;ncias';
$lang['admin']['description'] = 'Descri&ccedil;&atilde;o';
$lang['admin']['directoryexists'] = 'Este direct&oacute;rio j&aacute; existe';
$lang['admin']['down'] = 'Off';
$lang['admin']['edit'] = 'Editar';
$lang['admin']['editconfiguration'] = 'Editar Configura&ccedil;&atilde;o';
$lang['admin']['editcontent'] = 'Editar Conte&uacute;do';
$lang['admin']['editcss'] = 'Editar Folha de Estilo';
$lang['admin']['editcsssuccess'] = 'A folha de estilo foi actualizada';
$lang['admin']['editgroup'] = 'Editar Grupo';
$lang['admin']['editpage'] = 'Editar P&aacute;gina';
$lang['admin']['edittemplate'] = 'Editar Template';
$lang['admin']['edittemplatesuccess'] = 'Template Actualizado';
$lang['admin']['edituser'] = 'Editar Utilizador';
$lang['admin']['editusertag'] = 'Editar &quot;User Defined Tag&quot;';
$lang['admin']['usertagadded'] = 'O &quot;User Defined Tag&quot; foi adicionado.';
$lang['admin']['usertagupdated'] = 'O &quot;User Defined Tag&quot; foi actualizado.';
$lang['admin']['usertagdeleted'] = 'O &quot;User Defined Tag&quot; foi removido.';
$lang['admin']['email'] = 'Endere&ccedil;o Email';
$lang['admin']['errorattempteddowngrade'] = 'A instala&ccedil;&atilde;o deste m&oacute;dulo resultaria num &quot;downgrade&quot;. Opera&ccedil;&atilde;o abortada';
$lang['admin']['errorchildcontent'] = 'O Conte&uacute;do ainda contem p&aacute;ginas filhas. Por favor remova-as primeiro.';
$lang['admin']['errorcopyingtemplate'] = 'Erro ao Copiar Template';
$lang['admin']['errorcouldnotparsexml'] = 'Erro no ficheiro XML. Por favor certifique-se que est&aacute; a &quot;carregar&quot; um ficheiro .xml e n&atilde;o um .tar.gz ou zip.';
$lang['admin']['errorcreatingassociation'] = 'Erro Criando Associa&ccedil;&atilde;o';
$lang['admin']['errorcssinuse'] = 'Esta Folha de Estilo ainda est&aacute; a ser utilizada por templates ou p&aacute;ginas. Por favor remova estas associa&ccedil;&otilde;es primeiro.';
$lang['admin']['errordefaultpage'] = 'N&atilde;o &eacute; poss&iacute;vel remover a actual p&aacute;gina defeito. Por favor seleccione uma diferente primeiro.';
$lang['admin']['errordeletingassociation'] = 'Erro ao remover associa&ccedil;&atilde;o';
$lang['admin']['errordeletingcss'] = 'Erro ao remover css';
$lang['admin']['errordeletingdirectory'] = 'N&atilde;o foi poss&iacute;vel remover a directoria. Problema de permiss&otilde;es?';
$lang['admin']['errordeletingfile'] = 'N&atilde;o foi poss&iacute;vel remover o ficheiros. Problema de permiss&otilde;es?';
$lang['admin']['errordirectorynotwritable'] = 'N&atilde;o tem permiss&otilde;es para escrever na directoria. Isto pode tamb&eacute;m ter sido causado devido as permiss&otilde;es do ficheiro. Tamb&eacute;m &eacute; poss&iacute;vel o modo seguro estar activado.';
$lang['admin']['errordtdmismatch'] = 'Vers&atilde;o DTD inexistente ou incompat&iacute;vel no ficheiro XML.';
$lang['admin']['errorgettingcssname'] = 'Erro lendo nome da Folha de Estilo';
$lang['admin']['errorgettingtemplatename'] = 'Erro lendo nome do template';
$lang['admin']['errorincompletexml'] = 'Ficheiro XML est&aacute; incompleto ou inv&aacute;lido';
$lang['admin']['uploadxmlfile'] = 'Instalar m&oacute;dulo via ficheiro XML';
$lang['admin']['cachenotwritable'] = 'N&atilde;o tem permiss&otilde;es de escrita na directoria Cache. Sendo que n&atilde;o conseguir&aacute; limpar a cache. Por favor d&ecirc; permiss&otilde;es read/write/execute &agrave; directoria tmp/cache (chmod 777). Poder&aacute; tamb&eacute;m ter de desactivar o modo seguro.';
$lang['admin']['error_nomodules'] = 'No modules installed! Check Extensions > Modules';
$lang['admin']['modulesnotwritable'] = 'N&atilde;o tem permiss&otilde;es de escrita no direct&oacute;rio dos m&oacute;dulos<em>(e/ou no direct&oacute;rio de uploads)</em>. Se deseja instalar m&oacute;dulos atrav&eacute;s do &quot;upload&quot; de ficheiros XML ter&aacute; que dar permiss&otilde;es totais de read/write/execute ao direct&oacute;rio (chmod 777). Poder&aacute; tamb&eacute;m ser poss&iacute;vel que o modo seguro esteja activado.';
$lang['admin']['noxmlfileuploaded'] = 'N&atilde;o foi enviado nenhum ficheiro. Para instalar um modulo via XML ter&aacute; que primeiro escolher o m&oacute;dulo (ficheiro .xml) no seu computador.';
$lang['admin']['errorinsertingcss'] = 'Erro a inserir Folha de Estilo';
$lang['admin']['errorinsertinggroup'] = 'Erro a inserir grupo';
$lang['admin']['errorinsertingtag'] = 'Erro  a inserir &quot;user tag&quot;';
$lang['admin']['errorinsertingtemplate'] = 'Erro a inserir template';
$lang['admin']['errorinsertinguser'] = 'Erro a inserir utilizador';
$lang['admin']['errornofilesexported'] = 'Erro a exportar para ficheiro xml';
$lang['admin']['errorretrievingcss'] = 'Erro na busca da Folha de Estilo';
$lang['admin']['errorretrievingtemplate'] = 'Erro na busca do template';
$lang['admin']['errortemplateinuse'] = 'Este template ainda est&aacute; a ser utilizado numa outra p&aacute;gina. Por favor remova-o primeiro.';
$lang['admin']['errorupdatingcss'] = 'Erro na actualiza&ccedil;&atilde;o da Folha de Estilo';
$lang['admin']['errorupdatinggroup'] = 'Erro na actualiza&ccedil;&atilde;o do grupo';
$lang['admin']['errorupdatingpages'] = 'Erro na actualiza&ccedil;&atilde;o das p&aacute;ginas';
$lang['admin']['errorupdatingtemplate'] = 'Erro na actualiza&ccedil;&atilde;o do template';
$lang['admin']['errorupdatinguser'] = 'Erro na actualiza&ccedil;&atilde;o do utilizador';
$lang['admin']['errorupdatingusertag'] = 'Erro na actualiza&ccedil;&atilde;o do &quot;user tag&quot;';
$lang['admin']['erroruserinuse'] = 'Ainda pertencem p&aacute;ginas de conte&uacute;do a este utilizador. Por favor altere o propriet&aacute;rio antes de as remover.';
$lang['admin']['eventhandlers'] = 'Eventos';
$lang['admin']['eventhandler'] = 'Event Handlers';
$lang['admin']['editeventhandler'] = 'Editar &quot;Event Handler&quot;';
$lang['admin']['eventhandlerdescription'] = 'Associar &quot;user tags&quot; com eventos';
$lang['admin']['export'] = 'Exportar';
$lang['admin']['event'] = 'Evento';
$lang['admin']['false'] = 'Falso';
$lang['admin']['settrue'] = 'Definir como Verdadeiro';
$lang['admin']['filecreatedirnodoubledot'] = 'Directoria n&atilde;o pode conter &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'N&atilde;o &eacute; poss&iacute;vel criar uma directoria sem nome.';
$lang['admin']['filecreatedirnoslash'] = 'Directoria n&atilde;o pode conter &#039;/&#039; or &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Gestor de Ficheiros';
$lang['admin']['filename'] = 'Nome de Ficheiro';
$lang['admin']['filenotuploaded'] = 'N&atilde;o foi poss&iacute;vel &quot;upload&quot; o ficheiro. Isto poder&aacute; ser um problema de permiss&otilde;es ou o modo seguro poder&aacute; estar activado.';
$lang['admin']['filesize'] = 'Tamanho de Ficheiro';
$lang['admin']['firstname'] = 'Primeiro Nome';
$lang['admin']['groupmanagement'] = 'Gestor de Grupos';
$lang['admin']['grouppermissions'] = 'Permiss&otilde;es de Grupos';
$lang['admin']['handler'] = 'Manipular (user defined tag)';
$lang['admin']['headtags'] = 'Tags de Cabe&ccedil;alho';
$lang['admin']['help'] = 'Ajuda';
$lang['admin']['new_window'] = 'nova janela';
$lang['admin']['helpwithsection'] = '%s Ajuda';
$lang['admin']['helpaddtemplate'] = '<p>Um template &eacute; o que controla o aspecto e layout do seu site.</p><p>Crie o layout aqui e adicione os seus CSSs na sec&ccedil;&atilde;o Stylesheet para controlar o aspecto dos v&aacute;rios elementos.</p>';
$lang['admin']['helplisttemplate'] = '<p>Esta p&aacute;gina permite-lhe editar, apagar e criar templates.</p><p>Para criar um novo template clique no bot&atilde;o <u>Adicionar Novo Template</u>.</p><p>Se deseja que este template seja utilizado em todas as p&aacute;ginas de conte&uacute;do clique no link<u>Fixar Todo o Conte&uacute;do</u>.</p><p>Se deseja duplicar um template clique no &iacute;cone <u>Copiar</u> de seguida introduza o nome do novo template.</p>';
$lang['admin']['home'] = 'In&iacute;cio';
$lang['admin']['homepage'] = 'P&aacute;gina principal';
$lang['admin']['hostname'] = 'Host-Name';
$lang['admin']['idnotvalid'] = 'O ID fornecido n&atilde;o &eacute; v&aacute;lido';
$lang['admin']['imagemanagement'] = 'Gestor de Imagens';
$lang['admin']['informationmissing'] = 'Tem informa&ccedil;&atilde;o em falta';
$lang['admin']['install'] = 'Instalar';
$lang['admin']['invalidcode'] = 'C&oacute;digo fornecido inv&aacute;lido.';
$lang['admin']['illegalcharacters'] = 'Caracteres Inv&aacute;lidos nos Campos %s.';
$lang['admin']['invalidcode_brace_missing'] = 'N&uacute;mero impar de &quot;braces {}&quot;';
$lang['admin']['invalidtemplate'] = 'O template n&atilde;o &eacute; v&aacute;lido';
$lang['admin']['itemid'] = 'ID Item';
$lang['admin']['itemname'] = 'Nome Item';
$lang['admin']['language'] = 'L&iacute;ngua';
$lang['admin']['lastname'] = 'Apelido';
$lang['admin']['logout'] = 'Sair';
$lang['admin']['loginprompt'] = 'Introduza credenciais de um utilizador v&aacute;lido para aceder ao painel administrativo.';
$lang['admin']['logintitle'] = 'Login Administrativo do CMS';
$lang['admin']['menutext'] = 'Menu Texto';
$lang['admin']['missingparams'] = 'Faltam alguns par&acirc;metro ou est&atilde;o inv&aacute;lidos';
$lang['admin']['modifygroupassignments'] = 'Alterar Atribui&ccedil;&otilde;es do Grupo';
$lang['admin']['moduleabout'] = 'Acerca do m&oacute;dulo %s';
$lang['admin']['modulehelp'] = 'Ajuda do m&oacute;dulo %s';
$lang['admin']['msg_defaultcontent'] = 'O c&oacute;digo aqui adicionado ir&aacute; aparecer como padr&atilde;o no conte&uacute;do de todas as novas p&aacute;ginas geradas';
$lang['admin']['msg_defaultmetadata'] = 'O c&oacute;digo aqui adicionado ir&aacute; aparecer na sec&ccedil;&atilde;o MetaData do conte&uacute;do de todas as novas p&aacute;ginas geradas';
$lang['admin']['wikihelp'] = 'Ajuda Comunit&aacute;ria';
$lang['admin']['moduleinstalled'] = 'M&oacute;dulo j&aacute; instalado';
$lang['admin']['moduleinterface'] = 'Interface %s';
$lang['admin']['modules'] = 'M&oacute;dulos';
$lang['admin']['move'] = 'Mover';
$lang['admin']['name'] = 'Nome';
$lang['admin']['needpermissionto'] = 'Necessita da permiss&atilde;o &#039;%s&#039; para executar essa fun&ccedil;&atilde;o';
$lang['admin']['needupgrade'] = 'Necessitar Actualiza&ccedil;&atilde;o';
$lang['admin']['newtemplatename'] = 'Nome de Template Novo';
$lang['admin']['next'] = 'Seguinte';
$lang['admin']['noaccessto'] = 'Sem Acesso a %s';
$lang['admin']['nocss'] = 'Sem Folha de Estilo';
$lang['admin']['noentries'] = 'Sem Entradas';
$lang['admin']['nofieldgiven'] = 'N&atilde;o foi dado %s !';
$lang['admin']['nofiles'] = 'Nenhuns Ficheiros';
$lang['admin']['nopasswordmatch'] = 'As Palavras Chave n&atilde;o condizem';
$lang['admin']['norealdirectory'] = 'Nenhuma directoria real foi dada';
$lang['admin']['norealfile'] = 'Nenhum ficheiro real foi fornecido';
$lang['admin']['notinstalled'] = 'N&atilde;o Instalado';
$lang['admin']['overwritemodule'] = 'Repor m&oacute;dulos existentes';
$lang['admin']['owner'] = 'Propriet&aacute;rio';
$lang['admin']['pagealias'] = 'Atalho da P&aacute;gina';
$lang['admin']['content_id'] = 'Content ID';
$lang['admin']['pagedefaults'] = 'P&aacute;gina Padr&atilde;o';
$lang['admin']['pagedefaultsdescription'] = 'Definir os valores padr&atilde;o para novas p&aacute;ginas';
$lang['admin']['parent'] = 'Parente';
$lang['admin']['password'] = 'Palavra Passe';
$lang['admin']['passwordagain'] = 'Palavra Passe (de novo)';
$lang['admin']['permission'] = 'Permiss&atilde;o';
$lang['admin']['permissions'] = 'Permiss&otilde;es';
$lang['admin']['permissionschanged'] = 'As Permiss&otilde;es foram actualizadas.';
$lang['admin']['pluginabout'] = 'Acerca do tag %s';
$lang['admin']['pluginhelp'] = 'Ajuda para o tag %s';
$lang['admin']['pluginmanagement'] = 'Gestor de &quot;plugins&quot;';
$lang['admin']['prefsupdated'] = 'Prefer&ecirc;ncias foram actualizadas.';
$lang['admin']['accountupdated'] = 'User account has been updated.';
$lang['admin']['preview'] = 'Pre-visualizar';
$lang['admin']['previewdescription'] = 'Pre-visualizar altera&ccedil;&otilde;es';
$lang['admin']['previous'] = 'Anterior';
$lang['admin']['remove'] = 'Remover';
$lang['admin']['removeconfirm'] = 'Esta ac&ccedil;&atilde;o ir&aacute; remover permanentemente desta instala&ccedil;&atilde;o todos os ficheiros que constituem este m&oacute;dulo.\nTem a certeza que deseja continuar?';
$lang['admin']['removecssassociation'] = 'Remover Associa&ccedil;&atilde;o de Folha de Estilo';
$lang['admin']['saveconfig'] = 'Guardar Configura&ccedil;&atilde;o';
$lang['admin']['send'] = 'Enviar';
$lang['admin']['setallcontent'] = 'Mudar Todas as P&aacute;ginas';
$lang['admin']['setallcontentconfirm'] = 'Tem certeza de que deseja configurar todas as p&aacute;ginas para usar este template?';
$lang['admin']['showinmenu'] = 'Exibir no Menu';
$lang['admin']['use_name'] = 'In the parent page dropdown, show the page title instead of the menu text';
$lang['admin']['showsite'] = 'Visualizar Site';
$lang['admin']['sitedownmessage'] = 'Mensagem Site em Baixo';
$lang['admin']['siteprefs'] = 'Defini&ccedil;&otilde;es Globais';
$lang['admin']['status'] = 'Estado';
$lang['admin']['stylesheet'] = 'Folha de Estilo';
$lang['admin']['submit'] = 'Submeter';
$lang['admin']['submitdescription'] = 'Guardar Altera&ccedil;&otilde;es';
$lang['admin']['tags'] = 'Tag&#039;s';
$lang['admin']['template'] = 'Template ';
$lang['admin']['templateexists'] = 'Nome de Template j&aacute; existe';
$lang['admin']['templatemanagement'] = 'Gestor de Templates';
$lang['admin']['title'] = 'T&iacute;tulo';
$lang['admin']['tools'] = 'Ferramentas';
$lang['admin']['true'] = 'Verdadeiro';
$lang['admin']['setfalse'] = 'Definir como Falso';
$lang['admin']['type'] = 'Tipo';
$lang['admin']['typenotvalid'] = 'Tipo n&atilde;o &eacute; v&aacute;lido';
$lang['admin']['uninstall'] = 'Desinstalar';
$lang['admin']['uninstallconfirm'] = 'Tem a certeza que deseja desinstalar este m&oacute;dulo? Nome:';
$lang['admin']['up'] = 'Subir';
$lang['admin']['upgrade'] = 'Actualizar';
$lang['admin']['upgradeconfirm'] = 'Tem a certeza que pretende actualizar?';
$lang['admin']['uploadfile'] = 'Upload Ficheiro';
$lang['admin']['url'] = 'URL';
$lang['admin']['useadvancedcss'] = 'Utilizar Gestor  Avan&ccedil;ado de Folhas de Estilo';
$lang['admin']['user'] = 'Utilizador';
$lang['admin']['userdefinedtags'] = 'Tags Personalizadas';
$lang['admin']['usermanagement'] = 'Gestor de Utilizadores';
$lang['admin']['username'] = 'Nome de utilizador';
$lang['admin']['usernameincorrect'] = 'Nome de utilizador ou palavra passe incorrectas';
$lang['admin']['userprefs'] = 'Prefer&ecirc;ncias de Utilizador';
$lang['admin']['useraccount'] = 'User Account';
$lang['admin']['lang_settings_legend'] = 'Language related settings';
$lang['admin']['content_editor_legend'] = 'Content editor settings';
$lang['admin']['admin_layout_legend'] = 'Admin lay-out settings';
$lang['admin']['usersassignedtogroup'] = 'Utilizadores Atribuidos ao Grupo %s';
$lang['admin']['usertagexists'] = 'Um &quot;tag&quot; com este nome j&aacute; existe. Por favor escolha outro.';
$lang['admin']['usewysiwyg'] = 'Utilizar editor WYSIWYG para conte&uacute;do';
$lang['admin']['version'] = 'Vers&atilde;o';
$lang['admin']['view'] = 'Vista';
$lang['admin']['welcomemsg'] = 'Bem vindo %s';
$lang['admin']['directoryabove'] = 'directoria acima de n&iacute;vel actual';
$lang['admin']['nodefault'] = 'Nenhum Padr&atilde;o Selecionado';
$lang['admin']['blobexists'] = 'Nome de Bloco de Conte&uacute;do Global j&aacute; existe';
$lang['admin']['blobmanagement'] = 'Gestor de Bloco de Conte&uacute;do Global';
$lang['admin']['errorinsertingblob'] = 'Houve um erro introduzindo um Bolco de Conte&uacute;do Global';
$lang['admin']['addhtmlblob'] = 'Adicionar Bloco de Conte&uacute;do Global';
$lang['admin']['edithtmlblob'] = 'Editar Bolco de Conte&uacute;do Global';
$lang['admin']['edithtmlblobsuccess'] = 'Bolco de Conte&uacute;do Global foi Actualizado';
$lang['admin']['tagtousegcb'] = 'Tag para usar neste Bloco';
$lang['admin']['gcb_wysiwyg'] = 'Activar BCG WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Activar editor WYSIWYG para edi&ccedil;&atilde;o de Blocos de Conte&uacute;do Global';
$lang['admin']['filemanager'] = 'Gestor de Ficheiros';
$lang['admin']['imagemanager'] = 'Gestor de Imagens';
$lang['admin']['encoding'] = 'Codifica&ccedil;&atilde;o';
$lang['admin']['clearcache'] = 'Limpar Cache';
$lang['admin']['clear'] = 'Limpa';
$lang['admin']['cachecleared'] = 'Cache Limpa';
$lang['admin']['apply'] = 'Aplicar';
$lang['admin']['applydescription'] = 'Guardar altera&ccedil;&otilde;es e continuar a editar';
$lang['admin']['none'] = 'nenhum';
$lang['admin']['wysiwygtouse'] = 'Selecionar WYSIWYG a utilizar';
$lang['admin']['syntaxhighlightertouse'] = 'Seleccionar syntax highlighter para usar';
$lang['admin']['hasdependents'] = 'Tem Dependentes';
$lang['admin']['missingdependency'] = 'Faltam Depend&ecirc;ncias';
$lang['admin']['minimumversion'] = 'Vers&atilde;o M&iacute;nima';
$lang['admin']['minimumversionrequired'] = 'Vers&atilde;o M&iacute;nima do CMSMS Requerida';
$lang['admin']['maximumversion'] = 'Vers&atilde;o M&aacute;xima';
$lang['admin']['maximumversionsupported'] = 'Vers&atilde;o M&aacute;xima do CMSMS Suportada';
$lang['admin']['depsformodule'] = 'Depend&ecirc;ncias do m&oacute;dulo %s';
$lang['admin']['installed'] = 'Instalado';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Alterar Hist&oacute;ria';
$lang['admin']['moduleerrormessage'] = 'Mensagem de Erro do M&oacute;dulo %s';
$lang['admin']['moduleupgradeerror'] = 'Houve um erro ao actualizar o m&oacute;dulo.';
$lang['admin']['moduleinstallmessage'] = 'Mensagem de instala&ccedil;&atilde;o do m&oacute;dulo %s';
$lang['admin']['moduleuninstallmessage'] = 'Mensagem de desinstala&ccedil;&atilde;o do m&oacute;dulo %s';
$lang['admin']['admintheme'] = 'Tema de Administra&ccedil;&atilde;o';
$lang['admin']['addstylesheet'] = 'Adicionar Folha de Estilo';
$lang['admin']['editstylesheet'] = 'Editar Folha de Estilo';
$lang['admin']['addcssassociation'] = 'Adicionar Associ&ccedil;&atilde;o Folha de Estilo';
$lang['admin']['attachstylesheet'] = 'Anexar Esta Folha de Estilo';
$lang['admin']['attachtemplate'] = 'Anexar a este Template';
$lang['admin']['main'] = 'Principal';
$lang['admin']['pages'] = 'P&aacute;ginas';
$lang['admin']['page'] = 'P&aacute;gina';
$lang['admin']['files'] = 'Ficheiros';
$lang['admin']['layout'] = 'Disposi&ccedil;&atilde;o';
$lang['admin']['usersgroups'] = 'Utilizadores &amp; Grupos';
$lang['admin']['extensions'] = 'Extens&otilde;es';
$lang['admin']['preferences'] = 'Prefer&ecirc;ncia';
$lang['admin']['admin'] = 'Admin Site';
$lang['admin']['viewsite'] = 'Visualizar Site';
$lang['admin']['templatecss'] = 'Atribuir Templates ao Stylesheet';
$lang['admin']['plugins'] = 'Plugins - Adons';
$lang['admin']['movecontent'] = 'Mover P&aacute;ginas';
$lang['admin']['module'] = 'M&oacute;dulo';
$lang['admin']['usertags'] = 'Tags Personalizadas';
$lang['admin']['htmlblobs'] = 'Bloco de Conte&uacute;do Global';
$lang['admin']['adminhome'] = 'P&aacute;gina Principal Administra&ccedil;&atilde;o';
$lang['admin']['liststylesheets'] = 'Folhas de Estilo';
$lang['admin']['preferencesdescription'] = 'Aqui &eacute; onde configura v&aacute;rias prefer&ecirc;ncias globais.';
$lang['admin']['adminlogdescription'] = 'Mostra um log de quem fez o que na administra&ccedil;&atilde;o';
$lang['admin']['mainmenu'] = 'Menu Principal';
$lang['admin']['users'] = 'Utilizadores';
$lang['admin']['usersdescription'] = 'Aqui &eacute; onde pode gerir os utilizadores';
$lang['admin']['groups'] = 'Grupos';
$lang['admin']['groupsdescription'] = 'Aqui &eacute; onde pode gerir os grupos.';
$lang['admin']['groupassignments'] = 'Associa&ccedil;&otilde;es de Grupo';
$lang['admin']['groupassignmentdescription'] = 'Aqui &eacute; onde pode associar utilizadores aos grupos';
$lang['admin']['groupperms'] = 'Permiss&otilde;es de Grupo';
$lang['admin']['grouppermsdescription'] = 'Definir permiss&otilde;es e n&iacute;veis de acesso dos grupos';
$lang['admin']['pagesdescription'] = 'Nesta sec&ccedil;&atilde;o, as p&aacute;ginas e outros conte&uacute;dos s&atilde;o geridos.';
$lang['admin']['htmlblobdescription'] = 'Blocos de Conte&uacute;do Global s&atilde;o bocado de conte&uacute;dos que poder&aacute; adicionar na p&aacute;ginas ou templates.';
$lang['admin']['templates'] = 'Templates ';
$lang['admin']['templatesdescription'] = 'Aqui &eacute; onde os templates s&atilde;o adicionados ou editados. Os Templates definem o aspecto do site.';
$lang['admin']['stylesheets'] = 'Folhas de Estilo';
$lang['admin']['stylesheetsdescription'] = 'O gestor de Folhas de Estilo &eacute; um modo avan&ccedil;ado de gest&atilde;o de Cascading Style Sheets (CSS) separadamente dos templates.';
$lang['admin']['filemanagerdescription'] = 'Upload e gerir ficheiros.';
$lang['admin']['imagemanagerdescription'] = 'Upload/editar e remover imagens.';
$lang['admin']['moduledescription'] = 'Os m&oacute;dulos complementam o CMS Made Simple de forma a disponibilizar funcionalidades personalizadas.';
$lang['admin']['tagdescription'] = 'Tags s&atilde;o pequenas funcionalidades que podem ser adicionadas ao seu conte&uacute;do e/ou templates.';
$lang['admin']['usertagdescription'] = 'Tags que poder&aacute; criar ao alterar para executar tarefas especificas directamente do seu navegador.';
$lang['admin']['installdirwarning'] = '<strong>Aviso: </strong>   O direct&oacute;rio de instala&ccedil;&atilde;o ainda existe. Por favor remova-o por completo.';
$lang['admin']['subitems'] = 'Sub-itens';
$lang['admin']['extensionsdescription'] = 'M&oacute;dulos, tags e outros.';
$lang['admin']['usersgroupsdescription'] = 'Itens relacionados com Utilizadores e Grupos.';
$lang['admin']['layoutdescription'] = 'Op&ccedil;&otilde;es de layout do site.';
$lang['admin']['admindescription'] = 'Fun&ccedil;&otilde;es do Site Administrativo.';
$lang['admin']['contentdescription'] = 'Nesta sec&ccedil;&atilde;o adiciona-se e edita-se conte&uacute;do. ';
$lang['admin']['enablecustom404'] = 'Activar Mensagem 404 Personalizadas';
$lang['admin']['enablesitedown'] = 'Activar Mensagem Site Off';
$lang['admin']['enablewysiwyg'] = 'Enable WYSIWYG on Site Down Message';
$lang['admin']['bookmarks'] = 'Atalhos';
$lang['admin']['user_created'] = 'Atalhos Personalizados';
$lang['admin']['forums'] = 'F&oacute;runs';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['team'] = 'Equipa';
$lang['admin']['documentation'] = 'Documentation';
$lang['admin']['module_help'] = 'Ajuda M&oacute;dulo';
$lang['admin']['managebookmarks'] = 'Gerir Atalhos';
$lang['admin']['editbookmark'] = 'Editar Atalhos';
$lang['admin']['addbookmark'] = 'Adicionar Atalho';
$lang['admin']['recentpages'] = 'P&aacute;ginas Recentes';
$lang['admin']['groupname'] = 'Nome do Grupo';
$lang['admin']['selectgroup'] = 'Selecionar Grupo';
$lang['admin']['updateperm'] = 'Actualizar Permiss&otilde;es';
$lang['admin']['admincallout'] = 'Atalhos Administra&ccedil;&atilde;o';
$lang['admin']['showbookmarks'] = 'Mostrar Atalhos de Administra&ccedil;&atilde;o';
$lang['admin']['hide_help_links'] = 'Esconder link de ajuda';
$lang['admin']['hide_help_links_help'] = 'Selecione para desactivar o wiki e links de ajuda dos m&oacute;dulos.';
$lang['admin']['showrecent'] = 'Mostrar P&aacute;gina Recentemente Utilizadas';
$lang['admin']['attachtotemplate'] = 'Anexar Folha de Estilo ao Template';
$lang['admin']['attachstylesheets'] = 'Anexar Folha de Estilo';
$lang['admin']['indent'] = 'Indentar a listagem de p&aacute;ginas para dar relevo &agrave; hierarquia';
$lang['admin']['adminindent'] = 'Visualiza&ccedil;&atilde;o de Conte&uacute;do';
$lang['admin']['contract'] = 'Fechar Sec&ccedil;&atilde;o';
$lang['admin']['expand'] = 'Abrir Sec&ccedil;&atilde;o';
$lang['admin']['expandall'] = 'Abrir Todas as Sec&ccedil;&otilde;es';
$lang['admin']['contractall'] = 'Fechar Todas as Sec&ccedil;&otilde;es';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Defini&ccedil;&otilde;es Globais';
$lang['admin']['adminpaging'] = 'N&uacute;mero de Itens de Conte&uacute;do a mostrar por p&aacute;gina na Listagem de P&aacute;ginas';
$lang['admin']['nopaging'] = 'Mostrar Todos os Itens';
$lang['admin']['myprefs'] = 'Minhas Prefer&ecirc;ncias';
$lang['admin']['myprefsdescription'] = 'Aqui &eacute; onde pode customizar a &aacute;rea administrativa para funcionar da forma que quer';
$lang['admin']['myaccount'] = 'Minha Conta';
$lang['admin']['myaccountdescription'] = 'Aqui &eacute; onde pode actualizar os detalhes da sua conta pessoal.';
$lang['admin']['adminprefs'] = 'Prefer&ecirc;ncias de Utilizador';
$lang['admin']['adminprefsdescription'] = 'Aqui &eacute; onde pode definir prefer&ecirc;ncias especificas para a administra&ccedil;&atilde;o do site.';
$lang['admin']['managebookmarksdescription'] = 'Aqui &eacute; onde pode gerir os atalhos da administra&ccedil;&atilde;o.';
$lang['admin']['options'] = 'Op&ccedil;&otilde;es';
$lang['admin']['langparam'] = 'Par&acirc;metro utilizado para especificar que l&iacute;ngua utilizar no site. Nem todos os m&oacute;dulos suportam ou necessitam.';
$lang['admin']['parameters'] = 'Par&acirc;metros';
$lang['admin']['mediatype'] = 'Tipo de M&eacute;dia';
$lang['admin']['media_query'] = 'Media Query';
$lang['admin']['media_query_description'] = '<strong>Notice:</strong> When Media Query is used, Media Type selection will be ignored.<br /> Use any valid expression as recommended by <a href="http://www.w3.org/TR/css3-mediaqueries/" rel="external" title="W3C">W3C</a>.';
$lang['admin']['mediatype_'] = 'Nenhum definido : ir&aacute; afectar tudo.';
$lang['admin']['mediatype_all'] = 'todos : Ajust&aacute;vel para todos os dispositivos.';
$lang['admin']['mediatype_aural'] = 'aural : Destinado a sintetizadores de voz.';
$lang['admin']['mediatype_braille'] = 'braille: Destinado a dispositivos braille de feedback t&aacute;ctil.';
$lang['admin']['mediatype_embossed'] = 'embossed : Destinado a impressoras de braille.';
$lang['admin']['mediatype_handheld'] = 'handheld : Destinado a dispositivos port&aacute;teis';
$lang['admin']['mediatype_print'] = 'print : (impress&atilde;o) Destinado a material paginado opaco, e para documentos visualizados em ecr&atilde; no modo de pr&eacute;-visualiza&ccedil;&atilde;o de impress&atilde;o.';
$lang['admin']['mediatype_projection'] = 'projection : (projec&ccedil;&atilde;o) Destinado a apresenta&ccedil;&otilde;es projectadas, por exemplo projectores ou para imprimir em transpar&ecirc;ncias ou acetatos.';
$lang['admin']['mediatype_screen'] = 'screen : (ecr&atilde;) Destinado principalmente para ecr&atilde;s de computador a cor.';
$lang['admin']['mediatype_tty'] = 'tty : Destinado a m&eacute;dia que usa uma grelha de caracteres &quot;fixed-pitch&quot;, tais como teletipos e terminais.';
$lang['admin']['mediatype_speech'] = 'speech : (discurso) Destinado a sintetizadores de voz.';
$lang['admin']['mediatype_tv'] = 'tv : Destinado a dispositivos do tipo televis&atilde;o .';
$lang['admin']['assignmentchanged'] = 'As Atribui&ccedil;&otilde;es de Grupo foram actualizadas.';
$lang['admin']['stylesheetexists'] = 'A Folha de Estilo Existe';
$lang['admin']['errorcopyingstylesheet'] = 'Erro ao Copiar Folha de Estilo';
$lang['admin']['copystylesheet'] = 'Copiar Folha de Estilo';
$lang['admin']['newstylesheetname'] = 'Novo Nome de Folha de Estilo';
$lang['admin']['target'] = 'Alvo';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL do servidor soap do Repositor de M&oacute;dulos ';
$lang['admin']['metadata'] = 'Meta-dados';
$lang['admin']['globalmetadata'] = 'Meta-dados Globais';
$lang['admin']['titleattribute'] = 'Descri&ccedil;&atilde;o (atributo t&iacute;tulo)';
$lang['admin']['tabindex'] = 'Tab &Iacute;ndice';
$lang['admin']['accesskey'] = 'Chave de Acesso';
$lang['admin']['sitedownwarning'] = '<strong>Aviso:</strong> O seu site est&aacute; a mostrar a mensagem &quot;site em manuten&ccedil;&atilde;o&quot; . Retire o ficheiro %s para resolver isso.';
$lang['admin']['deletecontent'] = 'Apagar Conte&uacute;do';
$lang['admin']['deletepages'] = 'Apagar estas p&aacute;ginas?';
$lang['admin']['selectall'] = 'Seleccionar Tudo';
$lang['admin']['selecteditems'] = 'Seleccionados';
$lang['admin']['inactive'] = 'Inactivo';
$lang['admin']['deletetemplates'] = 'Apagar Templates';
$lang['admin']['templatestodelete'] = 'Este templates ser&atilde;o apagados';
$lang['admin']['wontdeletetemplateinuse'] = 'Este templates est&atilde;o em uso e n&atilde;o ser&atilde;o apagados';
$lang['admin']['deletetemplate'] = 'Apagar Stylesheets';
$lang['admin']['stylesheetstodelete'] = 'Estas folhas de estilos ser&atilde;o apagadas';
$lang['admin']['sitename'] = 'Nome Site';
$lang['admin']['goto'] = 'Regressar a:';
$lang['admin']['siteadmin'] = 'Admin Site';
$lang['admin']['images'] = 'Gestor de Imagens';
$lang['admin']['blobs'] = 'Blocos de Conte&uacute;do Global';
$lang['admin']['groupmembers'] = 'Atribui&ccedil;&otilde;es de Grupo';
$lang['admin']['troubleshooting'] = '(Problemas)';
$lang['admin']['event_desc_loginpost'] = 'Enviado ap&oacute;s um login no painel administrativo';
$lang['admin']['event_desc_logoutpost'] = 'Enviado ap&oacute;s um logout do painel administrativo';
$lang['admin']['event_desc_adduserpre'] = 'Enviado antes de um novo utilizardor ser criado';
$lang['admin']['event_desc_adduserpost'] = 'Enviado ap&oacute;s a cria&ccedil;&atilde;o de um novo utilizador';
$lang['admin']['event_desc_edituserpre'] = 'Enviado antes de as edi&ccedil;&otilde;es ao utilizador terem sido guardadas';
$lang['admin']['event_desc_edituserpost'] = 'Enviado ap&oacute;s edi&ccedil;&otilde;es a um utilizador terem sido salvas';
$lang['admin']['event_desc_deleteuserpre'] = 'Enviado antes de um utilizador ser removido do sistema';
$lang['admin']['event_desc_deleteuserpost'] = 'Enviado ap&oacute;s a um utilizador ter sido removido do sistema';
$lang['admin']['event_desc_addgrouppre'] = 'Enviado antes de um novo grupo ser criado';
$lang['admin']['event_desc_addgrouppost'] = 'Enviado ap&oacute;s um novo grupo ter sido criado';
$lang['admin']['event_desc_changegroupassignpre'] = 'Enviado antes das atribui&ccedil;&otilde;es de grupo terem sido salvas';
$lang['admin']['event_desc_changegroupassignpost'] = 'Enviado ap&oacute;s as atribui&ccedil;&otilde;es de grupo terem sido salvas';
$lang['admin']['event_desc_editgrouppre'] = 'Enviado antes das edi&ccedil;&otilde;es ao grupo terem sido salvas';
$lang['admin']['event_desc_editgrouppost'] = 'Enviaso ap&oacute;s as edi&ccedil;&otilde;es ao grupo terem sido salvas';
$lang['admin']['event_desc_deletegrouppre'] = 'Enviado antes de um grupo ser removido';
$lang['admin']['event_desc_deletegrouppost'] = 'Enviado ap&oacute;s um grupo ter sido removido';
$lang['admin']['event_desc_addstylesheetpre'] = 'Enviado antes de uma nova folha de estilo ter sido criada';
$lang['admin']['event_desc_addstylesheetpost'] = 'Enviado ap&oacute;s uma nova folha de estilo ter sido criada';
$lang['admin']['event_desc_editstylesheetpre'] = 'Enviado antes das edi&ccedil;&otilde;es a uma folha de estilo terem sido salvas';
$lang['admin']['event_desc_editstylesheetpost'] = 'Enviado ap&oacute;s as edi&ccedil;&otilde;es a uma folha de estilo terem sido salvas';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Enviado antes de um folha de estilo ter sido removido';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Enviado ap&oacute;s uma folha de estilo ter sido removido';
$lang['admin']['event_desc_addtemplatepre'] = 'Enviado antes de um novo template ser criado';
$lang['admin']['event_desc_addtemplatepost'] = 'Enviado ap&oacute;s um novo template ter sido criado';
$lang['admin']['event_desc_edittemplatepre'] = 'Enviado antes das edi&ccedil;&otilde;es ao template terem sido salvas';
$lang['admin']['event_desc_edittemplatepost'] = 'Enviado ap&oacute;s as edi&ccedil;&otilde;es ao template terem sido salvas';
$lang['admin']['event_desc_deletetemplatepre'] = 'Enviado antes de um template ser removido';
$lang['admin']['event_desc_deletetemplatepost'] = 'Enviado ap&oacute;s um template ter sido removido';
$lang['admin']['event_desc_templateprecompile'] = 'Enviado antes de um template ser enviado para &quot;smarty&quot; para processamento';
$lang['admin']['event_desc_templateprefetch'] = 'Sent before a template is fetched from smarty';
$lang['admin']['event_desc_templatepostcompile'] = 'Enviado ap&oacute;s um template ter sido processado por &quot;smarty&quot;';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Enviado antes de um novo bloco de conte&uacute;do global ser criado';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Enviado ap&oacute;s um novo bloco de conte&uacute;do global ter sido criado';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Enviado antes de as edi&ccedil;&otilde;es a um bloco de conte&uacute;do global ter sido salvo';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Enviado ap&oacute;s as edi&ccedil;&otilde;es a um bloco de conte&uacute;do global ter sido salvo';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Enviado antes de um bloco de conte&uacute;do global ter sido removido do sistema';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Enviado ap&oacute;s um bloco de conte&uacute;do global ter sido removido do sistema';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Enviado antes de um bloco de conte&uacute;do global ter sido enviado para processamento pelo smarty';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Enviado ap&oacute;s um bloco de conte&uacute;do global ter sido processado pelo smart';
$lang['admin']['event_desc_contenteditpre'] = 'Enviado antes de edi&ccedil;&atilde;o ao conte&uacute;do ter sido salvas';
$lang['admin']['event_desc_contenteditpost'] = 'Enviado ap&oacute;s edi&ccedil;&otilde;es ao conte&uacute;do ter sido salvas';
$lang['admin']['event_desc_contentdeletepre'] = 'Enviado antes de conte&uacute;do ser removido do sistema';
$lang['admin']['event_desc_contentdeletepost'] = 'Enviado ap&oacute;s o conte&uacute;do ser removido do sistema';
$lang['admin']['event_desc_contentstylesheet'] = 'Enviado antes de uma folha de estilo ser enviada para o &quot;Navegador&quot;';
$lang['admin']['event_desc_contentprecompile'] = 'Enviado antes de o conte&uacute;do ter sido enviado para processamento pelo smarty';
$lang['admin']['event_desc_contentpostcompile'] = 'Enviado ap&oacute;s o conte&uacute;do ter sido processado pelo smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Enviado antes do conjunto de html ser enviado para o &quot;browser&quot;';
$lang['admin']['event_desc_smartyprecompile'] = 'Enviado antes de qualquer conte&uacute;do destinado para o smarty ser enviado';
$lang['admin']['event_desc_smartypostcompile'] = 'Enviado ap&oacute;s qualquer conte&uacute;do destinado ao smarty ter sido processado';
$lang['admin']['event_help_loginpost'] = '<p>Enviado ap&oacute;s um utilizador fazer login no painel admin.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Enviado ap&oacute;s um utilizador fazer logout do painel admin.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Enviado antes de um novo utilizador ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Enviado ap&oacute;s um novo utilizador ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Enviado antes das edi&ccedil;&otilde;es ao utilizador serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Enviado ap&oacute;s as edi&ccedil;&otilde;es ao utilizador serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Enviado antes de um utilizador ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Enviado ap&oacute;s um utilizador ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;user&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Enviado antes de um novo grupo ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Enviado ap&oacute;s um novo grupo ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de utilizador afectado.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Enviado antes das atribui&ccedil;&otilde;es de grupo serem salvas.</p>
<h4>Par&acirc;metros></h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia to the group object.</li>
<li>&#039;users&#039; - Conjunto de refer&ecirc;ncias do objecto de utilizador pertencendo ao grupo.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Enviado ap&oacute;s as atribui&ccedil;&otilde;es de grupo terem sido salvas.</p>
<h4>Par&acirc;metros></h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de grupo afectado.</li>
<li>&#039;users&#039; - Conjunto de refer&ecirc;ncias do objecto de utilizador pertencendo ao grupo.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Enviado antes das edi&ccedil;&otilde;es ao grupo serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de grupo afectado.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Enviado ap&oacute;s as edi&ccedil;&otilde;es ao grupo serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de grupo afectado.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Enviado antes de um grupo ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de grupo afectado.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Enviado ap&oacute;s um grupo ter sido removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;group&#039; - Refer&ecirc;ncia ao objecto de grupo afectado.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Enviado antes de uma folha de estilo ser criada.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Enviado ap&oacute;s uma folha de estilo ter sido criada.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Enviado antes das edi&ccedil;&otilde;es a uma folha de estilo serem salvas</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Enviado ap&oacute;s as edi&ccedil;&otilde;es a uma folha de estilo terem sido salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Enviado antes de uma folha de estilo ser removida do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Enviado ap&oacute;s uma folha de estilo ser removida do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;stylesheet&#039; - Refer&ecirc;ncia ao objecto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Enviado antes de um novo template ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Enviado ap&oacute;s um novo template ser criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Enviado antes das edi&ccedil;&otilde;es a um template serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Enviado ap&oacute;s as edi&ccedil;&otilde;es a um template terem sido salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Enviado antes de um template ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Enviado ap&oacute;s um template ter sido removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Enviado antes de um template ser enviado para processamento pelo smarty.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_templateprefetch'] = '<p>Sent before a template is fetched from smarty.
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; (string reference) - The name of the template.</li>
<li>&#039;cache_id&#039; (string reference) - The template cache id (if applicable).</li>
<li>&#039;compile_id&#039; (string reference) - The template cache id (if applicable).</li>
<li>&#039;display&#039; (integer reference) - Indecates whether the output is being displayed or assigned.</li>
<li>&#039;no_output_filter&#039; (integer reference) - Indicates whether output filters should be applied.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Enviado ap&oacute;s um template ter sido processado pelo smarty.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;template&#039; - Refer&ecirc;ncia ao objecto de template afectado.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Enviado antes de um novo bloco de conte&uacute;do global ser cirado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Enviado ap&oacute;s um novo bloco de conte&uacute;do global ter sido criado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Enviado antes de edi&ccedil;&otilde;es a um bloco de conte&uacute;do global ser saldo.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Enviado ap&oacute;s edi&ccedil;&otilde;es a um bloco de conte&uacute;do global terem sido salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Enviado antes de um bloco de conte&uacute;do global ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Enviado ap&oacute;s um bloco de conte&uacute;do global ter sido removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Enviado antes de um bloco de conte&uacute;do global ser enviado para o smarty para processamento.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Enviado ap&oacute;s um bloco de conte&uacute;do global ter sido processado pelo smarty.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto do bloco de conte&uacute;do global afectado.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Enviado antes de edi&ccedil;&otilde;es ao conte&uacute;do terem sido salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;global_content&#039; - Refer&ecirc;ncia ao objecto de conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Enviado ap&oacute;s edi&ccedil;&otilde;es ao conte&uacute;dos serem salvas.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao objecto de conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Enviado antes de conte&uacute;do ser removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao objecto de conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Enviado ap&oacute;s conte&uacute;do ter sido removido do sistema.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao objecto de conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Enviado ap&oacute;s a folha de estilo ter sido enviada para o browser.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto da folha de estilo afectada.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Enviado antes do conte&uacute;do ser enviado para o smarty para processamento.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto do conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Enviado ap&oacute;s o conte&uacute;do ter sido processado pelo smarty.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto do conte&uacute;do afectado.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Enviado antes do conjunto de html ser enviado para o browser.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto html.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Enviado antes de qualquer conte&uacute;do destinado ao smarty ter sido processado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto afectado.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Enviado ap&oacute;s de qualquer conte&uacute;do destinado ao smarty ter sido processado.</p>
<h4>Par&acirc;metros</h4>
<ul>
<li>&#039;content&#039; - Refer&ecirc;ncia ao texto afectado.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filtrar por M&oacute;dulo';
$lang['admin']['showall'] = 'Mostrar Todos';
$lang['admin']['core'] = 'N&uacute;cleo';
$lang['admin']['defaultpagecontent'] = 'Conte&uacute;do de P&aacute;gina Defeito';
$lang['admin']['file_url'] = 'Link para ficheiro (em vez do URL)';
$lang['admin']['no_file_url'] = 'Nenhum (Utilize URL Acima)';
$lang['admin']['defaultparentpage'] = 'P&aacute;gina Parente por Defeito';
$lang['admin']['error_udt_name_whitespace'] = 'Erro: As Tags Personalizadas n&atilde;o podem ter espa&ccedil;os no seu nome.';
$lang['admin']['warning_safe_mode'] = '<strong><em>AVISO:</em></strong> O modo seguro (Safe  Mode) do PHP est&aacute; activado.  Isto ir&aacute; causar dificuldades com ficheiros enviados atrav&eacute;s do navegador, incluindo imagens, temas e m&oacute;dulos. &Eacute; aconselhado a contactar o administrador do site de forma a desactivar o modo seguro. ';
$lang['admin']['test'] = 'Teste';
$lang['admin']['results'] = 'Resultados';
$lang['admin']['untested'] = 'N&atilde;o Testado';
$lang['admin']['unknown'] = 'Desconhecido';
$lang['admin']['download'] = 'Download ';
$lang['admin']['frontendwysiwygtouse'] = 'Editor wysiwyg do site (Frontend)';
$lang['admin']['backendwysiwygtouse'] = 'Default backend wysiwyg (for new user accounts)';
$lang['admin']['all_groups'] = 'Todos os Grupos';
$lang['admin']['error_type'] = 'Erro Tipo';
$lang['admin']['contenttype_errorpage'] = 'Erro P&aacute;gina';
$lang['admin']['errorpagealreadyinuse'] = 'C&oacute;digo de Erro J&aacute; Utilizado';
$lang['admin']['404description'] = 'P&aacute;gina N&atilde;o Encontrada';
$lang['admin']['usernotfound'] = 'Utilizador N&atilde;o Encontradado';
$lang['admin']['passwordchange'] = 'Por favor, forne&ccedil;a a nova password.';
$lang['admin']['recoveryemailsent'] = 'E-mail enviado para o seu Correio Electr&oacute;nico. Por favor, verifique a sua caixa de correio para mais instru&ccedil;&otilde;es.';
$lang['admin']['errorsendingemail'] = 'Ocorreu um erro ao enviar o e-mail. Contacte o seu administrador.';
$lang['admin']['passwordchangedlogin'] = 'Palavra Passe foi alterada.  Por favor, fa&ccedil;a o login usando as novas credenciais.';
$lang['admin']['nopasswordforrecovery'] = 'N&atilde;o foi definido nenhum endere&ccedil;o de E-mail para este utilizador. A recupera&ccedil;&atilde;o da Palavra Passe n&atilde;o foi poss&iacute;vel. Por Favor entre em contacto com o administrador.';
$lang['admin']['lostpw'] = 'Esqueceu-se da Palavra Passe?';
$lang['admin']['lostpwemailsubject'] = '[%s] Recuperar Palavra Passe';
$lang['admin']['lostpwemail'] = 'Est&aacute; a receber este E-mail porque um pedido foi foi solicitado relativamente ao site  (%s) com a senha associada a esta conta de utilizador (%s). Se quiser redefinir a senha para esta conta bastar&aacute; clicar no link abaixo ou cole-o no campo URL no seu navegador preferido:
%s

Se achar que est&aacute; incorrecto ou solicitado por engano, simplesmente ignore este E-mail e nada mudar&aacute;.';
$lang['admin']['utma'] = '156861353.948594105.1378672787.1378672787.1378672787.1';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmz'] = '156861353.1378672787.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
?>