async function getElementsCardShop() { //peticion elementos del carrito
    fetch(`http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiShopCard/ShopCard_service.php?idUnico=${idUnico}`)

        .then(res => res.json())
        .then(data => {
            console.log(data);
            products_inCardShop = JSON.stringify(data);
            CreateConfirm(data);
        })
        .catch(error => console.error("error", error));
}

function CreateConfirm(data) {
    container_confirm.innerHTML = `
                                    <div class="row">
                                    <h2 class="fs-2 fw-bold ">Order Resume</h2>
                                    </div>
                                     <div class="row">
                                    <h3 class="fs-3 ">${dniCliente}</h3>
                                    </div>
                                    <div class="row">
                                    <h3 class="fs-3">${dirEntrega}</h3>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-6">
                                           <div class="card w-75 highligth">
                                                <div class="card-body">
                                                    <h5 class="card-title">Bank Transfer</h5>
                                                    <p class="card-text">Easily make secure transfers to accounts worldwide. Please ensure you have the correct recipient account details and double-check the transaction amount. Transfers may take 1-3 business days to process, depending on your bank and the destination country..</p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card w-75">
                                                <div class="card-body">
                                                    <h5 class="card-title">More</h5>
                                                    <p class="card-text">Other payments.</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    `;
    //carrito
    let div_row = document.createElement("div");
    div_row.className = "row g-2";
    for (const product of data) {
        let div_col = document.createElement("div");
        div_col.className = "col-12";
        div_col.innerHTML = `<div class="p-3 border rounded">
        <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-evenly w-100">
        <p>${product.nombre}</p>
        <p>${product.precio} €<p>
        <p>${product.cantidad}</p>
        </div>
        </div>`;
        div_row.appendChild(div_col);
    }
    container_confirm.appendChild(div_row);
    let div_btn = document.createElement("div");
    div_btn.className = "row mt-2 text-center";
    div_btn.innerHTML = `
                        <form method='POST' action=''>
                        <input type="hidden" name="products" id="productsInput">
                          <input type="hidden" name="dirEntrega" id="dirEntregaInput">
                        <input type='submit' name='enviar' value='Confirm' class='btn btn-outline-success'>
                        </form>`;
    container_confirm.appendChild(div_btn);
    document.getElementById("productsInput").value = products_inCardShop;
    document.getElementById("dirEntregaInput").value = dirEntrega;



}
let products_inCardShop = [];
let container_confirm = document.getElementById("container-confirm");
let idUnico = sessionStorage.getItem("idUnico");
let dniCliente = sessionStorage.getItem("dniCliente");
let dirEntrega = sessionStorage.getItem("dirEntrega");
getElementsCardShop();