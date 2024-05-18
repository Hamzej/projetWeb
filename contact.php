<?php
// config.php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'websitecontact';

// Connexion à MySQL
$conn = new mysqli($host, $username, $password, $dbname);


?>
<?php
// Utiliser le fichier de configuration
include 'contact.html';

// Récupérer les données du formulaire
$email = $_POST['email'];
$name = $_POST['name'];
$choix = $_POST['choix'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];

// Préparer et exécuter la requête SQL
$sql = "INSERT INTO contacts (email, name, choix, telephone, message) VALUES ('$email', '$name', '$choix', '$telephone', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Enregistrement réussi";
} else {
    echo "Erreur d'enregistrement : " . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
