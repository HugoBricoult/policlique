<?php

function generate_News($title,$img_Path,$img_desc,$text,$subtitle){
    echo "
    <div class='row bg-white actu'>";
    if($img_Path == null){
        echo"<div class='d-flex flex-column col-12'>";
    }else{
        echo"
                <img src='$img_Path' alt='$img_desc' class='col-4 image-size' height='auto'>
                <div class='d-flex flex-column col-8'>";
    }
    echo"
                <div class='d-flex flex-row'>
                <i class='material-icons blue-back'>person</i>
                    <div class='d-flex flex-column'>
                        <h5>$title</h5>
                        <p>$subtitle</p>
                    </div>
                </div>
                <p>$text</p>
            </div>
            <div class='d-flex flex-row'>
            <i class='material-icons icon-back'>bookmark</i>
            <i class='material-icons icon-back'>thumb_up</i>
            <i class='material-icons icon-back'>thumb_down</i>
            <p class='icon-back'>Commentaires</p>
            </div>
    </div>
    ";
};

?>

<div class="container py-1 actual">
    <?php
    $textl = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi vero nisi beatae, perspiciatis quia deleniti non odio amet ducimus commodi!";
    generate_News('Bonjour la commune !','./assets/img/logo.png','',$textl,'sous-titre');
    generate_News('Bonjour la commune2 !',null,'',$textl,'sous-titre');
    generate_News('Bonjour la commune3 !',null,'',$textl,'sous-titre');
    ?>
</div>



