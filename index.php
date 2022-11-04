<?php
$h = date('H');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background: url(images/<?php echo $h % 6; ?>.jpg);
            background-size: cover;
            color: #f3f;
        }
    </style>
    <title>Project</title>
</head>
<body>
    
    <h1><?php echo $h; ?></h1>
    
    
</body>
</html>