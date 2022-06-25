<?php include_once("Header.php"); ?>

<?php
	include "connection.php";
	$sql ="SELECT * FROM product_enter";
	$result = mysqli_query($conn,$sql);
?>

        <!-- Header End -->

        <div class="banner">
            <div class="banner-text">
              <h3>Our Products</h3>
              
  
            </div>
            
        </div>
        <div class="our_product">
            <div class="container">
                <h2>Our Products</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus excepturi tempore voluptate, nostrum nulla libero quibusdam blanditiis voluptatum, error, cupiditate tempora provident quam. Cupiditate hic mollitia, eligendi ducimus deserunt porro</p>
                <div>
                    <button type="button" class="btn btn-primary">Braceelet</button>
                    <button type="button" class="btn btn-primary">Jewellry</button>
                    <button type="button" class="btn btn-primary">Braceelet</button>
                </div>
                <div class="Product_Parent">
                <div class="row Product_Parent_Row">
                    <?php
                        while($row = mysqli_fetch_assoc($result)){  
                        ?>
                          
                            <div class="col-md-5 our_product-cart">
                                <div class="product-img"> 
                                    <img src="images/Necklce-1.png" />
                                </div>
                                <div class="product-description">
                                    <h4> Product Name <?php echo $row['productName']?></h4>
                                    <p> Product Color <?php echo $row['productColor']?></p>
                                    <p> Product Quantity <?php echo $row['quantity']?> </p>
                                    <p> Product Price <?php echo $row['price']?> </p>
                                    <a href="/DANISH_SHEHZAD/Checkout.php?id=<?php echo $row['id']?>">Shop Now</a>



                                </div>
                            </div>
                            
                        <?php    
                        }    
                        ?>

                </div>
            </div>
            </div>

        </div>

<!-- FOOTER -->
<?php include_once("Footer.php"); ?>
