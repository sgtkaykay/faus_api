<?php
	if(isset($_POST['search'])){
		$search= $_POST['search'];
	}
		if(isset($search)){
			$json = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
			$data = json_decode($json,true);
		}
		else{
			$json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
			$data = json_decode($json,true);
		}
	$list = $data['records'];
?>
 <h1>Product List</h1>
<form method="POST" action="index.php">
	<input type="text" name="search" placeholder="Search Product">
</form>
<table class="reg">
	<tr>
    <th>Name</th>
  </tr>
  <?php
    foreach($list as $result){
  ?>
  <tr>
   	<td><a href="index.php?page=readone&id=<?php echo $result['id'];?>"><?php echo $result['name']; ?></a></td>
  </tr>
  <?php
    }
  ?>
</table>
