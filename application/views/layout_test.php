<!DOCTYPE HTML>
<html>
	<head>
	<title>Admin panel</title>
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>	
	</head>
	<body>
	<div class="col-md-12"> 
	<?php if($this->ion_auth->is_admin()):?>
		<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right table-dark">                 
		  <li><?php echo anchor('bot/db',lang('menu_message'));?></li>
		  <li><?php echo anchor('auth/index',lang('menu_users'));?></li>
		  <li><?php echo anchor('bot/groups',lang('menu_groups'));?></li>
		  <li><?php echo anchor('statistics/total',lang('menu_static_all'));?></li>
		  <li><?php echo anchor('statistics/period',lang('menu_static'));?>
		  <li><?php echo anchor('auth/logout',lang('menu_logout'));?></li>     
          </ul>
		</div>
	<?php endif;?>
	<div>
		<?php $this->load->view($content,$data);?> 
		
</body>
</html> 	
