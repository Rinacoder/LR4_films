<?php

function fetchUserByEmail(object $connection, string $email)
{
    $sql = "SELECT * FROM user WHERE email = :email";
	$params =["email" => $email];

	$fetchUser = $connection->prepare($sql);
	$fetchUser->execute($params);
	return $user = $fetchUser->fetch(PDO::FETCH_ASSOC);
    
}


?>