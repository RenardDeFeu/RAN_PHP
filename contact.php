<?php
//echo "<pre>";
print_r($_SESSION["form"]);
//echo "<pre>";

session_start();
?>

<?php include_once("header.php");?>

<!-- FORMULAIRE DE CONTACT -->
<main>
    <p>
        <h3>Contact me</h3>
        <form action="contact.php" method="POST">
            <div class="civilite">
                <label> Civilité:
                    <select name="civilite">
                        <option value="" selected></option>
                        <option value="Mr">Mr</option>
                        <option value="Mme">Mme</option>
                        <option value="Mlle">Mlle</option>
                        <option value="Dinosaure">Dinosaure</option>
                        <option value="Autre">Autre</option>
                    </select>
                </label></br>
            </div>
            <div class="prenom">
                <label for="prenom"> Prénom:</label>
                <input type="text" id="prenom" name="prenom" placeholder="Elvis">
            </div>
            <div class="nom">
                <label for="nom"> Nom:</label>
                <input type="text" id="nom" name="nom" placeholder="Presley">
            </div>
            <div class="email">
                <label for="email"> Email:</label>
                <input type="email" id="email" name="email" placeholder="elvis.presley@gmail.com"> <?php echo email_field_validation($field)?>
            </div>
            <div class="raison">
                <label for="raison">Raison:</label>
                <div>
                    <input type="radio" value="plainte" name="raison">
                    <label for="plainte">Plainte</label>
                </div>
                <div>
                    <input type="radio" value="merci" name="raison">
                    <label for="merci">Remerciement</label>
                </div>
                <div>
                    <input type="radio" value="bonjour" name="raison">
                    <label for="bonjour">Bonjour</label>
                </div>
            </div>
            <div>
                <label for="message">Message: </label>
                <textarea id="message" name="message" rows="5" cols="33" placeholder="Wop-bop-a-loom-a-boom-bam-boom ! Tutti frutti au rutti, tutti frutti au rutti, tutti frutti au rutti, wop-bop-a-loom-bop-a-boom-bam-boom !"></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form> 
    </p>
</main>


<!-- SUBMIT_CONTACT-->

<?php
/*if (!empty($_POST)) {
    if (isset($_POST['civilite']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['raison']) && isset($_POST['message']))
    {
        echo("<h2> Message bien reçu ! </h2>");
        file_put_contents("form_submission",print_r($_POST,true));
        print_form_result();
        return; // Arrête l'exécution de PHP
    } else {
        echo("<h2> Wesh, t'as mal remplit le formulaire. </h2>");
        return; // Arrête l'exécution de PHP
    }
}*/
if (empty($_SESSION["form"])){$_SESSION["form"] = $_POST;}

if (submit_validation($_POST)){
    echo("<h2> Message bien reçu ! </h2>");
        file_put_contents("form_submission",print_r($_POST,true));
        print_form_result();
} elseif (submit_validation($_POST) == false){
    echo("<h2> Wesh, t'as mal remplit le formulaire. </h2>");
}
?>

<?php include_once("footer.php");?>