<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '3.0';

// Database
$Configuration['Database']['Name'] = 'vanilladb';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = 'binjary85';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledLocales
$Configuration['EnabledLocales']['vf_ko'] = 'ko';

// EnabledPlugins
$Configuration['EnabledPlugins']['recaptcha'] = true;
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['stubcontent'] = true;
$Configuration['EnabledPlugins']['swagger-ui'] = true;
$Configuration['EnabledPlugins']['Quotes'] = false;
$Configuration['EnabledPlugins']['rich-editor'] = true;
$Configuration['EnabledPlugins']['Gravatar'] = false;
$Configuration['EnabledPlugins']['vanillicon'] = true;

// Garden
$Configuration['Garden']['Title'] = 'OpenThink';
$Configuration['Garden']['Cookie']['Salt'] = 'GccgvL9JjDiWLfhh';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = false;
$Configuration['Garden']['Registration']['Method'] = 'Basic';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['InviteTarget'] = '';
$Configuration['Garden']['Registration']['InviteRoles'][3] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][4] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][8] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][32] = '0';
$Configuration['Garden']['Registration']['InviteRoles'][16] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'Vanilla';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['UpdateToken'] = 'de584a0208c65350627468c734588eb641606b49';
$Configuration['Garden']['InputFormatter'] = 'Rich';
$Configuration['Garden']['Version'] = 'Undefined';
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['MobileInputFormatter'] = 'Rich';
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['HomepageTitle'] = '<br>Open Think & Open Heart';
$Configuration['Garden']['Description'] = '<br>
<b>Open Think</b>
<br>
The site description usually appears in search engines. You should try having a description that is 100–150 characters long.
<br><br>
<b>Open Heart</b>
<br>
The homepage title is displayed on your home page. Pick a title that you would want to see appear in search engines.
<br><br>';
$Configuration['Garden']['Logo'] = '8655246b8d48323e4375924aa50bedc4.png';
$Configuration['Garden']['MobileLogo'] = '';
$Configuration['Garden']['FavIcon'] = 'favicon_c8fb24eeeff60b0e51000077e5aa1160.ico';
$Configuration['Garden']['TouchIcon'] = '';
$Configuration['Garden']['ShareImage'] = '';
$Configuration['Garden']['MobileAddressBarColor'] = '';
$Configuration['Garden']['ThemeOptions']['Styles']['Key'] = 'Default';
$Configuration['Garden']['ThemeOptions']['Styles']['Value'] = '%s_default';
$Configuration['Garden']['ThemeOptions']['Options']['panelToLeft'] = false;
$Configuration['Garden']['Locale'] = 'ko';
$Configuration['Garden']['Theme'] = 'theme-boilerplate';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['Vanillicon']['Type'] = 'v2';

// Recaptcha
$Configuration['Recaptcha']['PrivateKey'] = '6Lekr9YUAAAAAIj2oufzVnP_Q3WPZdoMSLwuS2Pl';
$Configuration['Recaptcha']['PublicKey'] = '6Lekr9YUAAAAAEkmhurAFMsm0kDA1rrxNNUmJT26';

// RichEditor
$Configuration['RichEditor']['Quote']['Enable'] = true;

// Routes
$Configuration['Routes']['YXBwbGUtdG91Y2gtaWNvbi5wbmc='] = array (
  0 => 'utility/showtouchicon',
  1 => 'Internal',
);
$Configuration['Routes']['cm9ib3RzLnR4dA=='] = array (
  0 => '/robots',
  1 => 'Internal',
);
$Configuration['Routes']['dXRpbGl0eS9yb2JvdHM='] = array (
  0 => '/robots',
  1 => 'Internal',
);
$Configuration['Routes']['Y29udGFpbmVyLmh0bWw='] = array (
  0 => 'staticcontent/container',
  1 => 'Internal',
);
$Configuration['Routes']['DefaultController'] = array (
  0 => 'categories',
  1 => 'Internal',
);

// Tagging
$Configuration['Tagging']['Discussions']['Enabled'] = true;

// Vanilla
$Configuration['Vanilla']['Version'] = '3.0';
$Configuration['Vanilla']['Password']['SpamCount'] = 2;
$Configuration['Vanilla']['Password']['SpamTime'] = 1;
$Configuration['Vanilla']['Password']['SpamLock'] = 120;
$Configuration['Vanilla']['Discussions']['Layout'] = 'modern';
$Configuration['Vanilla']['Categories']['Layout'] = 'modern';

// Last edited by obn (::1) 2020-02-10 13:12:55