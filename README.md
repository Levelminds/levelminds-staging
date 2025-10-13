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
- `includes/config.php` — Brand + email config
- `includes/mailer.php` — Email helper
- `assets/css/styles.css` — Global styles
- `assets/img/*` — Screenshots + logo

## Configure email
Before deploying, open `includes/config.php` and set:
```php
$LM_ADMIN_EMAIL = 'team@levelminds.in';   // where you receive notifications
$LM_FROM_EMAIL  = 'no-reply@levelminds.in'; // must be a valid domain on your host
```
> On some hosts, the built-in `mail()` is restricted. If emails don’t arrive, ask your host to enable `mail()` or switch to SMTP with PHPMailer. The code is written to be easily replaced with an SMTP mailer if needed.

## Deploy
- Upload the folder to any PHP-capable host (cPanel/Hostinger/Netlify + Functions, etc.).
- Make sure the site root points to this folder.
- Test both forms and check your inbox and the visitor’s auto-reply.

## Notes
- All pages share the same header/footer.
- Color palette uses `#3F97D5` and `#3248AD`.
- Font is **Public Sans** (loaded from Google Fonts).
