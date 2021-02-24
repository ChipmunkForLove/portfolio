<meta charset="utf-8">
<?php

$mysqli = new mysqli('localhost', 'novus0000', 'ektgha730!', 'novus0000');
$conn = mysqli_connect('localhost', 'novus0000', 'ektgha730!', 'novus0000');


if (mysqli_connect_errno($conn))
{
  echo "데이터베이스 연결 실패: " . mysqli_connect_error();
}

switch($_GET["mode"]){
    
    case 'insert':

        echo "insert is done";
        break;

    case 'delete':

        echo "delet is done";     
        break;

    case 'modify':
 
        echo "modify is done";
        break;

    case 'new':
        $SPONSOR = $mysqli -> real_escape_string($_POST["SPONSOR"]);
        $DONATION = $mysqli -> real_escape_string($_POST["DONATION"]);

        echo "$SPONSOR 님 $DONATION 원이 정상적으로 후원되었습니다.";
        mysqli_query( $conn, "INSERT INTO `tb_ai_donation_donation_list`( `SPONSOR`, `DONATION`) VALUES ('$SPONSOR', $DONATION)");
        echo "<br><a href=./index.html>홈페이지로 돌아가기</a>";


        break;
}
?>
