<!DOCTYPE html>
<html>
<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: arial;
			padding: 20px;
			background: #f1f1f1;
			background-image: url("background.jpg");
		}

		.header {
			padding: 30px;
			text-align: center;
			background: white
		}

		.header h1 {
			font-size: 50px
		}

		.topnav {
			overflow: hidden;
			background-color: #333;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.topnav a:hover {
			background-color: #007272;
			color: blue;
		}

		.leftcolumn {
			float: left;
			width: 25%;
			background-color: #000000;
			padding-left: 20px
		}

		.centercolumn {
			float: left;
			width: 50%;
			background-color: #000000;
			padding-left: 20px
		}

		.rightcolumn {
			float: left;
			width: 25%;
			background-color: #000000;
			padding-left: 20px
		}

		.fakeimg {
			background-color: #004141;
			width: 75%;
		}

		.card {
			background-color: white;
			padding: 20px;
			margin-top: 20px;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		.footer {
			padding: 20px;
			text-align: center;
			background-color: #002020;
			margin-top: 20px;
		}

		.leftcolumn, .rightcolumn {
			width: 100%
			padding0;
		}
	}

	    .topnav a {
	    	float: none;
	    	width: 100%
	    }
	}
	</style>
</head>
<body>

	<div class="header" style="background-color: Gainsboro;">
		<h1 style="font-family: serif;">TUGAS AKHIR PEMROGRAMAN WEB</h1>
	</div>

	<div class="rightcolumn">
			<div class="card" style="background-color: Gainsboro;">
				<h2 style="font-family: Times New roman">Hallo!!!</h2>
				<p>Perkenalkan, aku Anita Zahara sebelumnya aku merupakan mahasiswa aktif Informatika UAD semester 2, asal ku dari Majalengka - Jawa Barat. Usia ku saat ini 18 tahun dan aku kelahiran bulan september.</>
				<div>
					<img src="anita.jpeg" width="150px">
				</div>
			</div>
			<div class="card" style="background-color: Gainsboro;">
			<h2 style="font-family: Times New Roman">Hobi !!!</h2>
			<p>Mungkin bagi sebagian orang yang mengenalku akan tidak heran lagi jika aku memiliki hobi yang satu ini, aku sangat menyukai novel entah sudah ratusan novel yang telah ku baca, mengisi waktu lengang dengan membaca novel apalagi ditambah membacanya dipinggir pantai sambil menikmati deburan ombak yang indah mungkin tak masalah???</p>
			</div>
		</div>

		</div>

	<div class="row">
		<div class="centercolumn">
			<div class="card" style="background-color: Gainsboro;">
				<h2 align="center" style="font-family: Times New Roman;">FORM BIODATA</h2><br><br>

				<div style="background-color: Gainsboro;">
					<div align="center"><strong><font size="5" face="courier New, courier,mono">Isi Data Diri</font></strong></div>
		            <form name="nama" method="post" action="proses.php">
			        <table width="54%" border="0" align="center">
				    <tr>
					    <td><h4>Nama lengkap</h4></td>
					    <td><input style="background-color:Gainsboro;" type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td><h4>NIM</h4></td>
					    <td><input style="background-color:Gainsboro;" type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td><h4>E-mail</h4></td>
					    <td><input style="background-color:Gainsboro;" type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td><h4>Prodi</h4></td>
					<td><select style="background-color:Gainsboro;" name="prodi" id="prodi">
						<option>Informatika</option>
						<option>Teknologi Pangan</option>
						<option>Teknik Elektro</option>
						<option>Teknik Kimia</option>
						<option>Teknik Industri</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input style="background-color:Gainsboro;" type="submit" name="submit" value="kirim" id="kirim"><input style="background-color:lightblue;" type="reset" name="reset" value="batal"></td>
				</tr>
				
			</table>
		</form>
		<br>
		<div align="center"><strong><a href="lihat.php">::Lihat Data Diri::</a></strong></div>
				</div>
			</div>

			
			<div class="card" style="background-color: Gainsboro;">
				<h1><center>KALENDER</center></h1>
				<h2><center>July 2022</center></h2>
				<?php
                $hari	= date("d");
                $bulan	= date ("m");
                $tahun	= date("Y");
                $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
                ?>

                <table style="border:2px solid #00000f " align="center" width="10%" height="35%">
                <tr style="background-color: medium aqua merine;">
                    <td align=center><font color="#FF0000">Minggu</font></td>
                    <td align=center>Senin</td>
                    <td align=center>Selasa</td>
                    <td align=center>Rabu</td>
                    <td align=center>Kamis</td>
                    <td align=center>Jumat</td>
                    <td align=center>Sabtu</td>
                </tr>
                <?php
                $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
                for ($ds=1;$ds<=$s;$ds++) {
                    echo "<td></td>";
                }
 
                for ($d=1;$d<=$jumlahhari;$d++) {
	                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
		                echo "<tr>"; 
		            }
                $warna="#000000";
 
                if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#002020"; }
                echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
                }
                echo '</table>'; 
				?>
		    </div>
		</div>
		<div class="rightcolumn">
			<div class="card" style="background-color: Gainsboro;">
				<h2 style="font-family: Times New Roman">Pengalaman Organisasi</h2>
				<p>Saat aku duduk di bangku SMP aku sudah mengikuti organisasi yaitu Paskibra, tak sampai disitu, saat aku semester 1 di bangku perkuliahan aku mengikuti kepanitiaan untuk pengalaman dan menambah relasi dan saat ini aku mengikuti organisasi BEM yang ada ditingkat Fakultas untuk menambahkan pengalaman organisasi saya di CV.
				<br>Berikut foto ku bersama teman-teman organisasi ku :
				</p>
				<img src="ayang.jpeg" width="300px">
			</div>


		</div>
		<div class="rightcolumn">
		<div class="card"; style="background-color: Gainsboro;">
				<h1><center style="font-family: Times New Roman;">KALKULATOR</center></h1>
			<table border="1" cellspacing="10" align="center" cellpadding="">
			<div class="userInput"><p class="userEntry"></p><p class="finalCalc"></p></div>
			<link rel="stylesheet" type="text/css" href="style.css" />
<div class="calcButtons">


	<button>+/-</button>
	<button>AC</button>
	<button>DEL</button>
	<button class="operator">*</button>

	<button class="number">1</button>
	<button class="number">2</button>
	<button class="number">3</button>
	<button class="operator">+</button>

	<button class="number">4</button>
	<button class="number">5</button>
	<button class="number">6</button>
	<button class="operator">/</button>

	<button class="number">7</button>
	<button class="number">8</button>
	<button class="number">9</button>
	<button class="operator">-</button>


	<button class="number">0</button>
	<button class="decimal">.</button>
	<button class="operator">=</button>


</div>
</div>

<script src="app.js"></script>
            </div>


</div>   

</body>
</html>
