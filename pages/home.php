<div class="d-flex justify-content-center">

        <label class="">Journeaux
            <input type="radio" name="menu" id="">
        </label>
        <label class="">Actualités
            <input type="radio" name="menu" id="" checked>
        </label>
        <label class="">Vidéos
            <input type="radio" name="menu" id="">
        </label>

    <a href="index.php?page=home&section=journeaux">Journeaux</a>
    <a href="index.php?page=home&section=actualites">Actualités</a>
    <a href="index.php?page=home&section=videos">Vidéos</a>
</div>
<?php
if(isset($_GET['section'])){
    include('./pages/'.$_GET['section'].'.php');
}else{
    include('./pages/actualites.php');
}
?>