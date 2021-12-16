<?php

require "conect.php";
global $connection;

$id = 6;

$sth = $connection -> prepare("SELECT  * FROM user");
$sth->execute();
$array = $sth -> fetchALL(PDO::FETCH_ASSOC);

//$stmt = "SELECT * FROM film";




?>
<table>

<tr>
  <th>id</th>
  <th>name</th>
  <th>email</th>
  <th>phone</th>
  <th>password</th>
  <th>avatar</th>
  <th>id_roll</th>
  <th>token</th>
</tr>

  <?php 
  for ($i = 0; $i < count($array); $i++) {
    $id = $array[$i]['id'];
    $name = $array[$i]['name']  ;
    $email = $array[$i]['email']  ;
    $phone = $array[$i]['phone']  ;
    $password = $array[$i]['password'] ;
    $avatar = $array[$i]['avatar']  ;
    $id_roll = $array[$i]['id_roll']  ;
    $token = $array[$i]['token'] ;
    print('<tr>
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$phone.'</td>
    <td>'.$password.'</td>
    <td>'.$avatar.'</td>
    <td>'.$id_roll.'</td>
    <td>'.$token.'</td>
    </tr>');
}
  ?>


</table>