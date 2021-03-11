<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet"> 
    <title>Contact</title>
</head>
<body>
    <header>
        <nav>
            <?php
            $name = 'Home';
            $link = 'index.php';
            $current_page = false;
            echo "<a href='$link'";
            ?><?php
            if ($current_page) {
                echo " class='menu_item active'>$name</a>";
            } else {
                echo " class='menu_item'>$name</a>";
            }
            ?>

            <?php
            $name = 'About';
            $link = 'about.php';
            $current_page = false;
            echo "<a href='$link'";
            ?><?php
            if ($current_page) {
                echo " class='menu_item active'>$name</a>";
            } else {
                echo " class='menu_item'>$name</a>";
            }
            ?>

            <?php
            $name = 'Contact';
            $link = 'contact.php';
            $current_page = true;
            echo "<a href='$link'";
            ?><?php
            if ($current_page) {
                echo " class='menu_item active'>$name</a>";
            } else {
                echo " class='menu_item'>$name</a>";
            }
            ?>
        </nav>
    </header>
    <section class="contact">
        <h2 class="title">contact</h2>
        <form class="main_form">
            <input type="text" name="name" id="name" placeholder="Your name">
            <textarea name="message" id="message" placeholder="Your message"></textarea>
            <button>Send</button>
        </form>
    </section>
    <footer>
        <?php
        include "footer.php";
        ?>
    </footer>
</body>
</html>