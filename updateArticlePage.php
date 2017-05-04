<?php
/**
 * Created by PhpStorm.
 * User: rasmus
 * Date: 04-05-2017
 * Time: 09:56
 */



if(isset($_GET['id'])){
    $id = $_GET['id'];
    $title = $_GET['title'];
    $image= $_GET['image'];
    $content = $_GET['content'];


    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="my.css">
</head>
<body>

<div id="container">
    <h2>Update Article</h2>
    <a href="admin.html">
        <button class="btn btn-success">Admin Homepage</button>
    </a>
    <br>
    <br>
    <form action="php/update.php" method="post" enctype="multipart/form-data">

        <div>
            <input id="title" type="text" name="title" value="'.$title.'">
        </div>
        <br>
        <div>
            <div><img src="'.$image.'" style="width: 200px;height: auto;"></div>
            <p>Choose a new picture</p>
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <br>
        <div>
            <textarea id="para" type="text" name="content">'.$content.'</textarea>
        </div>
        <div>
            <input id="" type="hidden" name="id" value="'.$id.'">
            <input type="submit" value="Update" name="submit">
        </div>
    </form>
</div>
</body>
</html>';
} else{
    echo "No id provided";
}

