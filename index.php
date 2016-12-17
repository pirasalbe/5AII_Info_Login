<?php
 $logged=$user=$pass=0;
 
 if(isset($_POST['log'])&&$_COOKIE['pass']==0)
 {
    $user = $_REQUEST['login'];
    $pass = $_REQUEST['pass'];
    setcookie("user", $user, time() + 86400, "/");  
 }
 
 if(($user=="pirasalbe")&&($pass=="chicco"))
 {
    $logged=1;
    setcookie("pass", $logged, time() + 86400, "/");
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
                                <input class="btn btn-default" align="center" type="submit" name="log" value="Login">
                            </div>
                            <h4><?php if($_SESSION['pass']!=1&&isset($_POST['log'])) echo "<div class='alert alert-danger'>Login errato</div>" ?></h4>
                        </div>
                        
    				</div>		
				
				</form>
			
            </div>
	</body>
</html>