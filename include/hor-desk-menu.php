<?php
$path = $_SERVER['REQUEST_URI'];
$file = (string) basename($path); // $file is set to "index.php"
//$file = basename($path, ".php"); // $file is set to "index"
$file2 = explode('.',$file);
$pagename = $file2[0];
?>

<div class="hor-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<li class="classic-menu-dropdown">
                	<?PHP if($pagename == "index" || $pagename == "complaint"){ ?>
                     <a href="index.php" class="active"><i class="fa fa-tachometer"></i>DASHBOARD</a>
                     <?PHP }else {?> <a href="index.php"><i class="fa fa-tachometer"></i>DASHBOARD</a> <?PHP } ?>
                    
                   <!-- <a href="index.php">
                    <i class="fa fa-tachometer"></i>
                    DASHBOARD </a>-->
				</li>
                
				<li class="mega-menu-dropdown">
                	<?PHP if($pagename == "menu"){ ?>
                     <a href="menu.php" class="active"><i class="fa fa-th-large"></i>MENU</a>
                     <?PHP }else {?> <a href="menu.php"><i class="fa fa-th-large"></i>MENU</a> <?PHP } ?>
                     
				<!--<a href="menu.php" data-hover="dropdown" data-close-others="true" class="dropdown-toggle">
				<i class="fa fa-th-large"></i>
				MENU </a>-->
				</li>
                
				<li class="mega-menu-dropdown mega-menu-full">
                	<?PHP if($pagename == "calendar"){ ?>
                     <a href="calendar.php" class="active"><i class="fa fa-calendar-o"></i>CALENDAR</a>
                     <?PHP }else {?> <a href="calendar.php"><i class="fa fa-calendar-o"></i>CALENDAR</a> <?PHP } ?>
                
				<!--<a href="calendar.php" data-hover="dropdown" data-close-others="true" class="dropdown-toggle">
				<i class="fa fa-calendar-o"></i>
				CALENDAR </a>-->
				</li>
			</ul>
            
			<div class="btn-group pull-right setting">
				<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
				<i class="fa fa-cog"></i>
				</button>
				<ul class="dropdown-menu pull-right" role="menu">
					<li>
					<a href="#">
					Action </a>
					</li>
					<li>
					<a href="#">
					Another action </a>
					</li>
					<li>
					<a href="#">
					Something else here </a>
					</li>
					<li class="divider">
					</li>
					<li>
					<a href="#">
					Separated link </a>
					</li>
				</ul>
			</div>
		</div>