<?php
// ==== LevelMinds environment-aware configuration ====
// Update the environment definitions below with the credentials for each deployment target.

$LM_ENVIRONMENTS = [
  'production' => [
    'brand'       => 'LevelMinds',
    'admin_email' => 'support@levelminds.in',
    'from_email'  => 'support@levelminds.in',
    'smtp'        => [
      'host'     => 'smtp.hostinger.com',
      'auth'     => true,
      'username' => 'support@levelminds.in',
      'password' => 'Levelminds@2024',
      'secure'   => 'ssl',
      'port'     => 465,
    ],
  ],
  'staging_1' => [
    'brand'       => 'LevelMinds (Staging 1)',
    'admin_email' => 'staging-team@levelminds.in',
    'from_email'  => 'no-reply@staging.levelminds.in',
    'smtp'        => [
      'host'     => 'smtp.hostinger.com',
      'auth'     => true,
      'username' => 'staging@levelminds.in',
      'password' => 'replace-with-real-password',
      'secure'   => 'ssl',
      'port'     => 465,
    ],
  ],
  'staging_2' => [
    'brand'       => 'LevelMinds (Staging 2)',
    'admin_email' => 'staging2-team@levelminds.in',
    'from_email'  => 'no-reply@staging2.levelminds.in',
    'smtp'        => [
      'host'     => 'smtp.hostinger.com',
      'auth'     => true,
      'username' => 'staging2@levelminds.in',
      'password' => 'replace-with-real-password',
      'secure'   => 'ssl',
      'port'     => 465,
    ],
  ],
  'staging_4' => [
    'brand'       => 'LevelMinds (Staging 4)',
    'admin_email' => 'staging4-team@levelminds.in',
    'from_email'  => 'no-reply@staging4.levelminds.in',
    'smtp'        => [
      'host'     => 'smtp.hostinger.com',
      'auth'     => true,
      'username' => 'staging4@levelminds.in',
      'password' => 'replace-with-real-password',
      'secure'   => 'ssl',
      'port'     => 465,
    ],
  ],
  'staging_5' => [
    'brand'       => 'LevelMinds (Staging 5)',
    'admin_email' => 'staging5-team@levelminds.in',
    'from_email'  => 'no-reply@staging5.levelminds.in',
    'smtp'        => [
      'host'     => 'smtp.hostinger.com',
      'auth'     => true,
      'username' => 'staging5@levelminds.in',
      'password' => 'replace-with-real-password',
      'secure'   => 'ssl',
      'port'     => 465,
    ],
  ],
];

$LM_ENV = getenv('LM_ENV') ?: 'production';
if (!array_key_exists($LM_ENV, $LM_ENVIRONMENTS)) {
  $LM_ENV = 'production';
}

$currentEnvironment = $LM_ENVIRONMENTS[$LM_ENV];

$LM_BRAND        = $currentEnvironment['brand'];
$LM_ADMIN_EMAIL  = $currentEnvironment['admin_email'];
$LM_FROM_EMAIL   = $currentEnvironment['from_email'];
$LM_SMTP_SETTINGS = $currentEnvironment['smtp'];
?>
