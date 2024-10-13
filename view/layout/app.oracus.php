<!DOCTYPE html>
<html lang="zxx">

<?php //@include('view/layouts/head.oracus.php'); ?>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <?php //@include('view/layouts/header.oracus.php'); ?>

    <?php
        if (array_key_exists($currentRoute, $routes)) {
            $page = $routes[$currentRoute];

            View::render($page);
            
        } else {
            View::render('404');
        }
        ?>

    <?php //@include('view/layouts/footer.oracus.php'); ?>

    <?php //@include('view/layouts/scripts.oracus.php'); ?>
</body>

</html>