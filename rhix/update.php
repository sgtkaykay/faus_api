<?php
  $id = $_GET['id'];
  $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
  $data = json_decode($json,true);
  $details = array('records' => $data);
  $result = $details['records'];

  $jsonCat = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$catData = json_decode($jsonCat,true);
	$category = $catData['records'];
?>
<div class="container">
  <h1> ADD PRODUCT HERE</h1>
  <form action="updateProd.php?id=<?php echo $id; ?>" method="POST">
    <p>Product Name:</p>
    <input type="text" name="name" value="<?php echo $result['name']; ?>"/>
    <p>Description:</p>
    <input type="text" name="description" value="<?php echo $result['description']; ?>"/>
    <p>Price:</p>
    <input type="text" name="price" value="<?php echo $result['price']; ?>"/>
    <p>Category:</p>
<select name="category">
		<option value="<?php echo $result['category_id'];?>"><?php echo $result['category_name'];?></option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	    </select><br>
    <input type="submit" name="submit" value="Update"/>
  </form>
</div>
