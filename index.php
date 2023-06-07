<?php
include "./core/bootstrap.php";
session_start();
$php = new \bootstrap\Bootstraps("core");
$php->includes();
$css = new \bootstrap\Bootstraps("css", "css");
$autoOverzicht = new \bootstrap\AutoOverzicht();

$autoOverzicht->add(new \bootstrap\auto("BMW", "M5", "grijs", 27500, "./img/autos/BMW M5.png"));
$autoOverzicht->add(new \bootstrap\auto("Audi", "A8", "grijs", 37000, "img/autos/audi A8.png"));
$autoOverzicht->add(new \bootstrap\auto("Mercedes", "C200", "grijs", 41000, "img/autos/mercedes c200.png"));
$autoOverzicht->add(new \bootstrap\auto("Ford", "Mondeo", "wit", 18700, "img/autos/ford mondeo.png"));
$autoOverzicht->add(new \bootstrap\auto("Ford", "Focus", "wit", 14300, "img/autos/ford focus.png"));
$autoOverzicht->add(new \bootstrap\auto("Volkswagen", "Tiguan", "wit", 22500, "img/autos/volkwages tiguan.png"));

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mr wheetly</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <?= $css->link() ?>
</head>
<body>
    <div>
        <img class="img-fluid" src="img/banner.png" alt="Mr. Wheetly">
    </div>
    <?= Controller() ?>
    <?= searchform($autoOverzicht) ?>

    <?= AutoFactory($autoOverzicht); ?>
</body>
</html>
