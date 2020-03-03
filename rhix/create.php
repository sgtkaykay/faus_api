 <?php 
  $jsonCategory = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
  $categoryData = json_decode($jsonCategory,true);
  $category = $categoryData['records'];
 ?>

<div class="container">
  <h1> ADD PRODUCT</h1>
  <form action="createProd.php" method="POST">
    <p>Product Name:</p>
    <input type="text" name="name" placeholder="Name"/>
    <p>Description:</p>
    <input type="text" name="description" placeholder="Description"/><br>
    <p>Price:</p>
    <input type="text" name="price" placeholder="Price"/><br>
    <p>Category:</p>
    <select type="text" name="category">
					<option value="" selected> ---Category--- </option>
				<?php
					foreach($category as $catSelect)
					{
				?>
					<option value="<?php echo $catSelect['id']; ?>"> <?php echo $catSelect['name']; ?> </option>
				<?php
					}
				?>
	    </select><br>
    <input type="submit" name="submit" value="Add"/><br>
	</form>
</div>
