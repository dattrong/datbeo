<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>  
	<header>
		<div class="header">
			
                    <img style="width: 100px"  src="1.jpg">
   
  </div>

		</div>
			
	</header>

	<div>
    
            <nav>
                <ul>
                    <li><a href="mainweb.php">Home</a></li>
                     <?php           
                     require_once './functions.php';
                    $query1 = "SELECT cId, cName, cDescription from Catalogue";
                    $result1 = queryMysql($query1);

                    foreach ($result1 as $r) {
                        ?>
                           <li><a href="index.php?cId=<?= $r['cId'] ?>"><?= $r['cName'] ?></a></li>
                        <?php
                    }
                        ?>
                           <li style="margin-left: 1200px;"><a href="login.php">Admin</a></li>
                </ul>
            </nav>
        		
	</div>
    <div style='height:400px;' class='w3-quarter  w3-center ' >
               <?php
                    $querypro = "SELECT * FROM item";
                    $resultpro = queryMysql($querypro);
                    foreach ($resultpro as $r) {
                        ?>
        <div>
            <div>
                <div style="margin-left:50px; width: 500px;" class='w3-pink w3-padding-large'><?= $r['iStatus'] ?></div>
                <a href="index1.php?iId=<?= $r['iId'] ?>"><div><img style="height:300px;" src="4.jpg" ></div></a>
                <div class='name'><br><?= $r['iName'] ?></br></div>
              </div>
            </div>
    </div>
   <?php
}
?>

 
</body>
</html>

