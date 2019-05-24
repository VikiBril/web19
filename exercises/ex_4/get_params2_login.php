<!DOCTYPE html>
<html>
    <head>
        <title> forms </title>
    <head>
    <body>
        <section>
            welcome
            <?php
            $un = $_GET["reg_un"];
            $ps = $_GET["reg_pass"];
            if ($un=="viki" && $ps=="1996")
                echo "<h2> Good morning user " .$un. " </h2>";
            else
                echo "<h2 Who are you? you can't get in </h2>"
            ?>
        </section>
</body>
</html>

    