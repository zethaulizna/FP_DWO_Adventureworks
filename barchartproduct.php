<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Adventure Works</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="styleGraph.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css.map">
    <link rel="stylesheet" href="styles-table.css">
    
</head>

<body id="page-top" style="margin-top:60px;">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>
			<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
	<center>
	</center>
</figure>

<script type ="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Graphic barang reject produk'
    },
    subtitle: {
        text: 'Source: Database Adventure Works'
    },
    xAxis: {
        type:'category'
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah produk yang cacat'
        }
    },
    
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: '2001',
        data: [
		<?php
		$conn = mysqli_connect("localhost","root","","dwo");
		$sql = "select nama,reject from produk1";
		$query = mysqli_query($conn,$sql) or die (mysqli_error());
		
		while ($temp = mysqli_fetch_array($query))
		{
			$nama = $temp['nama'];
			$reject = $temp['reject'];
			echo "['".$nama."',".$reject."],";
		}
		?>
		]

    },{ 
		name: '2002',
        data: [
		<?php
		$conn = mysqli_connect("localhost","root","","dwo");
		$sql = "select nama,reject from produk2";
		$query = mysqli_query($conn,$sql) or die (mysqli_error());
		
		while ($temp = mysqli_fetch_array($query))
		{
			$nama = $temp['nama'];
			$reject = $temp['reject'];
			echo "['".$nama."',".$reject."],";
		}
		?>
		]
	
	},{ 
		name: '2003',
        data: [
		<?php
		$conn = mysqli_connect("localhost","root","","dwo");
		$sql = "select nama,reject from produk3";
		$query = mysqli_query($conn,$sql) or die (mysqli_error());
		
		while ($temp = mysqli_fetch_array($query))
		{
			$nama = $temp['nama'];
			$reject = $temp['reject'];
			echo "['".$nama."',".$reject."],";
		}
		?>
		]
	
	}]
});

</script>
	
	
            <!-- Footer -->
            <footer class="sticky-footer bg-grey">
                <div class="container my-auto">
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

</body>

</html>