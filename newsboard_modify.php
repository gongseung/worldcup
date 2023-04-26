<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

    $subject = $_POST["subject"];
    $content = $_POST["content"];
          
    $con = mysqli_connect("localhost", "root", "", "worldcup");
    $sql = "update newsboard set news_subject='$subject', news_content='$content' ";
    $sql .= " where news_num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'newsboard_list.php?page=$page';
	      </script>
	  ";
?>

   
