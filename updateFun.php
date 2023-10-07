<?php



        $host = 'localhost';
        $user = 'root';
        $pw = '1234';
        $dbName = 'shopdb.lybmembertbl';
        $mysqli = new mysqli($host, $user, $pw); 
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