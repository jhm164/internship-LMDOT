<!DOCTYPE html>
<html>
<head>
	<title>Create Order</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<style type="text/css">
		.table {border: 1px solid black!important;} 
.table tr, .table td, .table th {border: 0!important;}
.table tr td, 
.table tr th {border-left: 1px solid black!important;}
.table tr td:nth-child(1), 
.table tr th:nth-child(1) {border-left: 0!important;}
</style>

<script type="text/javascript">
 var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/order", {

        templateUrl : "order.php"
    }).when("/dashboard", {

        templateUrl : "dashboard.php"
    }).when("/accaunt", {

        templateUrl : "accaunt.php"
    });
    
});
  	  </script>
</head>
<body class="container-fluid" ng-app="myApp" ng-controller="controller">
<center>
	<div style="background-color: #063272; height:auto;padding: 12px;color: white;">
		<table class="table">
			<thead><th>Create product</th></thead>
			<tbody>
				<tr>
					<td><select  class="form-control">
							<option value="t-shirt" >t-shirt</option>
   							 <option value="shirt">shirt</option>

						</select>
					</td>

				</tr>
<tr>
	
	<td>
	<select  class="form-control" >
	<option>
--select--
</option>  
</select>
</td>
</tr>
<tr>
	<td>
	
<select ng-model="material" ng-change="j2()" class="form-control">
	<option  ><p>Cotton</p></option>  
	<option  ><p>Silk</p></option>  
</select> 

</td>

</tr>

<tr>
	<td>
			
<select ng-model="logo" ng-change="j3()" class="form-control" >
	<option><p>120x130</p></option>  
	<option><p>240x330</p></option>  
</select>
		</td>
</tr>
		
<tr>
	<td>
			<input type="text" class="form-control" name="" placeholder="Quantity" ng-model="Quantity">
		</td>
</tr>
			</tbody>
		</table>
	</div>
</center>
</body>
</html>