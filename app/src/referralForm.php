<?php
include __DIR__ . '/../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score');
        }

        $to = $admin_email;
        $email = $to;

        $subject = "Message from " . $site;

        $businessName = $_POST['businessName'];
        $yourName = $_POST['yourName'];
        $yourPhone = $_POST['yourPhone'];
        $yourEmail = $_POST['yourEmail'];
        $referralName = $_POST['referralName'];
        $referralPhone = $_POST['referralPhone'];
        $referralEmail = $_POST['referralEmail'];
        $estimatedLoanAmount = $_POST['estimatedLoanAmount'];
        $assetRequired = $_POST['assetRequired'];
        $additionalDetails = $_POST['additionalDetails'];

        $message = '<!DOCTYPE html>
                <html>
                    <head>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            
                            td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            
                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                <body><table><tbody>' .
            '<tr>' .
            '<td>Dealership/Business name/Client name</td>' .
            '<td><b>' . strip_tags($businessName) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Your Name</td>' .
            '<td><b>' . strip_tags($yourName) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Your Phone</td>' .
            '<td><b>' . strip_tags($yourPhone) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Your Email</td>' .
            '<td><b>' . strip_tags($yourEmail) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Referral Name</td>' .
            '<td><b>' . strip_tags($referralName) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Referral Phone</td>' .
            '<td><b>' . strip_tags($referralPhone) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Referral Email</td>' .
            '<td><b>' . strip_tags($referralEmail) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Estimated Loan Amount</td>' .
            '<td><b>' . strip_tags($estimatedLoanAmount) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Asset Required</td>' .
            '<td><b>' . strip_tags($assetRequired) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Additional Asset or Business Detail</td>' .
            '<td><b>' . strip_tags($additionalDetails) . '</b></td>' .
            '</tr>' .
            '</tbody></table></body></html>';

        $headers = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            // "Bcc: " . $bcc_email . "\r\n" .
            "Reply-To: " . $site . " <" . $email . ">" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            header('location:./../thankyou');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
