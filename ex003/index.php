<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primitive types PHP</title> 
</head>
<body>
    <h1>primitive types</h1>
    <?php 
        echo "0x = hexadecimal | 0b = binário | 0= Octal <br>";   
        $num = 010;
        echo "The value is:  $num ";
        var_dump($num); //test primitive types

        $num = 45.2;
        echo "<br> The value is: $num ";
        var_dump($num);

        $num = 3e2;
        echo "<br>The value is: $num ";
        var_dump($num);

        $num = "950";
        echo "<br>The value is: $num ";
        var_dump($num);

        $married = true;
        echo "<br> The value to married is: $married ";
        var_dump($married);

        $vetor = [6, 2, 9, 3, 5];
        var_dump($vetor);

        class Person {
            private string $name;
        }

        $p = new Person;
        echo "<br>";
        var_dump($p);



    ?>
    
</body>
</html>