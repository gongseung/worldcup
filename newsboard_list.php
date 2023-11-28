	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/common2.css">
	<style type="text/css">
		#news_box {width: 1000px; height: 110px;}
		#col1 {float: left; width:160px; height: 110px;}
		#col1 img {float: left; width:160px; height: 110px;}
		#col2 {margin-left: 160px; padding: 5px;}
		#li1 {width:100%; height: 25px;}
		#li2 { width:100%; height: 50px; } 
		#li3 {font-size: 10px; width:100%; height: 10px; margin-top: 5px;}
		#section_box {margin:50px 0 0 5%; }
		#page_num {	text-align: center;	margin: 30px 0 }
		#page_num li { display: inline; }
		.buttons { text-align: right; margin: 20px 0 40px 0; }
		.buttons li { display: inline; }
		.buttons button { padding: 5px 10px; cursor: pointer; }
		/*#news_box {border: 1px solid greenyellow;}
		#col1 {border: 1px solid blueviolet;}
		#col2 {border: 1px solid red;}
		#li2 {border: 1px solid blue; }
		#section_box {border: 1px solid orange;}*/

	</style>
</head>
<body>
	<header>
		<?php include "header.php";?>
	</header>
	<section id="section_box">
		<?php
			if(isset($_GET["page"]))
				$page = $_GET["page"];
			else
				$page = 1;

			$con = mysqli_connect("localhost", "root", "", "worldcup");
			$sql = "select * from newsboard order by news_num desc";
			$result = mysqli_query($con, $sql);
			$total_record = mysqli_num_rows($result);
			$scale = 3;
			
			if ($total_record % $scale == 0)
				$total_page = floor($total_record/$scale);
			else
				$total_page = floor($total_record/$scale) + 1; 

			$start = ($page - 1) * $scale; 

			$number = $total_record - $start;
			
			for ($i = $start; $i < $start + $scale && $i < $total_record; $i++)
			{
				mysqli_data_seek($result, $i);
				$row = mysqli_fetch_array($result);
				$num = $row["news_num"];
				$id = $row["news_id"];
				$name = $row["news_name"];
				$subject = $row["news_subject"];
				$content = $row["news_content"];
				$regist_day = $row["news_regist_day"];
				$hit = $row["news_hit"];
				$file_copied  = $row["news_file_copied"];
				$content = str_replace(" ", "&nbsp;", $content);
				$content = str_replace("\n", "<br>", $content);
				if ($row["news_file_name"])
						$file_image = "<img src='./img/file.gif'>";
				else
						$file_image = " ";
		?>
		<div id="news_box">
			<div id="col1" >
				<?php
					if ($file_copied) {?>
						<a href="newsboard_view.php?news_num=<?=$num?>&page=<?=$page?>">
							<img src="./data2/<?=$file_copied?>">
						</a>
				<?php
					} else{
				?>
						<a href="newsboard_view.php?news_num=<?=$num?>&page=<?=$page?>">
							<img src="no-image-found.png">
						</a>
				<?php
					}
				?>
			</div>
			<div>
			<div id="col2">
				<ul>
					<li id="li1"><a href="newsboard_view.php?news_num=<?=$num?>&page=<?=$page?>"><h3><?=$subject?></h3></a></li>
					<li id="li2"><?=$content?></li>
					<li id="li3"><?=$regist_day?></li><br>
			</div>
		<?php
		   	   $number--;
		   }
		   mysqli_close($con);
		?>
			</ul>
			<ul id="page_num">
			<?php
				if ($total_page>=2 && $page >= 2)	
				{
					$new_page = $page-1;
					echo "<li><a href='newsboard_list.php?page=$new_page'>◀ 이전</a> </li>";
				}		
				else 
					echo "<li>&nbsp;</li>";

			   	for ($i=1; $i<=$total_page; $i++)
			   	{
					if ($page == $i)
					{
						echo "<li><b> $i </b></li>";
					}
					else
					{
						echo "<li><a href='newsboard_list.php?page=$i'> $i </a><li>";
					}
			   	}
			   	if ($total_page>=2 && $page != $total_page)		
			   	{
					$new_page = $page+1;	
					echo "<li> <a href='newsboard_list.php?page=$new_page'>다음 ▶</a> </li>";
				}
				else 
					echo "<li>&nbsp;</li>";
			?>
			</ul>
			<?php 
   				if($userid=="admin") {
			?>
			<ul class="buttons">
				<li><button onclick="location.href='newsboard_form.php'">글쓰기</button></li>
			<?php 
   				}
			?>
			</ul>
			</div>
		</div>
	</section>
</body>
</html>
