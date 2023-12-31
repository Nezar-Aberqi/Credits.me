<?php


if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));

    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
    $maxSize = 400000;

    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){

        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $file = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg

        if(move_uploaded_file($tmpName, './upload/'.$file))
        {

        $req = DB::connect()->prepare('INSERT INTO documents (docname) VALUES (?)');
        $req->execute([$file]);

        echo "Image enregistrée";

        }
    }
    else{
        echo "Une erreur est survenue";
        }

}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

    </head>
<body>
    <h2>Ajouter une image</h2>
    <form  method="POST" enctype="multipart/form-data">
    
        <label for="file">Fichier</label>
        <input type="file" name="file">

        <button type="submit">Enregistrer</button>
    </form>
    <h2>Mes images</h2>
    <?php 
        $req = DB::connect()->prepare('SELECT docname FROM documents');
        while($data = $req->fetch()){
            echo "<img src='./upload/".$data['docname']."' width='300px' ><br>";
        }
    ?>
</body>
</html>