<?php

function generateToken(
    int $length = 64,
    string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[rand(0, $max)];
    }
    return implode('', $pieces);
}

function updateUserToken($connection, $userID, $token): void
{
    $sql = "UPDATE user SET token = :token WHERE id = :userID";
    $params = ["token" => $token, "userID" => $userID];
    $connection->prepare($sql)->execute($params);
}


?>