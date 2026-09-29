<?php require_once "../../resources/config.php"; ?>

<?php include VIEW_ADMIN_LAYOUT . DS . "head.php"; ?>
	
	<?php
		function cargarClassName() {
			global $url;
			if($url === "/admin/productos" || $url === "/admin/productos_add" || $url === "/admin/productos_edit") {
				echo "adminProductos";
			}
		}
	?>

	<body class="admin <?php cargarClassName(); ?>">

		<?php include VIEW_ADMIN_LAYOUT . DS . "sidebar.php"; ?>

		<div class="admin__principal">
			<?php include VIEW_ADMIN_LAYOUT . DS . "topNav.php"; ?>
			
			<?php if ($url === "/admin" || $url === "/admin/" || $url === "/admin/index.php"): ?>
				<?php include VIEW_ADMIN_DASH . DS . "contenido.php"; ?>
			<?php endif; ?>

			<?php 
				if($url === "/admin/productos") {
					include VIEW_ADMIN_PROD . DS . "productos.php";
				}
				if($url === "/admin/productos_add") {
					include VIEW_ADMIN_PROD . DS . "producto_form.php";
				}
			?>

		</div>
		<script src="../js/admin.js"></script>
		<?php if($url === "/admin/productos" || $url === "/admin/productos_add" || $url === "/admin/productos_edit"): ?>
			<script src="../js/admin-productos.js"></script>
		<?php endif; ?>
	</body>
</html>
