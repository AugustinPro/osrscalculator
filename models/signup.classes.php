<?php

class Signup extends Dbh {

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT login_uid FROM Login WHERE login_uid = ? OR login_email = ?;');

        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?page=signup-form");
            exit();
        }

        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

    protected function setUser($uid, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO `Login` (login_uid, login_password, login_email) VALUES (?, ?, ?)');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            header("location: ../index.php?page=signup-form");
            exit();
        }

        $stmt = null;
    }

}