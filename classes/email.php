<?php
include_once "Database.php";
class Email
{

    public function __construct()
    {
        $con = new con();
        $this->conc = $con->connect();
    }
    public function emailList($email, $date_reg)
    {
        $sql = "INSERT INTO emails(email, created_at) VALUES(?, ?)";
        $stmt = $this->conc->prepare($sql);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":date_reg", $date_reg, PDO::PARAM_STR);
        $save = $stmt->execute([$email, $date_reg]);
        if ($save) {
            return true;
        } else {
            return false;
        }
    }
    public function fetchEmail()
    {
        $stmt = $this->conc->prepare("SELECT * FROM email_list");
        $save = $stmt->execute();
        return $stmt;
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
    public function countEmail()
    {
        $stmt = $this->conc->prepare("SELECT COUNT(*) FROM email_list");
        $save = $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count;
    }
    public function deleteEmail($id)
    {
        $sql = "DELETE FROM email_list WHERE id = :id";
        $stmt = $this->conc->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }
}
