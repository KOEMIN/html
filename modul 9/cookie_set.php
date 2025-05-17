<?php
        $nim = '244311052';
        $name = 'Muhammad Raufa Hafid Widodo';
        $email = 'raufahafid87@gmail.com';

        setcookie("nim", $nim, time() + (86400 * 30), "/");
        setcookie("name", $name, time() + (86400 * 30), "/");
        setcookie("email", $email, time() + (86400 * 30), "/");

        echo "cookie telah diatur";
        echo "<a href='cookie_get.php'>lihat cookie<a/>";
    ?>