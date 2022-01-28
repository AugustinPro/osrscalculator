<?php


class Login extends Dbh {

    protected function getUser($uid, $pwd) {
        $stmt = $this->connect()->prepare('SELECT login_password FROM Login WHERE login_uid = ? OR login_email = ?;');

        if(!$stmt->execute(array($uid, $uid))) {
            $stmt = null;
            header("location: ../index.php?page=login-form");
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?page=login-form");
            exit();
        }

        $pwdHashed = $stmt->fetchAll();
        $checkPwd = password_verify($pwd, $pwdHashed[0]['login_password']);

        if($checkPwd == false) {
            $stmt = null;
            header("location: ../index.php?page=login-form");
            exit();
        }elseif($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM Login WHERE login_uid = ? OR login_email = ? AND login_password = ?;');
            
            if(!$stmt->execute(array($uid, $uid, $pwd))) {
                $stmt = null;
                header("location: ../index.php?page=login-form");
                exit();
            }

            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?page=login-form");
                exit();
            }

            $user = $stmt->fetchAll();

            session_start();
            $_SESSION["userid"] = $user[0]["login_id"];
            $_SESSION["useruid"] = $user[0]["login_uid"];

            $stmt = null;
        }
    }

}