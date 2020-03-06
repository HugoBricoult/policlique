<div>
    <a href="index.php?page=home&section=journeaux">Journeaux</a>
    <a href="index.php?page=home&section=actualites">Actualités</a>
    <a href="index.php?page=home&section=videos">Vidéos</a>
</div>
<?php
if(isset($_GET['section'])){
    include('./pages/'.$_GET['section'].'.php');
}else{
    include('./pages/journeaux.php');
}
?>