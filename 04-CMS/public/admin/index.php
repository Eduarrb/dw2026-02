<?php require_once "../../resources/config.php"; ?>

<?php include VIEW_ADMIN_LAYOUT . DS . "head.php"; ?>
	
	<body class="admin">

		<?php include VIEW_ADMIN_LAYOUT . DS . "sidebar.php"; ?>

		<div class="admin__principal">
			<?php include VIEW_ADMIN_LAYOUT . DS . "topNav.php"; ?>
			
			<?php if ($url === "/admin" || $url === "/admin/index.php"): ?>
				<?php include VIEW_ADMIN_DASH . DS . "contenido.php"; ?>
			<?php endif; ?>

			<?php 
				if($url === "/admin/productos") {
					include VIEW_ADMIN_PROD . DS . "productos.php";
				}
			?>

		</div>
		<script src="../js/admin.js"></script>
	</body>
</html>
