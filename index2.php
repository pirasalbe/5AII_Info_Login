<?php

    $SESSION['user'] = $_REQUEST['login'];
    $SESSION['pass'] = $_REQUEST['pass'];
    
    if(($SESSION['user']=="pirasalbe")&&($SESSION['pass']=="chicco"))
        $SESSION['pass']=1;
    
    if(isset($_POST['exit'])) 
    {
        $SESSION=array();
        $logged=0;
    }
        
    if($SESSION['pass']!=1)
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
			
				<form action="index3.php" method="post">
				
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
                                    <img src="http://www.w3schools.com/w3images/lights.jpg" alt="Lights" style="width:100%">
                                    <div class="caption">
                                      <p><input class="btn btn-default" align="center" type="submit" name="si" value="Lorem ipsum..."></p>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="http://www.w3schools.com/w3images/nature.jpg" alt="Nature" style="width:100%">
                                    <div class="caption">
                                      <p><input class="btn btn-default" align="center" type="submit" name="si" value="Lorem ipsum..."></p>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="http://www.w3schools.com/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                                    <div class="caption">
                                      <p><input class="btn btn-default" align="center" type="submit" name="si" value="Lorem ipsum..."></p>
                                    </div>
                                </div>
                              </div>
                        <?php 
                            echo "<input type='hidden' name='pass' value='chicco'>";
                            echo "<input type='hidden' name='login' value='pirasalbe'>";
                        ?>
                        </div>
    				</div>		
				
				</form>
			
            </div>
	</body>
</html>

