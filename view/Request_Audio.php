<?php
$titre = 'Demande Audio';
include('header.php');
?>
<div class="nouveau">
    <div class="milieuPage">
        <form id="upload_form" enctype="multipart/form-data" method="post">
            <input type="file" name="champsFichier" id="champsFichier"><br>
            <input type="button" value="Uploader" onclick="uploadFile()">
            <h3 id="status"></h3>
        </form>
    </div>
</div>