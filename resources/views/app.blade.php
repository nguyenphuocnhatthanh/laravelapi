<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
	<h1>Hello </h1>
	<input type="text" ng-model="test" name="" value="" placeholder="">
	@{{ test }}
	<div>
		@yield('content')
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/libs/angular.min.js')  }}" language="javascripts" type="text/javascript"></script> 
	<script src="{{ asset('js/libs/angular-route.min.js')  }}"  language="javascripts" type="text/javascript"></script>
	<script src="{{ asset('js/libs/angular-sanitize.min.js')  }}"  language="javascripts" type="text/javascript"></script>
	@yield('scripts')
</body>
</html>