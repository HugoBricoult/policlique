<div class="d-flex justify-content-center page-menu">
        
            <div>
                <input type="radio" name="menu" id="menu" <?php if(isset($_GET['section'])){if($_GET['section'] == 'journeaux'){echo "checked";}} ?>>
                <label><a href="index.php?page=home&section=journeaux">Journeaux</a></label>
            </div>
        
            
            <div>
                <input type="radio" name="menu" id="" <?php if(isset($_GET['section'])){if($_GET['section'] == 'actualites'){echo "checked";}}else{echo"checked";}?>>
                <label><a href="index.php?page=home&section=actualites">Actualités</a></label>
            </div>
        
            
            <div>
                <input type="radio" name="menu" id="" <?php if(isset($_GET['section'])){if($_GET['section'] == 'videos'){echo "checked";}}?>>
                <label><a href="index.php?page=home&section=videos">Vidéos</a></label>
            </div>
</div>
<?php
 $content = scandir('./pages/home');
 echo "<pre>";
 var_dump($content);
 echo "</pre>";
if(isset($_GET['section']) && in_array($_GET['section'] . '.php',$content)){
    include('./pages/'. $_GET['page'] . '/' .$_GET['section'].'.php');
}else{
    include('./pages/home/actualites.php');
}
?>