<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LYB</title>
    <link rel="stylesheet" href="CSS/p7_style.CSS">
    <script src="script/jquery-1.12.3.js"></script>
</head>
<body>
<?php
        $host = 'localhost';
        $user = 'root';
        $pw = '1234';
        $dbName = 'shopdb.lybmembertbl'; 
        $mysqli = new mysqli($host, $user, $pw);

        $select = "select * from shopdb.lybmembertbl where USERID = '" . $_GET['USERID'] . "'";
        $array = mysqli_query($mysqli, $select);

        if(isset($_POST["id"])) {
            $sql = "update shopdb.lybmembertbl set NAME =  '" . $_POST["name"] . "', PW = '" . $_POST["password"] . "', EMAIL = '" . $_POST["email"] . "', HEIGHT = '" . $_POST["height"] . "', WEIGHT = '" . $_POST["weight"] . 
            "', BIRTHDATE = '" . $_POST["birthday"] ."', PHONENUMBER = '" . $_POST["phonenumber"] . "', ADDRESS = '" . $_POST["address"] . "' where USERID = '" . $_POST['id'] . "'";
			var_dump($sql);
            $result = mysqli_query($mysqli, $sql);

			if($result != null) {
				echo "<script>alert('기존 회원 수정이 완료되었습니다.')</script>";
                // echo "window.location.href = 'localhost:8080/select.php'";
                echo "<script>location.replace('/select.php')</script>";
			}
		}

    ?>
    <header>
        <div class="wrap">
            <ul class="gnb">
                <ul class="smenu">
                    <li><a href="/main.php"><img src="image/home.png" alt="집모양 이미지"></a></li>
                </ul>
                    <ul class="menu">
                    <li><a href="/delete.php">회원삭제</a></li>
                    <li><a href="/insert.php">회원정보입력</a></li>
                    <li><a href="/select.php">회원검색</a></li>
                </ul>
            </ul>
        </div>
    </header>
</body>
<body>
    <div class="wrap">
        <div class="content">
            <div class="title">LYB 기존 회원정보 수정</div>
            <?php foreach ($array as $row) { ?>
			<form action="/update.php" method="post">
				<ul class="list">
					<li>
						<div class="input_row" id="name_line">
							<!-- <div class="blind"><b>NAME:</b></div> -->
							<b>NAME: </b><input type="text" id="nm" name="name" placeholder="이름" title="이름" class="input_text"maxlength="10" size="40" value=<?= $row['NAME'] ?>>

						</div>
					</li>
					<li>
						<div class="input_row" id="id_line">
							<!-- <span class="blind"><b>ID:</b></span> -->
							<b>ID: </b><input type="text" id="id" name="id" placeholder="아이디" title="아이디" class="input_text" maxlength="41" size="40" value=<?= $row['USERID'] ?> readonly>
						</div>
					</li>
					<li>
						<div class="input_row" id="password_line">
							<!-- <div class="blind"><b>password:</b></div> -->
							<b>PASSWORD: </b><input type="text" id="pw" name="password" placeholder="비밀번호" title="비밀번호" class="input_text"maxlength="41" size="40" value=<?= $row['PW'] ?> >
						</div>
					</li>
					<li>
						<div class="input_row" id="email_line">
							<!-- <div class="blind"><b>EMAIL:</b></div> -->
							<b>EMAIL: </b><input type="text" id="em" name="email" placeholder="이메일" title="이메일" class="input_text"maxlength="41" size="40" value=<?= $row['EMAIL'] ?>>
						</div>
					</li>
					<li>
						<div class="input_row" id="height_line">
							<!-- <div class="blind"><b>HEIGHT:</b></div> -->
							<b>HEIGHT: </b><input type="text" id="hg" name="height" placeholder="신장" title="신장" class="input_text"maxlength="41" size="40" value=<?= $row['HEIGHT'] ?> >
						</div>
					</li>
					<li>
						<div class="input_row" id="weight_line">
							<!-- <div class="blind"><b>WEIGHT:</b></div> -->
							<b>WEIGHT: </b><input type="text" id="wg" name="weight" placeholder="몸무게" title="몸무게" class="input_text"maxlength="41" size="40" value=<?= $row['WEIGHT'] ?>>
						</div>
					</li>
					<li>
						<div class="input_row" id="birthday_line">
							<!-- <div class="blind"><b>BIRTHDAY:</b></div> -->
							<b>BIRTHDAY: </b><input type="text" id="bd" name="birthday" placeholder="생년월일" title="생년월일" class="input_text"maxlength="41" size="40" value=<?= $row['BIRTHDATE'] ?>>
						</div>
					</li>
					<li>
						<div class="input_row" id="phone number_line">
							<!-- <div class="blind"><b>PHONE NUMBER:</b></div> -->
							<b>PHONE NUMBER: </b><input type="text" id="pn" name="phonenumber" placeholder="핸드폰 번호" title="핸드폰 번호" class="input_text"maxlength="41" size="40" value=<?= $row['PHONENUMBER'] ?> >
						</div>
					</li>
					<li>
						<div class="input_row" id="address_line">
							<!-- <div class="blind"><b>ADDRESS:</b></div> -->
							<b>ADDRESS: </b><input type="text" id="ar" name="address" placeholder="주소" title="주소" class="input_text"maxlength="41" size="40" value=<?= $row['ADDRESS'] ?>>
						</div>
					</li>
					
					
				</ul> 

				<h2 class="Q"></h2>

				<ul class="click">
					<li>
						<button class="click1" type="submit">수정</button>
					</li>
					<li>
						<div class="click2"><a href="/select.php">취소</a></div>
					</li>
				</ul>
			</form>
            <?php } ?>
        </div>
    </div>
</body>
