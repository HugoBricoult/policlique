<div class="d-flex justify-content-center page-menu">
        
            <div>
                <input type="radio" name="menu" id="menu" <?php if(isset($_GET['section'])){if($_GET['section'] == 'signature'){echo "checked";}} ?>>
                <label><a href="index.php?page=vote&section=signature">Signature</a></label>
            </div>
        
            
            <div>
                <input type="radio" name="menu" id="" <?php if(isset($_GET['section'])){if($_GET['section'] == 'projet'){echo "checked";}}else{echo"checked";}?>>
                <label><a href="index.php?page=vote&section=projet">Projets</a></label>
            </div>
        
            
            <div>
                <input type="radio" name="menu" id="" <?php if(isset($_GET['section'])){if($_GET['section'] == 'personel'){echo "checked";}}?>>
                <label><a href="index.php?page=vote&section=personel">Personel</a></label>
            </div>
</div>
<?php
 $content = scandir('./pages/vote');
if(isset($_GET['section']) && in_array($_GET['section'] . '.php',$content)){
    include('./pages/'. $_GET['page'] . '/' .$_GET['section'].'.php');
}else{
    include('./pages/vote/projet.php');
}
?>