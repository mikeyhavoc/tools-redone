<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 8/24/18
 * Time: 3:09 PM
 */
?>
<?php require_once 'private/initialize.php';
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "garyws.items@gmail.com";
//Password to use for SMTP authentication
$mail->Password = 'W5#TgdE89';


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = trim(filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_STRING));
    $last_name = trim(filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $phone_number = trim(filter_input(INPUT_POST, 'phone-number', FILTER_SANITIZE_STRING));
    $subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING));
    $inquiry_questions = trim(filter_input(INPUT_POST, 'inquiry-questions', FILTER_SANITIZE_SPECIAL_CHARS));
    $full_name = $first_name . ' ' . $last_name;

    $email_body .= 'Full Name:' . $full_name . "\n";
    $email_body .= 'Email: ' . $email . "\n";
    $email_subject = $subject;
    $email_body .= 'Phone number: ' . $phone_number . "\n";
    $email_body .= 'Subject: ' . $subject . "\n";
    $email_body .= 'Inquiry: ' . $inquiry_questions . "\n";



//Set who the message is to be sent from
    $mail->setFrom($email, $first_name);
//Set an alternative reply-to address
    $mail->addReplyTo($email, $full_name);
//Set who the message is to be sent to
    $mail->addAddress('garyws.items@gmail.com', 'gary tools');
//Set the subject line
    $mail->Subject = $email_subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
    $mail->Body = $email_body;
//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        header("location:email.php?status=thanks");
    }//Create a new PHPMailer instance

}
$page_title = 'Tool Inquiry';
$section = null;
/**
 * Copyright (c) 2018. Michael Williams Manic Designer Developments.
 */
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 1/19/18
 * Time: 2:26 PM
 */

?>

<!doctype html>
<html lang="en">
<head>
    <?php include SHARED_PATH . '/js/googleanalytics.js'; ?>
    <?php include SHARED_PATH . '/js/hotjarAnalytics.js'; ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <meta name="description" content="Garys tools, retired bodyman selling his body tools locally in bradenton fl.">
    <link href="https://fonts.googleapis.com/css?family=Supermercado+One" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo url_for('public/css/main.css'); ?>">

    <title><?php echo $page_title; ?></title>
</head>
<body>
<header role="banner" class='container-fluid'>
    <section class='row'>
        <h1 class="col-12 col-md-4 tools logo__section logo">
            <a class="logo__title logo" href="<?php echo url_for( 'index.php'); ?>">Garys Tools</a>
        </h1>
    </section>
</header>

<?php if (isset($_GET['status']) && $_GET['status'] == 'email.php?status=thanks') { ?>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h2>Thank you for your interest in my tools!</h2>
                <p>I will try to be as prompt as possible in responding back to your questions or inquiry in purchase.</p>
            </div>
        </div>
    </div>
<?php } else { ?>
<section>
    <form action="email.php" method="POST" class="mt-3">
        <h2 Class="text-center">Contact Form</h2>
        <fieldset id="personal-info">
            <h3 class="text-center">Personal Info:</h3>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label ml-2" for="first-name">First Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control bar-width"  id="first-name" name="first-name" placeholder="John">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label ml-2" for="last-name">Last Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control bar-width" id="last-name" name="last-name" placeholder="Smith">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label ml-2" for="email">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control bar-width" id="email" name="email" placeholder="Email" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label ml-2" for="phone-number">Contact Number</label>
                <div class="col-sm-8">
                    <input type="tel" class="form-control bar-width" id="phone-number" name="phone-number" placeholder="941-000-0000">
                </div>
            </div>
            <div class="form-group row">
                <div style="display:none;">
                    <label for="address">address</label>
                    <input type="text" id="address" name="address">
                    <p>please leave this field blank</p>
                </div>
            </div>
            <div class="form-group form-check row">
                <div class="col-sm-12">
                    <input type="checkbox" class="form-check-input" id="verify" required>
                    <label for="verify" class="form-check-label">confirm live in Manatee, Sarasota counties or nearby.</label>
                </div>
            </div>
        </fieldset>
        <h3 class="text-center">Tool Inquiry</h3>
        <fieldset id="inquiry-info">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label ml-2" for="subject">Subject:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control bar-width" id="subject" name="subject" placeholder="subject or inquiry about tool.">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label ml-2" for="inquiry-questions">Questions Inquiries</label>
                <div class="col-sm-8">
                    <textarea class="form-control bar-width" name="inquiry-questions" id="inquiry-questions" cols="30" rows="10" placeholder="Questions about an item or an offer on an item.."></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="bar-width col-sm-6">
                    <button  class="btn btn-lg btn-outline-success btn-block b-width b-right"  type="submit">Submit</button>
                </div>
                <div class="bar-width col-sm-6">
                    <button class="btn btn-lg btn-outline-danger btn-block b-width b-left" type="reset">Reset</button>
                </div>
            </div>
        </fieldset>
    </form>
    <?php } ?>
</section>
<?php include(SHARED_PATH . '/footer.php'); ?>
