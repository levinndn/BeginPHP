<!DOCTYPE html>
<html>
<head>
	<title>Cung Hoang Dao</title>
	<link rel="stylesheet" type="text/css" href="cunghoangdao.css">
</head>
<body>
	<?php
		$i=0;
		$day="";
		$month="";
		$img="";
		$name="";
		$time="";
		if(isset($_POST["day"]) && isset($_POST["month"])){
			$day=$_POST["day"];
			$month=$_POST["month"];
			$i=1;
		if(is_numeric($day) && is_numeric($month)){
					if(($month==3&&$day>20&&$day<32)||($month==4&&$day<20&&$day>0)){
						$img="bachduong.gif";
						$name="Bạch Dương";
						$time="(21/3- 19/4)";
					}elseif (($month==4&&$day>19&&$day<31)||($month==5&&$day<21&&$day>0)) {
						$img="kimnguu.gif";
						$name="Kim Ngưu";
						$time="(20/4- 20/5)";
					}elseif (($month==5&&$day>20&&$day<32)||($month==6&&$day<22&&$day>0)) {
						$img="songtu.gif";
						$name="Song Tử";
						$time="(21/5- 21/6)";
					}elseif (($month==6&&$day>21&&$day<31)||($month==7&&$day<23&&$day>0)) {
						$img="cugiai.gif";
						$name="Cự Giải";
						$time="(22/6- 22/7)";
					}elseif (($month==7&&$day>22&&$day<32)||($month==8&&$day<23&&$day>0)) {
						$img="sutu.gif";
						$name="Sư Tử";
						$time="(23/7- 22/8)";
					}elseif (($month==8&&$day>22&&$day<32)||($month==9&&$day<23&&$day>0)) {
						$img="xunu.gif";
						$name="Xử Nữ";
						$time="(23/8- 22/9)";
					}elseif (($month==9&&$day>22&&$day<31)||($month==10&&$day<24&&$day>0)) {
						$img="thienbinh.gif";
						$name="Thiên Bình";
						$time="(23/9- 23/10)";
					}elseif (($month==10&&$day>23&&$day<32)||($month==11&&$day<22&&$day>0)) {
						$img="bocap.gif";
						$name="Bò Cạp";
						$time="(24/10- 21/11)";
					}elseif (($month==11&&$day>21&&$day<31)||($month==12&&$day<22&&$day>0)) {
						$img="nhanma.gif";
						$name="Nhân Mã";
						$time="(22/11- 21/12)";
					}elseif (($month==12&&$day>21&&$day<32)||($month==1&&$day<20&&$day>0)) {
						$img="maket.gif";
						$name="Ma Kết";
						$time="(22/12- 19/1)";
					}elseif (($month==1&&$day>19&&$day<32)||($month==2&&$day<19&&$day>0)) {
						$img="baobinh.gif";
						$name="Bảo Bình";
						$time="(20/1- 18/2)";
					}elseif (($month==2&&$day>18&&$day<29)||($month==3&&$day<19&&$day>0)) {
						$img="songngu.gif";
						$name="Song Ngư";
						$time="(19/2- 20/3)";
					}else{
						echo $er='<script type="text/javascript" src="error.js">;';
						echo '</script>;';
						$resuft="";
						$i=0;
					}
		}else{
			echo $er='<script type="text/javascript" src="error.js">;';
			echo '</script>;';
			$resuft="";
			$i=0;
		}
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
				<td><input type="text" name="day" value = <?php echo $day; ?> ></td>
			</tr>
			<tr>
				<td class="two_column">Tháng sinh</td>
				<td><input type="text" name="month" value = <?php echo $month; ?> ></td>
			</tr>
			<tr>
				<td colspan="2" class="one_column" id="submit"><input type="submit" value="Lấy chòm sao!" name="submit"></td>
			</tr>
			<tr>
				<td colspan="2" class="one_column">
					<?php
					if($i!=0)
					echo
							$resuft='<a href="https://www.facebook.com/let.smile.and.fun" style="color: violet;font-size: 30px;font-weight: bold;" id="tencung" target="_blank"><p>'.$name.' '.$time.'</p></a>'.
						'<img src="img/'.$img.'" alt=".$name." style="height:150px;width:150px;">';
					?>
				</td>
			</tr>
		</table>
		<a href="https://www.facebook.com/let.smile.and.fun"></a>
	</form>
</body>
</html>