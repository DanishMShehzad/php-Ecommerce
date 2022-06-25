<?php include_once("Header.php"); ?>
<?php 


if(isset($_POST["Product_form"])) {

$productImage = $_FILES['productImage']['name'];
$productName = $_POST['productName'];
$productColor = $_POST['productColor'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];



$product=$conn->prepare("INSERT INTO `product_enter` (`productImage`,`productName`, `productColor`, `quantity`, `price`) VALUES ( ?,?,?,?,?)");
$product->bind_param("sssii",$productImage,$productName, $productColor ,$quantity, $price);
$execval = $product->execute();


echo " Done Successfull";
$product->close();
$conn->close();



}

?>



    <div class="banner">
        <div class="banner-text">
          <h3>Add Product</h3>
       </div>
        
    </div>
<section>
	<div class="AddProduct">
		<div class="container">
			<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="row">
					<div class="form-outline mb-4">
	                    <label class="form-label" for="productImage">Product Image </label><input type="file" id="myFile" name="productImage">

					<div class="form-outline mb-4">
	                    <label class="form-label" for="productName">Product Name</label>
	                  <input type="text" id="form3Example3cg" name="productName" class="form-control form-control-lg"/>
	                </div>
	              
	                </div>
	                
					<div class="form-outline mb-4"> <label class="form-label" for="productColor" >Product Color</label>
	                  <input type="text" id="form3Example3cg" name="productColor" class="form-control form-control-lg"/>
	                </div>
	                
					<div class="form-outline mb-4">
	                    <label class="form-label" for="quantity">Product Quantity</label>
	                  <input type="text"
	                    id="form3Example3cg"
						name="quantity"
	                    class="form-control form-control-lg"
	                  />
	                </div>
	                
					<div class="form-outline mb-4">
	                    <label class="form-label" for="price"
	                      >Product Price</label
	                    >
	                  <input
	                    type="text"
	                    id="form3Example3cg"
						name="price"
	                    class="form-control form-control-sm"
	                  />
	                
					</div>
	                
					<div>
	                	<input type="submit" name="Product_form" value="Submit" />
	                </div>

				</div>	
			</form>
		</div>	

	</div>	

</section>







<?php include_once("Footer.php"); ?>