<?php
$lang['phpinfo'] = 'Zobrazit informace o PHP';
$lang['mod_security'] = 'Apache Mod Security';
$lang['test_check_db_drivers'] = 'ovladače datab&aacute;ze';
$lang['test_check_db_drivers_failed'] = 'Nebyly nalezeny ovladače datab&aacute;ze';
$lang['test_check_register_globals'] = 'Kontrola register_globals';
$lang['test_check_register_globals_failed'] = 'V nastaven&iacute; PHP je aktivov&aacute;na volba register_globals. Z bezpečnostn&iacute;ch důvodů pros&iacute;m pož&aacute;dejte o vypnut&iacute; t&eacute;to volby.';
$lang['test_check_disable_functions'] = 'Kontrola zak&aacute;zan&yacute;ch funkc&iacute; v PHP';
$lang['test_check_disable_functions_failed'] = 'Toto je seznam funkc&iacute; zak&aacute;zan&yacute;ch na va&scaron;em serveru.';
$lang['install_admin_locale'] = 'Locale to use for various default date handling functions, etc. Leaving this blank in multilingual environment or for use server&#039;s default';
$lang['install_default_encoding'] = 'In almost all cases, default_encoding should be utf-8. If you&#039;d like this to be different, change this but keep in mind, however, that the languages translations are all in utf-8';
$lang['installer_done'] = '[done]';
$lang['installer_failed'] = '[failed]';
$lang['create_permission'] = 'Create permission ...';
$lang['add_column_sql'] = 'Adding column to %s table ...';
$lang['update_table_sql'] = 'Update %s table ...';
$lang['installing_module'] = 'Installing %s module ...';
$lang['updating_schema_version'] = 'Updating schema version %s ...';
$lang['upgrade_config'] = 'Upgrading config.php';
$lang['upgrade_config_info'] = 'config upgrade';
$lang['upgrade_failed_again'] = 'One or more upgrades have failed. Please correct the problem and click the button below to recheck.';
$lang['upgrade_cache_dirs'] = 'Cleaning cache dirs';
$lang['cannot_clean_cache_dirs'] = 'Cannot cleaning cache dirs!';
$lang['upgrade_schema'] = 'Upgrade schema';
$lang['need_upgrade_schema'] = 'CMS is in need of an upgrade.<br />You are now running schema version %s and you need to be upgraded to version %s';
$lang['schema_ok'] = 'Now the CMS database is up to date using schema version %s';
$lang['noneed_upgrade_schema'] = 'The CMS database is up to date using schema version %s';
$lang['upgrade_modules'] = 'Upgrade modules';
$lang['noneed_upgrade_modules'] = 'The core modules are up to date';
$lang['upgrade_sql_module_from_to'] = 'Upgrading SQL of &quot;%s&quot; module from %s to %s ...';
$lang['upgrade_event_module_from_to'] = 'Upgrading Events of &quot;%s&quot; module from %s to %s ...';
$lang['sitedown_not_removed'] = 'Could not remove the tmp/cache/SITEDOWN file. Please remove manually or you will continue to show a &quot;Site Down for Maintainence&quot; message on your site';
$lang['upgrade_ok'] = 'Please review config.php, modify any new settings as necessary and then reset it&#039;s permissions back to a locked state. You should also check that all of your modules are up to date, by going to the Extensions -> Modules page and looking for any listed as &quot;Needs Upgrade&quot;';
$lang['upgrade_complete'] = 'Upgrade process complete';
$lang['upgrade_end'] = 'CMS is up to date. Please click %s to go to your CMS site or you can %s.';
$lang['here'] = 'here';
$lang['go_to_admin'] = 'go to the Admin Panel';
$lang['errorfilenot'] = 'File string not found!';
$lang['errorfilenotwritable'] = 'File not writable!';
$lang['nofiles'] = 'This resource not exist!';
$lang['is_directory'] = 'This resource is a directory!';
$lang['is_readable_false'] = 'This resource is not readable!';
$lang['checksum_match'] = 'Checksum match!';
$lang['checksum_not_match'] = 'Checksum not match!';
$lang['not_checksum'] = 'No checksum retrieve!';
$lang['format_datetime'] = '%c';
$lang['upload_err_ini_size'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini!';
$lang['upload_err_form_size'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
$lang['upload_err_partial'] = 'The uploaded file was only partially uploaded.';
$lang['upload_err_no_file'] = 'No file was uploaded.';
$lang['upload_err_no_tmp_dir'] = 'Missing a temporary folder.';
$lang['upload_err_cant_write'] = 'Failed to write file to disk.';
$lang['upload_err_extension'] = 'File upload stopped by extension.';
$lang['upload_err_empty'] = 'File has size zero';
$lang['upload_err_unknown'] = 'File upload error unknown.';
$lang['function_file_uploads_off'] = 'file_uploads is off in your php!';
$lang['upload_file_no_readable'] = 'File upload no readable!';
$lang['upload_file_multiple'] = 'Multiple file uploads not allowed!';
$lang['test_check_magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie operations';
$lang['test_check_magic_quotes_gpc_failed'] = 'When magic_quotes are on, all single-quote, double quote and backslash are escaped with a backslash automatically. You can to have problems in save templates.';
$lang['test_check_magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['test_check_magic_quotes_runtime_failed'] = 'When magic_quotes are on, most functions that return data from any sort of external source including databases and text files will have quotes escaped with a backslash. You can to have problems.';
$lang['install_admin_checksum'] = 'Check your installation';
$lang['upgrade_admin_checksum'] = 'Check your system upgrading';
$lang['checksum'] = 'Checksum test';
$lang['checksum_file'] = 'Checksum file';
$lang['install_test_checksum'] = 'You can validate the integrity of your CMS files by comparing against original CMS checksum. It can assist in finding problems with uploads.';
$lang['checksum_passed'] = 'All checksums match!';
$lang['test_check_open_basedir'] = 'Check for PHP Open Basedir';
$lang['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction.';
$lang['unlimited'] = 'Unlimited';
$lang['test_open_basedir_session_save_path'] = 'Open basedir restrictions appear to be in effect. If you have SESSION problems and ini_set works, you can try to enable session by cookies adding: ini_set(&#039;session.use_only_cookies&#039;, 1);  to top of include.php';
$lang['install_warn_db_createtables'] = 'Normally this field should be checked at all times.  Use caution when disabling this feature';
$lang['install_admin_tablesnotcreated'] = 'Process complete. The installation process has completed, at your request database tables were not created. However, the config file has been reset and all pre-installation tests have passed. Thank you, and here is your';
$lang['info_create_dir_and_file'] = 'The HTTP Process owner cannot create a file inside a directory that it owns. This probably means that safe mode is enabled in some way. Many functions inside CMS made simple will not operate properly without this ability. Continuing is not possible.';
$lang['test_create_dir_and_file'] = 'Checking if the httpd process can create a file inside of a directory it created.';
$lang['cms_site'] = 'CMS Site';
$lang['or_greater'] = 'Or greater';
$lang['sitename'] = 'N&aacute;zev str&aacute;nek';
$lang['warning_safe_mode'] = '<strong><em>VAROV&Aacute;N&Iacute;:</em></strong> PHP Safe mode je povolen.  D&iacute;ky tomuto nastaven&iacute; nebudete moci nahr&aacute;vat soubory přes webov&eacute; rozhran&iacute;, včetně obr&aacute;zků, t&eacute;mat a XML bal&iacute;čků souborů. Doporučujeme kontaktovat va&scaron;eho spr&aacute;vce serveru (webhosting) a pož&aacute;dat ho o zru&scaron;en&iacute; safe m&oacute;du.';
$lang['test'] = 'Test';
$lang['results'] = 'V&yacute;sledky';
$lang['untested'] = 'Netestov&aacute;no';
$lang['owner'] = 'Vlastn&iacute;k';
$lang['permissions'] = 'Opr&aacute;vněn&iacute;';
$lang['off'] = 'Vyp';
$lang['on'] = 'Zap';
$lang['permission_information'] = 'Informace o opr&aacute;vněn&iacute;ch';
$lang['server_os'] = 'Operačn&iacute; syst&eacute;m serveru';
$lang['server_api'] = 'API serveru';
$lang['server_software'] = 'Software serveru';
$lang['server_information'] = 'Informace o serveru';
$lang['session_save_path'] = 'Cesta k &uacute;loži&scaron;ti sessions (sessions save path)';
$lang['max_execution_time'] = 'Maxim&aacute;ln&iacute; doba prov&aacute;děn&iacute; (Maximum execution time)';
$lang['gd_version'] = 'Verze GD';
$lang['upload_max_filesize'] = 'Maxim&aacute;ln&iacute; velikost nahr&aacute;van&eacute;ho souboru (Maximum upload size)';
$lang['post_max_size'] = 'Maxim&aacute;ln&iacute; veilkost dat, zas&iacute;lan&yacute;ch metodou POST (Maximum post size)';
$lang['memory_limit'] = 'Paměťov&yacute; limit v PHP';
$lang['server_db_type'] = 'Datab&aacute;zov&yacute; server';
$lang['server_db_version'] = 'Verez datab&aacute;zov&eacute;ho serveru';
$lang['phpversion'] = 'Verze PHP';
$lang['safe_mode'] = 'PHP Safe Mode';
$lang['php_information'] = 'Informace PHP';
$lang['cms_install_information'] = 'Informace o instalaci CMS';
$lang['cms_version'] = 'Verze CMS';
$lang['systeminfo_copy_paste'] = 'Pros&iacute;m zkop&iacute;rujte tyto informace a vložte je do sv&eacute;ho dotazu ve f&oacute;ru';
$lang['help_systeminformation'] = 'Informace zobrazen&eacute; n&iacute;že poch&aacute;zej&iacute; z mnoha zdrojů . Umožňuj&iacute; l&eacute;pe zjistit př&iacute;činu probl&eacute;mů s Va&scaron;&iacute; instalac&iacute; CMS Made Simple.';
$lang['systeminfo'] = 'Informace o syst&eacute;mu';
$lang['systeminfodescription'] = 'Zobraz&iacute; informace, jež mohou b&yacute;t užitečn&eacute; při diagnostice probl&eacute;mů';
$lang['error'] = 'Chyba';
$lang['new_version_available'] = '<em>Pozn&aacute;mka:</em> Je dostupn&aacute; nov&aacute; verze CMS Made Simple. Pros&iacute;m informujte administr&aacute;tora.';
$lang['info_urlcheckversion'] = 'Pokud je adresa nastavena na &quot;none&quot;, kontrola nebude prov&aacute;děna.<br/>Pokud nen&iacute; vložen ž&aacute;dn&yacute; řetězec, bude použita v&yacute;choz&iacute; adresa.';
$lang['urlcheckversion'] = 'Adresa, pomoc&iacute; kter&eacute; bude kontrolov&aacute;na dostupnost nov&yacute;ch verz&iacute; CMSMS.';
$lang['read'] = 'Čten&iacute;';
$lang['write'] = 'Zapisov&aacute;n&iacute;';
$lang['execute'] = 'Spou&scaron;těn&iacute;';
$lang['group'] = 'Skupina';
$lang['other'] = 'Jin&eacute;';
$lang['global_umask'] = 'Maska vytv&aacute;řen&iacute; souborů (umask)';
$lang['errorcantcreatefile'] = 'Nelze vytvořit soubor (probl&eacute;m s opr&aacute;vněn&iacute;mi?)';
$lang['add'] = 'Přidat';
$lang['about'] = 'Informace o';
$lang['action'] = 'Akce';
$lang['actionstatus'] = 'Akce/Stav';
$lang['active'] = 'Aktivn&iacute;';
$lang['cantremove'] = 'Nelze odebrat';
$lang['changepermissions'] = 'Změnit opr&aacute;vněn&iacute;';
$lang['changepermissionsconfirm'] = 'USE CAUTION\n\nThis action will attempt to ensure that all of the files making up the module are writable by the web server.\nAre you sure you want to continue?';
$lang['success'] = 'Success';
$lang['advanced'] = 'Advanced';
$lang['back'] = 'Zpět do menu';
$lang['cancel'] = 'Zru&scaron;it';
$lang['cantchmodfiles'] = 'Couldn&#039;t change permissions on some files';
$lang['cantremovefiles'] = 'Probl&eacute;m s odstraňov&aacute;n&iacute;m souborů (Opr&aacute;vněn&iacute;?)';
$lang['create'] = 'Vytvořit';
$lang['database'] = 'Datab&aacute;ze';
$lang['databaseprefix'] = 'Prefix datab&aacute;ze';
$lang['databasetype'] = 'Typ Datab&aacute;ze';
$lang['date'] = 'Date';
$lang['default'] = 'V&yacute;choz&iacute;';
$lang['delete'] = 'Smazat';
$lang['deleteconfirm'] = 'Jste si jisti, že chcete vymazat - %s - ?';
$lang['description'] = 'Popis';
$lang['directoryexists'] = 'Tento adres&aacute;ř již existuje.';
$lang['down'] = 'Dolů';
$lang['edit'] = 'Upravit';
$lang['email'] = 'E-mailov&aacute; adresa';
$lang['errordeletingfile'] = 'Nelze smazat soubor. Probl&eacute;m s opr&aacute;vněn&iacute;m?';
$lang['errordirectorynotwritable'] = 'No permission to write in directory.  This could be caused by file permissions and ownership.  Safe mode may also be in effect.';
$lang['cachenotwritable'] = 'Cache folder is not writable. Clearing cache will not work. Please make the tmp/cache folder have full read/write/execute permissions (chmod 777).  You may also have to disable safe mode.';
$lang['modulesnotwritable'] = 'The modules folder is not writable, if you would like to install modules by uploading an XML file you need to make the modules folder have full read/write/execute permissions (chmod 777).  Safe mode may also be in effect.';
$lang['false'] = 'False';
$lang['settrue'] = 'Set True';
$lang['filename'] = 'Jm&eacute;no souboru';
$lang['filesize'] = 'Velikost souboru';
$lang['help'] = 'N&aacute;pověda';
$lang['language'] = 'Jazyk';
$lang['lastname'] = 'Př&iacute;jmen&iacute;';
$lang['name'] = 'Jm&eacute;no';
$lang['password'] = 'Heslo';
$lang['passwordagain'] = 'Heslo (znovu)';
$lang['remove'] = 'Odstranit';
$lang['saveconfig'] = 'Uložit config';
$lang['true'] = 'True';
$lang['setfalse'] = 'Set False';
$lang['type'] = 'Type';
$lang['typenotvalid'] = 'Type is not valid';
$lang['unknown'] = 'Unknown';
$lang['user'] = 'Uživatel';
$lang['userdefinedtags'] = 'Uživatelsky definovan&eacute; tagy';
$lang['usermanagement'] = 'User Management';
$lang['username'] = 'Uživatelsk&eacute; jm&eacute;no';
$lang['usernameincorrect'] = 'Uživatelsk&eacute; jm&eacute;no nebo heslo neplatn&eacute;';
$lang['version'] = 'Verze';
$lang['install_title'] = 'CMS Made Simple Install (step %s)';
$lang['install_system'] = 'Install System';
$lang['install_thanks'] = 'Děkujeme za instalaci CMS Made Simple';
$lang['upgrade_title'] = 'CMS Made Simple Upgrade (step %s)';
$lang['upgrade_system'] = 'Upgrade System';
$lang['upgrade_thanks'] = 'Thanks for upgrading CMS Made Simple to';
$lang['install_please_read'] = 'Please read the <a href="http://wiki.cmsmadesimple.org/index.php/User_Handbook/Installation/Troubleshooting">Installation Troubleshooting</a> page in the CMS Made Simple Documentation Wiki.';
$lang['install_checking'] = 'Kontroluji opr&aacute;vněn&iacute; a PHP nastaven&iacute;';
$lang['install_test'] = 'Test';
$lang['install_result'] = 'V&yacute;sledek';
$lang['install_required_settings'] = 'Požadovan&eacute; nastaven&iacute;';
$lang['install_recommended_settings'] = 'Doporučen&eacute; nastaven&iacute;';
$lang['install_you_have'] = 'M&aacute;te';
$lang['install_legend'] = 'Legend';
$lang['install_symbol'] = 'Symbol';
$lang['install_definition'] = 'Definice';
$lang['install_value_passed'] = 'A required test passed';
$lang['install_value_failed'] = 'A required test failed';
$lang['install_value_required'] = 'A setting is below a required minimum value';
$lang['install_value_recommended'] = 'A setting is above the required value, but below the recommended value<br />or... A capability that <em>may</em> be required for some optional functionality is unavailable';
$lang['install_value_exceed'] = 'A setting meets or exceeds the recommended threshhold<br />or... A capability that <em>may</em> be required for some optional functionality is available';
$lang['install_test_failed'] = 'One or more tests have failed. You can still install the system but some functions may not work correctly.<br />Please try to correct the situation and click &quot;Try Again&quot;, or click the Continue button.';
$lang['install_test_passed'] = 'All tests passed (at least at a minimum level). Please click the Continue button.';
$lang['install_failed_again'] = 'One or more tests have failed. Please correct the problem and click the button below to recheck.';
$lang['install_try_again'] = 'Zkusit znovu';
$lang['install_continue'] = 'Pokračovat';
$lang['failure'] = 'Failure';
$lang['caution'] = 'Caution';
$lang['install_admin_umask'] = 'Test File Creation Mask';
$lang['install_test_umask'] = 'Please click Test button for check the umask entered ...';
$lang['test_umask_text'] = 'umask (abbreviated from user file creation mode mask) is a function in POSIX environments which affects the default file system mode for newly created files and directories of the current process. It controls which of the file permissions will not be set for any newly created file.';
$lang['test_check_umask'] = 'Result test on file created in';
$lang['test_umask_not_given'] = 'Umask not given';
$lang['test_check_umask_failed'] = 'Test umask failed';
$lang['test_username_not_given'] = 'Nezad&aacute;no uživatelsk&eacute; jm&eacute;no!';
$lang['test_username_illegal'] = 'Uživatelsk&eacute; jm&eacute;no obsahuje zak&aacute;zan&eacute; znaky!';
$lang['test_not_both_passwd'] = 'Jedno z hesel je pr&aacute;zdn&eacute;!';
$lang['test_passwd_not_match'] = 'Hesla se neschoduj&iacute;!';
$lang['test_email_accountinfo'] = 'Bylo vybr&aacute;no odesl&aacute;n&iacute; informac&iacute; o &uacute;čtu na e-mail, ale e-mail nebyl zad&aacute;n!';
$lang['test_database_prefix'] = 'Prefix datab&aacute;ze obsahuje nepovolen&eacute; znaky';
$lang['test_no_dbms'] = 'No dbms selected!';
$lang['test_could_not_connect_db'] = 'Nepodařilo se připojit k datab&aacute;zi. Zkontrolujte pros&iacute;m zda uživatelsk&eacute; jm&eacute;no a heslo jsou spr&aacute;vn&eacute; a že uživatel m&aacute; opr&aacute;vněn&yacute; př&iacute;stup do t&eacute;to datab&aacute;ze.';
$lang['test_could_not_drop_table'] = 'Nepodařilo se zahodit tabulku. Zkontrolujte zda uživatel m&aacute; pr&aacute;va na zahazov&aacute;n&iacute; tabulek v t&eacute;to datab&aacute;zi.';
$lang['test_could_not_create_table'] = 'Nepodařilo se vytvořit tabulku. Zkontrolujte zda uživatel m&aacute; pr&aacute;va na vytv&aacute;řen&iacute; tabulek v t&eacute;to datab&aacute;zi.';
$lang['test_check_php'] = 'Kontroluji PHP verzi 4.3+';
$lang['test_min_recommend'] = '(min %s, doporučeno %s)';
$lang['test_min_recommend_plus'] = '(min %s, recommend %s+)';
$lang['test_requires_php_version'] = 'CMS Made Simple potřebuje php verzi 4.3 a nebo vy&scaron;&scaron;&iacute; (vy m&aacute;te %s), ale PHP %s nebo vy&scaron;&scaron;&iacute; je doporučeno pro zaji&scaron;těn&iacute; maxim&aacute;ln&iacute; kompatibility s moduly třet&iacute;ch stran';
$lang['test_check_md5_func'] = 'Kontroluji md5 funkci';
$lang['test_check_safe_mode'] = 'Kontroluji safe mod';
$lang['test_check_safe_mode_failed'] = 'PHP safe mode může působit probl&eacute;m s nahr&aacute;v&aacute;n&iacute;m souborů a s někter&yacute;mi funkcemi. V&scaron;e z&aacute;lež&iacute; na tom, jak hodně striktn&iacute; je nastaven&iacute; na Va&scaron;em serveru.';
$lang['test_check_tokenizer'] = 'Kontroluji tokenizer functionkce';
$lang['test_check_tokenizer_failed'] = 'Bez podpory tokenizeru se může st&aacute;t, že v&scaron;echny str&aacute;nky se budou zobrazovat jako čistě b&iacute;l&eacute;. Doporučujeme, aby jste jej nainstalovali, ale Va&scaron;e str&aacute;nky můžou fungovat tak&eacute; bez něj.';
$lang['test_check_gd'] = 'Kontroluji GD library';
$lang['test_check_gd_failed'] = 'GD library je nezbytn&yacute; pro funkci někter&yacute;ch modulů.';
$lang['test_check_write'] = 'Kontroluji zapisovac&iacute; pr&aacute;va na';
$lang['test_may_not_exist'] = 'This file may not exist yet. If it does not, you should create an empty file with this name. Please also ensure that this file writable by the web server process.';
$lang['could_not_retrieve_a_value'] = 'Could not retrieve a value.... passing anyways.';
$lang['displaying_the_value_originally'] = '<br />Displaying the value originally set in the config file (this may not be accurate).';
$lang['test_check_xml_func'] = 'Checking for basic XML (expat) support';
$lang['test_check_xml_failed'] = 'XML support is not compiled into your php install. You can still use the system, but will not be able to use any of the remote module installation functions.';
$lang['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['test_remote_url'] = 'Test for remote URL';
$lang['test_remote_url_failed'] = 'You will probably not be able to open a file on a remote web server.';
$lang['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['remote_connection_timeout'] = 'Connection Timed Out!';
$lang['search_string_find'] = 'Connection ok!';
$lang['connection_failed'] = 'Connection failed!';
$lang['remote_response_ok'] = 'Remote response: ok!';
$lang['remote_response_404'] = 'Remote response: not found!';
$lang['remote_response_error'] = 'Remote response: error!';
$lang['test_check_file_upload'] = 'Checking file uploads';
$lang['test_check_file_failed'] = 'When file uploads are disabled you will not be able to use any of the file uploading facilities included in CMS Made Simple. If possible, this restriction should be lifted by your system admin to properly use all file management features of the system. Proceed with caution.';
$lang['test_check_memory'] = 'Kontroluji PHP memory limit';
$lang['test_check_memory_failed'] = 'You may not have enough memory to run CMSMS correctly, or with all of your desired addons. If possible, you should try to get your system admin to raise this value. Proceed with caution.';
$lang['test_check_time_limit'] = 'Kontroluji PHP time limit';
$lang['test_check_time_limit_failed'] = 'Number of seconds a script is allowed to run. If this is reached, the script returns a fatal error.';
$lang['test_check_post_max'] = 'Checking max post size';
$lang['test_check_post_max_failed'] = 'You will probably not be able to submit (larger) data. Please be aware of this restriction.';
$lang['test_check_upload_max'] = 'Checking max upload file size';
$lang['test_check_upload_max_failed'] = 'You will probably not be able to upload (larger) files using the included file management functions. Please be aware of this restriction.';
$lang['test_check_writable'] = 'Checking if %s is writable';
$lang['test_check_upload_failed'] = 'The uploads folder is not writable. You can still install the system, but you will not be able to upload files via the Admin Panel.';
$lang['test_check_images_failed'] = 'The images folder is not writable. You can still install the system, but you will not be able to upload and used images via the Admin Panel.';
$lang['test_check_modules_failed'] = 'The modules folder is not writable. You can still install the system, but you will not be able to upload modules via the Admin Panel.';
$lang['test_check_file_get_contents'] = 'Checking for file_get_contents';
$lang['test_check_file_get_contents_failed'] = 'The file_get_contents function was added in PHP 4.3 and although a workaround has been added that should allow most functionality that uses this function to work properly in PHP 4.2, it may be advisable to upgrade to PHP 4.3 or greater.';
$lang['test_check_session_save_path'] = 'Checking if session.save_path is writable';
$lang['test_empty_session_save_path'] = 'Your session.save_path is empty. PHP will use the temporary directory of your SO. If you have SESSION problems and ini_set works you can try to enable session cookies adding: ini_set(&#039;session.use_only_cookies&#039;, 1);  to top of include.php';
$lang['test_check_session_save_path_failed'] = 'Your session.save_path is &quot;%s&quot;. Not having this as writable may make logins to the Admin Panel not work. You may want to look into making this path writable if you have trouble logging into the Admin Panel. This test may fail if safe_mode is enabled (see below).';
$lang['test_check_ini_set'] = 'Kontrola, zda je mono použ&iacute;vat ini_set';
$lang['test_check_ini_set_failed'] = 'Ačkoliv možnost měnit nastaven&iacute; v souboru php.ini nen&iacute; povinn&aacute;, někter&aacute; roz&scaron;&iacute;řen&iacute; mohou tato nastaven&iacute; potřebovat (např. pro možnost nahr&aacute;vat vět&scaron;&iacute; soubory). Tento test může selhat, pokud je povolen safe_mode v php.';
$lang['install_admin_header'] = 'Informace o administr&aacute;torsk&eacute;m &uacute;čtu';
$lang['install_admin_info'] = 'Vyberte uživatelsk&eacute; jm&eacute;no, heslo a e-mailovou adresu pro V&aacute;&scaron; administr&aacute;torsk&yacute; &uacute;čet. Tyto &uacute;daje si pros&iacute;m poznamenejte, bez nich se nen&iacute; možno přihl&aacute;sit do administračn&iacute;ho rozhran&iacute;.';
$lang['install_admin_email'] = 'E-mailov&aacute; adresa';
$lang['install_admin_email_info'] = 'Odeslat informace o vytv&aacute;řen&eacute;m &uacute;čtu e-mailem.';
$lang['install_admin_email_note'] = '<strong>Pozn&aacute;mka:</strong> Tato funkce použ&iacute;v&aacute; funkci mail v php. Pokud neobdrž&iacute;te tento e-mail, může to znamenat, že server nen&iacute; spr&aacute;vně nakonfigurov&aacute;n a měli byste kontaktovat administr&aacute;tora (podporu) hostingu.';
$lang['install_admin_sitename'] = 'Toto je jm&eacute;no Va&scaron;&iacute; str&aacute;nky. Bude použito na různ&yacute;ch m&iacute;stech v&yacute;choz&iacute;ch &scaron;ablon a kdekoliv, kam zad&aacute;te tag {sitename}.';
$lang['install_admin_db'] = 'Informace o datab&aacute;zi';
$lang['install_admin_db_info'] = '<p>Ujistěte se, že jste vytvořili datab&aacute;zi a přidělili uživateli, kter&eacute;ho hodl&aacute;te použ&iacute;vat.</p>
<p>Pro MySQL postupujte n&aacute;sleduj&iacute;c&iacute;m způsobem:</p>
<p>Přihla&scaron;te se do MySQL z konzole a zadejte n&aacute;sleduj&iacute;c&iacute; př&iacute;kazy:</p>
<ol>
<li>create database cms; (můžete použ&iacute;t jak&eacute;koliv jm&eacute;no bez diakritiky a mezer)</li>
<li>grant all privileges on cms.* to cms_user@localhost identified by &#039;cms_pass&#039;; (kde cms_user je jm&eacute;no uživatele a cms_pass je heslo, jež hodl&aacute;te použ&iacute;vat)</li>
</ol>
<p>Ve&scaron;ker&eacute; zadan&eacute; &uacute;daje si poznamenejte a zadejte je na t&eacute;to str&aacute;nce.';
$lang['install_admin_follow'] = 'Pros&iacute;m vyplňte n&aacute;sleduj&iacute;c&iacute; &uacute;daje';
$lang['install_admin_db_type'] = 'Typ datab&aacute;ze';
$lang['install_admin_no_db'] = 'Va&scaron;e instalace PHP nebyla zkompilov&aacute;na s podporou datab&aacute;zov&yacute;ch ovladačů. Pros&iacute;m zajistěte instalaci podporu mysql, mysqli a/nebo postgres7 a pak to zkuste znovu.';
$lang['install_admin_db_host'] = 'Adresa datab&aacute;zov&eacute;ho serveru';
$lang['install_admin_db_name'] = 'Jm&eacute;no datab&aacute;ze';
$lang['install_admin_db_create'] = 'Vytvořit tabulky (Varov&aacute;n&iacute;: Vymaže existuj&iacute;c&iacute; data)';
$lang['install_admin_db_prefix'] = 'Table prefix';
$lang['install_admin_db_sample'] = 'Instalovat vzorek dat a &scaron;ablon';
$lang['retry'] = 'Znovu';
$lang['install_admin_db_create_seq'] = 'Vytv&aacute;ř&iacute;m  %s table sequence...';
$lang['install_admin_importing'] = 'Importuji vzorek dat...';
$lang['invalid_query'] = 'Chybn&yacute; dotaz: %s';
$lang['install_creating_table'] = '<p>Vytv&aacute;ř&iacute;m tabulku %s...';
$lang['install_creating_index'] = '<p>Creating index in %s table... [%s]</p>';
$lang['done'] = 'hotovo';
$lang['failed'] = 'selhalo';
$lang['install_admin_error_schema'] = 'Chyba při vyzved&aacute;v&aacute;n&iacute; SQL sch&eacute;matu';
$lang['install_admin_set_account'] = 'Nastavuji &uacute;čet administr&aacute;tora...';
$lang['install_admin_set_sitename'] = 'Nastavuji jm&eacute;no str&aacute;nek...';
$lang['install_admin_setup'] = 'Now let&#039;s continue to setup your configuration file, we already have most of the stuff we need. Chances are you can leave all these values alone, so when you are ready, click Continue.';
$lang['install_admin_docroot'] = 'CMS Document root (z pohledu webserveru)';
$lang['install_admin_docroot_path'] = 'Cesta k Document rootu';
$lang['install_admin_querystring'] = 'Řetězec dotazu (ponechte toto pole beze změny pokud v&scaron;e funguje spr&aacute;vně, později můžete nastavit v souboru config.php)';
$lang['invalid_querys'] = '<b>VAROV&Aacute;N&Iacute;<b/>: Invalidn&iacute; dotazy na datab&aacute;zi!';
$lang['install_admin_sitedown'] = 'Chyba: Nemohu odebrat soubor tmp/cache/SITEDOWN. Pros&iacute;m odeberte soubor ručně.';
$lang['install_admin_update_hierarchy'] = 'Aktualizuji hierarchick&eacute; pozice...';
$lang['install_admin_set_core_event'] = 'Nastavuji ud&aacute;losti j&aacute;dra...';
$lang['install_admin_install_modules'] = 'Instaluji moduly...';
$lang['install_admin_index_search'] = 'Vytv&aacute;ř&iacute;m index pro hled&aacute;n&iacute;...';
$lang['install_admin_clear_cache'] = 'Čist&iacute;m cache str&aacute;nek (pokud existuje)...';
$lang['install_admin_emailing'] = 'Odes&iacute;l&aacute;m informace o administr&aacute;torsk&eacute;m &uacute;čtu e-mailem...';
$lang['install_admin_congratulations'] = 'Gratulujeme, v&scaron;echna nastaven&iacute; byla provedena - zde je va&scaron;e <a href="%s">nov&aacute; str&aacute;nka</a>';
$lang['could_not_connect_db'] = 'Nelze se připojit do datab&aacute;ze. Ověřte pros&iacute;m spr&aacute;vnost uživatelsk&eacute;ho jm&eacute;na a hesla, a opr&aacute;vněn&iacute; uživatele přistupovat k dan&eacute; datab&aacute;zi.';
$lang['cannot_write_config'] = 'Chyba: Nelze zapisovat do %s.';
$lang['install_additional_modules'] = 'Install additional modules';
$lang['email_accountinfo_subject'] = 'CMS Made Simple Admin Account Information';
$lang['email_accountinfo_message'] = 'Thank you for installing CMS Made Simple.

This is your new account information:
username: %s
password: %s

Log into the site admin here: %s';
$lang['utma'] = '156861353.3942757334971909600.1216740199.1224438851.1224443475.17';
$lang['utmz'] = '156861353.1224433238.15.12.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmc'] = '156861353';
?>