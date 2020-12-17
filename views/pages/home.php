<?php

use helpers\View;

?>
<!-- Page Headers -->
<?php View::render('partials/header') ?>

<body>

<main>
    <div class="header f-center-xy">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell flex-container align-center align-center">
                    <div class="flex-container flex-dir-column align-center align-middle">
                        <img class="avatar" src="../../assets/images/huzzidiel.jpg" alt="Avatar">
                        <h1>
                            <span class="heading h1 uppercase full-name">Huzzidiel Harrison</span>
                            <span class="heading h5 uppercase profession">Ing. en sistemas computacionales</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<?php View::render('partials/footer'); ?>
<script type="text/javascript" src="/dist/app.js"></script>
</body>
</html>
