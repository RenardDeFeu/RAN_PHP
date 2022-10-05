<?php include_once("header.php");?>

<?php
if (isset($_GET['page'])){
    switch ($_GET['page']) {
        case "/profile":
            header("Location: profile.php");
            break;
        case "/hobby":
            header("Location: hobby.php");
            break;
        case "/contact":
            header("Location: contact.php");
            break;
        default:
            header("Location: notfound.php");
            break;
    }
}

?>

<p>
    <a href="/index.php?page=/profile" rel="stylesheet" target="_blank">Profile </a>
    <a href="/index.php?page=/hobby" rel="stylesheet" target="_blank">Mes hobbys </a>
    <a href="/index.php?page=/contact" rel="stylesheet" target="_blank">Contact </a>
</p>

<?php include_once("footer.php");?>