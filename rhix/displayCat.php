<div>
  <?php
    $json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
    $data = json_decode($json,true);

    $list = $data['records'];
  ?>
  <h1>Categories</h1>
    <table class="reg">
      <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Description</th>
      </tr>
    <?php
     foreach($list as $result){
    ?>
    <tr>
      <td> <?php echo $result['id']; ?></a> </td>
      <td> <?php echo $result['name']; ?></a> </td>
      <td> <?php echo $result['description']; ?></a> </td>
    </tr>
  <?php
   }
  ?>
</div>
