<?php require_once "../../resources/config.php"; ?>

<?php include VIEW_ADMIN_LAYOUT . DS . "head.php"; ?>
	

	<?php $url = getURL(); ?>

	<?php
		function cargarClassName() {
			global $url;
			if($url === "/admin/productos" || $url === "/admin/productos_add" || $url === "/admin/productos_edit") {
				echo "adminProductos";
			}

			if($url === "/admin/categorias" || $url === "/admin/categorias_add" || $url === "/admin/categorias_edit") {
				echo "adminCategorias";
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

			<?php
				if($url === "/admin/categorias") {
					include VIEW_ADMIN_CAT . DS . "categorias.php";
				}
				if($url === "/admin/categorias_add") {
					include VIEW_ADMIN_CAT . DS . "categorias_form.php";
				}
			?>

		</div>
		<?php if($url === "/admin/productos" || $url === "/admin/productos_add" || $url === "/admin/productos_edit"): ?>
			<script src="../js/admin-productos.js"></script>
		<?php endif; ?>
	</body>
</html>
