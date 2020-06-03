<?php
    require "header.php";
?>
    <main>
    
    <div class = "wrapper-main">
        
        <section class = "section default">
            <h1>Sign-up</h1>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class = "signuperror">Fill in all fields!</p>';
                    }
                    else if ($_GET['error'] == "invalidmailuid") {
                        echo '<p class = "signuperror">Invalid username/e-mail!</p>';

                    }
                    else if ($_GET['error'] == "invaliduid") {
                        echo '<p class = "signuperror">Invalid username!</p>';
                    }
                    else if ($_GET['error'] == "invalidmail") {
                        echo '<p class = "signuperror">Invalid e-mail!</p>';
                    }
                    else if ($_GET['error'] == "passwordcheck") {
                        echo '<p class = "signuperror">Your passwords do not match!</p>';
                    }
                    else if ($_GET['error'] == "usertaken") {
                        echo '<p class = "signuperror">Username is already taken!</p>';
                    }
                } 
                    //else if ($_GET['signup'] == "success") {
                      //  echo '<p class = "signupsuccess">Signup successful!</p>';
                //}
            ?>
            <form id = "signup" class = "form-signup row contact_form" action = "includes/signup.inc.php" method = "post">
                <input class = "text form-control" type = "text" name = "uid" placeholder= "Username">
                <input class = "text form-control" type = "text" name = "mail" placeholder= "E-mail">
                <input class = "pass form-control" type = "password" name = "pwd" placeholder= "Password">
                <input class = "pass form-control" type = "password" name = "pwd-repeat" placeholder= "Confirm Password"><!-- Used to confirm the password to ensure that theyre using the right password-->
                <button type= "submit" name = "signup-submit" class = "btn_3">Signup</button>
            </form>
            <!-- Creating the form which starts the password recovery process-->
            <?php
            if (isset($_GET["newpwd"])) {//checking if there is a get request in the url
                if ($_GET["newpwd"] == "passwordupdated") {
                    echo '<p class = "signupsuccess">Your password has been reset!</p>';
                }
            }
            ?>
            <a href = "reset-password.ppg">Forgot your passowrd?</a>
        </section>
    </div>
    </main>

<?php
    require "footer.php";
    ?>