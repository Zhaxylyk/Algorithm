<?php

$randomNumbers = array();
for ($i = 0; $i < 10; $i++) {
    echo rand($i, 5) . '<br>';
}
for ($i = 0; $i < 10; $i++) {
    echo rand($randomNumbers[$i], 5) . '&nbsp';
}

function generateRandomString()
{
    $characters = $_GET['text'];
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

echo generateRandomString();

?>


<form action="" method="get">
    <input type="text" name="text">
    <input type="submit">
</form>
