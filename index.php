<?php include 'upload.php'?>
<link rel="stylesheet" type="text/css" href="style.css">

<form action="index.php" method="post" enctype="multipart/form-data">
    <label for="imageUpload">Upload profile images</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <input type="file" name="avatars[]" multiple="multiple" id="imageUpload"/>
    <button>Send</button>
</form>

<?php
if(!empty($uploaded)){
    foreach ($uploaded as $upload){?>
            <p>"Success"</p>
        <figure >
            <img class="vignette" src = "<?=$upload?>" alt="image téléchargée" />
             <figcaption><?= $file_name_new?></figcaption>
        </figure >
     <?php
    }

}
if(!empty($failed)){
    foreach ($failed as $fail){ ?>
        <p><?= $fail;?></p><?php
    }
}
?>
