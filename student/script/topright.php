<?php 
$msgto='Staffs';
$out='';
$notice='';
$chkcount="select count(*) as total from message_tab where msg_readstatus=0 and msg_to='$msgto' and clientapp_id='".$_SESSION['clientappid']."'";
$res=mysqli_query($con,$chkcount);
					   if(mysqli_num_rows($res))
					   {
						   while($rows=mysqli_fetch_assoc($res))
						   {
							   $_SESSION['total']=$rows['total'];
							  
						   }
					   }

$total=$_SESSION['total'];
$_SESSION['toprightstudent']='';
$countmsg="select message_tab.* from message_tab where msg_readstatus=0 and msg_to='$msgto' and clientapp_id='".$_SESSION['clientappid']."' limit 0, $total";
$output=mysqli_query($con,$countmsg);
					   if(mysqli_num_rows($output))
					   {
						   while($rows=mysqli_fetch_assoc($output))
						   {
							   
							  $msgid=$rows['msg_id'];
							  $_SESSION['msgsubject']=$rows['msg_subject'];
							  $_SESSION['msgsubject']=substr(($_SESSION['msgsubject']),0,15);
							  $_SESSION['msgbody']=$rows['msg_body'];
							  $_SESSION['msgbody']=substr(($_SESSION['msgbody']),0,30);
							  $out .='<tr><td><li>
                        <a href="readmsg.php?msgid='.$msgid.'">
								  <div class="pull-left">
									<i class="fa fa-envelope-o"></i>
								  </div>
								  <h4>
								   '.$_SESSION['msgsubject'].'
									<small><i class="fa fa-clock-o"></i> '.$rows['msg_time'].'</small>
								  </h4>
								  <p>'.$_SESSION['msgbody'].'</p>
								</a>
                      </li></td></tr>';
						   }
						   
					   }

$_SESSION['toprightstudent'].='<div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">'.$_SESSION['total'].'</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have '.$_SESSION['total'].' unread Messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      '.$out.'
                      
                    </ul>
                  </li>
                  <li class="footer"><a href="mymessage.php">See All Messages</a></li>
                </ul>
              </li>';

$chkcount="select count(*) as totalnot from newsevent_tab where ne_readstatus=0 and clientapp_id='".$_SESSION['clientappid']."'";
$rest=mysqli_query($con,$chkcount);
					   if(mysqli_num_rows($rest))
					   {
						   while($rows=mysqli_fetch_assoc($rest))
						   {
							   $_SESSION['totalnot']=$rows['totalnot'];
							  
						   }
					   }

$totalnot=$_SESSION['totalnot'];

	$noticequery="select newsevent_tab.* from newsevent_tab where ne_readstatus=0 and clientapp_id='".$_SESSION['clientappid']."' limit 0, $totalnot";
$result=mysqli_query($con,$noticequery);
					   if(mysqli_num_rows($result))
					   {
						   while($rows=mysqli_fetch_assoc($result))
						   {
							   $neid=$rows['ne_id'];
							   
							  $_SESSION['netitle']=$rows['ne_title'];
							  $_SESSION['netitle']=substr(($_SESSION['netitle']),0,15);
							  $_SESSION['nebody']=$rows['ne_body'];
							  $_SESSION['nebody']=substr(($_SESSION['nebody']),0,30);
							  $netype=$rows['ne_type'];
					   if($netype=='News'){$type='<span data-toggle="tooltip" title="3 New Messages" class="label label-info">News</span>';}
					   else{$type='<span data-toggle="tooltip" title="3 New Messages" class="label label-warning">Event</span>';}
					   $notice .='<li>
                        <a href="newsevent.php?neid='.$neid.'">
                          '.$type." ".$_SESSION['netitle'].'
                        </a>
                      </li>';
						   }
					   }

             $_SESSION['toprightstudent'] .=' <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">'.$totalnot.'</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have '.$totalnot.' notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      '.$notice.'    
                    </ul>
                  </li>
                  
                </ul>
              </li>
			  
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../'.$_SESSION['pics'].'" class="user-image" alt="User Image">
                  <span class="hidden-xs">'.$_SESSION['stdnumber'].'</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../'.$_SESSION['pics'].'" class="img-circle" alt="User Image"> 
                    <p>'.$_SESSION['stdnumber'].'</p>                  
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer"> 
                  <div class="pull-left">
                      <a href="profile.php" class="btn btn-success btn-flat">Profile    <i class="fa fa-user"></i></a>
                    </div>                   
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-danger btn-flat">Logout    <i class="fa fa-sign-out"></i></a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>';
?>