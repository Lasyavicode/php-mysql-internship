<?php

include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM posts WHERE id=$id");

$row = $result->fetch_assoc();

if(isset($_POST['submit'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "UPDATE posts
            SET title='$title',
                content='$content'
            WHERE id=$id";

    $conn->query($sql);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>

<h1>Edit Post</h1>

<form method="POST">

    Title:<br>
    <input type="text"
           name="title"
           value="<?php echo $row['title']; ?>">

    <br><br>

    Content:<br>
    <textarea name="content"><?php echo $row['content']; ?></textarea>

    <br><br>

    <input type="submit"
           name="submit"
           value="Update Post">

</form>

</body>
</html>