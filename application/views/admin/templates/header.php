<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>

  <!-- Custom fonts for this template -->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <script src="https://cdn.tiny.cloud/1/7zhiqhgo3kllfp0jo31eyjfi6iqnbr81y0dzzyqi009yis3u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#arkonten'
    }, );
  </script>

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/rs.css') ?>">

  <style>
    .collapsable {
      height: 100px;
      overflow: hidden;
      text-overflow: ellipsis;
      display: block;
    }

    .collapsable::after {
      content: '...';
      position: relative;
    }

    .preview_wrap {
      width: 100%;
      height: auto;
      padding: 0;
      overflow: hidden;
    }

    .frame_wrap {
      width: 90vw;
      height: 350px;
      border: 0;
      -ms-transform: scale(0.75);
      -moz-transform: scale(0.75);
      -o-transform: scale(0.75);
      -webkit-transform: scale(0.75);
      transform: scale(0.75);

      -ms-transform-origin: 0 0;
      -moz-transform-origin: 0 0;
      -o-transform-origin: 0 0;
      -webkit-transform-origin: 0 0;
      transform-origin: 0 0;
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">