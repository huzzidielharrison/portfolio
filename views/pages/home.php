<?php

use helpers\View;

?>
<!-- Page Headers -->
<?php View::render('partials/header') ?>

<body>

<main>
    <?php View::render('components/header') ?>
    <?php View::render('components/about') ?>
    <?php View::render('components/technologies') ?>
    <?php View::render('components/contact') ?>
</main>

<!-- Footer -->
<?php View::render('partials/footer'); ?>
<script type="text/javascript" src="/dist/app.js"></script>
</body>
</html>
