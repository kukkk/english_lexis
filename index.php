<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
            <?php
            require 'MySQLConnect.php';
            
            $sql="SELECT DISTINCT recipient_id FROM rb_messages WHERE author_id='".mysql_real_escape_string(LoginInfo::$id)."'";//Запрос
            $result=mysql_query($sql);//Спрашиваем бд
            if (!$result) {
                    echo 'Ошибка запроса: '.mysql_error();
                    exit;
            }

            while ($lineRecipientId=mysql_fetch_row($result)){
                    $connectedUsersId[]=$lineRecipientId[0];//Выцепляем результат
            }
        ?>
    </body>
</html>
