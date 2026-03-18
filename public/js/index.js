function togglePassword() {
    const input = document.getElementById("password");
    const icon = document.getElementById("icono");

    if (input.type === "password") {
        input.type = "text";
        icon.classList.replace("bi-eye", "bi-eye-slash");
    } else {
        input.type = "password";
        icon.classList.replace("bi-eye-slash", "bi-eye");
    }
}

// limpiar GET
setTimeout(() => {
    window.history.replaceState(null, null, window.location.pathname);
}, 0);