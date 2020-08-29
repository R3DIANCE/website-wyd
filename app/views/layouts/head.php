<?php if (!defined('LOCAL')) exit(); ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        /*body {
        background: url(https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm33-chim-07-b-abstract_1.jpg?w=1200&h=1200&dpr=1&fit=clip&crop=default&fm=jpg&q=75&vib=3&con=3&usm=15&cs=srgb&bg=F4F4F3&ixlib=js-2.2.1&s=d1d1bd646184bcdd26582951ab5f5209);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        background-attachment: fixed;
    }*/
        <?php if (isset($_SESSION['login'])) : ?>
            .nav-link{
                color: white;
                transition: all 0.6s;
            }
            .nav-link:hover{
                color: grey;
            }
        <?php endif; ?>
    </style>

    <title>WYD TROLL</title>
</head>

<body class="bg-light">