<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Foreach PHP|</title> 
</head>
<body>
    <h1> Loop Foreach PHP|</h1>
    <h2>Courses: </h2>
    <?php 
        $courses = array(
            array(
                "n_students" =>200,
                "title" => "From beginner to advanced",
                "url"=> "http://udemy.com",
            ),
            array(
                "n_students" =>400,
                "title" => "learning develop websites",
                "url"=> "http://udemy.com",
            ),
            array(
                "n_students" =>500,
                "title" => "learning Django framework",
                "url"=> "http://udemy.com",
            ),
        );
    ?>
    
    <h3>My Courses:</h3>
    <?php 
        foreach($courses as $item){
            echo $item["title"];
            echo '<br>';
        }
    ?>
    <ul>
    <?php  foreach($courses as $item){ ?>
        <li>
            <a href= "<?php echo $item['url'];?>">
                    <?php  echo $item["title"];?><br></a>
                    <?php  echo $item["n_students"];?><br>
        </li><br>
    <?php }?>
    </ul>
</body>
</html>