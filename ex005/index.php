<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title> 
</head>
<body>
    <h1>Array</h1>
    <h2>Courses: </h2>
    <p><?php 
        $courses = array(
            "Course1" =>"PHP", 
            "Course2" =>"HTML-CSS", 
            "Course3" =>"Python",
        );

        echo $courses["Course1"] . ', ' . $courses["Course2"] . ', ' . $courses["Course3"];

    ?></p>
    <h2>Details: </h2>
    <?php 
        $courses = array(
            "PHP"=>array(
                "n_students" =>200,
                "title" => "From beginner to advanced",
                "url"=> "http://udemy.com",
            ),
            "HTML-CSS"=>array(
                "n_students" =>400,
                "title" => "learning develop websites",
                "url"=> "http://udemy.com",
            ),
            "Python"=>array(
                "n_students" =>500,
                "title" => "learning Django framework",
                "url"=> "http://udemy.com",
            ),
        );
    ?>
    
    <strong>Title:
    <?php 
        echo $courses['PHP']["title"]
    ?></strong>
    <br>
    

    <strong>nº Alunos:
    <?php 
        echo $courses['PHP']["n_students"]
    ?></strong>
    <br>

    <strong>URL:
    <?php 
        echo $courses['PHP']["url"]
    ?></strong>
    <br>
    
</body>
</html>