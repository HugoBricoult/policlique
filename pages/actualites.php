<?php

function generate_News($title,$img_Path,$img_desc,$text){
    echo "
    <div class='row'>";
    if($img_Path == null){
        echo"<div class='d-flex flex-column col-12'>";
    }else{
        echo"
            <img src='$img_Path' alt='$img_desc' class='col-5'>
            <div class='d-flex flex-column col-7'>";
    }
    echo"
            <div class='d-flex flex-row'>
                <img src='' alt=''>
                <div class='d-flex flex-column'>
                    <h2>$title</h2>
                    <p>$text</p>
                </div>
            </div>
        <p></p>
        </div>
    </div>
    ";
};

?>

<div class="container">
    <?php
    generate_News('Bonjour la commune !','./assets/img/logo.png','','description');
    generate_News('Bonjour la commune2 !',null,'','description1');
    generate_News('Bonjour la commune3 !',null,'','description2');
    ?>
</div>



