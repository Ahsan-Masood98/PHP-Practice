<?php
// Session Security
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if (!isset($_SESSION['last_regeneration'])) {
    regenserate_session_id();
} else {
    $interval = 60 * 30;
    if (time() - $_SESSION['lasr_regeneration'] >= $interval) {
        regenserate_session_id();
    }
}
function regenserate_session_id()
{
    session_regenerate_id(true);
    $_SESSION['lasr_regeneration'] = time();
}
