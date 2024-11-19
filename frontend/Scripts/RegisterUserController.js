async function RegisterUser() {
    let dni = formRegister.getElementsByTagName("input")[0].value;
    let nombre = formRegister.getElementsByTagName("input")[1].value;
    let dirEntrega = formRegister.getElementsByTagName("input")[2].value;
    let password = formRegister.getElementsByTagName("input")[3].value;
    //para que nos devuelva el true correctamente
    try {
        const res = await fetch(`http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiClients/Client_service.php?`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"

            },
            body: JSON.stringify({
                "dniCliente": dni,
                "nombre": nombre,
                "pwd": password,
                "dirEntrega": dirEntrega
            })
        });
        const data = await res.json();
        if (data.status == "success") {
            username = data.nombre;
            dirEntrega = data.dirEntrega;
            sessionStorage.setItem("username", username);
            sessionStorage.setItem("dirEntrega", dirEntrega);
            console.log(dirEntrega);
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
        })
        .catch(error => console.log("error", error));
}
let formRegister = document.getElementById("formRegister");
let username = "";
let dirEntrega = "";
formRegister.addEventListener("submit", async (e) => { //enviar los datos para crear las variables de sesion con PHP
    e.preventDefault();

    const isUserRegistered = await RegisterUser();

    if (isUserRegistered) {

        let formData = new FormData(formRegister);


        fetch(formRegister.action, {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                sessionStorage.setItem("dniCliente", data.dniCliente);
                if (data.dniCliente != "" && data.idUnico != "") {
                    console.log(data.dniCliente);
                    console.log(data.idUnico);
                    linkSession(data.dniCliente, data.idUnico);
                }
                location.href = "Products.php";
            })
            .catch(error => console.error("error", error));
    } else {
        alert("Credenciales incorrectas.");
    }
});