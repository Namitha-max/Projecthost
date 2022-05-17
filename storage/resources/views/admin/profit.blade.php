<!DOCTYPE html>
<html lang="en">
  <head>

  @include('admin.css')
  </style>
  </head>
  <body>

      <!-- partial -->

      @include('admin.sidebar')



@include('admin.navbar')

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Profit Details<small> </small>
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->


            <div class="row">

				<?php
				//index.php
				//$connect = mysqli_connect("localhost", "root", "", "hotel");
				$con=mysqli_connect("127.0.0.1","root","","vacations");


					$query = "SELECT * FROM payment";
					$result = mysqli_query($con, $query);
					$chart_data = '';
					$tot = 0;

					{
					 $chart_data .= "{ date:'".$row["cout"]."', profit:".$row["fintot"] *10/100 ."}, ";
					 $tot = $tot + $row["fintot"] *10/100;
					}
					$chart_data = substr($chart_data, 0, -2);

?>

				<br>
				<br>
				<br>
				<br><div id="chart"></div>
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>ID</th>
                                            <th>Name</th>
                                            <th>Check in</th>
											<th>Check out</th>
                                            <th>Resort Rent</th>


											<th>Gr.Total</th>
											<th>Profit</th>


                                        </tr>
                                    </thead>
                                    <tbody>

									<?php

										$sql="select * from payment";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{

											$id = $row['id'];

											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['id']." </td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>


													<td>$".$row['ttot']."</td>
													<td>$".$row['mepr']."</td>
													<td>$".$row['btot']."</td>
													<td>$".$row['fintot']."</td>
													<td>$".$row['fintot']*10/100 ."</td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$row['id']." </td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>

													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>


													<td>$".$row['ttot']."</td>
													<td>$".$row['mepr']."</td>
													<td>$".$row['btot']."</td>
													<td>$".$row['fintot']."</td>
													<td>$".$row['fintot']*10/100 ."</td>
													</tr>";

											}

										}

									?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->

                </div>

            </div>


    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

    @include('admin.script')
</body>
</html>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['profit'],
 labels:['Profit'],
 hideHover:'auto',
 stacked:true
});
</script>
