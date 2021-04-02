<?php include( realpath( __DIR__ . '/../includes/header.php') ) ?>

	<main class="d-flex justify-content-center pt-3 pb-3" style="background-color: #eee;">
		<div class="d-flex flex-column w-75 p-5 border rounded" style="background-color: white;">
			<div class="d-flex justify-content-between mb-5 pr-5">
				<div>
					<div class="mb-4">
						<h1>Listo! Tu compra ha sido procesada con éxito</h1>
					</div>
					<div style="font-size: 1.5rem">
						<p>La información de su pago es la siguiente:</p>
					</div>
					<div class="pl-3">
						<p>Su ID del método de pago ocupado (<i>payment_method_id</i>) es: <i><b><?php echo $payment_method_id; ?></i></b></p>
					</div>
					<div class="pl-3">
						<p>La referencia externa ocupada en el pago (<i>external_reference</i>) es: <i><b><?php echo $external_reference; ?></i></b></p>
					</div>
					<div class="pl-3">
						<p>Su ID del pago (<i>payment_id</i>) es: <i><b><?php echo $payment_id; ?></i></b></p>
					</div>
				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-file-earmark-image-fill p-2" viewBox="0 0 16 16">
					<path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707v5.586l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zm-1.498 4a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
					<path d="M10.564 8.27L14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/>
				</svg>
			</div>
			<div class="d-flex justify-content-center">
				<a href="<?php echo site_url('productos/index')?>">
					<button class="btn btn-outline-dark" style="border-radius: 50px; height: 4rem; width: 15rem">
						Seguir comprando
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
        
<?php include( realpath(__DIR__ . '/../includes/footer.php')) ?>
