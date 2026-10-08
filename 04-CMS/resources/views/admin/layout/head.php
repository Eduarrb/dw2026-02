<?php
	if(!isset($_COOKIE['name'])) {
		unset(
			$_SESSION['id'], 
			$_SESSION['nombres'],
			$_SESSION['apellidos'], 
			$_SESSION['rol']
		);
		redirect('../login');
	}

	if(!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
		redirect('../login');
	}

?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Dashboard | TechBox Admin</title>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="../css/estilos.css" />
		<script src="../js/admin.js" defer></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="../js/swal.js"></script>
	</head>