<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'User_Teste', 'email' => 'user@test.com.br']);
print_r($user->name);
echo '<br>';
echo User::getSelect(['name' => 'Chaves', 'email' => 'chaves@cod3r.com.br']);
