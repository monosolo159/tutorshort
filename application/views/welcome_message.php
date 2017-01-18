<!DOCTYPE html>
<html lang="en" ng-app="Welcome">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script type="text/javascript">
	var SITE_URL = "<?php echo site_url(); ?>";
	</script>

</head>
<body>
<div class="" ng-controller="WelcomeCtrl">
	<table>
	  <thead>
	  	<tr>
				<th>User Name</th>
	  		<th>User Password</th>
	  	</tr>
	  </thead>
		<tbody>
			<tr ng-repeat="row in alluser">
				<td>{{row.prov_id}}</td>
				<td>{{row.prov_name}}</td>
			</tr>
		</tbody>
	</table>
</div>
	<script src="<?php echo base_url('assets/js/angular.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/app.js'); ?>" type="text/javascript"></script>
</body>
</html>
