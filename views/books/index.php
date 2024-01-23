<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
		
	<div class="container">
		<div class="row mb-2 mt-3">
			<h4>Books List</h4>
		</div>
		<div class="table-responsive">
			<table class="table table-sm">
				<thead>
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($books as $book): ?>
						<tr>
							<td><?php echo $book["title"] ?></td>
							<td><?php echo $book["author"] ?></td>
							<td><?php echo $book["price"] ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
