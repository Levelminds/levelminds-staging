# LevelMinds — Static Site (HTML/CSS + PHP forms)

This package contains a 4-page website for **LevelMinds** with *Public Sans* typography, a professional theme, and two kinds of forms:
- **Contact form** (`contact.php`)
- **Career Program (Campus Ambassador) form** (`careers.php`)

Both forms send **two emails** when submitted:
1) An *auto‑reply* to the visitor confirming receipt.
2) A *notification* with the submission details to the LevelMinds admin inbox.

## Files
- `index.php` — Home
- `tour.php` — Tour
- `team.php` — Team + timeline
- `contact.php` — Contact form (sends email)
- `careers.php` — Career program form (sends email)
- `thank-you.php` — Generic thank you page
- `partials/` — Shared header/footer
- `includes/config.php` — Brand + email config (environment aware)
- `includes/mailer.php` — Email helper
- `assets/css/styles.css` — Global styles
- `assets/img/*` — Screenshots + logo

## Configure email
Before deploying, open `includes/config.php` and review the configuration array. Each environment contains the brand name, sender/recipient addresses and SMTP credentials.

Set the environment that should be used at runtime with the `LM_ENV` environment variable. If the variable is missing, the app falls back to `production`.

Example `.htaccess` or Apache configuration snippet:
```
SetEnv LM_ENV staging_1
```

Or from the command line while testing locally:
```
LM_ENV=staging_1 php contact.php
```

Update the credentials for your account inside the corresponding environment entry. For production deployment you will usually want to keep:
```php
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
```

The repository also contains a ready-to-edit **staging** configuration named `staging_1`:
```php
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
```
Replace the placeholder values with the credentials provided by your hosting provider.

## Deploy
- Upload the folder to any PHP-capable host (cPanel/Hostinger/Netlify + Functions, etc.).
- Make sure the site root points to this folder.
- Set `LM_ENV` to the correct environment on the server.
- Test both forms and check your inbox and the visitor’s auto-reply.

## Notes
- All pages share the same header/footer.
- Color palette uses `#3F97D5` and `#3248AD`.
- Font is **Public Sans** (loaded from Google Fonts).
