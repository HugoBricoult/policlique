<div class="d-flex justify-content-center page-menu">
        <label class=""><a href="index.php?page=home&section=journeaux">Journeaux</a>
            <input type="radio" name="menu" id="" <?php if(isset($_GET['section'])){if($_GET['section'] == 'journeaux'){echo "checked";}} ?>>
        </label>
        <label class=""><a href="index.php?page=home&section=actualites">Actualités</a>
            <input type="radio" name="menu" id="" <?php if(isset($_GET['section'])){if($_GET['section'] == 'actualites'){echo "checked";}}else{echo"checked";}?>>
        </label>
        <label class=""><a href="index.php?page=home&section=videos">Vidéos</a>
            <input type="radio" name="menu" id="" <?php if(isset($_GET['section'])){if($_GET['section'] == 'videos'){echo "checked";}}?>>
        </label>
</div>
<?php
if(isset($_GET['section'])){
    include('./pages/'.$_GET['section'].'.php');
}else{
    include('./pages/actualites.php');
}
?>