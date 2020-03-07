<div class="d-flex justify-content-center page-menu">
    <div>
        <input type="radio" name="menu" id="" <?php if(isset($_GET['section'])){if($_GET['section'] == 'details'){echo "checked";}}else{echo"checked";}?>>
        <label><a href="index.php?page=commune&section=details">Nom de la commune</a></label>
    </div>
</div>
<?php
include './pages/commune/details.php';
?>
