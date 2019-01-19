<?php
    namespace A;
    include './connect.php';
    echo '<hr/>';
    while($rows = mysqli_fetch_assoc($res)){
        var_dump($rows);
    }
