<?php
function storeUser(object $connection,string $name,string $email,string $tel,string $pass):void
{
    $sql = "INSERT INTO `user`(`name`, `email`, `phone`, `password`) VALUES (:name,:email,:tel,:pass)";

	$params = [
		"name" => $name,
		"email" => $email,
		"tel" => $tel,
		"pass" => password_hash($pass, PASSWORD_BCRYPT)
	];  
	$connection->prepare($sql)->execute($params);

}

?>