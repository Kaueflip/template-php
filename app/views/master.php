<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title><?= $this->e($title) ?></title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="./assets/css/reset.css" rel="stylesheet" />
    <link href="./assets/css/styles.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <?php $this->insert('partials/navbar') ?>
    </nav>

    <main class="py-5 pt-0">
        <?= $this->section('content') ?>
    </main>

    <footer class="py-5 bg-dark">
        <?php $this->insert('partials/footer') ?>
    </footer>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/scripts.js"></script>


</body>

</html>