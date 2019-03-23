<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ToDo List</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
<div class="container">
	@include('inc.messages')
	@yield('content')
</div>
<footer id="footer" class="text-center m-4">
	<p>Copyright &copy; 2019 TodoList</p>
</footer>
</body>
</html>