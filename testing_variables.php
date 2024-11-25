<?php $username = "Wesam"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "$username"?>'s Profile</title>
</head>
<body>
    <div><?php echo "$username"?></div>
    <div><?php echo "$username"?> You Scored 100 Pointes!</div>
    <?php include("scores.php")?>
</body>
</html>