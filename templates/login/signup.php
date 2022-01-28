<?php

?>
<main>

<div class="content">
    <div class="login-prompt">
        <div class="row">
            <p>Welcome to the OSRS Calculator</p>
        </div>
        <div class="row">
        <div class="index-login-signup">    
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdRepeat" id="Repeat Password">
                    <input type="text" name="email" placeholder="Email">
                    <button type="submit" class="btn btn-dark signup-btn" name="submit">Confirm</button>
                </form>
                <button type="button" class="btn btn-dark login-btn"><a href="?page=login-prompt">Cancel</a></button>
            </div>
        </div>
    </div>
</div>

</main>