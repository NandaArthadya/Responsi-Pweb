<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RESPONSI</title>
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		position: relative;
		font-family: Roboto;
		background-image: url('jnne.jpg');
		background-repeat: no-repeat;
		background-position: center;
		height: 100vh;
		overflow: hidden;
		font-size: 15px;
	}

	.header{
		text-align: left;
		font-family: sans-serif;
		font-size: 50px;
		font-style: italic;
		color: #191654;
	}
	.center{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-55%, -55%);
		width: 60vh;
		background: none;
		border-radius: 10px;
	}
	.center h1{
		text-align: center;
		padding: 60px 0 40px 0;
		border-bottom: 1px solid black;
		color: red;
		font-size: 50px;
	}
	.center form{
		padding: 0 30px 40px;
		box-sizing: content-box;
		color: black;
		font-size: 30px;
		color: black;
	}
	form .txt_field{
		position: relative;
		border-bottom: 2px solid #adadad;
		margin: 20px 0 ;
	}
	.txt_field input{
		width: 100%;
		padding: 0 5px;
		height: 20px;
		font-size: 20px;
		border: none;
		background: white;
		outline: none;
	}
	.txt_field label{
		position: absolute;
		top: 50%;
		left: 5px;
		color: black;
		transform: translatey(-50%);
		font-size: 20px;
		pointer-events: none;
		background: white;
	}

	.txt_field span::before{
		content: '';
		position: absolute;
		top: 40px;
		left: 0;
		width: 0px;
		height: 2px;
		transition: .5s;
	}
	.txt_field input:focus ~ label,
	.txt_field input:valid ~ label{
		top: -5px;
		color: black;
	}
	.txt_field input:focus ~ span::before,
	.txt_field input:valid ~ span::before{
		width: 100%;
	}

	.pass{
		margin: -5px 0 20px 5px;
		color: white;
		cursor: pointer;
	}

	.pass:hover{
		text-decoration: underline;
	}

	input[type="submit"]{
		width: 100%;
		height: 40px;
		border: 1px solid;
		border-radius: 25px;
		font-size: 10px;
		font-weight: 700;
		cursor: pointer;
		color: red;
	}
	input[type="submit"]:hover{
		background: red;
		color: white;
		transition: .2s;
	}

	input[type="reset"]{
		width: 100%;
		height: 40px;
		border: 1px solid;
		border-radius: 25px;
		font-size: 10px;
		font-weight: 700;
		cursor: pointer;
		color: red;
	}

	input[type="reset"]:hover{
		background: red;
		color: white;
		transition: .2s;
	}
	.signup_link{
		margin: 30px;
		text-align: center;
		font-size: 10px;
		color: 	#666666;
	}
	.container {
		width: 100%;
		margin: 30px;
	}

	.HomeAbout{
		width: 200vw;
		height: 50vh;
	}

	</style>
	</head>
	<body>
	<div class="header"><b>JNEexpress</b></div>
	<div class="container">
		<div class="center">
			<h1>ISI FORM</h1>
			<form method="POST" action="proses.php" name="fform">
				<div class="txt_field">
					<input type="text" name="inama" id="nama" required>
					<span></span>
					<label>Nama</label>
				</div>
				<div class="txt_field">
					<input type="text" name="iasal" id="asal" required>
					<span></span>
					<label>Kota Asal</label>
				</div>
				<div class="txt_field">
					<input type="text" name="itujuan" id="tujuan" required>
					<span></span>
					<label>Kota Tujuan</label>
				</div>
				<div class="txt_field">
					<input type="text" name="ijarak" id="Jarak" required>
					<span></span>
					<label>Jarak</label>
				</div>
				<div class="txt_field">
					<input type="text" name="ototal" id="Total" required>
					<span></span>
					<label>Total Pembayaran</label>
				</div>
				<input type="submit" name="submit" value="Hitung" onclick="hitungtotal()">
				<INPUT TYPE="reset" value="Reset">
				<div class="Signup_link">
				</div>
				<br>
				<div class="cek">
					<center>
					<a href="lihat.php" ><img src="logo.png" width="50px" height="50px">Database</a>
				</center>
				</div>
			</form>
		</div>
	</div>
	<script language="JavaScript">

        function hitungtotal(){
        var nama = (document.fform.inama.value);
        var jarak =parseFloat(document.fform.ijarak.value);
        var ongkir= 0.0;
        ongkir = 5000;
        var total =0.0; 
        total = jarak*ongkir;
        document.fform.ototal.value=eval(total);
    }
	</script>

	</body>
</html>