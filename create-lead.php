<?php
require 'assets/phpmailer/vendor/phpmailer/phpmailer/src/Exception.php';
require 'assets/phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'assets/phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php';
require 'assets/phpmailer/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('initialize.php');

$baseURL = base_url;
$baseImageURL = base_url;
$app_name = app_name;
$app_domain = 'www.talent-synergy.com';
$adminEmail = 'discover@talent-synergy.com';
if (!empty($_POST) && !empty($_POST['type'])) { $formType = 'Get in Touch with Us'; }else{ $formType = 'Contact Us'; }
if (!empty($_POST)) {
    $adminSubject = $app_name . ' | '. $formType;
    $adminMessage = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>' . $app_name . '</title>
    </head>
    <body>
        <table align="center" border="0" cellspacing="0" width="600" bgcolor="#dfe4f5">
            <tr bgcolor="#ffffff">
                <td align="center" style="padding: 10px;">
                    <img width="160px" src="' . $baseImageURL . 'assets/images/logo.webp" alt="' . $app_name . '">
                </td>
            </tr>
            <tr style="padding: 50px 0px">
                <td align="start">
                    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8" style=" @import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: Open Sans, sans-serif;">
                        <tr>
                            <td>
                                <table style="background-color: #f4f7fe; max-width: 670px; margin: 0 auto;" width="100%"
                                    border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" align="center" cellpadding="0"
                                                cellspacing="0"
                                                style="
                                                        max-width: 670px;
                                                        background: white;
                                                        border-radius: 3px;
                                                        -webkit-box-shadow: 0 6px 18px 0 rgba(0, 0, 0, 0.06);
                                                        -moz-box-shadow: 0 6px 18px 0 rgba(0, 0, 0, 0.06);
                                                        box-shadow: 0 6px 18px 0 rgba(0, 0, 0, 0.06);">
                                                <tr>
                                                    <td style="padding: 0 35px">
                                                        <h1
                                                            style="
                                                        color: #1e1e2d;
                                                        font-weight: 500;
                                                        margin-bottom: 20px;
                                                        font-size: 36px;
                                                        font-family: Rubik, sans-serif;
                                                        text-align: left;">
                                                            Hi Admin,
                                                        </h1>
                                                        <h1
                                                            style="
                                                                color: #1e1e2d;
                                                                font-weight: 500;
                                                                margin-bottom: 20px;
                                                                font-size: 18px;
                                                                font-family: Rubik, sans-serif;
                                                                text-align: left;">
                                  You have received an inquiry from ' . $_POST["name"] . '.
                                                           
                                                        </h1>
    
                                                        <p
                                                            style="
                                    color: #1e1e2d;
                                    font-weight: ;
                                    text-align: left;">
                                                            <strong>Name : </strong>' . $_POST["name"] . '
                                                        </p>
                                                        <p
                                                            style="
                                    color: #1e1e2d;
                                    font-weight: ;
                                    text-align: left;
                                  ">
                                                            <strong>Email : </strong>' . $_POST["email"] . '
                                                        </p>
                                                        <p
                                                            style="
                                    color: #1e1e2d;
                                    font-weight: ;
                                    text-align: left;
                                  ">
                                                            <strong>Phone : </strong>' . $_POST["phone"] . '
                                                        </p>  
                                                        <p
                                                            style="
                                    color: #1e1e2d;
                                    font-weight: ;
                                    text-align: left;
                                  ">
                                                            <strong>Message : </strong>' . $_POST["message"] . '
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 40px">&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="text-align: center" bgcolor="#2E9941"></tr>
            <tr style="background: linear-gradient( to right, rgba(18, 94, 151, 100) 0%, rgba(70, 200, 148, 1) 100% );">
                <td align="center" style="padding: 10px 0px">
                    <a target="_blank" style="color: #ffffff; text-decoration: none" href="' . $baseURL . '">' . $app_domain . '</a>
                </td>
            </tr>
        </table>
    </body>
    </html>';

    $userMessage = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>' . $app_name . '</title>
    </head>
    <body>
        <table align="center" border="0" cellspacing="0" width="600" bgcolor="#dfe4f5">
            <tr bgcolor="#ffffff">
                <td align="center" style="padding: 10px;">
                    <img width="160px" src="' . $baseImageURL . 'assets/images/logo.webp" alt="' . $app_name . '">
                </td>
            </tr>
            <tr style="padding: 50px 0px;">
                <td align="start">
                    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
                        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: Open Sans, sans-serif;">
                        <tr>
                            <td>
                                <table style="background-color: #f4f7fe; max-width:670px;  margin:0 auto;" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="max-width:670px;background:#f4f7fe; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                                <tr>
                                                    <td style="padding:0 35px;">
                                                        <h1
                                                            style="color:#1e1e2d; font-weight:500; margin-bottom:20px;font-size:36px;font-family:Rubik,sans-serif; text-align: left;">
                                                            Hi ' . $_POST["name"] . ',</h1>
                                                        <h1
                                                            style="color:#1e1e2d; font-weight:100; margin:0;font-size:18px;font-family: Poppins, sans-serif; text-align: left;">
                                                            Thank you for your inquiry. We will connect with you shortly.
                                                        </h1>
                                                        <p style="color: #1e1e2d;font-weight: bold;text-align: left; margin-bottom: 7px;">Regards,</p>
                                                        <p style="color: #1e1e2d;font-weight: bold;text-align: left; margin-bottom: 7px;">Team ' . $app_name . '</p>
                                                        <p style="color: #1e1e2d;font-weight: bold;text-align: left; margin-bottom: 7px;">discover@talent-synergy.com</p>
                                                        <p style="color: #1e1e2d;font-weight: bold;text-align: left; margin-bottom: 7px;">+91 9176541583, +65 96200765</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="height:40px;">&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="background: linear-gradient( to right, rgba(18, 94, 151, 100) 0%, rgba(70, 200, 148, 1) 100% );">
                <td align="center" style="padding: 10px 0px;">
                    <a target="_blank" style="color: #ffffff; text-decoration: none" href="' . $baseURL . '">' . $app_domain . '</a>
                </td>
            </tr>
        </table>
    </body>
    </html>';

    sendAdminEmail($adminEmail, $adminSubject, $adminMessage);

    if (!empty($_POST['type']) && ($_POST['type'] == 'getintouch')) { $formType = 'Get in Touch with Us'; }else{ $formType = 'Contacting Us'; }

    $userEmail = $_POST['email'];
    $userSubject = $app_name . ' | Thank You For '.$formType;
    $contactEmail = sendUserEmail($userEmail, $userSubject, $userMessage);

    $res = array();
    if (!empty($contactEmail)) {

        $filePath = 'leads/lead.csv';
        $tempFilePath = 'leads/temp_lead.csv';
        $newRecord = [$_POST["name"], $_POST["email"], $_POST["phone"], $_POST["message"], $formType];
        
        try {
            $file = fopen($filePath, 'r');
            if ($file === false) {
                //throw new Exception('File cannot be opened');
            }
        
            $tempFile = fopen($tempFilePath, 'w');
            if ($tempFile === false) {
                //throw new Exception('Temporary file cannot be opened');
            }
        
            while (($data = fgetcsv($file)) !== false) {
                fputcsv($tempFile, $data);
            }
        
            fputcsv($tempFile, $newRecord);
            fclose($file);
            fclose($tempFile);
            rename($tempFilePath, $filePath);
        
            //echo "Record added successfully.";
        } catch (Exception $e) {
            //echo 'Error: ', $e->getMessage();
        }

        $res['class'] = 'sucMsg';
        $res['msg'] = 'Thank you for '.$formType.'. We will reach out to you soon.';
    } else {
        $res['class'] = 'errMsg';
        $res['msg'] = 'Try to provide appropriate actions';
    }
    echo json_encode($res);
}

function sendAdminEmail($email, $subject, $message)
{
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = 'discover@talent-synergy.com';
    $mail->Password = "ufuvhawidabcbyem";  
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->From = 'discover@talent-synergy.com';
    $mail->FromName = app_name;
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = "This is the plain text version of the email content";
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}

function sendUserEmail($email, $subject, $message)
{
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = 'discover@talent-synergy.com';
    $mail->Password = "ufuvhawidabcbyem";  
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->From = 'discover@talent-synergy.com';
    $mail->FromName = app_name;
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = "This is the plain text version of the email content";
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}
