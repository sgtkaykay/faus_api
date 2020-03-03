 <?php 
  $json1 = file_get_contents('http://rdapi.herokuapp.com/category/read.php);
  $data1 = json_decode($json1,true);
  $details1 = array('records' => $data1);
  $result1 = $details1['records'];
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
    <select>
      <?php
        foreach($list as $result1) { 
      ?>
      <option value="<?php echo $result1['category_id']?>"><?php echo $result1['category_name']?></option>
      <?php 
        } 
      ?>
    </select>
    <input type="submit" name="submit" value="Add"/>
  </form>
</div>
