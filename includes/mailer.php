<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/config.php';

// === Load PHPMailer classes ===
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

function lm_sanitize($value) {
  return htmlspecialchars(trim((string)$value), ENT_QUOTES, 'UTF-8');
}

function lm_send_dual_mail($formType, $userEmail, $userName, $fields) {
  global $LM_BRAND, $LM_ADMIN_EMAIL, $LM_FROM_EMAIL, $LM_SMTP_SETTINGS;

  if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
    return ['ok' => false, 'error' => 'Invalid email address'];
  }

  $time = date('d M Y, H:i');
  $rows = '';
  foreach ($fields as $k => $v) {
    $rows .= "<tr>
      <td style='padding:8px 12px;border-bottom:1px solid #eee'><strong>" . lm_sanitize($k) . "</strong></td>
      <td style='padding:8px 12px;border-bottom:1px solid #eee'>" . nl2br(lm_sanitize($v)) . "</td>
    </tr>";
  }
  $table = "<table width='100%' cellpadding='0' cellspacing='0' style='border:1px solid #e5e7eb;border-radius:8px;font-family:Public Sans, Arial, sans-serif'><tbody>$rows</tbody></table>";

  $subjectUser = "We received your $formType form – $LM_BRAND";
  $subjectAdmin = "[$LM_BRAND] New $formType submission";

  $bodyUser = "
  <p>Hi " . lm_sanitize($userName) . ",</p>
  <p>Thanks for submitting the <strong>$formType</strong> form at $LM_BRAND. Our team will review and get back to you shortly.</p>
  <p><strong>Summary</strong></p>$table
  <p style='color:#667085;font-size:12px'>Submitted on $time</p>
  <p>– The $LM_BRAND Team</p>";

  $bodyAdmin = "<p>You have a new <strong>$formType</strong> submission.</p>$table
  <p style='color:#667085;font-size:12px'>Submitted on $time</p>";

  try {
    $mail = new PHPMailer(true);

    // === SMTP CONFIGURATION ===
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'staging@levelminds.in';     // your email
    $mail->Password   = 'Levelminds@2024';  // <-- replace this
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL
    $mail->Port       = 465;

    // === USER EMAIL ===
    $mail->setFrom($LM_FROM_EMAIL, $LM_BRAND);
    $mail->addAddress($userEmail, $userName);
    $mail->isHTML(true);
    $mail->Subject = $subjectUser;
    $mail->Body    = $bodyUser;
    $mail->send();

    // === ADMIN EMAIL ===
    $mail->clearAddresses();
    $mail->addAddress($LM_ADMIN_EMAIL, 'LevelMinds Admin');
    $mail->Subject = $subjectAdmin;
    $mail->Body    = $bodyAdmin;
    $mail->send();

    return ['ok' => true];
  } catch (Exception $e) {
    return ['ok' => false, 'error' => $e->getMessage()];
  }
}
?>
