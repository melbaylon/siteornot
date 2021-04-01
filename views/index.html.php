<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site/not</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <main id="container">
        <h1><a href="<?php echo $fullDomain; ?>" target="_blank"><?php echo $fullDomain; ?></a></h1>
        <p>
        <?php
            if ($result == true) {
                echo "Site! 🥳";
            } else {
                echo "Not a site! 😭";
            }
        ?>
        </p>
        <form action="<?php $_SERVER['PHP_SELF']; ?>">
            <input class="btn btn-dark" type="submit" value="Try Again">
        </form>
    </main>

</body>

</html>