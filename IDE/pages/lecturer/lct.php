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
		include '../../phpScript/courses.php';

		?>
		<div class="w3-theme w3-threequarter" style="float: right;margin-top: 12%; margin-left: 1%;" >
			<h2> COURSE OVERVIEW</h2>
			<a  href="<?php echo "course.php?id=".$courseID."&courseTitle=".$course ?>"> <?php echo "$coursecode"." / "."$course"?></a>
		</div>

		<!-- include sidebar -->
	</div>
</body>
</html>