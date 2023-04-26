<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>경기결과</title>

 <link rel="stylesheet" type="text/css" href="./css/common2.css">
 <link rel="stylesheet" type="text/css" href="./css/result.css">
  </head>
  <body>
    <header>
        <?php include "header.php";?>
    </header>
    <table>
    <tr>
    <td><a href="result_A.php">A조</a></td>
    <td><a href="result_B.php">B조</a></td>
    <td><a href="result_C.php">C조</a></td>
    <td><a href="result_D.php">D조</a></td>
    <td><a href="result_E.php">E조</a></td>
    <td><a href="result_F.php">F조</a></td>
    <td><a href="result_G.php">G조</a></td>
    <td><a href="result_H.php">H조</a></td>
  </tr>
    </table>

         <table class = "down">
      
        <tr>
          <th>조</th>
          <th>국가</th>
          <th>경기수</th>
          <th>승점</th>
          <th>승</th>
          <th>무</th>
          <th>패</th>
          <th>골득실</th>
        </tr>
        <?php
          $jb_conn = mysqli_connect('localhost', 'root', '', 'worldcup' );
          $jb_sql = "SELECT * FROM country where id = 'C';";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr><td>'
            . $jb_row[ 'id' ]
            . '</td><td>'
            . $jb_row[ 'name' ]
            . '</td><td>' 
            . $jb_row[ 'game' ]
            . '</td><td>' 
            . $jb_row[ 'point' ]
            . '</td><td>' 
            . $jb_row[ 'win' ]
            . '</td><td>' 
            . $jb_row[ 'draw' ] 
            . '</td><td>' 
            . $jb_row[ 'lose' ] 
            . '</td><td>' 
            . $jb_row[ 'goal' ] 
            . '</td></tr>';
         }
        ?>
  </body>
</html>