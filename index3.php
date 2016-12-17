<?php

    $_SESSION['user'] = $_REQUEST['login'];
    $_SESSION['pass'] = $_REQUEST['pass'];
    
    if(($_SESSION['user']=="pirasalbe")&&($_SESSION['pass']=="chicco"))
        $_SESSION['pass']=1;
    
    if(isset($_POST['exit'])) 
    {
        $_SESSION=array();
        $logged=0;
    }
        
    if($_SESSION['pass']!=1)
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
			
				<form action="index2.php" method="post">
				
    				<div class="container">
    					<div class="row">
    						<div class="jumbotron text-center">
    						      <h1>Hello World</h1>
    						      <input class="btn btn-default" align="center" type="submit" name="exit" value="Logout">
    						</div>
    					</div>
    					
                         <div class="row">
                              <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                    <div class="caption">
                                      <p><input class="btn btn-default" align="center" type="submit" name="si" value="Lorem ipsum..."></p>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
                                    <div class="caption">
                                      <p><input class="btn btn-default" align="center" type="submit" name="si" value="Lorem ipsum..."></p>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
                                    <div class="caption">
                                      <p><input class="btn btn-default" align="center" type="submit" name="si" value="Lorem ipsum..."></p>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <?php 
                            echo "<input type='hidden' name='pass' value='chicco'>";
                            echo "<input type='hidden' name='login' value='pirasalbe'>";
                        ?>
    				</div>		
				
				</form>
			
            </div>
	</body>
</html>

