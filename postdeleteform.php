<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generic Blog - Delete a post</title>
    <link rel="stylesheet" href="styles.css">
	<?php
    require_once "utils.php";
    if(isLoggedOn()==false){
        header("Location: index.php");
    }
    ?>
</head>
<body>
    <h1>Generic Blog - Deleting a post</h1>
    <div id="container">
	<form action="postdeletescript.php" method="POST">
        <label>ID of the post you're deleting: <input type="number" name="query" /></label><br>
		<input type="submit" value="Delete" /><br>
        <input type='button' value='Back' onclick="window.location.href='index.php'" />
	</form>
</div>
</body>
</html>