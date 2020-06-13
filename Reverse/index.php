<?php

$name = $_GET['exam'];

for($i = strlen($name);  $i >= 0; $i--){
    echo $name[$i];
}

?>

<form>
    <input type="text" name="exam">
    <input type="submit">
</form>
