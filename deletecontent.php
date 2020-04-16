<html lang="en">
  <head>
    <title>Delete</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
<?php
include("db.php");
$sql = "DELETE FROM content WHERE HEAD_Content ='".$_GET["HEAD_Content"]."' ";
$result = mysqli_query($con,$sql);



if ($result) {
	?>
	<div class="detail">
		<div class="card" style="width: 18rem;">
			<img src="images/iconn.png" class="card-img-top" alt="images/iconn.png">
			<div class="card-body">
				<h5 class="card-title">Delete Successfully !!</h5>
				<a href="showhome.php" class="btn btn-info">submit</a>
			</div>
		</div>
	</div>
	<?php
} else {
	?>
	<div class="card" style="width: 18rem;">
		<img src="imagesdontcry.jpg" class="card-img-top" alt="images/dont.jpg">
		<div class="card-body">
			<h5 class="card-title">Try Again !!</h5>
			<a href="showhome.php" class="btn btn-danger">submit</a>
		</div>
	</div>
	<?php
}
	mysqli_close($con);
?>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<style>
.card {
text-align: center;
position: absolute;
margin: 0 auto;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
</style>