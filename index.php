<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First ever PHP</title>

    <style>
        body{
            display: flex;
            align-items:center;
            justify-content: center;
            height: 100vh;
        }
    </style>


</head>

<body>
    <?php

$book = "Bobby pendragon";
$no = false;
$yes = true;

if($yes){
    $message = "Good for you...Also you're Gay";
};

if($no){
    $newMessage = "You're Gay";
};

    ?>
    <h1>
   <?php echo $newMessage; ?>
</h1>

</body>

</html>
