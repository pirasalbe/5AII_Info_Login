<?php

    session_start();
    
    $logged=$_SESSION['pass'];
        
    if($logged==0)
    {
        header("Location: index.php");
        die();
    }

?>

<html>
	<head>
            <title>
                Hello World
            </title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>

	<body>
            <div class="table-responsive">
			
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				
    				<div class="container">
    					<div class="row">
    						<div class="jumbotron text-center">
    						      <h1>Hello World</h1>
    						      <input class="btn btn-default" align="center" type="submit" name="submitCF" value="Login">
    						</div>
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

