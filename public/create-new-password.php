<?php
    require "header.php";
?>
    <main>
    
    <div class = "wrapper-main">
        
        <section class = "section default">

          <?php
            $selector = $_GET["selector"];
            $validator = $_GET["validator"];

            if (empty($selector) || empty($validator)) {
                echo "Could not validate your request!";

            } else {//checking if we have a valid token
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                    ?>

                    <form action = "includes/reset-password.inc.php" method = "post">
                        <input type = "hidden" name = "selector" value = "<?php echo $selector; ?>">
                        <input type = "hidden" name = "validator" value = "<?php echo $validator; ?>">
                        <input type = "password" name = "pwd" placeholder="Enter a new password">
                        <input type = "password" name = "pwd-repeat" placeholder="Confirm new password"><!-- want to ensure that the passwords are the same-->
                        <button type = "submit" name = "reset-password-submit">Reset Password</button>
                    </form>

                    <?php
                }
            }
          ?>  
            
        </section>
    </div>
    </main>

<?php
    require "footer.php";
    ?>