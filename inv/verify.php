<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GistHub - Payment Verification</title>
</head>
<body>
    <?php

    if (isset($_GET['verify'])) {
        echo 'Reference: "' . $_GET['verify'] .'"'. ' Your reference code is your verification code, kindly write it down. <a href="invest.php">back to page</a>';
    }

    ?>
</body>
</html>