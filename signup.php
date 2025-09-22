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
        <form>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="fav_movie" class="form-label">Favorite Movie?</label>
                <input type="text" class="form-control" id="fav_movie" name="fav_movie">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>