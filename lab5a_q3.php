<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function calculateArea($length, $width) {
        return $length * $width;
    }

    $length = 2;
    $width = 4;
    $area = calculateArea($length, $width);
    ?>
    <p>The area of a rectangle with a width of <?php echo $width; ?> and <?php echo $length; ?>
    is <?php echo $area; ?> </p>
</body>
</html>