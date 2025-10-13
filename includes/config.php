<?php
// ==== LevelMinds configuration by environment ====
// Set LM_ENV to switch between configurations (defaults to "production").

$LM_ENV = getenv('LM_ENV') ?: 'production';

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
];

$LM_ACTIVE_ENV = $LM_ENVIRONMENTS[$LM_ENV] ?? $LM_ENVIRONMENTS['production'];

$LM_BRAND         = $LM_ACTIVE_ENV['brand'];
$LM_ADMIN_EMAIL   = $LM_ACTIVE_ENV['admin_email'];
$LM_FROM_EMAIL    = $LM_ACTIVE_ENV['from_email'];
$LM_SMTP_SETTINGS = $LM_ACTIVE_ENV['smtp'] ?? [];
?>
