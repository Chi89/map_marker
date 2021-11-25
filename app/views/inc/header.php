<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">

  
  <script type="text/javascript" src="<?php echo URLROOT; ?>/js/jquery-1.10.2.min.js"></script>

  <title><?php echo SITENAME; ?></title>

  <style type="text/css">
    h1.heading {
      padding: 0px;
      margin: 0px 0px 10px 0px;
      text-align: center;
      font: 18px Georgia, "Times New Roman", Times, serif;
    }

    /* width and height of google map */
    #google_map {
      width: 100%;
      height: 600px;
      margin-top: 0px;
      margin-left: auto;
      margin-right: auto;
    }

    /* Marker Edit form */
    .marker-edit label {
      display: block;
      margin-bottom: 5px;
    }

    .marker-edit label span {
      width: 100px;
      float: left;
    }

    .marker-edit label input,
    .marker-edit label select {
      height: 24px;
    }

    .marker-edit label textarea {
      height: 60px;
    }

    .marker-edit label input,
    .marker-edit label select,
    .marker-edit label textarea {
      width: 60%;
      margin: 0px;
      padding-left: 5px;
      border: 1px solid #DDD;
      border-radius: 3px;
    }

    /* Marker Info Window */
    h1.marker-heading {
      color: #585858;
      margin: 0px;
      padding: 0px;
      font: 18px "Trebuchet MS", Arial;
      border-bottom: 1px dotted #D8D8D8;
    }

    div.marker-info-win {
      max-width: 300px;
      margin-right: -20px;
    }

    div.marker-info-win p {
      padding: 0px;
      margin: 10px 0px 10px 0;
    }

    div.marker-inner-win {
      padding: 5px;
    }

    button.save-marker,
    button.remove-marker {
      border: none;
      background: rgba(0, 0, 0, 0);
      color: #00F;
      padding: 0px;
      text-decoration: underline;
      margin-right: 10px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <?php require APPROOT . '/views/inc/navbar.php'; ?>
  <div class="container">