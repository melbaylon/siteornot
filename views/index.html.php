<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site/not - <?php echo $randomSiteDomainName;?></title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
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
        <form action="" method="post">
            <input class="btn btn-dark" name="tryAgain" type="submit" value="Try Again">
        </form>
    </main>

    <script src="scripts/bootstrap.min.js"></script>
</body>

</html>