<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>No 1 || Naija Blog</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="News Blog Entertainment Naija Music Video Football Foreign Music" name="keywords">
        <meta content="Updated News, Football," name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="sass/slick/slick.css" rel="stylesheet">
        <link href="sass/slick/slick-theme.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

<body>

<div class="col-md-4 offset-md-4 mt-5 border p-5 mb-5">
    <h4 class="text-center">Login to Your Account</h4>
    <form action="" id="loginForm">
        <div class="form-group"><input type="text" class="form-control" placeholder="Email/Username" name="email"></div>
        <div class="form-group"><input type="password" class="form-control" placeholder="Password" name="password"></div>
        <div class="form-group"><button class="form-control btn btn-primary">Login</button></div>
    </form>
    <p>No account yet? <a href="">Signup </a>here.</p>
</div>


<?php require "inc/footer.php"; ?>

<script>
    $('#loginForm').submit(function () {
        var formData = new FormData(); //alert(formData);
        $.ajax({
            url: "userProcess.php?log=007",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (params) {
                if (params) {
                    swal({
                        title: "Successful !",
                        text: params,
                        icon: "success",
                    });

                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                }
            }
        });
        return false;
    })
</script>