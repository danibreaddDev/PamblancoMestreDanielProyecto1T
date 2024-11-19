async function ValidateUser() { //validar el usuario
    let dni = document.getElementById("formLogin").getElementsByTagName("input")[0].value;
    let password = document.getElementById("formLogin").getElementsByTagName("input")[1].value;
    //para que nos devuelva el true correctamente
    try {
        const res = await fetch(`http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiClients/Client_service.php?dniCliente=${dni}&pwd=${password}`);
        const data = await res.json();
        if (data.status == "success") {
            username = data.nombre;
            dirEntrega = data.dirEntrega;
            return true;
        }
        return false;
    } catch (error) {
        console.error("error", error);
        return false;
    }
}
async function linkSession(dniCliente, idUnico) {
    console.log("dni ", dniCliente);
    console.log("id ", idUnico);
    fetch("http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiShopCard/ShopCard_service.php", {
        method: "PUT",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            "idUnico": idUnico,
            "dniCliente": dniCliente

        })

    })
        .then(res => res.json())
        .then(data => {
            console.log(data);
            location.href = "Products.php";

        })
        .catch(error => console.log("error", error));
}
let form = document.getElementById("formLogin");

let username = "";
let dirEntrega = "";
form.addEventListener("submit", async (e) => { //enviar los datos para crear las variables de sesion con PHP
    e.preventDefault();

    const isUserValid = await ValidateUser();
    console.log("valido");
    if (isUserValid) {
        let formData = new FormData(form);
        fetch(form.action, {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                sessionStorage.setItem("username", username);
                sessionStorage.setItem("dirEntrega", dirEntrega);
                sessionStorage.setItem("dniCliente", data.dniCliente);
                if (data.dniCliente !== "" && data.idUnico !== "") {
                    linkSession(data.dniCliente, data.idUnico);
                } else {
                    location.href = "Products.php";
                }

            })
            .catch(error => console.error("error", error));
    } else {
        alert("Credenciales incorrectas.");
    }
});









