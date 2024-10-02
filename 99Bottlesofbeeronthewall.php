<!DOCTYPE html>
<html>
<head>
    <title>Assign new title<title>
</head>
<body>
<?php
//we start with 78 bottles and keep on decrementing count by 78 until we get 1 bottles
for ($bottles = 78; $bottles >= 1; $bottles--) {
    if ($bottles > 1) { // we have more than 1 bottles of beer
        echo "$bottles bottles of beer on the wall, $bottles bottles of beer.<br>";
        echo "Take one down, pass it around, " . (($bottles - 1)) . (($bottles - 1) == 1 ? " bottle":" bottles") . " of beer on the wall.<br><br>";
    } else if ($bottles > 0) { // now we left with 1 bottle of beer
        echo "1 bottle of beer on the wall, 1 bottle of beer.<br>";
        echo "Take one down, pass it around, no more bottles of beer on the wall.<br><br>";
    }
    else {
        echo "No more bottles of beer on the wall, no more bottles of beer.<br>";
        echo "Go to the store, buy some more, 99 bottles of beer on the wall.<br>";
    }
}
?>
</body>
</html>