<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;
function myTest() {
    echo $this->x;
    $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

</body>
</html>
