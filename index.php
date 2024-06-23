<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $password = $_POST["password"];
    $edad = $_POST["edad"];

    if (empty($user) || empty($password) || empty($edad)) {
        echo "Todos los campos son obligatorios.";
    } elseif (!is_numeric($edad) || $edad < 18) {
        echo "Debes ser mayor de 18 años.";
    } elseif ($user !== "luis" || $password !== "mendoza") {
        echo "Usuario o contraseña incorrectos.";
    } else {
        echo "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($user)."<br>";
        echo "Tu edad es de " . htmlspecialchars($edad)." años";
    }
}
?>

