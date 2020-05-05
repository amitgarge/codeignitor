<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow" />
<title><?php echo $title;?></title>
<meta name="description" content="<?php echo $MetaDesc?>" />
<meta name="keywords" content="<?php echo $KeyWords?>" />
<meta name="author" content="<?php echo $author?>" />

<?php 

 foreach($css as $css){ ?><?php echo $css['link'];?><?php }?>
</head>



  <div class="top">
					<div class="container">
						
							<div class="col-md-8 top-left">
								<ul>
								
									<li><i class="fa fa-phone" aria-hidden="true"></i> +91 9970296119</li>
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@bizthinksoft.com">info@bizthinksoft.com</a></li>
								</ul>
							</div>
							<div class="col-md-4 top-middle">
								<ul class="right_menu">
									<li><a href="home">HOME</a></li>
									<li><a href="#">BLOG</a></li>
									<li><a href="#">SUPPORT</a></li>
									<li><a href="#"> PROFILE VISITS <span class="badge badge-primary">1K+</span> <i class="ti ti-eye"></i></a></li> 
								</ul>
							</div>
							
							<div class="clearfix"></div>
						
					</div>
				</div>

