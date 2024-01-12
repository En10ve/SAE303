<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "acf2l_reservation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

$nom = $_POST['nom'];
$email = $_POST['email'];
$date = $_POST['date'];
$forfait = $_POST['forfait'];

$sql = "INSERT INTO reservations (nom, email, date_formation, forfait) VALUES ('$nom', '$email', '$date', '$forfait')";

if ($conn->query($sql) === TRUE) {
    echo "Réservation enregistrée avec succès.";
} else {
    echo "Erreur lors de l'enregistrement de la réservation : " . $conn->error;
}

$conn->close();
