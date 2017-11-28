<!-- include connection -->
<!DOCTYPE html>
<html>
<head>
	<title>IDE</title>
	<!-- include style -->
</head>

<body>
	<?php $myCourses = false ?>

	<?php
	include '../../layout/style.php';
	include '../../layout/header.php';
	?>

	<!-- include header -->
	<div class="w3-main">
		<?php 
		include '../../layout/sidebar.php';
		include'../../phpScript/courses.php';
		?>
		<div class="w3-threequarter" style="float: right;margin-top: 12%; margin-left: 2%;" >

			<h2 class="w3-grey w3-card w3-text-black"> <?php echo "$course"?></h2>
			
			<?php include '../../phpScript/topics.php';

			?>
			
		</div>
		<!-- include sidebar -->
	</div>
	<!-- modal -->
	<div id="id01" class="w3-modal w3-animate-opacity" >
		<div class="w3-modal-content w3-card-4 w3-container" style="width: 65%;height: 300px">
			<header class="w3-container "> 

				<span onclick="closeModal()" class="w3-button w3-large w3-display-topright">&times;</span>
			</header>
			<div class="w3-container w3-display-left">
				<h1>Adding Activity</h1><br>
				<form action="addingActivity.php" method="get">
					<input type="radio" name="pilihan" value="Assignment" placeholder="Assignment">Assignment<br>
					<input type="radio" name="pilihan" value="File" placeholder="File">File<br>
					<input type="submit" name="" placeholder="Add"> 
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openModal() {
			document.getElementById('id01').style.display='block';
		}
		function closeModal(){
			document.getElementById('id01').style.display='none';
		}
		function openPage(){
			window.location.href = "addingActivity.php";
		}
	</script>
</body>
</html>