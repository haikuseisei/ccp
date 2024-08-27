<?php
$db_user='xs449197_tester1';
$db_password='testtest1';
$pdo = new PDO('mysql:host=localhost;dbname=xs449197_test;charset=utf8',$db_user,$db_password);
foreach ($pdo->query('select * from user_table') as $row) {
    echo '<p>';
    echo $row['id'],':';
    echo $row['email'],':';
    echo $row['pass'],':';
    echo '</p>';
}
?>