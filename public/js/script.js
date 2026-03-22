document.getElementById("btnLogin").addEventListener("click", () => {
    document.getElementById("login").style.display = "block";
});

function cerrarModal() {
    document.getElementById("login").style.display = "none";
}

function login() {
    let email = document.getElementById("email").value;
    let pass = document.getElementById("password").value;
    let mensaje = document.getElementById("mensaje");

    if (email === "" || pass === "") {
        mensaje.innerHTML = "⚠️ Todos los campos son obligatorios.";
        mensaje.style.color = "red";
    } else {
        mensaje.innerHTML = "✔ Inicio de sesión exitoso.";
        mensaje.style.color = "green";
    }
}
