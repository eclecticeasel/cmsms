<?php
$lang['error_search'] = 'Search Error';
$lang['prompt_disable_caching'] = 'Disable caching of requests from the server';
$lang['info_disable_caching'] = '<strong>Not Recommended</strong>.  For performance reasons, ModuleManager will cache for (by default one hour) much of the information retrieved from the remote server';
$lang['operation_results'] = 'Operation Results';
$lang['error_noresults'] = 'We expected some results to be available from queued operations, but none were found.  Please try to reproduce this experience, and provide sufficient information to support personell for diagnoses';
$lang['versionsformodule'] = 'Available versions of the module %s';
$lang['yourversion'] = 'Your Version';
$lang['latestdepends'] = 'Always install the newest modules';
$lang['info_latestdepends'] = 'When installing a module with dependencies, this option will make sure that the latest version of the dependency will be installed';
$lang['error_internal'] = 'Internal Error... Please report this to your system administrator';
$lang['error_downloadxml'] = 'A problem occurred downloading the XML FILE: %s';
$lang['error_request_problem'] = 'A problem occurred communicating with the module server';
$lang['error_searchterm'] = 'Please specify something valid to search for';
$lang['search_noresults'] = 'Search succeeded but no results matched the expresssion';
$lang['advancedsearch_help'] = 'Specify words to include or exclude from the search using a + or -, surround exact phrases with quotes.  i.e:  +red -apple +&quot;some text&quot;';
$lang['search_results'] = 'Search Results';
$lang['prompt_advancedsearch'] = 'Advanced Search';
$lang['search_input'] = 'Search Input';
$lang['searchterm'] = 'Search Term';
$lang['search'] = 'Keres&eacute;s';
$lang['available_updates'] = 'Modules Available for Update; Before upgrading, please read the releasenotes in the Forge and create a backup of the website.';
$lang['all_modules_up_to_date'] = 'There are no newer modules available in the repository';
$lang['error_module_object'] = 'Error: could not get an instance of the %s module';
$lang['error_nomatchingmodules'] = 'Error: could not find any matching modules in the repository';
$lang['error_nomodules'] = 'Error: could not retrieve list of installed modules';
$lang['upgrade_available'] = 'Newer version available (%s), you have (%s)';
$lang['newversions'] = 'Available Upgrades';
$lang['notice_depends'] = '%s has unresolved dependencies. In order to install this module the following actions must occur';
$lang['install_submit'] = 'Install';
$lang['depend_upgrade'] = 'Module %s will be upgraded to version %s.';
$lang['depend_install'] = 'Module %s (version %s) will be installed.';
$lang['depend_activate'] = 'Module %s will be activated.';
$lang['action_activated'] = 'Module %s has been activated.';
$lang['action_installed'] = 'Module %s has been installed with the following message(s): %s';
$lang['action_upgraded'] = 'Module %s has been upgraded';
$lang['title_installation_complete'] = 'Telep&iacute;t&eacute;si folyamat befelyeződ&ouml;tt!';
$lang['install_with_deps'] = 'Evaluate all Dependencies and Install';
$lang['msg_nodependencies'] = 'This file has not listed any dependencies';
$lang['error_upgrade'] = 'Upgrade of module %s failed!';
$lang['error_skipping'] = 'Skipping install/upgrade of %s due to errors in setting up dependencies. Please see message above, and try again.';
$lang['dependstxt'] = 'F&uuml;ggős&eacute;gek';
$lang['use_at_your_own_risk'] = 'Saj&aacute;t felelőss&eacute;gedre haszn&aacute;ld';
$lang['compatibility_disclaimer'] = 'Az itt felsorolt modulokat r&eacute;szben CMSMS fejlesztők, r&eacute;szben f&uuml;ggetlen k&uuml;lsős&ouml;k k&eacute;sz&iacute;tik. Nincs arra garancia, hogy az el&eacute;rhető modulok műk&ouml;dők&eacute;pesek, le vannak tesztelve, &eacute;s arra sem, hogy kompatibilisek a rendszereddel.  Olvasd el a modul s&uacute;g&oacute;j&aacute;t mielőtt megk&iacute;s&eacute;rled a telep&iacute;t&eacute;s&eacute;t.';
$lang['notice'] = 'Megjegyz&eacute;s';
$lang['general_notice'] = 'Az itt felsorolt verzi&oacute;k a rep&oacute; legfrissebb XML-jeit mutatj&aacute;k (&aacute;ltal&aacute;ban a CMS %s rep&oacute;t).  Ez nem mindig esik egybe a modulok legfrissebb v&aacute;ltozat&aacute;val. N&eacute;zd meg a kiv&aacute;laszott rep&oacute;ban az el&eacute;rhető f&aacute;jl release-eket. Ha az alap&eacute;rtelmezett rep&oacute;t haszn&aacute;lod, akkor ezt &uacute;gy teheted meg, hogy be&iacute;rod a keresett nevet a kereső dobozba (%s), majd r&aacute;kattintasz a &#039;File&#039;-ra.';
$lang['incompatible'] = 'Nem kompatibilis';
$lang['prompt_settings'] = 'Be&aacute;ll&iacute;t&aacute;sok';
$lang['prompt_otheroptions'] = 'Egy&eacute;b opci&oacute;k';
$lang['reset'] = 'Vissza&aacute;ll&iacute;t&aacute;s';
$lang['error_permissions'] = '<strong><em>Figyelem:</em></strong> A modul telep&iacute;t&eacute;s&eacute;hez nincs megfelelő jogosults&aacute;g a k&ouml;nyvt&aacute;ron.  Lehet, hogy a PHP Safe m&oacute;ddal is gondok lesznek.  K&eacute;rlek, győződj meg r&oacute;la, hogy a safe m&oacute;d ki van kapcsolva &eacute;s hogy a filerendszer jogosults&aacute;gok megfelelőek.';
$lang['error_minimumrepository'] = 'A repository verzi&oacute;ja nem kompatibilis ezzel a modul manager-rel';
$lang['prompt_reseturl'] = 'Az URL reset-el&eacute;se az előre be&aacute;ll&iacute;tott &eacute;rt&eacute;kre';
$lang['prompt_resetcache'] = 'A repository lok&aacute;lis cache t&ouml;rl&eacute;se';
$lang['prompt_dl_chunksize'] = 'Let&ouml;lt&eacute;si egys&eacute;g m&eacute;rete (Kb)';
$lang['text_dl_chunksize'] = 'A maxim&aacute;lis mennyis&eacute;gű adat, amelyet egy egys&eacute;gben let&ouml;lt&uuml;nk a szerveről (modul install&aacute;l&aacute;sakor)';
$lang['error_nofilesize'] = 'Nincs megadva a file-m&eacute;ret param&eacute;ter';
$lang['error_nofilename'] = 'Nincs megadva a file-n&eacute;v param&eacute;ter';
$lang['error_unsatisfiable_dependency'] = 'Cannot find the required module &quot;%s&quot; (version %s or later) in the repository. It is directly required by %s; this could indicate a problem with the version of this module in the repository. Please contact the module&#039;s author. Aborting.';
$lang['error_checksum'] = 'Jaj, hiba van a m&aacute;trixban. Ez val&oacute;sz&iacute;nűleg amiatt van, hogy megs&eacute;r&uuml;lt n&eacute;h&aacute;ny file a modulban (lehet, hogy a felt&ouml;lt&eacute;skor, vagy a te let&ouml;lt&eacute;sed k&ouml;zben).';
$lang['cantdownload'] = 'Nem lehet let&ouml;lteni';
$lang['download'] = 'Let&ouml;lt&eacute;s';
$lang['error_moduleinstallfailed'] = 'A modul telep&iacute;t&eacute;se nem siker&uuml;lt';
$lang['error_connectnomodules'] = 'Hab&aacute;r siker&uuml;lt el&eacute;rni a megadott modul gyűjtem&eacute;nyt, &uacute;gy tűnik, hogy nincs m&eacute;g benne egy modul sem.';
$lang['submit'] = 'Elk&uuml;ld';
$lang['text_repository_url'] = 'Az URL-t az al&aacute;bbi form&aacute;ban add meg http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'Modul gyűjtem&eacute;ny URL-je:';
$lang['title_installation'] = 'Telep&iacute;t&eacute;s';
$lang['availmodules'] = 'El&eacute;rhető modulok';
$lang['preferences'] = 'Jellemzők';
$lang['preferencessaved'] = 'A preferenci&aacute;kat mentett&uuml;k';
$lang['repositorycount'] = 'A gyűjtem&eacute;nyben tal&aacute;lhat&oacute; modulok';
$lang['instcount'] = 'Aktu&aacute;lisan install&aacute;lt modulok';
$lang['availablemodules'] = 'Az aktu&aacute;lis modulok &aacute;llapot&aacute;r&oacute;l inform&aacute;ci&oacute; el&eacute;rhető az aktu&aacute;lis gyűjtem&eacute;nyből';
$lang['time_warning'] = 'Kettő vagy t&ouml;bb feladat v&aacute;r teljes&iacute;t&eacute;sre. Felh&iacute;vom a figyelmed, hogy a telep&iacute;t&eacute;s beletelik n&eacute;h&aacute;ny percbe. K&eacute;rlek l&eacute;gy t&uuml;relmes!';
$lang['helptxt'] = 'S&uacute;g&oacute;';
$lang['abouttxt'] = 'N&eacute;vjegy';
$lang['xmltext'] = 'XML F&aacute;jl';
$lang['nametext'] = 'Modul N&eacute;v';
$lang['mod_name_ver'] = '%s verzi&oacute; %s';
$lang['unknown'] = 'Ismeretlen';
$lang['vertext'] = 'Verzi&oacute;';
$lang['sizetext'] = 'M&eacute;ret (Kilobyte-ban)';
$lang['statustext'] = '&Aacute;llapot/Művelet';
$lang['uptodate'] = 'Install&aacute;lt';
$lang['install'] = 'install&aacute;l&aacute;s';
$lang['newerversion'] = '&Uacute;jabb verzi&oacute; install&aacute;lva';
$lang['onlynewesttext'] = 'Csak a leg&uacute;jabb verzi&oacute; mutat&aacute;sa';
$lang['upgrade'] = 'Friss&iacute;t&eacute;s';
$lang['error_norepositoryurl'] = 'A Modul Gyűjtem&eacute;ny URL-je nincs megadva';
$lang['friendlyname'] = 'Modul kezelő';
$lang['postinstall'] = 'Install&aacute;l&aacute;s ut&aacute;ni &uuml;zenet, (pl. Bizonyosodj meg r&oacute;la, hogy megadod a &quot;&quot; jogosults&aacute;got ezen modul haszn&aacute;lat&aacute;hoz!)';
$lang['postuninstall'] = 'A Modul Manager-t elt&aacute;vol&iacute;tottuk. Ezut&aacute;n nem lehets&eacute;ges h&aacute;l&oacute;zati modul gyűjtem&eacute;nyek haszn&aacute;lata. Lok&aacute;lisan az&eacute;rt m&eacute;g lehet modulokat install&aacute;lni.';
$lang['really_uninstall'] = 'Val&oacute;ban? Biztosan el akarod t&aacute;vol&iacute;tani ezt a szuper kis modult?';
$lang['uninstalled'] = 'A modul elt&aacute;vol&iacute;t&aacute;sa megt&ouml;rt&eacute;nt.';
$lang['installed'] = 'Modul (verzi&oacute; %s) install&aacute;lva.';
$lang['upgraded'] = 'A modult friss&iacute;tett&uuml;k %s verzi&oacute;ra.';
$lang['moddescription'] = 'ModuleRepository kliens. Ez a modul lehetős&eacute;get ad t&aacute;voli g&eacute;peken (h&aacute;l&oacute;zaton levő) modulok megn&eacute;z&eacute;s&eacute;re &eacute;s install&aacute;l&aacute;s&aacute;ra an&eacute;lk&uuml;l, hogy k&uuml;l&ouml;n ftp-zni &eacute;s csomagolgatni k&eacute;ne őket. A modul le&iacute;r&oacute; XML file-t t&ouml;lti le SOAP seg&iacute;ts&eacute;g&eacute;vel, ellenőrzi a file s&eacute;rtetlens&eacute;g&eacute;t &eacute;s azt&aacute;n automatikusan kicsomagolja.';
$lang['back_to_module_manager'] = '&laquo; Vissza a Module Manager-hez';
$lang['error'] = 'Hiba!';
$lang['admindescription'] = 'H&aacute;l&oacute;zaton tal&aacute;lhat&oacute; modulok install&aacute;l&aacute;s&aacute;ra szolg&aacute;l&oacute; eszk&ouml;z.';
$lang['accessdenied'] = 'A hozz&aacute;f&eacute;r&eacute;s megtagadva. K&eacute;rem, ellenőrizze a jogosults&aacute;gokat.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Site Admin&#039; --> &#039;Global Settings&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['qca'] = 'P0-132276779-1318620117065';
$lang['utma'] = '156861353.392447823.1321189053.1321249860.1321286414.9';
$lang['utmz'] = '156861353.1321189053.1.1.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/project/list/module';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>