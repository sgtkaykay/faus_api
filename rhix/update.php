<?php
  $id = $_GET['id'];
  $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
  $data = json_decode($json,true);
  $details = array('records' => $data);
  $result = $details['records'];

  $json1 = file_get_contents('http://rdapi.herokuapp.com/category/read.php);
  $data1 = json_decode($json,true);
  $details1 = array('records' => $data);
  $result1 = $details1['records'];
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
    <select>
      <option value="<?php echo $result['category_id']?>"><?php echo $result['category_name']?></option>
      <?php
        foreach($list as $result1) { 
      ?>
      <option value="<?php echo $result['category_id']?>"><?php echo $result['category_name']?></option>
      <?php 
        } 
      ?>
    </select>
    <input type="submit" name="submit" value="Update"/>
  </form>
</div>
