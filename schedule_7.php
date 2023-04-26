<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>경기일정</title>

 <link rel="stylesheet" type="text/css" href="./css/common2.css">
 <link rel="stylesheet" type="text/css" href="./css/schedule.css">
  </head>
  <body>
    <header>
        <?php include "header.php";?>
    </header>
    <table>
    <tr>
    <td><a href="schedule_1.php">11.21 월</a></td>
    <td><a href="schedule_2.php">11.22 화</a></td>
    <td><a href="schedule_3.php">11.23 수</a></td>
    <td><a href="schedule_4.php">11.24 목</a></td>
    <td><a href="schedule_5.php">11.25 금</a></td>
    <td><a href="schedule_6.php">11.26 토</a></td>
    <td><a href="schedule_7.php">11.27 일</a></td>
    <td><a href="schedule_8.php">11.28 월</a></td>
    <td><a href="schedule_9.php">11.29 화</a></td>
    <td><a href="schedule_10.php">11.30 수</a></td>
    <td><a href="schedule_11.php">12. 1 목</a></td>
    <td><a href="schedule_12.php">12. 2 금</a></td>
    <td><a href="schedule_13.php">12. 3 토</a></td>
    <td><a href="schedule_14.php">12. 4 일</a></td>
    <td><a href="schedule_15.php">12. 5 월</a></td>
    <td><a href="schedule_16.php">12. 6 화</a></td>
    <td><a href="schedule_17.php">12. 7 수</a></td>
    <td><a href="schedule_18.php">12. 10 토</a></td>
    <td><a href="schedule_19.php">12. 11 일</a></td>
    <td><a href="schedule_20.php">12. 14 수</a></td>
    <td><a href="schedule_21.php">12. 15 목</a></td>
    <td><a href="schedule_22.php">12. 18 일</a></td>
    <td><a href="schedule_23.php">12. 19 월</a></td>
  </tr>
    </table>

        <table class = "down">
      
        <tr class = "dr">
          <th>경기일자</th>
          <th colspan = "5">경기</th>

        </tr>
        <?php
          $jb_conn = mysqli_connect('localhost', 'root', '', 'worldcup' );
          $jb_sql = "SELECT * FROM result where day = '11.27 일';";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr><td>'
            . $jb_row[ 'day' ]
            . '</td><td>'
            . $jb_row[ 'league' ]
            . '</td><td>' 
            . $jb_row[ 'A_name' ]
            . '</td><td>' 
            . $jb_row[ 'A_goal' ]
            . '</td><td>' 
            . $jb_row[ 'B_name' ]
            . '</td><td>' 
            . $jb_row[ 'B_goal' ] 
            . '</td></tr>';
         }
        ?>
  </body>
</html>