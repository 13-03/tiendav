<?php include('includes/header.php') ?>

    <section class="d-flex justify-content-center pt-3" style="background-color: #eee;">
        <div class="d-flex flex-column w-75 h-auto pr-4 pl-4 pt-3 pb-3 border rounded" style="background-color: white;">
			<!--<h2><?var_dump($phone_info)?></h2>-->
			
           
            <p class="text-center">
                Somos tu mejor opción
                <svg id="Capa_1" enable-background="new 0 0 512 512" height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg"><g><path d="m497 179.91h-35.461c-18.803-17.818-44.18-28.763-72.067-28.763-32.816 0-62.155 15.158-81.396 38.836-14.666-11.616-32.856-18.039-52.077-18.039s-37.411 6.423-52.077 18.039c-19.241-23.678-48.579-38.836-81.396-38.836-27.887 0-53.264 10.946-72.067 28.763h-35.459c-8.284 0-15 6.716-15 15s6.716 15 15 15h13.364c-6.84 13.919-10.69 29.562-10.69 46.09 0 57.816 47.037 104.853 104.853 104.853s104.853-47.037 104.853-104.853c0-14.111-2.809-27.577-7.885-39.877 9.894-9.092 22.79-14.18 36.506-14.18s26.612 5.088 36.506 14.18c-5.077 12.3-7.885 25.766-7.885 39.877 0 57.816 47.037 104.853 104.853 104.853s104.853-47.037 104.853-104.853c0-16.528-3.849-32.171-10.69-46.09h13.362c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/></g></svg>
            </p>
        </div>
    </section>

    <section class="d-flex flex-column pt-3 pb-4" style="background-color: #eee;">
        <div class="d-flex flex-column align-self-center justify-content-center w-75 h-auto pr-4 pl-4 pt-3 pb-5 border rounded" style="background-color: white;">
            <p class="font-weight-bold">Mostrando todos los productos (6)</p>
            <div class="d-flex align-self-center pt-4"><?php for ($i=1; $i<=4; $i++) { ?>
                <div class="d-flex flex-column shadow border border-secondary pl-3 pr-3 pb-3 mr-4" style="border-radius: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="120" fill="currentColor" class="d-flex align-self-center bi bi-file-earmark-image-fill" viewBox="0 0 16 16">
                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707v5.586l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zm-1.498 4a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                        <path d="M10.564 8.27L14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/>
                    </svg>
                    <p class="mb-0" style="font-size: 10px">Marca del producto</p>
                    <p class="mb-0">Nombre del producto</p>
                    <p>$390</p>
                    <a href="#">
                        <button id="myBtn" type="button" data-toggle="modal" data-target="myModal" class="modalBtn btn btn-outline-dark" style="border-radius: 20px; height: 40px; width: 180px">
                            Añadir al carrito
                            <span class="ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
            <?php } ?>
            </div>
            <div class="d-flex align-self-center pt-4"><?php for ($i=1; $i<=2; $i++) { ?>
                <div class="d-flex flex-column shadow border border-secondary pl-3 pr-3 pb-3 mr-4" style="border-radius: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="120" fill="currentColor" class="d-flex align-self-center bi bi-file-earmark-image-fill" viewBox="0 0 16 16">
                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707v5.586l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zm-1.498 4a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                        <path d="M10.564 8.27L14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/>
                    </svg>
                    <p class="mb-0" style="font-size: 10px">Marca del producto</p>
                    <p class="mb-0">Nombre del producto</p>
                    <p>$390</p>
                    <a href="#">
                        <button id="myBtn" type="button" data-toggle="modal" data-target="myModal" class="modalBtn btn btn-outline-dark" style="border-radius: 20px; height: 40px; width: 180px">
                            Añadir al carrito
                            <span class="ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
            <?php } for ($i=0; $i < 2 ; $i++) { ?>
                <div style="width: 238px; height: 257px;"></div>
            <?php } ?>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 1200px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h2" id="exampleModalLabel">Carrito</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div> 
                    <div class="modal-body">
                        <p class="font-weight-bold">Productos en el carrito</p>
                        <hr>
                        <div class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="200" fill="currentColor" class="d-flex align-self-center bi bi-file-earmark-image-fill pr-4 pl-3" viewBox="0 0 16 16">
                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707v5.586l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zm-1.498 4a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                                <path d="M10.564 8.27L14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/>
                            </svg>
                            <div class="d-flex flex-column align-self-center">
                                <p class="font-weight-bold">Nombre del producto</p>
                                <p>Este producto es un producto de prueba y esta es la descripción principal del mismo</p>
                            </div>
                            <p class="h3 align-self-center" style="margin-left: 120px">$390</p>
                            <div class="d-flex align-self-center shadow border border-secondary ml-5" style="border-radius: 20px; width: 150px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                                <hr style="border: none; border-left: 1px solid hsla(200, 10%, 50%,100); height: 46px; width: 1px; margin: 0;">
                                <div class="d-flex justify-content-center align-self-center" style="width: 60px"><p style="margin-bottom: 0">1</p></div>
                                <hr style="border: none; border-left: 1px solid hsla(200, 10%, 50%,100); height: 46px; width: 1px; margin: 0;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                </svg>
                            </div>
                        </div>
                        <hr>
                        <p class="d-flex justify-content-end h2 mr-4 mt-4 mb-4">Total con envío:   $390</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-dark mr-4" style="border-radius: 50px; height: 60px; width: 240px">
                            <a data-preferenceId="<?php echo $preference->id; ?>" href="<?php echo $preference->init_point; ?>" style="text-decoration:none; color: gray;">Pagar la compra</a>
                            <span class="ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                </svg>
                            </span>
                        </button>
                        <!--<script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js" data-preference-id="<?php /*echo $preference->id; */?>"> </script>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-self-center mt-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle-fill mr-2" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
            <div class="d-flex justify-content-center rounded-circle bg-dark" style="height: 25px; width: 25px;"><p class="text-white">1</p></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-circle-fill ml-2" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg>
        </div>
    </section>

<?php include('includes/footer.php') ?>
