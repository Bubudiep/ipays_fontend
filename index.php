<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$isblock = false; // Default to blocking

if (strpos($user_agent, 'Electron') !== false) {
    $isblock = false; // Allow if Electron
}

if ($isblock) {
  // Redirect or block access
  header("HTTP/1.1 403 Forbidden");
  include 'sources/access_forbidden.php';
  exit();
} else {
  include 'sources/app.php';
}
// Continue with your application logic for Electron browsers
?>
