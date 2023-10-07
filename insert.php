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

        
        if(isset($_POST["id"])) {
			$sql = "insert into shopdb.lybmembertbl (USERID, NAME, PW, EMAIL, HEIGHT, WEIGHT, BIRTHDATE, PHONENUMBER, ADDRESS) 
			values ('" . $_POST["id"] . "', '" . $_POST["name"] . "','" . $_POST["password"] . "', '" . $_POST["email"] . "', '" . $_POST["height"] . "', '" . $_POST["weight"] . "',
			'" . $_POST["birthday"] ."', '" . $_POST["phonenumber"] . "', '" . $_POST["address"] . "')";
			$result = mysqli_query($mysqli, $sql);

			if($result != null) {
				echo "<script>alert('신규 회원 등록이 완료되었습니다.')</script>";
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
                    <li><a href="/select.php">회원조회</a></li>
                </ul>
            </ul>
        </div>
    </header>
</body>
<body>
    <div class="wrap">
        <div class="content">
            <div class="title">LYB 신규 회원정보 입력</div>
			<form action="/insert.php" method="post">
				<ul class="list">
					<li>
						<div class="input_row" id="name_line">
							<!-- <div class="blind"><b>NAME:</b></div> -->
							<b>NAME: </b><input type="text" id="nm" name="name" placeholder="이름" title="이름" class="input_text"maxlength="10" value="" size="40">

						</div>
					</li>
					<li>
						<div class="input_row" id="id_line">
							<!-- <span class="blind"><b>ID:</b></span> -->
							<b>ID: </b><input type="text" id="id" name="id" placeholder="아이디" title="아이디" class="input_text" maxlength="41" value="" size="40">
						</div>
					</li>
					<li>
						<div class="input_row" id="password_line">
							<!-- <div class="blind"><b>password:</b></div> -->
							<b>PASSWORD: </b><input type="text" id="pw" name="password" placeholder="비밀번호" title="비밀번호" class="input_text"maxlength="41" value="" size="40">
						</div>
					</li>
					<li>
						<div class="input_row" id="email_line">
							<!-- <div class="blind"><b>EMAIL:</b></div> -->
							<b>EMAIL: </b><input type="text" id="em" name="email" placeholder="이메일" title="이메일" class="input_text"maxlength="41" value="" size="40">
						</div>
					</li>
					<li>
						<div class="input_row" id="height_line">
							<!-- <div class="blind"><b>HEIGHT:</b></div> -->
							<b>HEIGHT: </b><input type="text" id="hg" name="height" placeholder="신장" title="신장" class="input_text"maxlength="41" value="" size="40">
						</div>
					</li>
					<li>
						<div class="input_row" id="weight_line">
							<!-- <div class="blind"><b>WEIGHT:</b></div> -->
							<b>WEIGHT: </b><input type="text" id="wg" name="weight" placeholder="몸무게" title="몸무게" class="input_text"maxlength="41" value="" size="40">
						</div>
					</li>
					<li>
						<div class="input_row" id="birthday_line">
							<!-- <div class="blind"><b>BIRTHDAY:</b></div> -->
							<b>BIRTHDAY: </b><input type="text" id="bd" name="birthday" placeholder="생년월일" title="생년월일" class="input_text"maxlength="41" value="" size="40">
						</div>
					</li>
					<li>
						<div class="input_row" id="phone number_line">
							<!-- <div class="blind"><b>PHONE NUMBER:</b></div> -->
							<b>PHONE NUMBER: </b><input type="text" id="pn" name="phonenumber" placeholder="핸드폰 번호" title="핸드폰 번호" class="input_text"maxlength="41" value="" size="40">
						</div>
					</li>
					<li>
						<div class="input_row" id="address_line">
							<!-- <div class="blind"><b>ADDRESS:</b></div> -->
							<b>ADDRESS: </b><input type="text" id="ar" name="address" placeholder="주소" title="주소" class="input_text"maxlength="41" value="" size="40">
						</div>
					</li>
					
					
				</ul> 

				<h2 class="Q"></h2>

				<ul class="click">
					<li>
						<button class="click1" type="submit">등록</button>
					</li>
					<li>
						<div class="click2"><a href="/main.php">취소</a></div>
					</li>
				</ul>
			</form>
        </div>
    </div>
</body>
