import { setQuantityitems } from "../Scripts/QuantityCardShop.js";
async function getElementsCardShop() { //peticion elementos del carrito
    fetch(`http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiShopCard/ShopCard_service.php?idUnico=${idUnico}`)

        .then(res => res.json())
        .then(data => {
            CreateShopCard(data);
            console.log(arr_quantities);
            setQuantityitems(data);
        })
        .catch(error => console.error("error", error));
}
async function UpdateQuantity(idProducto, cantidad) {
    console.log(idProducto);
    console.log(cantidad);
    console.log(idUnico);
    fetch("http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiShopCard/ShopCard_service.php", {
        method: "PUT",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            "idUnico": idUnico,
            "idProducto": idProducto,
            "cantidad": cantidad
        })

    })
        .then(resp => resp.json())
        .then(data => {
            console.log("Succes:", data);
            UpdateAlert(data);
        })
        .catch(error => console.error("error:", error));
}
async function EditElementsCardShop() { //peticion para editar la cantidad
    for (let index = 0; index < arr_quantities.length; index++) {
        UpdateQuantity(arr_quantities[index].idProducto, arr_quantities[index].cantidad);

    }
    getElementsCardShop();

}
async function DeleteElementsCardShop(idProducto) { //peticion para eliminar del carrito
    //borraremos el producto del carrito
    console.log("eliminar");
    fetch("http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiShopCard/ShopCard_service.php", {
        method: 'DELETE',
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            "idUnico": idUnico,
            "idProducto": idProducto
        })
    })
        .then(resp => resp.json())
        .then((data) => {
            console.log(data);
            DeleteAlert(data);
            getElementsCardShop();
        }).catch(error => console.error("error", error));

}
async function getProduct_byID(product_id) { //peticion para sacar la informacion de un producto (para la imagen)
    try {
        const response = await fetch(`http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiProducts/Product_service.php?idProducto=${product_id}`);
        const data = await response.json();
        return data;
    } catch (error) {

        console.error("Error:", error);
        return null;
    }
}
function UpdateAlert(data) {
    toastLiveExample.innerHTML = "";
    if (data.status == "success") {
        toastLiveExample.innerHTML = `
                                        <div class="toast-header">
                                            <img src="..." class="rounded me-2" alt="...">
                                            <strong class="me-auto">LootClan</strong>
                                            <small>now</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                         <div class="toast-body subtitle">
                                            Updated Product in CardShop
                                        </div>
                                    `;
    } else {
        toastLiveExample.innerHTML = `
                                        <div class="toast-header">
                                            <img src="..." class="rounded me-2" alt="...">
                                            <strong class="me-auto">LootClan</strong>
                                            <small>now</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                         <div class="toast-body subtitle">
                                           Ocurred an error
                                        </div>
                                    `;
    }
    toastBootstrap.show();
}

function DeleteAlert(data) {
    toastLiveExample.innerHTML = "";
    if (data.status == "success") {
        toastLiveExample.innerHTML = `
                                        <div class="toast-header">
                                            <img src="..." class="rounded me-2" alt="...">
                                            <strong class="me-auto">LootClan</strong>
                                            <small>now</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                         <div class="toast-body subtitle">
                                            Deleted Product in CardShop
                                        </div>
                                    `;
    } else {
        toastLiveExample.innerHTML = `
                                        <div class="toast-header">
                                            <img src="..." class="rounded me-2" alt="...">
                                            <strong class="me-auto">LootClan</strong>
                                            <small>now</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                         <div class="toast-body subtitle">
                                           Ocurred an error
                                        </div>
                                    `;
    }
    toastBootstrap.show();
}

function CreateShopCard(data) {
    container_products.innerHTML = "";

    console.log(data);
    if (data.length != 0) {
        for (const product of data) {
            if (!arr_quantities.some(prod => prod.idProducto == product.idProducto)) {
                arr_quantities.push({
                    "idProducto": product.idProducto,
                    "cantidad": product.cantidad

                });
            }

            let product_quantity = product.cantidad;
            let product_price = product.precio;

            // Por cada producto
            getProduct_byID(product.idProducto).then(producto => {
                totalCardShop += product_price * product_quantity;


                // Crear el card del producto
                let div_card = document.createElement("div");
                div_card.className = "col-12";
                div_card.innerHTML = `
                <div class="border rounded p-3 mb-3 h-100">
                    <div class="row g-0 d-flex flex-column flex-sm-row justify-content-between h-100 ">
                        <div class="col-md-4">
                            <img src="${producto.foto}" class="img-fluid rounded-start" alt="Imagen del Producto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-end justify-content-md-center h-100 ">
                                <h5 class="card-title">${product.nombre}</h5>
                                <p class="card-text">Precio: <strong>${product.precio}€</strong></p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-outline-secondary btn-sm restar">-</button>
                                    <span class="mx-3 quantity">${product.cantidad}</span>
                                    <button class="btn btn-outline-secondary btn-sm sumar">+</button>
                                </div>
                                <div class="d-flex justify-content-center mt-2">
                                    <button class="btn btn-outline-secondary btn-sm eliminar" id='liveToastBtn'>X</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;

                //agregamos el elemento al contenedor
                container_products.appendChild(div_card);

                // Seleccionar botones y agregar eventos
                let btnRestar = div_card.querySelector(".restar");
                let btnSumar = div_card.querySelector(".sumar");
                let btnEliminar = div_card.querySelector(".eliminar");
                let quantityElement = div_card.querySelector(".quantity");
                //instancia para la alerta
                toastTrigger = document.getElementById('liveToastBtn');
                toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);

                // Eventos
                btnRestar.addEventListener("click", () => {
                    let quant = Number(quantityElement.textContent);
                    if (quant > 1) {
                        quant -= 1;
                        quantityElement.textContent = quant;
                        let elem_arr_quantity = arr_quantities.find(prod => prod.idProducto == producto.idProducto);
                        elem_arr_quantity.cantidad = quant;
                        console.log(arr_quantities);
                    }
                });

                btnSumar.addEventListener("click", () => {
                    let quant = Number(quantityElement.textContent);
                    quant += 1;
                    quantityElement.textContent = quant;
                    let elem_arr_quantity = arr_quantities.find(prod => prod.idProducto == producto.idProducto);
                    elem_arr_quantity.cantidad = quant;
                    console.log(arr_quantities);
                });

                btnEliminar.addEventListener("click", () => {
                    //llamar a peticion de eliminar
                    console.log(product.idProducto);
                    DeleteElementsCardShop(product.idProducto);
                    console.log("Producto eliminado");
                });
            });
        }

        setTimeout(() => {
            console.log(totalCardShop);
            createPayment();
            totalCardShop = 0;
        }, 400);
        container_btn.style.display = "block";
        container_products.style.display = "block";
    } else {
        // Carrito vacío
        let sentence = document.createElement("h2");
        sentence.className = "fs-2 fw-bold mt-5 pt-5";
        sentence.innerText = "Nothing in CardShop";
        container_title.appendChild(sentence);
        container_products.style.display = "none";
        container_payment.style.display = "none";
        container_btn.style.display = "none";
    }
}

function createPayment() {
    let payment_card = document.createElement("div");
    payment_card.className = "col-12 h-100";
    payment_card.innerHTML = `
    
        <div class="border rounded p-4 d-flex ">
            <div class="card-body text-center">
                <h3 class="mb-4">Total to pay: ${totalCardShop}€</h3>
                <a href='Confirm.php' class="btn btn-outline-success me-2">Pay</a>

                <a href='Products.php' class="btn btn-outline-secondary">Buy More</a>
            </div>
        </div>
   
    `;
    container_payment.innerHTML = "";
    container_payment.appendChild(payment_card);
    container_payment.style.display = "block";
}

let idUnico = sessionStorage.getItem("idUnico");
console.log(idUnico);
let arr_quantities = [];
let totalCardShop = 0;
let container_products = document.getElementById("container-products");
let container_payment = document.getElementById("container-payment");
let container_title = document.getElementById("title");
let container_btn = document.getElementById("container-btn-actualizar");
let btn_actualizar = document.getElementById("actualizar");
let toastTrigger = "";
let toastBootstrap = "";
let toastLiveExample = document.getElementById('liveToast');
getElementsCardShop();
btn_actualizar.addEventListener("click", () => {
    EditElementsCardShop();

})