<!DOCTYPE html>
<html>
<head>
	<title>Cung Hoang Dao</title>
	<link rel="stylesheet" type="text/css" href="cunghoangdao.css">
</head>
<body>
	<?php
		$day="";
		$month="";
		$img="";
		$name="";
		if(isset($_POST["day"]) && isset($_POST["month"])){
			echo $day=$_POST["day"];
			echo $month=$_POST["month"];
		}
		if(is_numeric($day) && is_numeric($month)){

		}
	?>
	<form action="#" method="post" id="form">
		<table class="box">
			<tr >
				<td colspan="2"  class="one_column">
					<h1>Bạn thuộc chòm sao gì?</h1>
				</td>
			</tr>
			<tr>
				<td class="two_column">Ngày sinh</td>
				<td><input type="text" name="day" value="<?php echo($day);?>"></td>
			</tr>
			<tr>
				<td class="two_column">Tháng sinh</td>
				<td><input type="text" name="month" value="<?php echo($month);?>"></td>
			</tr>
			<tr>
				<td colspan="2" class="one_column" id="submit"><input type="submit" value="Lấy chòm sao!" name="submit"></td>
			</tr>
			<tr>
				<td colspan="2" class="one_column">
					<?php
						$resuft='<img src="img/'.$img.'" alt=".$name.">
							<p>Cung Bạch Dương</p>';
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>