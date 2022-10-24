<html>

<body>

    <?php
    
        $CHECK = $_COOKIE['lang'];

        if ($CHECK == "en")
        {
            echo "Welcome";
        }
        else if ($CHECK == "th")
        {
            echo "ยินดีต้อนรับ";
        }
    ?> 
</body>

</html>