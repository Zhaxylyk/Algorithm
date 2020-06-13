<?php
$user = ucfirst(strtolower($_GET['user']));

if (!empty($user)) {
    echo 'Hello' . '&nbsp;&nbsp;&nbsp;' . $user;
}
?>
    <form method="GET">
        <input type="text" name="user" placeholder="Enter Your Name">
        <input type="submit">
    </form>



