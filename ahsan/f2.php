<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$d = $_POST['day'];
 if($d =='monday') {
   $day='Daal Chana';
}
else if($d =='tuesday'){
   $day='chiken masala';
}
else if($d =='wednesday'){
   $day='paneer gosht';
}
else if($d =='thursday'){
   $day='chiken masala';
}
else if($d =='friday'){
    $day='chiken masala';
 }
 else if($d =='saturday'){
    $day='paneer gosh';
 }
 else{
    $day='chiken masala';
 }

?>
Today meal is <?php echo $day?>.
</body>
</html>