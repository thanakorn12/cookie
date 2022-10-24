<html>

<body>

    <?php
    
        if ($_GET["lang"] == "en")
        {
            $language = "en";
            setcookie("lang", $language , time() + 3600 * 24);
        }
        else if ($_GET["lang"]=="th")
        {
            $language = "th";
            setcookie("lang", $language , time() + 3600 * 24); 
        }
    ?>
</body>

</html>