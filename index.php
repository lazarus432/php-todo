<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To Do Application</title>
	<link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light|Spectral+SC" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="list">
		<h1 class="heading">To do List</h1>
		<ul class="todos">
			<li>
				<span class="todo">Do HackerRank lesson</span>
				<a href="#" class="done-button">Done</a>
			</li>
			<li>
				<span class="item done">Make dinner</span>
			</li>
		</ul>
		<form class="add-item" action="add.php" method="post">
			<input type="text" name="name" placeholder="add item here" class="input" autocomplete="off" required>
			<input type="submit" value="Add Item" class="submit">
		</form>
	</div>
	</body>
	</html>

