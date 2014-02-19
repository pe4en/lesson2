<?php
$query = sprintf("SELECT email, password, FROM users
    WHERE email='%@' AND password='%'",
    mysql_real_escape_string($email),
    mysql_real_escape_string($password));
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {

    if ($row['email']==$_POST['email'] && $row['password'] == $_POST['password'])
        header("Location: http://localhost://lesson/index.html"); else header("Location: http://localhost://lesson/authorization.html");
    exit();
}
mysql_free_result($result);
?>
