
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

<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Booking Status</h4>
                    <div class="table-responsive">


				<?php
							$con=mysqli_connect("127.0.0.1","root","","vacations");
						$sql = "select * from roombook";
						$re = mysqli_query($con,$sql);
						$c =0;
						while($row=mysqli_fetch_array($re) )
						{
								$new = $row['stat'];

								$id = $row['id'];
								if($new=="Not Conform")
								{
									$c = $c + 1;
                          		}
                        }
                        ?>

					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">

							<div class="panel panel-primary">

                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">

                                </label>
                              </div>
                            </th>
                            <th> Name </th>
                            <th>address</th>
                            <th> state</th>
                            <th> Email </th>
                            <th> Phone</th>
                            <th> Resort </th>
                            <th>Check In</th>
							<th>Check Out</th>
                            <th>amount</th>
                            <th>nodays</th>
                            <th>payment</th>

                          </tr>
                        </thead>
                                    <tbody>

									<?php
									$tsql = "select * from roombook";
									$tre = mysqli_query($con,$tsql);
									while($trow=mysqli_fetch_array($tre) )
									{
										$co =$trow['stat'];
										if($co=="Not Conform")
										{
											echo"<tr>
												<th>".$trow['id']."</th>
												<th>".$trow['FName']." ".$trow['LName']."</th>
                                                <th>".$trow['address']."</th>
                                                <th>".$trow['state']."</th>
												<th>".$trow['Email']."</th>
                                                <th>".$trow['Phone']."</th>
                                                <th>".$trow['resort']."</th>
                                                <th>".$trow['Cin']."</th>
                                                <th>".$trow['Cout']."</th>
                                                <th>".$trow['amount']."</th>
                                                <th>".$trow['nodays']."</th>
                                                <th>".$trow['payment']."</th>
                                                <td><a href=/print?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                                                </tr>";
										}

									}
									?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                                        </div>
                                    </div>
                                </div>
								<?php

								$rsql = "SELECT * FROM `roombook`";
								$rre = mysqli_query($con,$rsql);
								$r =0;
								while($row=mysqli_fetch_array($rre) )
								{
										$br = $row['stat'];
										if($br=="Conform")
										{
											$r = $r + 1;
                                        }
                                }

								?>

										<?php
										$msql = "SELECT * FROM `roombook`";
										$mre = mysqli_query($con,$msql);

										while($mrow=mysqli_fetch_array($mre) )
										{
											$br = $mrow['stat'];
											if($br=="Conform")
											{
												$fid = $mrow['id'];

											echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-blue'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$mrow['FName']."</h3>
														</div>
														<div class='panel-footer back-footer-blue'>
														<a href=show.php?sid=".$fid ."><button  class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
													Show
													</button></a>
															".$mrow['TRoom']."
														</div>
													</div>
											</div>";
                                            }
                                        }
										?>
                                    </div>
                                     </div>
                                     </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

          <!-- partial -->
          @include('admin.script')


</body>
</html>
