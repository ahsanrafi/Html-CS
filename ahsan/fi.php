
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post"action="fi.php"> 
            <div class="form-group">
                <label for ="">please select the day</label>
                    <select name="day"id="">
                        <option>monday</option>
                        <option>tuesday</option>
                        <option>wednesday</option>
                        <option>thursday</option>
                        <option>friday</option>
                        <option>saturday</option>
                        <option>sunday</option>
</select>
</div>
<input type="submit" value="submit">
</form>
</div>
<div> 
<?php
if(isset($_POST['day'])){
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
 echo"today meal is $day";
}
?>

</div>
</div>
</body>
</html>