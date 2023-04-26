<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
?>		
        <div id="top">
            <img src="anumark.jpg" width="20px" height="20px">
            <h3>
                <a href="index.php">&nbsp;스포츠</a>
            </h3>
            <ul id="top_menu"> 
            <?php  ?> 
            <?php if(!$userid) {?> 
                <li><a href="member_form.php">회원 가입</a> </li>
                <li> | </li>
                <li><a href="login_form.php">로그인</a></li>
            <?php
            } else {$logged = $username."(".$userid.")님";?>
                <li><?=$logged?> </li>
                <li> | </li>
                <li><a href="logout.php">로그아웃</a></li>
                <li> | </li>
                <li><a href="member_modify_form.php">정보 수정</a></li>
            <?php
                }
            ?>
            <?php
                if($userid=="admin") {
            ?>
                <li> | </li>
                <li><a href="admin.php">관리자 모드</a></li>
            <?php
                }
            ?>
            </ul>  
            <div id="menu_bar">
                <ul>  
                    <li><a href="index.php">홈</a></li>
                    <li><a href="newsboard_list.php">뉴스</a></li>
                    <li><a href="board_list.php">게시판</a></li>
                    <li><a href="schedule.php">경기일정</a></li>
                    <li><a href="result.php">경기결과</a></li>
                </ul>
            </div>
        </div>