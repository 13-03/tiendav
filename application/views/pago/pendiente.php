<?php include( realpath( __DIR__ . '/../includes/header.php') ) ?>

	<main class="d-flex justify-content-center pt-3 pb-3" style="background-color: #eee;">
		<div class="d-flex flex-column w-75 p-5 border rounded" style="background-color: white;">
			<div class="d-flex justify-content-center mb-4">
				<h1>Listo! Tu compra queda en estado pendiente</h1>
			</div>
			<div class="d-flex justify-content-center mb-5" style="font-size: 1.5rem">
				<p>Para terminar el proceso paga según las indicaciones mandadas al correo: <i><b><?php echo $external_reference; ?></b></i></p>
			</div>
			<div class="d-flex justify-content-center">
				<a href="<?php echo site_url('productos/index')?>">
					<button class="btn btn-outline-dark" style="border-radius: 50px; height: 4rem; width: 15rem">
						Volver a productos
						<span class="ml-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
									<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
								</svg>
							</span>
					</button>
				</a>
			</div>
		</div>
	</main>
</body>

<?php include( realpath( __DIR__ . '/../includes/footer.php') ) ?>
