<?php 
	require_once("include/header.php");
?>
<div id="body">
	<?php include_once("include/left_content.php"); ?>
    <div class="rcontent">
    	<h1><span>Add Product</span></h1>
		<div id="contentbox">
        <div id="data">
			<a style="text-decoration:none" href="viewlist.php?list=product">Products List</a><br /><br />
        
        <?php 
			if(isset($_GET['success'])){
				$result=mysqli_query($connect,"INSERT INTO product VALUES(NULL,{$_POST['cprice']},{$_POST['supplier']},'{$_POST['product_name']}',{$_POST['quantity']},'{$_POST['product_type']}',{$_POST['mprice']})");
				if(!$result)echo "Addition not successful ".mysqli_error($connect);
	   			else echo"Addition of product data successful";
			}
			else{
				echo "<form method='post' action='addproduct.php?success=1'>
					  <table>
					    <tr><td style='padding:5px'>Product Name: </td><td><input name='product_name' type='text' /></td></tr>
						<tr><td style='padding:5px'>Product type: </td>
						<td><select name='product_type'>";
						
						$dept_set = mysqli_query($connect,"select dept_id, dept_name from department");
				while($row = mysqli_fetch_array($dept_set))
					echo "<option value='{$row['dept_id']}'>{$row['dept_name']}</option>";
																	
					echo"</select>
						</td></tr>
						<tr><td style='padding:5px'>Supplier ID: </td>
						<td><select name='supplier'>";
						
						$supplier_set = mysqli_query($connect,"select sid, sname from supplier");
				while($row = mysqli_fetch_array($supplier_set))
					echo "<option value='{$row['sid']}'>{$row['sname']}</option>";
						
						echo"</select></td></tr>
						<tr><td style='padding:5px'>Quantity: </td><td><input name='quantity' type='text' /></td></tr>
						<tr><td style='padding:5px'>Market Price: </td><td><input name='mprice' type='text' /></td></tr>
						<tr><td style='padding:5px'>Cost Price: </td><td><input name='cprice' type='text' /></td></tr>
						<tr><td style='padding:5px' colspan='2'><input type='submit' value='submit' /></td></tr>
					  </table></form>";
			} 
        ?>
         </div>
         </div>
    </div>
</div>
<!-- body ends -->
<!-- <?php 
	require_once("include/footer.php");
?> -->