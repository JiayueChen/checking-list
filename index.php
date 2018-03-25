<?php 
require_once('database.php');

if ($_POST) {
	$name = $_POST['list_name'];
	$deadline = $_POST['dead_line'];

	insertAItem($name, $deadline);
}

$all_items = getAllItems();


?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Checking List</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<h1>Checking List</h1>
		</div>


		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Things to Do</th>
					<th scope="col">Deadline</th>
					<th scope="col">Check box</th>
				</tr>
			</thead>
			<tbody>
				
				<?php 

				foreach ($all_items as $item) {
					echo "<tr>";
					echo "<th scope='row'>". $item['id']."</th>";
					echo "<td>".$item['name']."</td>";
					echo "<td>".$item['deadline']."</td>";
					echo "<td><input type='checkbox' id='Checkbox' ></td>";
				}

				?>
				
			</tbody>



		</table>

		<script type="text/javascript">
			$("#Checkbox").click(function(){
				$('input:checkbox').each(function() { 
				if ($(this).attr('checked') == true) { 
					return ($(this).val()); 
				} 
			}); 
		});



			



	</script>

	<form action="" method="post">
		<div class="form-row">
			<div class="col">
				<input type="text" class="form-control" placeholder="Things to do" name="list_name">
			</div>
			<div class="col">
				<input type="text" class="form-control" placeholder="YYYY-MM-DD" name="dead_line" pattern="(([0-9]{3}[1-9]|[0-9]{2}[1-9][0-9]{1}|[0-9]{1}[1-9][0-9]{2}|[1-9][0-9]{3})-(((0[13578]|1[02])-(0[1-9]|[12][0-9]|3[01]))|((0[469]|11)-(0[1-9]|[12][0-9]|30))|(02-(0[1-9]|[1][0-9]|2[0-8]))))|((([0-9]{2})(0[48]|[2468][048]|[13579][26])|((0[48]|[2468][048]|[3579][26])00))-02-29)">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<button type="button" id="">Delete finished</button>
		</div>
	</form>


</div>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>