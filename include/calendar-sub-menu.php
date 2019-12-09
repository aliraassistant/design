<?php
$path = $_SERVER['REQUEST_URI'];
$file = (string) basename($path); // $file is set to "index.php"
//$file = basename($path, ".php"); // $file is set to "index"
$file2 = explode('.',$file);
$pagename = $file2[0];
?>

<div class="hor-sub-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<li class="classic-menu-dropdown">
                	<?PHP if($pagename == "calendar"){ ?>
                    <a href="calendar.php" class="active">My Appointment</a>
                    <?PHP }else {?> <a href="calendar.php">My Appointment</a> <?PHP } ?>
				</li>
                
				<li class="mega-menu-dropdown">
                	<?PHP if($pagename == ""){ ?>
                    <a href="#" class="active">Team Appointment</a>
                    <?PHP }else {?> <a href="#">Team Appointment</a> <?PHP } ?>
				</li>
                
				<li class="mega-menu-dropdown">
                	<?PHP if($pagename == ""){ ?>
                    <a href="#" class="active">All Appointment</a>
                    <?PHP }else {?> <a href="#">All Appointment</a> <?PHP } ?>
				</li>
			</ul>
		</div>