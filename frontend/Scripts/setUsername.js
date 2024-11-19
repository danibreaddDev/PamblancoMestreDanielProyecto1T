export function setUsername() {
    if (sessionStorage.getItem("username") != null) {
        username_span.textContent = sessionStorage.getItem("username");
    }
}
let username_span = document.getElementById("userNames");
setUsername();