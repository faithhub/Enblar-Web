<?php
include_once "Database.php";

class Contact
{
    public function __construct()
    {
        $con = new con();
        $this->conc = $con->connect();
    }
    public function saveMessage($name, $email, $message, $created_at)
    {
        $sql = "INSERT INTO messages(full_name, email, message, created_at) VALUES(:name, :email, :message, :created_at)";
        $stmt = $this->conc->prepare($sql);
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":message", $message, PDO::PARAM_STR);
        $stmt->bindParam(":created_at", $created_at, PDO::PARAM_STR);
        $save = $stmt->execute();
        if ($save) {
            return true;
        } else {
            return false;
        }
    }
    public function validEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            exit();
        }
    }
}
