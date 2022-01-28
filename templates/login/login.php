<?php

?>
<main>

<div class="content">
    <div class="login-prompt">
        <div class="row">
            <p>Welcome to the OSRS Calculator</p>
        </div>
        <div class="row">
            <div class="index-login-login">
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="uid">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" class="btn btn-dark signup-btn" name="submit">Login</button>
                </form>
                <button type="button" class="btn btn-dark login-btn"><a href="?page=login-prompt">Cancel</a></button>
            </div>
        </div>
    </div>
</div>

</main>