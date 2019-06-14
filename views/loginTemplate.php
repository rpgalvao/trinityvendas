<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Acesso ao Sistema</title>
        <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/Trinity.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
    </head>
    <body style="background-image: linear-gradient(to bottom, #003e51, #007aba, #00a1bb);">
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>