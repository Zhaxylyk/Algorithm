<?php
foreach (explode(',', $_GET['arr1']) as $piece) {

    $result1[] = explode(' ', $piece);
}
foreach (explode(',', $_GET['arr2']) as $piece) {

    $result2[] = explode(' ', $piece);
}
print_r($result1);

echo '<br><br>';

print_r($result2);

echo '<br><br>';
echo ' RESULT OF MATRIX: ';

addMatrix($result1, $result2);
function addMatrix($matrix1, $matrix2)
{
    for ($i = 0; $i < count($matrix1); $i++) {
        echo '<br> ';
        for ($j = 0; $j < count($matrix1); $j++) {
            $res[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
            echo $res[$i][$j].'&nbsp;';
        }

    }

}

?>


<form method="GET">
    <textarea name="arr1" ></textarea>
    <p style="width:16em; text-align: center">+</p>
    <textarea name="arr2" ></textarea>
    <input style="display: flex; margin-top: 10px" type="submit" value="submit"/>
</form>
