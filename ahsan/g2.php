<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$p=$_POST['perc'];
if ($p>=80){
    $grade='A+';
}
else if ($p>=70){
    $grade='A';
}

else if ($p>=60){
    $grade='B';
}

else{
    $grade='C';
}
?>
your grade is <?php echo $grade?>.
</body>
</html>