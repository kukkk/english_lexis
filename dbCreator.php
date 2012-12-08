<?php
    $sql="SELECT DISTINCT recipient_id FROM rb_messages WHERE author_id='".mysql_real_escape_string(LoginInfo::$id)."'";//Запрос
    $result=mysql_query($sql);//Отправляем в бд
    if (!$result) {
            echo 'Ошибка запроса: '.mysql_error();
            exit;
    }		
?>
