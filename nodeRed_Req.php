<?php include 'header.php';?>

<div class="col-12">
    <h1>Texte à analyser</h1>
    <form action="http://localhost:1880/" method="post">
        <textarea name="text" id="text" cols="30" rows="10" placeholder=""></textarea>
    </form>
    <button onclick="handleClick()">Make a request</button>
    <div><p id="target"></p></div>
</div>

<script src="assets/js/script.js"></script>
<?php include 'footer.php';?>