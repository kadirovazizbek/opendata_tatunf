<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<script src="/assets/js/jquery-1.11.1.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>
</head>

<body>
		<div class="col-md-4">
	<table class="table table-dark table-striped table-hover" border="3" >
		<thead bgcolor="orange"><tr>
		<td>City</td>
		<td>Gradus °C </td>	
			
		<tr>
</thead>
		<tr class="active">
			<td>Tashkent</td>
			<td><?php echo $weather->tashkent->air_t?></td>
		</tr>
		<tr >
			<td>Nukus</td>
			<td><?php echo $weather->nukus->air_t?></td>
		</tr>
		<tr class="active">
			<td>Tashkent</td>
			<td><?php echo $weather->tashkent->air_t?></td>
		</tr>
		<tr>
			<td>Urgench</td>
			<td><?php echo $weather->urgench->air_t?></td>
		</tr>
		<tr class="active">
			<td>Bukhara</td>
			<td><?php echo $weather->bukhara->air_t?></td>
		</tr>
		<tr >
			<td>Navoiy</td>
			<td><?php echo $weather->navoiy->air_t?></td>
		</tr>
		<tr class="active">
			<td>Samarkand</td>
			<td><?php echo $weather->samarkand->air_t?></td>
		</tr>
		<tr>
			<td >Jizzakh</td>
			<td><?php echo $weather->jizzakh->air_t?></td>
		</tr>
		<tr class="active">
			<td>Gulistan</td>
			<td><?php echo $weather->gulistan->air_t?></td>
		</tr>
		<tr>
			<td>Qarshi</td>
			<td><?php echo $weather->qarshi->air_t?></td>
		</tr>
		<tr class="active">
			<td>Termez</td>
			<td><?php echo $weather->termez->air_t?></td>
		</tr>
		<tr>
			<td >Fergana</td>
			<td><?php echo $weather->fergana->air_t?></td>
		</tr>
		<tr class="active">
			<td>Namangan</td>
			<td><?php echo $weather->namangan->air_t?></td>
		</tr>
		<tr>
			<td >Andijan</td>
			<td><?php echo $weather->andijan->air_t?></td>
		</tr>
		<tr>
			<td>Nurafshon</td>
			<td><?php echo $weather->nurafshon->air_t?></td>
		</tr>

	</table>
</div>
</body>
</html>