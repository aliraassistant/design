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
	                <?PHP if($pagename == "index"){ ?>
                    <a href="index.php" class="active">Branchwise Sales</a>
                    <?PHP }else {?> <a href="index.php">Branchwise Sales</a> <?PHP } ?>
				</li>
                
				<li class="mega-menu-dropdown">
                	<?PHP if($pagename == "sales"){ ?>
                    <a href="" class="active">Sales</a>
                    <?PHP }else {?> <a href="">Sales</a> <?PHP } ?>
				</li>
                
				<li class="mega-menu-dropdown">
                	<?PHP if($pagename == "Godown"){ ?>
                    <a href="" class="active">Godown</a>
                    <?PHP }else {?> <a href="">Godown</a> <?PHP } ?>
				</li>
                
				<li class="mega-menu-dropdown">
                	<?PHP if($pagename == "purchase-grn"){ ?>
                    <a href="" class="active">Purchase &amp; GRN</a>
                    <?PHP }else {?> <a href="">Purchase &amp; GRN</a> <?PHP } ?>
				</li>
                
				<li class="mega-menu-dropdown">
                	<?PHP if($pagename == "complaint"){ ?>
                    <a href="complaint.php" class="active">Complaint</a>
                    <?PHP }else {?> <a href="complaint.php">Complaint</a> <?PHP } ?>
				</li>
			</ul>
			<div class="download">
				<a href="#">
				<i class="fa fa-file-text-o"></i>
				</a>
			</div>
		</div>