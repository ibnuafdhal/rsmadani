<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/79bb9df689.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/rs.css') ?>">

    <style>
    .banner {
        height: 365px;
        object-fit: cover;
        object-position: top center;

    }

    .collapsed-text::after {
        content: '... ';
    }

    .dokter-card {
        height: 400px;
        overflow: hidden;
        transition: .0.4s;
    }

    .uncollapse {
        height: 100%;
    }
    </style>
</head>

<body>