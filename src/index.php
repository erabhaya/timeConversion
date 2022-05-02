<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
</head>

<body>
    <form action="" method="POST">
        <input type="number" name="number">
        <input type="radio" name="htom">Hours to min
        <input type="radio" name="htos">Hours to sec
        <input type="submit" name="convert" value="Convert">
    </form>

    <?php
    $inputByUser=$_POST['number'];
    $conversionIntoMin = $inputByUser*60;
    $conversionIntoSec = $inputByUser*60*60;
        if(isset($_POST['htom'])){
            echo $inputByUser = "Converted into ".$conversionIntoMin." total min.";
        } if(isset($_POST['htos'])){
            echo $inputByUser="Converted into ".$conversionIntoSec." total sec.";
        }
    
    ?>
</body>

</html>