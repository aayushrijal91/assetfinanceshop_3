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

        $financeType = implode(', ', $_POST['financeType']);
        $name = $_POST['fname'];
        $abn = $_POST['abn'];
        $phone = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $loanAmount = $_POST['loanAmount'];
        $comment = $_POST['comment'];

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
            '<td>Page Reference</td>' .
            '<td><b>' . $pageRef . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Name</td>' .
            '<td><b>' . strip_tags($name) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Business Name or ABN</td>' .
            '<td><b>' . strip_tags($abn) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Type of Finance</td>' .
            '<td><b>' . strip_tags($financeType) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Phone</td>' .
            '<td><b>' . strip_tags($phone) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Email Address</td>' .
            '<td><b>' . strip_tags($email) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Loan Amount</td>' .
            '<td><b>' . strip_tags($loanAmount) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Message</td>' .
            '<td><b>' . strip_tags($comment) . '</b></td>' .
            '</tr>' .
            '</tbody></table></body></html>';

        // $webhook_url = 'https://hooks.zapier.com/hooks/catch/4537599/32ezm1q/';

        $webhook_url = 'https://hooks.zapier.com/hooks/catch/14919517/32exebk/';

        $form_data = array(
            'abn' => strip_tags($abn),
            'financeType' => strip_tags($financeType),
            'fullName' => strip_tags($name),
            'phoneNumber' => strip_tags($phone),
            'email' => strip_tags($email),
            'loanAmount' => strip_tags($loanAmount),
            'message' => strip_tags($comment),
            'pageRef' => $pageRef
        );

        $json_data = json_encode($form_data);

        $curl_options = array(
            CURLOPT_URL => $webhook_url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $json_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($json_data)
            )
        );

        // Initialize cURL and send the request
        $ch = curl_init();
        curl_setopt_array($ch, $curl_options);
        $response = curl_exec($ch);
        curl_close($ch);

        $headers = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            "Bcc: " . $bcc_email . "\r\n" .
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
