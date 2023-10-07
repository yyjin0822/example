<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LYB</title>
    <link rel="stylesheet" href="css/p6_style.css">
    <script src="script/jquery-1.12.3.js"></script>
</head>
<body>
    <?php
        $host = 'localhost';
        $user = 'root';
        $pw = '1234';
        $dbName = 'shopdb.lybmembertbl';
        $mysqli = new mysqli($host, $user, $pw);

        if(isset($_POST["id"])) {
            $sql = "delete from shopdb.lybmembertbl where USERID = '" . $_POST["id"] . "' and NAME = '" . $_POST["name"] . "'";
            if($_POST["delete"] == "123") {
                $result = mysqli_query($mysqli, $sql);
                echo "<script>alert('삭제가 완료되었습니다.');</script>";
            }else {
                echo "<script>alert('승인 코드가 맞지 않습니다.');</script>";
            }
        }

        // $id_line = $_POST['id_line'];
        // $name_line = $_POST['name_line'];
        // $delete_code_line = $_POST['delete code_line'];
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
    <div class="content">
        <h1 class="title">LYB 회원 삭제</h1>
        <form action="/delete.php" method="post">
                        <!-- <button type="submit" class="click">조회</button> -->
            <ul class="list">
                <li>
                    <div class="input_row" id="id_line">
                        <!-- <span class="blind"><b>ID:</b></span> -->
                        <b>ID:</b><input type="text" id="id" name="id" placeholder="아이디" title="아이디" class="input_text" maxlength="41" value="" size="40">
                    </div>
                </li>
                <li>
                    <div class="input_row" id="name_line">
                        <!-- <div class="blind"><b>NAME:</b></div> -->
                        <b>NAME:</b><input type="text" id="nm" name="name" placeholder="이름" title="이름" class="input_text" maxlength="10" value="" size="40">
                    </div>
                </li>
                <li>
                    <div class="input_row" id="delete code_line">
                        <!-- <div class="blind"><b>CODE:</b></div> -->
                        <b>CODE:</b><input type="text" id="dc" name="delete" placeholder="삭제 승인 코드" title="삭제 코드" class="input_text" maxlength="41" value="" size="40">
                    </div>
                </li>
            </ul>

            <h2 class="Q">위 회원을 삭제하시겠습니까?</h2>
            
            <ul class="click">
                <li>
                    <button class="click1" type="submit">회원 삭제</button>
                </li>
                <li>
                    <div class="click2"><a href="/main.php">홈으로</a></div>
                </li>
            </ul>
        </form>
    </div>
</div>
</body>
</html>
