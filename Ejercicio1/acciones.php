<?php
echo "<link rel='stylesheet' href='style.css'>";
if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];

    if (isset($_POST["opcion"])) {
        switch ($_POST["opcion"]) {
            case "suma":
                sumar($nombre);
                break;
            case "resta":
                restar($nombre);
                break;
            case "multiplicacion":
                multiplicar($nombre);
                break;
            case "division":
                dividir($nombre);
                break;
            default:
                echo "Opción inválida";
                break;
        }
    }
}

function sumar($nombre) {
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    echo "<h1>Hola, $nombre! El resultado de la suma es: " . ($num1 + $num2) . "</h1>";
}

function restar($nombre) {
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    echo "<h1>Hola, $nombre! El resultado de la resta es: " . ($num1 - $num2) . "</h1>";
}

function multiplicar($nombre) {
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    echo "<h1>Hola, $nombre! El resultado de la multiplicación es: " . ($num1 * $num2) . "</h1>";
}

function dividir($nombre) {
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    if ($num2 == 0) {
        echo "<h1>Error: no se puede dividir entre cero</h1>";
    } else {
        echo "<h1>Hola, $nombre! El resultado de la división es: " . ($num1 / $num2) . "</h1>";
    }
}
?>
