<?php
require "../classes/email.php";
$user = new Email;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = trim(htmlspecialchars(strip_tags($_POST['email'])));
    $valid = $user->validEmail($email);
    if (empty($email)) {
        echo "Please provide an email address";
    } elseif ($valid != true) {
        echo "Please supply a valid email address";
    } else {
        $date_reg = date("Y-m-d H:i:s");
        $save = $user->emailList($email, $date_reg);
        if ($save == true) {
            echo "200";
        } else {
            echo "Error occur";
        }
    }
} else {
    echo "Access Denaid";
}
