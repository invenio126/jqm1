<?php
// created: 2011-04-27 14:57:57
$sugar_config = array (
  'admin_export_only' => false,
  'cache_dir' => 'cache/',
  'calculate_response_time' => true,
  'create_default_user' => false,
  'currency' => '',
  'dashlet_display_row_options' => 
  array (
    0 => '1',
    1 => '3',
    2 => '5',
    3 => '10',
  ),
  'date_formats' => 
  array (
    'Y-m-d' => '2006-12-23',
    'm-d-Y' => '12-23-2006',
    'd-m-Y' => '23-12-2006',
    'Y/m/d' => '2006/12/23',
    'm/d/Y' => '12/23/2006',
    'd/m/Y' => '23/12/2006',
    'Y.m.d' => '2006.12.23',
    'd.m.Y' => '23.12.2006',
    'm.d.Y' => '12.23.2006',
  ),
  'datef' => 'Y-m-d',
  'dbconfig' => 
  array (
    'db_host_name' => 'localhost',
    'db_host_instance' => '',
    'db_user_name' => 'root',
    'db_password' => 'test',
    'db_name' => 'ptforce_prod',
    'db_type' => 'mysql',
  ),
  'dbconfigoption' => 
  array (
    'persistent' => true,
    'autofree' => false,
    'debug' => 0,
    'seqname_format' => '%s_seq',
    'portability' => 0,
    'ssl' => false,
  ),
  'default_action' => 'index',
  'default_charset' => 'UTF-8',
  'default_currencies' => 
  array (
    'AUD' => 
    array (
      'name' => 'Austrailian Dollars',
      'iso4217' => 'AUD',
      'symbol' => '$',
    ),
    'BRL' => 
    array (
      'name' => 'Brazilian Reais',
      'iso4217' => 'BRL',
      'symbol' => 'R$',
    ),
    'GBP' => 
    array (
      'name' => 'British Pounds',
      'iso4217' => 'GBP',
      'symbol' => '£',
    ),
    'CAD' => 
    array (
      'name' => 'Candian Dollars',
      'iso4217' => 'CAD',
      'symbol' => '$',
    ),
    'CNY' => 
    array (
      'name' => 'Chinese Yuan',
      'iso4217' => 'CNY',
      'symbol' => '?',
    ),
    'EUR' => 
    array (
      'name' => 'Euro',
      'iso4217' => 'EUR',
      'symbol' => '€',
    ),
    'HKD' => 
    array (
      'name' => 'Hong Kong Dollars',
      'iso4217' => 'HKD',
      'symbol' => '$',
    ),
    'INR' => 
    array (
      'name' => 'Indian Rupees',
      'iso4217' => 'INR',
      'symbol' => '?',
    ),
    'KRW' => 
    array (
      'name' => 'Korean Won',
      'iso4217' => 'KRW',
      'symbol' => '?',
    ),
    'YEN' => 
    array (
      'name' => 'Japanese Yen',
      'iso4217' => 'JPY',
      'symbol' => '¥',
    ),
    'MXM' => 
    array (
      'name' => 'Mexican Pesos',
      'iso4217' => 'MXM',
      'symbol' => '$',
    ),
    'SGD' => 
    array (
      'name' => 'Singaporean Dollars',
      'iso4217' => 'SGD',
      'symbol' => '$',
    ),
    'CHF' => 
    array (
      'name' => 'Swiss Franc',
      'iso4217' => 'CHF',
      'symbol' => 'SFr.',
    ),
    'THB' => 
    array (
      'name' => 'Thai Baht',
      'iso4217' => 'THB',
      'symbol' => '?',
    ),
    'USD' => 
    array (
      'name' => 'US Dollars',
      'iso4217' => 'USD',
      'symbol' => '$',
    ),
  ),
  'messages' => 
  array (
    'approval_pending' => 'In Process',
    'approval_completed' => 'Completed',
  ),
  'default_currency_iso4217' => 'INR',
  'default_currency_name' => 'Indian Rupees',
  'default_currency_significant_digits' => '2',
  'default_currency_symbol' => '?',
  'default_date_format' => 'd.m.Y',
  'default_decimal_seperator' => ',',
  'default_email_charset' => 'ISO-8859-1',
  'default_email_client' => 'sugar',
  'default_email_editor' => 'html',
  'default_export_charset' => 'CP1252',
  'default_language' => 'en_us',
  'default_locale_name_format' => 's f l',
  'default_max_subtabs' => '12',
  'default_max_tabs' => '12',
  'default_module' => 'Home',
  'default_navigation_paradigm' => 'm',
  'default_number_grouping_seperator' => ',',
  'default_password' => '',
  'default_subpanel_links' => false,
  'default_subpanel_tabs' => true,
  'default_swap_last_viewed' => false,
  'default_swap_shortcuts' => false,
  'default_theme' => 'Sugar',
  'default_time_format' => 'H:i',
  'default_user_is_admin' => false,
  'default_user_name' => '',
  'disable_export' => false,
  'disable_persistent_connections' => 'false',
  'display_email_template_variable_chooser' => false,
  'display_inbound_email_buttons' => false,
  'dump_slow_queries' => true,
  'email_default_client' => 'sugar',
  'email_default_editor' => 'html',
  'export_delimiter' => ',',
  'history_max_viewed' => 10,
  'host_name' => 'localhost',
  'i18n_test' => true,
  'import_dir' => 'cache/import/',
  'import_max_execution_time' => 3600,
  'installer_locked' => true,
  'js_custom_version' => '',
  'js_lang_version' => 14,
  'languages' => 
  array (
    'en_us' => 'US English',
  ),
  'large_scale_test' => false,
  'list_max_entries_per_page' => 20,
  'list_max_entries_per_subpanel' => 20,
  'lock_default_user_name' => false,
  'lock_homepage' => false,
  'lock_subpanels' => false,
  'log_dir' => '.',
  'log_file' => 'account.log',
  'log_memory_usage' => false,
  'login_nav' => false,
  'max_dashlets_homepage' => '15',
  'require_accounts' => true,
  'rss_cache_time' => '10800',
  'save_query' => 'all',
  'session_dir' => '',
  'site_url' => 'http://bcforce.timesgroup.com/ptforce',
  'workflow_url' => 'http://bcflow.timesgroup.com/',
  'slow_query_time_msec' => '50',
  'stack_trace_errors' => false,
  'sugar_version' => '4.5.0b',
  'sugarbeet' => false,
  'time_formats' => 
  array (
    'H:i' => '23:00',
    'h:ia' => '11:00pm',
    'h:iA' => '11:00PM',
    'H.i' => '23.00',
    'h.ia' => '11.00pm',
    'h.iA' => '11.00PM',
  ),
  'timef' => 'H:i',
  'tmp_dir' => 'cache/xml/',
  'translation_string_prefix' => false,
  'unique_key' => '52b4b73503408ad569f148a057a706cd',
  'upload_badext' => 
  array (
    0 => 'php',
    1 => 'php3',
    2 => 'php4',
    3 => 'php5',
    4 => 'pl',
    5 => 'cgi',
    6 => 'py',
    7 => 'asp',
    8 => 'cfm',
    9 => 'js',
    10 => 'vbs',
    11 => 'html',
    12 => 'htm',
  ),
  'upload_dir' => 'cache/upload/',
  'upload_maxsize' => 3000000,
  'use_php_code_json' => true,
  'use_real_names' => true,
  'verify_client_ip' => true,
  'wf_case_view_link' => 'http://bcforce.timesgroup.com/sysworkflow/en/green/cases/main?APP_UID=@caseId&DEL_INDEX=1',
  'prism_view_link' => '/farprism/index.php?action=checkuser&opportunity_id=@OPP_ID&flag=new',
  'ic_view_link' => '/icrating/index.php?action=&opportunity_id=@OPP_ID&flag=new',
  'vc_view_link' => '/vc/index.php?financial_id=@FINANCIAL_ID&flag=new',
  'ptforce_soap' => '/ptforce/soap.php?wsdl',
  'respforce_soap' => 'http://bcforce.timesgroup.com/ptforce/soap.php',
  'respforce_admin_username' => 'admin',
  'respforce_admin_password' => 'admin',
  'WF_IC_COMMITEE_ID' => '5355216784d4bd209164961008967175',
  'default_email' => 'resforce@timesgroup.com',
  'default_user' => 'admin',
  'default_user_role' => 'general',
 'disable_count_query' =>true,
  'disable_vcr' => true,/* dont know what this is*/
   /*'save_query' => 'all',*/
  'save_query' => 'populate_only', /*dont know what this is*/
  'verify_client_ip' => false,
   /*'hide_subpanels' => false,
   'hide_subpanels_on_login' => false,*/
);

// URL CONSTANTS
define("ETIG_BSE_NSE_COMPANY_URL","http://10.100.109.42/etig/pt/company.jsp?exchange=");
define("UID_URL","http://bcforce.timesgroup.com/ptforce/getUID.php");
define("WF_DOC_DOWNLOAD_URL","http://bcflow.timesgroup.com/sysworkflow/en/green/");
define("DMS_DOC_DOWNLOAD_URL","download.php?src=WF&case_id=");
define('SECRET_PASSWORD','ptforce_master');

define('BD_USER_SCOPE_CODE','BDU'); //bduser
define('BD_TEAM_HEAD_SCOPE_CODE','BDTH');
define('BD_HEAD_SCOPE_CODE','BDH');
define('BD_RD_SCOPE_CODE','BDRD');

define('LEGAL_SCOPE_CODE','LE');
define('LEGAL_HEAD_SCOPE_CODE','LEH');
define('LEGAL_TEAM_HEAD_SCOPE_CODE','LETH');

define('BC_SCOPE_CODE','BC');
define('BC_HEAD_SCOPE_CODE','BCH');
define('BC_TEAM_HEAD_SCOPE_CODE','BCTH');


// SMTP EMAIL
define('SMTP_HOST','10.100.109.188');
define('SMTP_PORT','25');
define('MAILER','smtp');
define('ELEVEN_LEADS_COUNTER',11);
// LEGAL TEMPLATE DOCUMENT LOCAL PATH
define('LEGAL_TEMPLATE_LOCAL_DOC_PATH','cache/pdf/legal/');
define('MAX_DEAL_MONTH',99);//Terure (Month) MAX Deal Month for Opportunity Structure

# BRAND COM PPT TEMPLATE LOCAL PATH
define('BRAND_COM_TEMPLATE_LOCAL_DOC_PATH','cache/pdf/BrandCom/');
define('IC_EVENT_TEMPLATE_LOCAL_DOC_PATH','cache/pdf/ICEvent/');

//define('RESPOSITORY_LOGIN_URL','http://bcrepo.timesgroup.com/dms/login.php');
//define('APPROVAL_LOGIN_URL','http://bcflow.timesgroup.com/sysworkflow/en/green/login/authentication.php');

define('RESPOSITORY_LOGIN_URL','http://localhost/dms/login.php');
define('APPROVAL_LOGIN_URL','http://localhost/sysworkflow/en/green/login/authentication.php');

#MAIL DEFAULT CONSTANT
define("DEFAULT_MAIL_FROM_NAME",'Brand Capital');
define("DEFAULT_MAIL_ID",'bcforce@timesresponse.com');
?>
