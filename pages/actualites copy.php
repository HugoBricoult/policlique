<?php

function generate_News($title,$img_Path,$img_desc){
    echo "
    <div class='row'>";
    if($img_Path == null){
        echo"<div class='d-flex flex-column col-12'>";
    }else{
        echo"
            <img src='$img_Path' alt='' class='col-5'>
            <div class='d-flex flex-column col-7'>";
    }
    echo"
            <div class='d-flex flex-row'>
                <img src='' alt=''>
                <div class='d-flex flex-column'>
                    <h2></h2>
                    <p></p>
                </div>
            </div>
        <p></p>
        </div>
    </div>
    ";
};
generate_News('Bonjour la commune !',null,'');
?>


