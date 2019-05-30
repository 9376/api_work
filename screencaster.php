<!DOCTYPE html>
<html>
<body>

<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "1 + 3 = " . sum(1,3) . "<br>";
echo "4 + 5 = " . sum(4,5) . "<br>";
echo "5 + 4.5 = " . sum(5,4.5);
?>

</body>
</html>