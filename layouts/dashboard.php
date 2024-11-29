<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Commerce | Project5</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/delitekno.png" class="brand">
			<div class="user">Dimas</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/kategori">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Kategori
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/produk">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Produk
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/keranjang">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Keranjang
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/users">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Users
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/order">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Order
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/order_detail">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> OrderDetail
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. Designed by Dimas Wardana
		</footer>
	</main>

</body>

</html>