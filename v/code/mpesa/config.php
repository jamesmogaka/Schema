<?php
//The M-PESA configuration information required for authorizing payments
//
//Set the default timezone
date_default_timezone_get();
//
//The consumer key as a define parameter. Change this to the credentials on your daraja API account
define('CONSUMER_KEY', 'jbAm6qyMiA9OTwi6D7j9DMbAifrdAHli');
//
//The consumer secret to the daraja API that was created.Change this to the credentials on your daraja API account
define('CONSUMER_SECRET', 'hCSHU0QHWOvJxKzM');
//
//The sandbox configuration items, the environment key is 0 for testing and 1
//for use during production environments.
$env = 0;
//
//SSL certificate usage is essentials to connect ot the sandbox environment and the
//daraja API
$ssl = true;
//
//The Shortcode to a business
$short_code = '174379'; //change it later
//
//The ShortCode is the same as the business ShortCode
$business_short_code = '174379';
//
//The passkey generated for that app when a request is made on the daraja API platform. CHange this please
$pass_key = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
//
//Check if the environment variables are properly set for utilization within/
//the development environment or in the live form.
if ($env == 1) {
    //
    //Define the state os utilization of daraja api,i.e., when in the production/live
    define('STATE', 'api');
} else {
    //
    //Define the state of access to the API.i.e., we in the sandbox environment
    define('STATE', 'sandbox');
}
//
//Ensure that SSL connections are enabled, and since daraja API needs SSL enabled.
$base_sec = $ssl === true ? 'https://' : 'http://';
//
//The timestamp parameter needed by the Safaricom API. It is a parameter to access the daraja API
$time_stamp = date('YmdHis');
//
//The password generated by the user account, which is a base64_encoded
//concatenation of the $business_short_code,$pass_key_and the $time_stamp
$password = base64_encode($business_short_code . $pass_key . $time_stamp);
//
//Define the call back api's. It should look like this https://975e-41-80-97-15.in.ngrok.io/convinence_shop/lnmo.php?oid=
define('LNMO_CALLBACK_URL', 'https://975e-41-80-97-15.in.ngrok.io/convinence_shop/lnmo.php?oid=');