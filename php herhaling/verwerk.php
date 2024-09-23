<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];

    echo "<h1>Ingevoerde Gegevens</h1>";
    echo "Geboortedatum: " . htmlspecialchars($birthdate) . "<br>";
    echo "Telefoonnummer: " . htmlspecialchars($phone) . "<br>";
} else {
    echo "Geen gegevens ontvangen.";
}
?>
