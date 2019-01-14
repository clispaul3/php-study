<?php
try {
    echo '1 <br/>';
    echo '2 <br/>';
    throw new Exception('error',1);
    echo '3 <hr/>'; // 这段代码不会执行
} catch(Exception $e){
   echo 'error:' . $e->getMessage() . '<hr/>'; // 异常信息
   echo 'error:' . $e->getCode() . '<br/>'; // 异常代号
}
echo '5 <br/>';