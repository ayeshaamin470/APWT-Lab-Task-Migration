<html>
<head>
	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
    body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: linear-gradient(to right, #D500F9, #FFD54F);
    background-repeat: no-repeat
}


</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://127.0.0.1:8000/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/view">p_details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/edit/4">edit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="http://127.0.0.1:8000/create">Insert</a>
      </li>
    </ul>
  </div>
</nav>
	<div>
		@yield('content')
	</div>
	<footer> coppy rights</footer>
 </body>