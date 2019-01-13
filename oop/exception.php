<?php
try {
    echo '1 <br/>';
    echo '2 <br/>';
    throw new Exception('error',1);
    echo '3 <hr/>'; // 这段代码不会执行
} catch(Exception $e){
   echo 'error:' . $e->getMessage() . '<hr/>';
}
echo '5 <br/>';