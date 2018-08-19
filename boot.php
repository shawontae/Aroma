
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta "viewport" content="width=device-width, initial-scale=1.0">
		<title> BootStrap</title>

		    
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 

		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	</head>
	<body>
<!-- NAVBAR -->

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">KILL BILL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">BEACH? <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- JUMBOTRON -->

	<div class="jumbotron text-center">
		<div class="container">
			<h1> Welcome to Website </h1>
			<p>combination of theming classes and background-color utilities. Choose from .navbar-light for use with light background colors, or .navbar-dark for dark background colors. Then, customize with .bg-* utilities.</p>
			<a href="#" class="btn btn-success"> read more </a>
		</div>
	</div>

		


<!-- Alignment (have to be in container tag)-->

	<div class="container">
		<p class="text-left"> Left Aligned text. </p>
		<p class="text-center"> center Aligned text. </p>
		<p class="text-right"> right Aligned text. </p>
		<p class="text-justify"> Justify text. </p>
		<p class="text-nowrap"> No wrap text. </p>
		
	</div>

<!-- Quick Floats -->

	<div class="pull-right"> Div Float to right </div>
	<div class="pull-left"> Div Float to left </div>

<!-- CLEAR FLOAT -->
	<div class="clearfix"> </div>
	<hr>


<!-- BLOCKQUOTE -->
	<blockquote class="blockquote-reverse">
		<p> lorem skbgkajgkanbkjbnjhfdgujfnbnjnjfnbd
		jbnlfdjjgbfdgbjkfnbjfjhnfnvbjkdfhjgnfkgnkjdfhjkfdnjkgfdkjn</p>
		<footer> Quote by <cite title="John Doe"> John Doe</cite></footer>
	</blockquote>

	<hr>

<!-- List -->

	<ul class="list-unstyled">
		<li>cat </li>
		<li>dog </li>
		<li>sheep </li>
	</ul>

	<ul class="list-inline">
		<li>cat </li>
		<li>dog </li>
		<li>sheep </li>
	</ul>

<!-- CODE -->
	<code>&lt;h1&gt;Heading Text&lt;/h1&gt;</code>
	<br>
	change directory with <kbd>cd</kbd>
	<br>
	To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd> , </kbd></kbd>

	<hr>

<!-- Contextual Colors-->
	<p class="text-primary"> HELLO WORLD </p>
	<p class="text-success"> HELLO WORLD </p>
	<p class="text-info"> HELLO WORLD </p>
	<p class="text-warning"> HELLO WORLD </p>
	<p class="text-danger"> HELLO WORLD </p>
	<p class="text-muted"> HELLO WORLD </p>

	<!-- Contextual background colors -->
		<p class="bg-primary"> HELLO WORLD </p>
		<p class="bg-success"> HELLO WORLD </p>
		<p class="bg-info-info"> HELLO WORLD </p>
		<p class="bg-warning"> HELLO WORLD </p>
		<p class="bg-danger"> HELLO WORLD </p>
		<p class="bg-muted"> HELLO WORLD </p>

		<hr>

		<!-- Buttons -->

			<button class="btn btn-default"> Button </button>
			<a href="#" class="btn btn-default" role="button"> Link </a>
			<input type="submit" class="btn btn-default" calue="submit">

			<hr>

	<!-- Contextual Buttons -->
		<button class="btn btn-default"> Default </button>
		<button class="btn btn-promary"> primary </button>
		<button class="btn btn-success"> success </button>
		<button class="btn btn-info"> info </button>
		<button class="btn btn-warning"> warning </button>
		<button class="btn btn-danger"> danger </button>
		<button class="btn btn-link">link </button>

		<hr>

	<!-- Button Sizes -->
		<button class="btn btn-default btn-lrg"> Default </button>
		<button class="btn btn-default"> Default </button>
		<button class="btn btn-primary btn-sm"> Default </button>
		<button class="btn btn-default btn-xs" disabled="disabled"> Default </button>

		<hr>
		
<!-- FORMS -->
	<div class="container">
		<form>
			<div class="form-group">
				<label> Name</label>
				<input type="text" class="form-contral" placeholder="Add Name">
			</div>

			<div class="form-group">
				<label> Email</label>
				<input type="<email" class="form-contral" placeholder="Add Email">
			</div>

			<div class="form-group">
				<label> Message</label>
				<textarea type="<email" class="form-contral" placeholder="Add Message"> </textarea>
			</div>

			<div class="form-group">
				<lable> Gender </lable>
				<Select class="form-control">
					<option value="male"> Male</option>
					<option value="female"> Female </option>
					<option value="other"> Other</option>
				</Select>
			</div>

			<div class="form-group">
				<label> Upload File</label>
				<input type="file">
				<p class="help-block"> Only png and jpg allowed </p>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" name=""> Check Me out 
				</label>
			</div>

			<button type="submit" class="btn btn-default"> Submit </button>
		</form>
	</div>

	<hr>

	<form class="form-inline">
		<div class="form-group">
			<lable> Email </lable>
			<input type="email" class="form-control" placeholder="Email">
		</div>

		<div class="form-group">
			<label> Password</label>
			<input type="password" class="form-control" placeholder="Password">
		</div>

		<div class="checkbox">
			<label>
				<input type="checkbox"> Remember Me
			</label>
		</div>

		<button type="submit" class="btn btn-default">LogIn</button>
	</form>
<HR>
	<!--TABLES -->
		<div class="container">
			<table class="table table-striped table-bordered table-hover table-condensed">
				<tr>
					<th> First Name</th>
					<th> Last Name</th>
					<th> Age</th>
				</tr>

				<tr class="danger">
					<td> Jill </td>
					<td> Smith</td>
					<td> 30</td>
				</tr>

				<tr class="success">
					<td> John</td>
					<td> Doe</td>
					<td> 24</td>
				</tr>

				<tr>
					<td> Kim</td>
					<td> Kyle</td>
					<td> 89</td>
				</tr>

				<tr>
					<td> Sam</td>
					<td> Smith</td>
					<td> 45</td>
				</tr>

				<tr>
					<td> boyd</td>
					<td> miller</td>
					<td> 34</td>
				</tr>
			</table>
		</div>

	<hr>
<!-- list group -->
	<div class="container">
		<ul class="list-group">
			<li class="list-group-item"> Cat </li>
			<li class="list-group-item">dog </li>
			<li class="list-group-item">sheep </li>
			<li class="list-group-item"> mouse </li>
		</ul>
	<div>


	<div class="container">
		<a href="#" class="list-group-item active"> Sheep </a>
		<a href="#" class="list-group-item"> cat </a>
		<a href="#" class="list-group-item list-group-item-success"> Dog </a>
		<a href="#" class="list-group-item disabled"> Bird </a>
	</div>

	<hr>

	<!-- Panels -->
	<div class="container">
		<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"> Panel Title </h3>
		</div>
		<div class="panel-body">
			panel contect
		</div>
		<div class="panel-footer"> Panel footer</div>
	</div>

	<hr>
<!-- Wells -->

	<div class="well"> Hello World </div>
	<div class="well well-lg"> Hello World </div>
	<div class="well well-sm"> Hello World </div>

<hr>

<!-- Alrets -->
	<div class="alert alert-success" role="alert"> A success Alert </div>
	<div class="alert alert-info" role="alert"> A info Alert </div>
	<div class="alert alert-warning" role="alert"> A warning Alert </div>
	<div class="alert alert-danger" role="alert"> A danger Alert </div>
	<div class="alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert"><span>&times;</span> You can close this alert</button>
	</div>

	<hr>

	<!-- Progress Bars -->

		<div class="progress">
			<div class="progress-bar progress-bar-success progress-bar-striped progress-bar-striped active" style="width:50%;"> 50% </div>
		</div>
<hr>

<!-- LABELS -->

	<span class="label label-default"> Default </span>
	<h1> Hello <span class="label label-primary"> Primary </span> </h1>
	<span class="label label-info">Info</span>
	<span class="label label-success">Success</span>
	<span class="label label-warning">Warning</span>
	<span class="label label-danger">Danger</span>

<hr>

<!-- badges-->

	<a href="#"> Inbox <span class="badges"> 50 </span></a>

	<button class="btn btn-primary" type="button">
		Messages <span class="badges"> 2 </span>
	</button>

<hr>

<!-- IMAGES -->
	<div class="container">
		<img class="thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7b8m7eJ5c-BvpzHOrw7fjSHcbDsavFtCbpOoBROsHSH13IPOU">

		<img class="img-rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7b8m7eJ5c-BvpzHOrw7fjSHcbDsavFtCbpOoBROsHSH13IPOU">
		<br>
		<img class="img-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7b8m7eJ5c-BvpzHOrw7fjSHcbDsavFtCbpOoBROsHSH13IPOU">
	</div>

<hr>

<!-- grids-->

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
			</div>


	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p>but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>

		<div class="container">
		<div class="row">
			<div class="col-md-3">
				<p>but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>

		<div class="container">
		<div class="row">
			<div class="col-md-3">
				<p>but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>

			
		<div class="container">
		<div class="row">
			<div class="col-md-3">
				<p>but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>




	</div>



	





	</div>
	</body>


	<footer>

	</footer>

	<style>

	</style>