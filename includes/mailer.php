<?php
require_once __DIR__ . '/config.php';

function lm_sanitize($value) {
  return htmlspecialchars(trim((string)$value), ENT_QUOTES, 'UTF-8');
}

function lm_send_dual_mail($formType, $userEmail, $userName, $fields) {
  global $LM_BRAND, $LM_ADMIN_EMAIL, $LM_FROM_EMAIL;

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
  $table = "<table width='100%' cellpadding='0' cellspacing='0' style='border:1px solid #e5e7eb;border-radius:8px;font-family:Manrope, Arial, sans-serif'><tbody>$rows</tbody></table>";

  $subjectUser = "We received your $formType form - $LM_BRAND";
  $bodyUser = "<p>Hi " . lm_sanitize($userName) . ",</p>
  <p>Thanks for submitting the <strong>$formType</strong> form at $LM_BRAND. Our team will review and get back to you shortly.</p>
  <p><strong>Summary</strong></p>$table
  <p style='color:#667085;font-size:12px'>Submitted on $time</p>
  <p>- The $LM_BRAND Team</p>";

  $subjectAdmin = "[$LM_BRAND] New $formType submission";
  $bodyAdmin = "<p>You have a new <strong>$formType</strong> submission.</p>$table
  <p style='color:#667085;font-size:12px'>Submitted on $time</p>";

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8\r\n";
  $headers .= "From: $LM_BRAND <$LM_FROM_EMAIL>\r\n";
  $headers .= "Reply-To: " . lm_sanitize($userEmail) . "\r\n";

  $ok1 = @mail($userEmail, $subjectUser, $bodyUser, $headers);
  $ok2 = @mail($LM_ADMIN_EMAIL, $subjectAdmin, $bodyAdmin, $headers);

  return ['ok' => ($ok1 && $ok2), 'user_ok' => $ok1, 'admin_ok' => $ok2];
}
?>
