<?php

$name = '';
$movie = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $movie = $_POST['movie'] ?? '';


    if (trim($name) === '') {
        $errors['name'] = "Name is required";
    }
    if (trim($movie) === '') {
        $errors['movie'] = "Favorite movie is required";
    }

    if (empty($errors)) {

        // PRG (POST -> REDIRECT -> GET)
        $qs = 'ok=1&name=' . urlencode($name) . '&movie=' . urlencode($movie);
        header('Location: signup.php?' . $qs);
        exit;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
    <title>Sign-up</title>
</head>

<body>

    <?php require __DIR__ . '/includes/navigation.php'; ?>

    <div class="container">

        <!-- FLASH MESSAGE -->
        <?php if (isset($_GET['ok']) && $_GET['ok'] === '1'): ?>
            Thanks <?= $_GET['name'] ?>, we've added your favorite movie "<?= $_GET['movie'] ?>" to our club list.

        <?php endif; ?>
        <!-- END FLASH MESSAGE -->

        <!-- Handle errors -->
        <?php if ($errors): ?>
            <div class="alert alert-danger">
                Please fix:
                <ul class="mb-0">
                    <?php foreach ($errors as $msg): ?>
                        <li><?= $msg ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>


        <?php endif; ?>

        <?php if ($_SERVER['REQUEST_METHOD'] !== 'POST' || $errors):
            ?>


            <form action="signup.php" method="post">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value=<?= $name ?>>
                </div>
                <div class="mb-3">
                    <label for="movie" class="form-label">Favorite Movie?</label>
                    <input type="text" class="form-control" id="movie" name="movie" value=<?= $movie ?>>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        <?php else: ?>
            <h2>Raw POST</h2>
            <pre><?php var_dump($_GET); ?></pre>

        <?php endif; ?>



    </div>

</body>

</html>