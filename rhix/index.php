<?php
  $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
  <head>
    <title> API </title>
    <script src="js/myScript.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php">Product List</a>
      <a href="index.php?page=displaycat">Display Categories</a>
      <a href="index.php?page=create">Add Product</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <div class="header">
      <a href="#" onclick="openNav()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </a>
    </div>
    <div class="content">
			<?php
			switch ($load) {
				case 'readone':
				    require_once('readOne.php');
				        break;
				case 'displaycat':
			      require_once('displayCat.php');
			          break;
        case 'create':
        		require_once('create.php');
        			  break;
        case 'delete':
        		require_once('delete.php');
        			  break;
        case 'update':
            require_once('update.php');
                break;
				default:
					  require_once('readAll.php');
					      break;
				}
			?>
    </div>
  </body>
</html>
