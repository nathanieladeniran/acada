<?php 
require_once('../req/config.php');
require_once('../req/declear.php');
require_once('script/chkloginstatus.php');
require_once('script/topright.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>::Class Assignment</title>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../plugin/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="../plugin/datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../dist/css/schapp.min.css">   
    <link rel="stylesheet" href="../plugin/iCheck/flat/blue.css">
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

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
          </a>
          <!-- Navbar Right Menu -->
           <?php echo $_SESSION['toprightstaff']; ?>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo "../".$_SESSION['staffpics'];?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><span class="hidden-xs"><?php echo $_SESSION['staffusername'];?></span></p>
              <!--a href="#"><i class="fa fa-circle text-success"></i> Online</a-->
            </div>
          </div>
          <ul class="sidebar-menu">
            
            <li class="treeview">
              <a href="staffdashboard.php">
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
                <li><a href="stdattendance.php"><i class="fa fa-circle-o"></i> Mark Attendance</a></li>
                <li><a href="examscore.php"><i class="fa fa-circle-o"></i> Input Exam Score</a></li>
                <li><a href="testscore.php"><i class="fa fa-circle-o"></i> Input Test Score</a></li>  
                <li><a href="viewstd.php"><i class="fa fa-circle-o"></i> View Student</a></li>             
              </ul>
            </li>
            
            <li class="active treeview">
              <a href="myclass.php">
                <i class="fa fa-university"></i>
                <span>My Class</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="assignment.php"><i class="fa fa-circle-o"></i> Assignment</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> My Class Subject</a></li>           
              </ul>
            </li>
           
          
            <li class="treeview">
              <a href="#">
                <i class="fa fa-list"></i>
                <span>Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="staffattendance.php"><i class="fa fa-circle-o"></i> My Attendance</a></li>
                <li><a href="stdattendreport.php"><i class="fa fa-circle-o"></i> Student Attendance Report</a></li>              
             	<li><a href="#"><i class="fa fa-circle-o"></i> My Timetable</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> General Timetable</a></li>
                <li><a href="marks.php"><i class="fa fa-circle-o"></i> Student Mark Summary</a></li>
                <li><a href="reportsheet.php"><i class="fa fa-circle-o"></i> Student Report Sheet</a></li>   
             </ul>
            </li>   
            
            <li class="treeview">
              <a href="mymessage.php">
                <i class="fa fa-envelope"></i>
                <span>Messaging</span>               
              </a>
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
            Myclass
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-envelope"></i> Myclass</a></li>
            <li class="active">Class Note</li>
          </ol>
        </section>

        <!-- Main content -->
               <section class="content">          
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Write or Upload Class Note</h3>
                </div><!-- /.box-header -->
             	
                <div class="box-body"> 
                <form>               
                <div class="row has-feedback">
                	
                	<div class="form-group col-xs-6 col-md-3 col-lg-3">
                       <label>Session</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <select name="notesession" id="notesession" class="form-control" required>
                          	<option value="">Select Session</option>
                          	<option value="2017/2018">2017/2018</option>
                          	<option value="2018/2019">2018/2019</option>
                          	<option value="2019/2020">2019/2020</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2021/2022">2021/2022</option>
                          </select>                      
                    </div><!-- /.col-lg-6 -->
                    <div class="help-block with-errors"></div>
                    </div><!--input group-->  
                    
                    
                    <div class="form-group col-xs-6 col-md-3 col-lg-3">
                       <label>Term</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <select class="form-control" name="noteterm" id="noteterm" required>
                  		  <option value="">Select Exam</option>
                          <option value="First">First Term</option>
                          <option value="Second">Second Term</option>                      
                          <option value="Third">Third Term</option>
                  	 	 
                  </select>                      
                    </div><!-- /.col-lg-6 -->
                    <div class="help-block with-errors"></div>
                    </div><!--input group-->
                
                    <div class="form-group col-xs-6 col-md-3 col-lg-3">                                            
                       
                		<label>Class</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-bank"></i>
                          </div>
                         
                          <select name="noteclass" id="noteclass" class="form-control" required>
                          <option value="">Select a Class</option>
                  	 	  <option value="KG">KG</option>
                          <option value="Nursery 1">Nursery 1</option>
                          <option value="Nursery 2">Nursery 2</option>
                          <option value="Nursery 3">Nursery 3</option>
                          <option value="Primary 1">Primary 1</option>
                          <option value="Primary 2">Primary 2</option>
                          <option value="Primary 3">Primary 3</option>
                          <option value="Primary 4">Primary 4</option>
                          <option value="Primary 5">Primary 5</option>
                          <option value="Primary 6">Primary 6</option>
                          <option value="Junior Secondary School 1">Junior Secondary School 1</option>
                          <option value="Junior Secondary School 2">Junior Secondary School 2</option>
                          <option value="Junior Secondary School 3">Junior Secondary School 3</option>
                          <option value="Senior Secondary School 1">Senior Secondary School 1</option>
                          <option value="Senior Secondary School 2">Senior Secondary School 2</option>
                          <option value="Senior Secondary School 3">Senior Secondary School 3</option>
                                                 
                          </select>  
                           </div>    
                           <div class="help-block with-errors"></div>
                    
                    </div><!-- /.col-lg-6 -->
                    
                    <div class="form-group col-xs-6 col-md-3 col-lg-3">
                       <label>Note Week</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <select name="noteweek" id="noteweek" class="form-control" required>
                          <?php
						  for ($count=1;$count<=20; $count++)
						  {
							  echo '<option value="week'.$count.'">Week '.$count.'</option>';
						  }
						  ?>
                          </select>                     
                    </div><!-- /.col-lg-6 -->
                    <div class="help-block with-errors"></div>
                    </div><!--input group-->  
                  </div><!-- /.row -->   
                
                  <div class="row has-feedback">
                  
                  	<div class="form-group col-xs-12 col-md-6 col-lg-6">
                       <label>Subject</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-newspaper"></i>
                          </div>
                           <select class="form-control" name="notesubject" id="notesubject" required>
                  		 			 <option value="">Select Subject</option>
                                    <?php
							  
										  $xquery="select subject_name,subject_id from subject_tab";
										  $output=mysqli_query($con,$xquery);
										   if(mysqli_num_rows($output))
										   {
											   while($rows=mysqli_fetch_array($output))
											   {
												   $_SESSION['subjectname']=$rows['subject_name'];
												   $_SESSION['subjectid']=$rows['subject_id'];
												   
									?>  
                                   <option value="<?php echo $_SESSION['subjectname']; ?>"><?php echo $_SESSION['subjectname']; ?></option> 
                                    <?php
									   }
									   
								   }
								  ?>
                               </select>                 
                    </div><!-- /.col-lg-6 -->
                    <div class="help-block with-errors"></div>
                    </div><!--input group-->
                    
                    <div class="form-group col-xs-12 col-md-6 col-lg-6">
                    <label>Topic</label>
                    <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-newspaper"></i>
                          </div>
                           <input class="form-control" name="notetopic" id="notetopic" placeholder="Topic for the Week" required>
                                    
                            <div class="help-block with-errors"></div>
                    </div><!--input group-->
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <textarea class="form-control" name="notebody" id="notebody" rows="10" maxlength="2000" placeholder="Your Class Note Goes Here or Send At As An Attachement  (Maximum Character is 2000char)" required></textarea><span class="counter"></span>
                  </div>
                  <div class="form-group">
                    <div class="btn btn-primary btn-file">
                      <i class="fa fa-paperclip"></i> Attachment
                      <input type="file" name="attachment">
                    </div>
                    <p class="help-block">Max. 10MB</p>
                  </div>
                
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary">Submit Class Note  <i class="fa fa-book"></i></button>
                  </div>
                  <button class="btn btn-danger"><i class="fa fa-times"></i> Discard</button>
                  
                </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box-body -->
              </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
</div>
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
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
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
  <script>
  	var maxLength = 2000;
	$('textarea').keyup(function() {
	  var length = $(this).val().length;
	  var newlength = maxLength-length;
	  $(this).parent().find('.counter').text(length +"of"+maxLength);
	if (newlength == 0) {
    $(this).parent().find('.counter').text('Maximum Length of'+' '+maxLength+' '+'reached');
    $(this).parent().find('.counter').css({"color":"red"});
    event.preventDefault();
  } 
  else {
   // $(this).parent().find('.counter').text(length +"/"+maxLength);
    $(this).parent().find('.counter').css({"color":"#000"});    
  }
	});
  </script> 
   <script>
	$('.textarea').wysihtml5();
	</script>

  </body>
</html>
