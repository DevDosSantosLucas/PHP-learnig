<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>processing result</h1>
    </header> 
    <main>
        <?php 
            //var_dump($_GET);
            $name = $_GET["name"] ?? "null";
            $lastname = $_GET["lastname"] ?? "null";
            echo "<p>Nice To Meet you, $name $lastname! This is my website!"

        ?>
        <p><a href="javascript:history.go(-1)">Back to previous page</a></p>
    </main>   
</body>