<?php
if(isset($_POST['submit'])){
$to = "j.payet@codeur.online"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$subject = "Nouveau message";
$subject2 = "Copie du nouveau message";
$message = $first_name . " " . $last_name . " a ecrit:" . "\n\n" . $_POST['message'];
$message2 = "Voici une copie de votre message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;
mail($to,$subject,$message,$headers);
mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender!
header("Refresh:5; url=https://joselitop.promo-93.codeur.online/portfolio/joselitopayet.fr/");
//header('location: https://joselitop.promo-93.codeur.online/portfolio/joselitopayet.fr/');
// You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Accusé de réception</title>
</head>
<body>

<div class="message">
    <?php echo "<div class='echostyle' style='font-size: 24px;'>Le mail a bien été envoyer merci " . $first_name . ", je vous contacterais sous peu.</div>"; ?>
</div>
    
</body>
</html>