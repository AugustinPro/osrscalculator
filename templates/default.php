<?php
    include 'models/dbh.classes.php';
    session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script type="module" src="../controllers/test.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header class="header d-flex justify-content-between">
        <div class="header__container d-flex flex-row p-4">
            <a href="?page=home" class="header__container--text"><img class="image-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAgCAYAAAB6kdqOAAACJElEQVR4XuWXz0sCQRTHnf/AkxcvgodACCSQkBAMCQlDEiNZJfEHqZgtGRmJBkIdEjp0CALJW3SIIAk8eQ2iCFH8g169mWbXXVfo4I5CX3js6O46H77z5s3TYvnfIsBiruIQBNZ9PtgKBucFxSAcdjuFyKfT9POK202vbodDJBSBeMYKybwVNvx+yCQSChyGYCC+HAxgMxAYA2Cu4VgQEIHGtU2ZGJ05PZI1jgiFqV/Z4PWNOdFsNmA/mYSLWk30EqEIVC9VGIx2+xaK2Sx1qFGt/n4vRAQqDS1MsZiFzssDtFo3FOrksCTKJQLH5yoMT9xu9wn6/Xc6xjwSBERArlo1MOqEzCmsObuRiMH9mYvAQcUIRt3yGNuhEF0yk90hkCsbw/R6HXpd83ppZT4rl8125ycnSloY7gYmMBbBVY9HOSZMh8GjQA+z7HLRXEnFJdiLxWhEw+H5wODRsOR0KlDcFeEwHAhheJ6M35sDDLuHzuhBtO/PVNNg1K0tYEtzTcLwZRmNvugVmy7MobtH1t/of2GGMoaR5QIMh590jDsKA7c41hwTXTKGyefTMBh80DH2xfVKRXGMP2cakLoEaiAM7igM3o6OJ7JpMNjTcIhoNAyStAOplESXBZ0RdDZxEbh/ZoUOixxWXOz45EJBqcL8SDDRFS71HwG6MF7s9CEABkWglMsZTmwU+rdNEJlYDkETTxNrpjB/mEMLIaE58jctAsw3KrAJXz2DQ9gAAAAASUVORK5CYII=" alt="stat icon"><?= $heading ?></a>
        </div>
        <div class="header__login pt-4 pe-4">
        <div>
                <ul>
                    <?php if(isset($_SESSION["userid"])) { ?>
                        <button type="button" class="btn btn-dark"><?= $_SESSION["useruid"]; ?></button>
                        <button type="button" class="btn btn-dark"><a href="../includes/logout.inc.php" class="logout-btn">Logout</a></button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-light"><a href="?page=signup-form" class="signup-btn">Signup</a></button>
                        <button type="button" class="btn btn-dark"><a href="?page=login-prompt" class="login-btn">Login</a></button>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </header>
    <?= $content ?>
    <footer class="footer">
        <p>&copy; <?= date('Y') ?></p>
    </footer>
</body>

</html>