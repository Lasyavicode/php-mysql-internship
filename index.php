<?php
include 'db.php';

$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
</head>
<body>

<h1>My Blog</h1>

<a href="create.php">Create New Post</a>

<hr>

<?php while($row = $result->fetch_assoc()) { ?>

    <h2><?php echo $row['title']; ?></h2>

<p><?php echo $row['content']; ?></p>

<small><?php echo $row['created_at']; ?></small>

<br>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

<br>

<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

<br><br>

<?php } ?>

</body>
</html>