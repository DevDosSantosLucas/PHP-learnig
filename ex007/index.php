<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Loops:</h1>
    <h2>While</h2>
    <h3>select the year of your birth </h3>
    <?php $current_year = date('Y') ;
          $year = $current_year;
    ?>
    <select>
        <option>Select Year</option>
        <?php while($year >= 1950){ ?>
            <option> <?php echo $year ; ?></option>
            <?php $year -= 1 ;?>
            <?php }?>
    </select>
    <h2>For</h2>

    <h3>How long do you want to invest?</h3>

    <select>    
        <option>Select Year</option>
        <?php for($year = $current_year;$year <= 2050; $year += 1){ ?>
            <option> <?php echo $year ; ?></option>
            <?php }?>
    </select>
</body>
</html>