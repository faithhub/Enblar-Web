<?php
require "../classes/contact.php";
$contact = new Contact;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = trim(htmlspecialchars(strip_tags($_POST['email'])));
    $name = trim(htmlspecialchars(strip_tags($_POST['name'])));
    $message = trim(htmlspecialchars(strip_tags($_POST['message'])));
    $valid = $contact->validEmail($email);
    if (empty($name)) {
        echo "Please provide a Name";
    } elseif (ctype_alpha(str_replace(' ', '', $name)) == false) {
        echo "Full Name must be alphabetic";
    } elseif (strlen($name) > 30) {
        echo "Full Name must not more 30 characters";
    } elseif (empty($email)) {
        echo "Please provide an email address";
    } elseif (strlen($email) > 30) {
        echo "Email must not more 30 characters";
    } elseif (empty($message)) {
        echo "Please provide content for your message";
    } elseif ($valid != true) {
        echo "Please supply a valid email address";
    } else {

        $created_at = date("Y-m-d H:i:s");
        echo $created_at;
        $save = $contact->saveMessage($name, $email, $message, $created_at);
        $toEmail = "support@enblar.net";
        $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
        mail($toEmail, $name, $message, $mailHeaders);
        if ($save == true) {
            echo "200";
        } else {
            echo "Error occur";
        }
    }
} else {
    echo "Access Denaid";
}
