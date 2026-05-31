<?php
include 'db.php';

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts(title, content)
            VALUES('$title', '$content')";

    $conn->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>

<h1>Create New Post</h1>

<form method="POST">

    <input
        type="text"
        name="title"
        placeholder="Post Title"
        required
    >

    <br><br>

    <textarea
        name="content"
        placeholder="Post Content"
        required
    ></textarea>

    <br><br>

    <button type="submit" name="submit">
        Save Post
    </button>

</form>

</body>
</html>