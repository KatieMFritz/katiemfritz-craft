<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  '*' => array(
    'omitScriptNameInUrls' => true,
    'generateTransformsBeforePageLoad' => true,
    'loginPath' => 'admin',
  ),
  'localhost' => array(
    'server' => 'localhost',
    'devMode' => true,
    'environmentVariables' => array(
      'basePath' => 'C:\wamp\www\katiemfritz',
      'baseUrl'  => 'localhost/katiemfritz/',
    )
  ),
  'katiemfritz.com' => array(
    'server' => '69.195.124.168',
    'devMode' => false,
    'environmentVariables' => array(
      'basePath' => '/home1/katiemd0/public_html/katiemfritzcraft',
      'baseUrl'  => 'http://katiemfritz.com',
    ),
  ),
  '45.55.187.175' => array(
    'server' => '45.55.187.175',
    'devMode' => false,
    'environmentVariables' => array(
      'basePath' => '',
      'baseUrl'  => '45.55.187.175',
    ),
  ),
);
