<?php
    require "header.php";
?>
    <main>
    <div class = "wrapper-main">
        <section class = "section default">
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<p>You are logged in!</p>';
                    
                }
                else {
                    echo '<p>You are logged out!</p>';
                }
            ?><!--Will show certain content if youre logged in vs. if you're logged out-->
            
        </section>
    </div>
    </main>

<?php
    require "footer.php";
    ?>