<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="register-form" method="POST"   >
      <h2>Register</h2>
      <input type="text" placeholder="Surname " required/>
      <input type="text" placeholder="Username " required/>
      <input type="email" placeholder="Email " required/>
      <input type="password" placeholder="Password " required/>
      <a class="btn" href="first.php"  onclick ="return validateForm()">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Create
      </a>
      <p class="message">Already registered? <a href="#" ">Sign In</a></p>
    </form>
    <form class="login-form" method="POST">
      <h2></i> Login</h2>
      <input type="text" placeholder="Email" required id="email" />
      <input type="password" placeholder="Password" required id="psw"/>
      <a class="btn" href="first.php" onclick ="return validateForm()" >
        <span></span>
        <span></span>
        <span></span>
        <span></span>
              Sign in
      </a>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>

<?php
// Connexion à la base de données
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pi";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_errno) {
    echo "Échec de la connexion à MySQL : " . $conn->connect_error;
    exit();
}*/

 

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pi";
//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//te2ekuud men la connection 
if (!$conn) {
  die("connection failed". mysqli_connect_error());
}
else {
  echo"Connected Successfully";
}





$Prenom = $_POST['Surname'];
$Nom = $_POST['Username'];
$Email = $_POST['Email'];
$Pass = $_POST['Password'];
// n'inseruu les données
$sql = "INSERT INTO users (Nom,Prenom,Email,MDP) VALUES ('$Nom','$Prenom','$Email','$Pass')";

// Exécution de la requête
if ($mysqli->query($sql) === TRUE) {
    echo "Enregistrement réussi.";
} else {
    echo "Erreur lors de l'enregistrement : " . $mysqli->error;

}
// Fermer la connexion
$mysqli->close();
?>
</body>
</html>