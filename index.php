<?php

 session_start();
 
 $logged=0;
 
 if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
    $logged=1;
 
 if(isset($_POST['submitCF'])&&$logged==0)
 {
    $_SESSION['user'] = $_REQUEST['login'];
    $_SESSION['pass'] = $_REQUEST['pass'];
 }
 
 if($logged==1)
 {
    header("Location: index2.php");
    die();
 }

?>

<html>
	<head>
            <title>
                Login
            </title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>

	<body>
            <div class="table-responsive">
			
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				
    				<div class="container">
    					<div class="row">
    						<div class="jumbotron text-center"><h2>Login</h2></div>
    					</div>
    					
                        <div class="col-sm-2">
        					<div class="form-group">
                                <label for="login">User:</label>
                                <input type="text" class="form-control" name="login">
                                <label for="pass">Password:</label>
                                <input type="password" class="form-control" name="pass">
                                <input class="btn btn-default" align="center" type="submit" name="submitCF" value="Login">
                            </div>
                        </div>
                        
    				</div>		
				
				</form>
			
            </div>
	</body>
</html>