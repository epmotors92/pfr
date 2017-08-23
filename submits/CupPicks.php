<?php
$field_first = $_POST['cup-pick_first'];
$field_last = $_POST['cup-pick_last'];
$field_email = $_POST['cup-pick_email'];
$field_tier1 = $_POST['cup_tier1'];
$field_tier2 = $_POST['cup_tier2'];
$field_tier3 = $_POST['cup_tier3'];
$field_tier4 = $_POST['cup_tier4'];
$field_tier5 = $_POST['cup_tier5'];
$field_tier6 = $_POST['cup_tier6'];

$mail_to = 'pittsfamilyracing@gmail.com';
$subject = 'PFR Cup Picks: '.$field_first ." " .$field_last;

$body_message = 'From: '.$field_first ." " .$field_last."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Tier 1 Driver: '.$field_tier1."\n";
$body_message .= 'Tier 2 Driver: '.$field_tier2."\n";
$body_message .= 'Tier 3 Driver: '.$field_tier3."\n";
$body_message .= 'Tier 4 Driver: '.$field_tier4."\n";
$body_message .= 'Tier 5 Driver: '.$field_tier5."\n";
$body_message .= 'Tier 6 Driver: '.$field_tier6."\n";

$headers_pfr = 'From: '.$field_email."\r\n";
$headers_pfr .= 'Reply-To: '.$field_email."\r\n";

$headers_recipient = 'From: '.$mail_to."\r\n";
$headers_recipient .= 'Reply-To: '.$mail_to."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers_pfr);
$mail_status = mail($field_email, $subject, $body_message, $headers_recipient);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Cup picks submitted successfully. Good luck in the race!');
		window.location = '../CupPicksForm.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Submission failed. Please, send an email to pittsfamilyracing@gmail.com');
		window.location = '../CupPicksForm.php';
	</script>
<?php
}
?>
