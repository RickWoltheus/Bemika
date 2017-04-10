<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bemika Software</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bemika/styles.css">
    <link rel="stylesheet" type="text/css" href="css/bemika/intro.css">
    <link rel="stylesheet" type="text/css" href="css/bemika/hover.css">
    <link rel="stylesheet" href="css/bemika/bootstrap.css">
    <?php

    if (empty($_GET['action']) || $_GET['action'] == "default"){
      echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="javascript/topscript.js" type="text/javascript"></script>';
    }

    ?>

<!--    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
</head>
