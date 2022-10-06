<?php 

function get_current_page_title()
{
    $title = $_SERVER['PHP_SELF'];
    $title = str_replace("/","",$title);
    $title = str_replace(".php","",$title);

    return $title;
}

function get_current_page_meta_description()
{
    $local_title = get_current_page_title();
    switch ($local_title) {
        case "index":
            return "Page principale de mon site web.";
            break;
        case "hobby":
            return "Présentation de mes hobbys.";
            break;
    }
}

function print_form_result()
{
    echo("<h4>Rappel de vos informations</h4>");
    echo("<b>Civilité</b> : {$_POST['civilite']} <br>");
    echo("<b>Prénom</b> : {$_POST['prenom']} <br>");
    echo("<b>Nom</b> : {$_POST['nom']} <br>");
    echo("<b>Email</b> : {$_POST['email']} <br>");
    echo("<b>Raison</b> : {$_POST['raison']} <br>");
    echo("<b>Message</b> : {$_POST['message']} <br>");
}

function submit_validation($post_array)
{
    // Check if the keys of $_POST are declared
    $counter = -1;
    if (!empty($post_array)){
        foreach ($post_array as $key => $value){
            if (!empty($post_array[$key])){
                $counter++;
            }
        };
        if ($counter == count($post_array)){return true;} else {return false;}
    }
}

function email_field_validation($field)
{
    if (!filter_var($_POST[$field], FILTER_VALIDATE_EMAIL) && !empty($_POST)) {
        return "Veuillez entrer un email valide";}
}
?>