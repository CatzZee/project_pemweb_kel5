    function togglePassword() {
        const passwordField = document.getElementById("password");
        const eyeIcon = document.getElementById("eyeIcon");
        const isPassword = passwordField.type === "password";

        passwordField.type = isPassword ? "text" : "password";
        eyeIcon.className = isPassword ? "bi bi-eye-slash" : "bi bi-eye";
    }