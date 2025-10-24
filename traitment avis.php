<?php
// Vérifier si les données du formulaire ont été envoyées
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données envoyées
    $nom = htmlspecialchars($_POST['nom']);
    $note = intval($_POST['note']);
    $message = htmlspecialchars($_POST['message']);

    // Simple validation pour vérifier que toutes les informations sont présentes
    if (!empty($nom) && !empty($note) && !empty($message) && $note >= 1 && $note <= 5) {
        // Ici vous pouvez ajouter votre logique pour traiter les avis,
        // par exemple, les enregistrer dans une base de données, les envoyer par email, etc.

        // Exemple : Afficher les données du formulaire
        echo "<h2>Merci pour votre avis, $nom !</h2>";
        echo "<p>Note: $note / 5</p>";
        echo "<p>Votre avis : $message</p>";

        // Vous pouvez aussi rediriger vers une page de confirmation
        // header("Location: confirmation.php"); // redirection vers une page de confirmation
    } else {
        echo "<p>Veuillez remplir tous les champs correctement.</p>";
    }
} else {
    // Si la page est accédée sans soumettre de formulaire
    echo "<p>Erreur dans l'envoi du formulaire.</p>";
}
<?php
// Vérifier si le formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $note = intval($_POST['note']);
    $message = htmlspecialchars($_POST['message']);

    // Validation simple des données
    if (!empty($nom) && !empty($note) && !empty($message) && $note >= 1 && $note <= 5) {
        // Traitement de l'avis (par exemple, enregistrement dans une base de données ou envoi par e-mail)
        // Ici, on affiche simplement les données pour l'exemple.
        echo "<h2>Merci pour votre avis, $nom !</h2>";
        echo "<p>Note: $note / 5</p>";
        echo "<p>Votre avis : $message</p>";
    } else {
        echo "<p>Veuillez remplir correctement tous les champs.</p>";
    }
} else {
    // Si la page est accédée sans soumettre le formulaire
    echo "<p>Erreur dans l'envoi du formulaire. Aucune donnée reçue.</p>";
}
?>

?>
