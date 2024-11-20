<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css'>
<script src='https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js'></script>
<link rel='icon' type='image/x-icon' href='assets/img/logo1.png'>
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>
<link rel='stylesheet' href='assets/css/style.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load Composer's autoloader

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    //$message = $_POST['message'];
    // Attach Embedded Image
    //$mail->addEmbeddedImage('assets/img/logo.png', 'welcome_cid');
    $mail = new PHPMailer(true);
    $fname= ucfirst($firstname);
    $lname= ucfirst($lastname);
    $thebody = "
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css'>
<script src='https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js'></script>
<link rel='icon' type='image/x-icon' href='assets/img/logo1.png'>
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>
<link rel='stylesheet' href='assets/css/style.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <div class='container'>
        <div style='margin-top:20px'>
            <img src='https://spectarkle.com/epidermis/assets/img/logo.png' alt='EPIDERMIS' style='width:100px'>
        </div>
        <h1 style='color:#000000;margin-top:20px;font-family: 'Roboto', sans-serif; font-size: 20px; font-weight: 600; line-height: 39.8px; letter-spacing: -0.5px;'>Hi $fname $lname,</h1>
        <p style='color:#000000;margin-top:30px;font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: 22.4px;'>We're delighted you're here! You're just a few steps away from achieving your skincare goals with a personalized consultation. </p>
        <h4 style='color:#000000;font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 500; line-height: 35.82px; letter-spacing: -0.5px;margin-top: 30px;'>Here's what to do next:</h4>
        <div style='display: flex;'>
            <div style='margin-right:10px;margin-top:7px'>
                <p style='border-radius:5px;border:2px solid #3C0D64;background:#3C0D64;padding:6px'></p>               
            </div>
            <div>
                <h1 style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; line-height: 28px;color:#000000'>
                    Complete your consultation booking
                </h1>
                <p style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: 28px;color:#000000'> Link to consultation booking: <a href='https://spectarkle.com/epidermis/request_consultation.html'>here</a> </p>
            </div>
        </div>
        <div style='display: flex;'>
            <div style='margin-right:10px;margin-top:7px'>
                <div style='border-radius:5px;border:2px solid #3C0D64;background:#3C0D64;padding:6px'></div>               
            </div>
            <div>
                <h1 style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; line-height: 28px;color:#000000'>
                    Make a payment
                </h1>
                <p style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: 28px;color:#000000'> Kindly pay ₦22,000 to confirm your consultation. </p>
            </div>
        </div>
        <div style='display: flex;'>
            <div style='display: flex;'>
                <div style='margin-right:10px;margin-top:7px'>
                    <p style='border-radius:5px;border:2px solid #3C0D64;background:#3C0D64;padding:6px'></p>               
                </div>
                <div>
                    <h1 style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; line-height: 28px;color:#000000'>
                        Pay via Bank Transfer
                    </h1>
                    <p style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: 28px;color:#000000'>  Account number: [Insert Account Number] <br>Bank name: [Insert Bank Name] <br>Account name: Epidermis<br>Amount: ₦[amount] </p>
                </div>
            </div>
        </div>
        <p style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: 28px; color:#000000;'>
            Please send a screenshot as proof of payment. Once your consultation is confirmed and payment is received, our dermatologist will review your skin concerns and provide tailored solutions just for you.
        </p>
        <p style='margin-top:30px;font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: 28px; color:#000000;'>
            If you have any questions, simply reply to this message and we'll get back to you right away.
        </p>
        <p style='margin-top:30px;font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: 28px; color:#000000;'>
            Thanks, <br> The Epidermis Team
        </p>
        <div style='border-top: 1px solid #EAEAEA;'>
            <h1 style='font-family: 'Roboto', sans-serif; font-size: 20px; font-weight: 600; line-height: 28px; letter-spacing: -1px; color:#000;margin-top:40px'>Want to reach out to us?</h1>
            <h2 style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; line-height: 28px; letter-spacing: -1px; color:#000'>24/7 Customer Support</h2>
            <div>
                <a href='www.epidermis.com' style='color:#4D5DF2'>www.epidermis.com</a>
            </div>
            <p style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: 22.4px; letter-spacing: -0.6000000238418579px; color:#000;margin-top:20px'>Monday to Friday ( 9 a.m - 5 p.m )</p>
            <p style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: 22.4px; letter-spacing: -0.6000000238418579px; color:#000'><a href='mailto:hello@epidermis.com' style='font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; line-height: 22.4px; letter-spacing: -0.6000000238418579px; color:#000'>hello@epidermis.com</p>
        </div>
        <div style='margin-top:30px; display: flex;'>
            <div>
                <img src='https://spectarkle.com/epidermis/assets/img/logo.png' alt='EPIDERMIS' style='width:100px'>
            </div>
            
        </div>
            
          
    </div>
";

    //$mail->SMTPDebug = 2; // Set to 2 for detailed debug output

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'tryepidermis@gmail.com'; // SMTP username
        $mail->Password = 'dwqq rluq wrxp mstl'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to

        $mail->setFrom('tryepidermis@gmail.com', 'Epidermis');
        $mail->addAddress($email); // Add a recipient

        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Ready to Book A Dermatologist?';
        $mail->Body    = $thebody;

        

        $mail->send();
        echo '';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPIDERMIS - Success consultation</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/img/logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="logoheadrbg">
        <div class="logoheadr">
            <a href=""><img src="assets/img/logo.png" alt="EPIDERMIS"></a>
        </div>
    </header>
    <div class="bookconsultsize bookconsultsizess">
        <div class="bookinsuccescheck">
            <i class="fa fa-check"></i>
        </div>
        <h1>Consultation booked successfully</h1>
        <p>A payment link has been sent to your Email. Check your WhatsApp to complete your consultation booking!</p>
        <div class="bookaconsultantgobackhome">
           <a href="index.html">Back to homepage</a>
        </div>
    </div>
</body>
</html>
