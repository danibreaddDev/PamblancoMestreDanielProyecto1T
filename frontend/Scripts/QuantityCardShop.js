async function getElementsCardShop() { //peticion elementos del carrito
    fetch(`http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiShopCard/ShopCard_service.php?idUnico=${idUnico}`)

        .then(res => res.json())
        .then(data => {
            setQuantityitems(data);
        })
        .catch(error => console.error("error", error));
}
export function setQuantityitems(data) {
    if (data.length != 0) {
        ShopCardQuantity.textContent = data.length;
        ShopCardQuantity.style.display = "block";
    } else {
        ShopCardQuantity.textContent = "";
        ShopCardQuantity.className = "visually-hidden";
    }

}
let ShopCardQuantity = document.getElementById("ShopCardQuantity");
let idUnico = sessionStorage.getItem("idUnico");
getElementsCardShop();
