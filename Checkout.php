<?php include_once("Header.php"); ?>
<div class="banner">
        <div class="banner-text">
          <h3>Checkout</h3>
        </div>
        
</div>
<div class='checkout'>
    <div class='container'>
        <div class='row'>

           
              
              <form action="checkout_details.php" method="POST">
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg"
                      >Your First Name</label
                    >
                  <input
                    type="text"
                    id="form3Example3cg"
                    class="form-control form-control-sm"
                    name="fname"
                  />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg"
                      >Your Last Name</label
                    >
                  <input
                    type="text"
                    id="form3Example4cg"
                    class="form-control form-control-lg"
                    name="lname"
                  />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg"
                      >Your Phone Number</label
                    >
                  <input
                    type="phone"
                    id="form3Example4cdg"
                    class="form-control form-control-lg"
                    name="phonenumber"
                  />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg"
                      >Your Street Address</label
                    >
                    <input
                      type="text"
                      id="form3Example1cg"
                      class="form-control form-control-lg"
                      name="st_address"
                    />
                  </div>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example1cg"
                        >Your City</label
                      >
                    <input
                      type="text"
                      id="form3Example1cg"
                      class="form-control form-control-lg"
                      name="city"
                    />
                  </div>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example1cg"
                        >Your State</label
                      >
                    <input
                      type="text"
                      id="form3Example1cg"
                      class="form-control form-control-lg"
                      name="state"
                    />
                  </div>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example1cg"
                        >Your ZipCode</label
                      >
                    <input
                      type="phone"
                      id="form3Example1cg"
                      class="form-control form-control-lg"
                      name="zipcode"
                    />
                  </div>

                  <input
                      type="hidden"
                      class="form-control form-control-lg"
                      name="Product_id"
                      value="<?php echo $_GET['id'];?>"
                    />


                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value=" ">
                    Place Order
                  </button>
                </div>

              </form>

            
        </div>
    </div>
    



</div>
<?php include_once("Footer.php"); ?>