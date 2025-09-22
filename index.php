<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
    <title>MovieClub</title>
</head>
<body>

    <?php require __DIR__ . '/includes/navigation.php'; ?>

    <div class="container mt-3">
        <h1>Welcome to the Movie Club!</h1>
        <a href="signup.php"><button type="button" class="btn btn-primary">Click here to sign up!</button></a>
        <a class="p-3" href="welcome.php?member=false"><button type="button" class="btn btn-dark">VIP Area</button></a>
    </div>
    
    
    
</body>
</html>