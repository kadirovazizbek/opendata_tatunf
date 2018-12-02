<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="/assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="/assets/js/jquery-1.11.1.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<!-- parallax -->
	<script src="/assets/js/SmoothScroll.min.js"></script>
	<script src="/assets/js/jarallax.js"></script>
	<!-- //parallax -->
</head>

<body>
		<div class="col-md-4 fadeInUp animated">
	<table class="table table-dark table-striped table-hover" border="3" >
		<thead bgcolor="orange"><tr>
		<td><?php echo lang('city');?></td>
		<td><?php echo lang('gradus');?> </td>	
			
		<tr>
</thead>
		<tr class="active">
			<td><?php echo lang('tashkent');?></td>
			<td><?php echo $weather->tashkent->air_t?></td>
		</tr>
		<tr >
			<td><?php echo lang('nukus');?></td>
			<td><?php echo $weather->nukus->air_t?></td>
		</tr>
		
		<tr>
			<td><?php echo lang('urgench');?></td>
			<td><?php echo $weather->urgench->air_t?></td>
		</tr>
		<tr class="active">
			<td><?php echo lang('bukhara');?></td>
			<td><?php echo $weather->bukhara->air_t?></td>
		</tr>
		<tr >
			<td><?php echo lang('navoiy');?></td>
			<td><?php echo $weather->navoiy->air_t?></td>
		</tr>
		<tr class="active">
			<td><?php echo lang('samarkand');?></td>
			<td><?php echo $weather->samarkand->air_t?></td>
		</tr>
		<tr>
			<td ><?php echo lang('jizzax');?></td>
			<td><?php echo $weather->jizzakh->air_t?></td>
		</tr>
		<tr class="active">
			<td><?php echo lang('gulistan');?></td>
			<td><?php echo $weather->gulistan->air_t?></td>
		</tr>
		<tr>
			<td><?php echo lang('qarshi');?></td>
			<td><?php echo $weather->qarshi->air_t?></td>
		</tr>
		<tr class="active">
			<td><?php echo lang('termez');?></td>
			<td><?php echo $weather->termez->air_t?></td>
		</tr>
		<tr>
			<td ><?php echo lang('fergana');?></td>
			<td><?php echo $weather->fergana->air_t?></td>
		</tr>
		<tr class="active">
			<td><?php echo lang('namangan');?></td>
			<td><?php echo $weather->namangan->air_t?></td>
		</tr>
		<tr>
			<td ><?php echo lang('andijan');?></td>
			<td><?php echo $weather->andijan->air_t?></td>
		</tr>
		<tr>
			<td><?php echo lang('nurafshon');?></td>
			<td><?php echo $weather->nurafshon->air_t?></td>
		</tr>

	</table>
</div>
</body>
</html>