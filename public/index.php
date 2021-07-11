<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
// require_once(dirname(__FILE__, 2) . '/src/views/login.php');

// loadView('login', ['texto' => 'abc123']);

require_once(CONTROLLER_PATH . "/loginController.php");
// loadView('login');

// require_once(MODEL_PATH . "/Login.php");
// $user = new Login([
//   'email'     => 'admin@cod3r.com.br',
//   'password'  => 'a'
// ]);

// try {
//   $user->checkLogin();
//   echo 'Deu certo :)';
// } catch (Exception $e) {
//   echo 'Problema no login :(';
// }