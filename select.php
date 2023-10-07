<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LYB</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script/jquery-1.12.3.js"></script>
</head>
<body>
    <?php
        $host = 'localhost';
        $user = 'root';
        $pw = '1234';
        $dbName = 'shopdb.lybmembertbl';
        $mysqli = new mysqli($host, $user, $pw);

        if(isset($_GET["USERID"])) {
            $sql = "delete from shopdb.lybmembertbl where USERID = '" . $_GET["USERID"] . "'";
            $delete = mysqli_query($mysqli, $sql);
            echo "<script>alert('삭제가 완료되었습니다.')</script>";
        }

        if(isset($_GET["select"])) {
            if($_GET["select"] == "") {
                $sql = "select * from shopdb.lybmembertbl";
                $result = mysqli_query($mysqli, $sql);
            }else {
                $sql = "select * from shopdb.lybmembertbl where userid = '" . $_GET["select"] . "' or name = '" . $_GET["select"] . "'";
                $result = mysqli_query($mysqli, $sql);
            }
        }else {
            $sql = "select * from shopdb.lybmembertbl";
            $result = mysqli_query($mysqli, $sql);
        }
    ?>
    <header>
        <div class="wrap">
            <ul class="gnb">
                <ul class="smenu">
                    <li><a href="/main.php"><img src="image/home.png" alt="집모양픽토그램"></a></li>
                </ul>
                <ul class="menu">
                    <li><a href="/delete.php">회원삭제</a></li>
                    <li><a href="/insert.php">회원정보입력</a></li>
                    <li><a href="/select.php">회원검색</a></li>
                </ul>
            </ul>
        </div>
    </header>
    <div class="wrap">
        <h1 class="tit">LYB 회원검색 조회</h1>
        <ul class="select">
            <li>
                <div class="sel">
                    <form action="/select.php" method="get">
                        <input type="text" id="id" name="select" placeholder="아이디/이름"
                            class="input_text" maxlength="41" value="" size="40">
                        <button type="submit" class="click">조회</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>

    <div class="wrap">
        <table>
            <tr>
                <th>이름</th>
                <th>아이디</th>
                <th>비밀번호</th>
                <th>이메일</th>
                <th>신장</th>
                <th>몸무게</th>
                <th>생년월일</th>
                <th>휴대폰번호</th>
                <th>주소</th>
                <th>수정</a></th>
                <th>삭제</a></th>
             </tr>
             <?php
                foreach($result as $row) {
             ?>
             <tr>
                 <!-- <td>윤유진</td> -->
                 <td><?= $row['NAME'] ?></td>
                 <td><?= $row['USERID'] ?></td>
                 <td><?= $row['PW'] ?></td>
                 <td><?= $row['EMAIL'] ?></td>
                 <td><?= $row['HEIGHT'] ?></td>
                 <td><?= $row['WEIGHT'] ?></td>
                 <td><?= $row['BIRTHDATE'] ?></td>
                 <td><?= $row['PHONENUMBER'] ?></td>
                 <td><?= $row['ADDRESS'] ?></td>
                 <td><a href="/update.php?USERID=<?=$row['USERID']?>">수정</a></td>
                 <td><a href="/select.php?USERID=<?=$row['USERID']?>">삭제</a></td>
             </tr>
             <?php
                }
             ?>
        </table>
    </div>
   
</body>
</html>