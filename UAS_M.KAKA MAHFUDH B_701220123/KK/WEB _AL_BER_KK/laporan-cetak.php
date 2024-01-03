<?php  
session_start();
$server="localhost";
$user="root";
$pass=""; // set your own password here
$db="db_alatberat (1)";

//Koneksi dan Menentukan Database Di Server
$conn = new mysqli($server, $user, $pass, $db);
if (!$conn) {
    die("KONEKSI GAGAL: " . $conn->connect_error());
}
error_reporting(E_ALL);
?>

<script type="text/javascript">
window.print() 
</script>

<style type="text/css">
#print {
	margin:auto;
	text-align:center;
	font-family:"Calibri", Courier, monospace;
	width:1200px;
	font-size:14px;
}
#print .title {
	margin:20px;
	text-align:right;
	font-family:"Calibri", Courier, monospace;
	font-size:12px;
}
#print span {
	text-align:center;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;	
	font-size:18px;
}
#print table {
	border-collapse:collapse;
	width:100%;
	margin:10px;
}
#print .table1 {
	border-collapse:collapse;
	width:90%;
	text-align:center;
	margin:10px;
}
#print table hr {
	border:3px double #000;	
}
#print .ttd {
	float:right;
	width:250px;
	background-position:center;
	background-size:contain;
}
#print table th {
	color:#000;
	font-family:Verdana, Geneva, sans-serif;	
	font-size:12px;
}
#logo{
	width:111px;
	height:90px;
	padding-top:10px;	
	margin-left:10px;
}

h2,h3{
	margin: 0px 0px 0px 0px;
}
</style>

<title>Laporan Cetak</title>
<div id="print">
	<table class='table1'>
		<tr>
		<td><img src='ex1.jpg' height="100" width="100"></td>
			<td>
		<h2>WEBSITE PENYEWAAN ALAT BERAT </h2>
		<h2>KK_MAHFUDH</h2>
		<p style="font-size:14px;"><i> SAROLANGUN</i></p>
		</td>
	</tr>
</table>

<table class='table'>	
<td><hr /></td>

</table>
<td><h3>LAPORAN DATA PENYEWA</h3></td>
<tr>
<td>
<table border='1' class='table' width="90%">
<tr>
<th width="30">No.</th>
<td>Nama Konsumen</td>
<td>Alat Berat</td>
<td>Lama Sewa</td>
<td>Tanggal Sewa</td> 
</tr>
<?php 
$data = $conn->query("select * from penyewaan");
$q=0;
while ($row = $data->fetch_array()) {
$q++;?>
<tr>
<td><center><?php echo $q; ?></center></td>
<td>&nbsp;&nbsp;<?php echo $row['Nama']; ?></td>
<td>&nbsp;&nbsp;<?php echo $row['Alat_Berat'] ?></td>
<td>&nbsp;&nbsp;<?php echo $row['Lama_Sewa'] ?></td>
<td>&nbsp;&nbsp;<?php echo $row['Tanggal_Sewa'] ?></td>
</tr>
<?php } ?>
</table>
</tr>
</table>
</div>
<div id="print">
<table width="450" align="right" class="ttd">
<tr>
<td width="100px" style="padding:20px 20px 20px 20px;" align="center">
<strong>KK_MAHFUDH</strong>
      <br><br><br><br>
<strong><u>Tanda Tangan</u><br></strong><small></small>
</td>
</tr>
</table>
</div>