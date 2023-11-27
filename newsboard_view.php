<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common2.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
   	<div id="board_box">
	    <h3 class="title" style="border: 0px"></h3>
<?php
	$num  = $_GET["news_num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "root", "", "worldcup");
	$sql = "select * from newsboard where news_num=$num"; 
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["news_id"];
	$name      = $row["news_name"];
	$regist_day = $row["news_regist_day"];
	$subject    = $row["news_subject"];
	$content    = $row["news_content"];
	$file_name    = $row["news_file_name"];
	$file_type    = $row["news_file_type"];
	$file_copied  = $row["news_file_copied"];
	$hit          = $row["news_hit"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update newsboard set news_hit=$new_hit where news_num=$num";   
	mysqli_query($con, $sql);
?>		
	    <ul id="view_content">
			<li>
				<span class="col1"><b style="font-size: 20px;"> <?=$subject?></b></span>
				<span class="col2"><?=$name?> | <?=$regist_day?></span>
			</li>
			<li>
				<?php
					if ($file_copied) {?>
						<img src="./data2/<?=$file_copied?>" style="margin-left: 17%;"><br><br>
				<?php
					} else{
				?>
						<br><br>
				<?php
					}
				?>
				
				<?php
					if($file_name) {
						$real_name = $file_copied;
						$file_path = "./data2/".$real_name;
						$file_size = filesize($file_path);

						echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
			       		<a href='newsboard_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
			           	}
				?>
				<?=$content?>
			</li>		
	    </ul>
	    <?php
	    	if ($userid == "admin"){ ?>
	    		<ul class="buttons">
					<li><button onclick="location.href='newsboard_list.php?page=<?=$page?>'">목록</button></li>
					<li><button onclick="location.href='newsboard_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
					<li><button onclick="location.href='newsboard_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
					<li><button onclick="location.href='newsboard_form.php'">글쓰기</button></li>
				</ul>
		<?php
	    	}
	    	else
	    	{?>
	    		<ul class="buttons">
					<li><button onclick="location.href='newsboard_list.php?page=<?=$page?>'">목록</button></li>
				</ul>
		<?php
	    	}
	    ?>
	    
	</div> <!-- board_box -->
</section> 
</body>
</html>
