<?php 
require_once('../req/config.php');
require_once('../req/declear.php');
require_once('../req/loginstatus.php');
require_once('script/topright.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>::Messages | All Messages</title>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../plugin/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="../plugin/datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../dist/css/schapp.min.css">   
    <link rel="stylesheet" href="../plugin/iCheck/flat/blue.css">
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <?php echo $_SESSION['logo']; ?>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
             <?php 
			
			 $namequery="select clientapp_name from setting_tab where clientapp_id='".$_SESSION['clientappid']."'";
					  $output=mysqli_query($con,$namequery);
					   if(mysqli_num_rows($output))
					   {
						   while($rows=mysqli_fetch_assoc($output))
						   {
							   $name=$rows['clientapp_name'];
							   echo $name;
						   }
					   }
			 ?>
          </a>
          <!-- Navbar Right Menu -->
           <?php echo $_SESSION['topright']; ?>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>User Name</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            <li class="treeview">
              <a href="admindashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
              
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-graduation-cap"></i>
                <span>Manage Student</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="enrolstd.php"><i class="fa fa-circle-o"></i> Enrol New Student</a></li>
                <li><a href="viewstd.php"><i class="fa fa-circle-o"></i> View Student Record</a></li>
                <li><a href="stdattendance.php"><i class="fa fa-circle-o"></i> Student Attendance</a></li>               
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Manage Employee</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="addemployee.php"><i class="fa fa-circle-o"></i> Add New Employee</a></li>
                <li><a href="viewemployee.php"><i class="fa fa-circle-o"></i> View Employee Record</a></li>
                <li><a href="viewemployee.php"><i class="fa fa-circle-o"></i> Employee Attendance</a></li>               
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-university"></i>
                <span>Manage Class</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="addclass.php"><i class="fa fa-circle-o"></i> Add New Class</a></li>
                <li><a href="viewclass.php"><i class="fa fa-circle-o"></i> View Classes</a></li>                          
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Manage Subjects</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="addsubject.php"><i class="fa fa-circle-o"></i> Add New Subject</a></li>
                <li><a href="viewsubjects.php"><i class="fa fa-circle-o"></i> View All Subject</a></li>                             
              </ul>
            </li>
            
            <li class="treeview">
              <a href="assignparent.php">
                <i class="fa fa-key"></i>
                <span>Manage Login</span>                
              </a>              
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-credit-card"></i>
                <span>Manage Fund</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="schpayment.php"><i class="fa fa-circle-o"></i> School Fees Management</a></li>
                <li><a href="otherpayment.php"><i class="fa fa-circle-o"></i> Other Fees</a></li>              
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-list"></i>
                <span>Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="attsummary.php"><i class="fa fa-circle-o"></i> Attendance Summary</a></li>
                <li><a href="studentreport.php"><i class="fa fa-circle-o"></i> Student Report</a></li>              
             	<li><a href="staffreport.php"><i class="fa fa-circle-o"></i> Employee Report</a></li>
                <li><a href="marksummary.php"><i class="fa fa-circle-o"></i> Student Mark Summary</a></li>
                <li><a href="reportsheet.php"><i class="fa fa-circle-o"></i> Student Report Sheet</a></li>     
             </ul>
            </li>   
            
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-microphone"></i>
                <span>Communicate</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="sendemail.php"><i class="fa fa-circle-o"></i> E-mail</a></li>
                <li><a href="intermessage.php"><i class="fa fa-circle-o"></i> Internal Message</a></li>
                <li><a href="shortmsg.php"><i class="fa fa-circle-o"></i> SMS</a></li>
                <li><a href="news.php"><i class="fa fa-circle-o"></i> News Board</a></li>
                <li><a href="events.php"><i class="fa fa-circle-o"></i> Event Board</a></li>               
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="payment.php"><i class="fa fa-circle-o"></i> Payment Settings</a></li>
                <li><a href="settings.php"><i class="fa fa-circle-o"></i> School Settings</a></li>
                <li><a href="createtimetable.php"><i class="fa fa-circle-o"></i> Create Timetable</a></li>
              </ul>
            </li>
            
            
            
             <li class="treeview">
              <a href="logout.php">
                <i class="fa fa-sign-out"></i> <span>Logout</span>
              </a>
              
            </li>     
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Communicate
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-microphone"></i> Communicate</a></li>
            <li class="active">Inbox</li>
          </ol>
        </section>

        <!-- Main content -->
               <section class="content">
          <div class="row">
            <div class="col-md-3">
              <a href="intermessage.php" class="btn btn-primary btn-block margin-bottom">Compose Message</a>
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Folders</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="mymessage.php"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right">
                    	<?php
							  
							 $xquery="select count(*) as Totalmsg from message_tab where msg_sender!='Admin' order by msg_id desc";
							 $output=mysqli_query($con,$xquery);
							 if(mysqli_num_rows($output))
							   {$fullclass='';
								   while($rows=mysqli_fetch_array($output))
								   {
									   
										$_SESSION['Totalmsg']=$rows['Totalmsg'];
										echo $_SESSION['Totalmsg'];
								   }
							   }
											
							 ?>
                    </span></a></li>
                    <li><a href="msgsent.php"><i class="fa fa-envelope-o"></i> Sent</a></li>
                    <!--li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                    <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a></li>
                    <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li-->
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <!--div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Labels</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                  </ul>
                </div><!-- /.box-body >
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Inbox</h3>
                  <div class="box-tools pull-right">
                    <div class="has-feedback">
                      <input type="text" class="form-control input-sm" placeholder="Search">
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                    <!--div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                    </div><!-- /.btn-group -->
                    <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <!--div class="pull-right">
                      1-50/200
                      <div class="btn-group">
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                      </div><!-- /.btn-group >
                    </div><!-- /.pull-right -->
                  </div>
                  <div class="table-responsive mailbox-messages">                  
                    <table class="table">
                    <?php
							  
							 $xquery="select * from message_tab where msg_sender!='Admin' order by msg_id desc";
							 $output=mysqli_query($con,$xquery);
							 if(mysqli_num_rows($output))
							   {$fullclass='';
								   while($rows=mysqli_fetch_array($output))
								   {
									   
										$_SESSION['msgid']=$rows['msg_id'];
											
							 ?>
                      <tbody>
                        
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-name"><?php echo $rows['msg_sender']; ?></td>
                          <td class="mailbox-subject"><b><a href="readmsg.php?msgid=<?php echo $rows['msg_id']; ?>"><?php echo $rows['msg_subject']; ?></a></b> </td>
                          <td class="mailbox-attachment"><i class="fa fa-calendar-check-o"></i>  <?php echo $rows['msg_date']; ?></td>
                          <td class="mailbox-date"><i class="fa fa-clock-o"></i>  <?php echo $rows['msg_time']; ?></td>
                        </tr>
                        <?php 
							   }
							}else{
						?>
                        <tr>
                        <td colspan="5"><i class="fa fa-time"></i><?php echo "No Internal message Yet"; ?></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                    <!--div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                    </div><!-- /.btn-group -->
                    <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <!--div class="pull-right">
                      1-50/200
                      <div class="btn-group">
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                      </div><!-- /.btn-group >
                    </div><!-- /.pull-right -->
                  </div>
                </div>
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        
          <b>Copyright &copy; <?php echo date('Y');?> <a href="http://shoolhive.com"><?php echo $_SESSION['companyname']; ?></a>.</b> All rights reserved.
      
      </footer>

         </div><!-- ./wrapper -->
    <script src="../plugin/jQuery-2.1.4.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugin/fastclick/fastclick.min.js"></script>
    <script src="../dist/js/app.min.js"></script>
    <script src="plugin/sparkline/jquery.sparkline.min.js"></script>
    <!--script src="plugin/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugin/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../plugin/slimScroll/jquery.slimscroll.min.js"></script-->
    <script src="../plugin/datepicker/bootstrap-datepicker.js"></script>
    <script src="../plugin/validator.js"></script>
    <script src="../plugin/iCheck/icheck.min.js"></script>
    <script src="staffapp.js"></script>
    <script>
 $(document).ready(function(e){
	$("#clname").change(function(){
		//alert('wehere');//checking
			var clname=$(this).val(); 
				// alert(atclass);
				// alert(clname);
		$.ajax({
	  	type: 'POST',
		url: 'script/classsectionselect.php',
		data: {clname:clname},		
		dataType:'html',
		  success: function(returndata){
			 
			 $('#classarm').val(returndata);
			  },
		  error: function(returndata)
		  {
			  $('#classarm').val(returndata);
		  }
		  
		}); return false;
			
		});
		 $(".exampick").datepicker({ 
		format: 'yyyy-mm-dd', 
		autoclose: true, 
		todayBtn: 'linked',
		 weekStart: 1,
		 todayHighlight: 1
		});
		
		
});
 </script>
 
    <!-- Page Script -->
    <script>
      $(function () {
        //Enable iCheck plugin for checkboxes
        //iCheck for checkbox and radio inputs
        $('.mailbox-messages input[type="checkbox"]').iCheck({
          checkboxClass: 'icheckbox_flat-blue',
          radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
          var clicks = $(this).data('clicks');
          if (clicks) {
            //Uncheck all checkboxes
            $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
          } else {
            //Check all checkboxes
            $(".mailbox-messages input[type='checkbox']").iCheck("check");
            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
          }
          $(this).data("clicks", !clicks);
        });

        //Handle starring for glyphicon and font awesome
        $(".mailbox-star").click(function (e) {
          e.preventDefault();
          //detect type
          var $this = $(this).find("a > i");
          var glyph = $this.hasClass("glyphicon");
          var fa = $this.hasClass("fa");

          //Switch states
          if (glyph) {
            $this.toggleClass("glyphicon-star");
            $this.toggleClass("glyphicon-star-empty");
          }

          if (fa) {
            $this.toggleClass("fa-star");
            $this.toggleClass("fa-star-o");
          }
        });
      });
    </script>
   
  </body>
</html>
