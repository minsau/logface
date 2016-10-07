<?php
session_start();
  require_once __DIR__ . '/php-graph-sdk-5.0.0/src/Facebook/autoload.php';
  $fb = new Facebook\Facebook([
  'app_id' => '1848740508690572',
  'app_secret' => '9ee0cb0a7a4173044038945b10bc0b8f',
  'default_graph_version' => 'v2.5',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://logface-minsau.c9users.io/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login facebook</title>
  </head>
  <body>

  </body>
</html>
