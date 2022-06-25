<?php include_once("Header.php"); ?>


    <div class="banner">
      <div class="banner-text">
        <h3>Login/Signup</h3>


      </div>
      
  </div>

    
      <div class="container">
        <div>
        <div class="Login_page_Parent">
          <div class="login_card" style="border-radius: 15px">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login</h2>

              <form action="user_login.php" method="post">
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg"
                      >Your Email</label
                    >
                  <input
                    type="email"
                    id="form3Example3cg"
                    class="form-control form-control-lg"
                    name="email"
                  />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg"
                      >Password</label
                    >
                  <input
                    type="password"
                    id="form3Example4cg"
                    class="form-control form-control-lg"
                    name="password"
                  />
                </div>

                <div class="d-flex justify-content-center">
                  <button
                    type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                  >
                    Login
                  </button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">
                  Have already an account?
                  <a href="#!" class="fw-bold text-body"><u>forget your password</u></a>
                </p>
              </form>
            </div>
          </div>
          <form action="user_registration.php" method="post">
          <div class="Signup_card" style="border-radius: 15px">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="">
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg"
                      >Your Email</label
                    >
                  <input
                    type="email"
                    id="form3Example3cg"
                    class="form-control form-control-lg"
                    name="email"
                  />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg"
                      >Password</label
                    >
                  <input
                    type="password"
                    id="form3Example4cg"
                    class="form-control form-control-lg"
                    name="password"
                  />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg"
                      >Reenter your password</label
                    >
                  <input
                    type="password"
                    id="form3Example4cdg"
                    class="form-control form-control-lg"
                    name="Re_enter_password"
                  />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg"
                      >Your Name</label
                    >
                    <input
                      type="text"
                      id="form3Example1cg"
                      class="form-control form-control-lg"
                      name="first_name"
                    />
                  </div>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example1cg"
                        >Last Name</label
                      >
                    <input
                      type="text"
                      id="form3Example1cg"
                      class="form-control form-control-lg"
                      name="last_name"
                    />
                  </div>
<!--                   <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example1cg"
                        >type</label
                      >
                    <input
                      type="text"
                      id="form3Example1cg"
                      class="form-control form-control-lg"
                    />
                  </div> -->
                <div class="form-check d-flex justify-content-center mb-5">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3cg"
                  />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in
                    <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Submit">
                    Register
                  </button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">
                  Have already an account?
                  <a href="#!" class="fw-bold text-body"><u>Login here</u></a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="shipping">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <img  src="images/truck.png" />
                        <li><h4>Free Shipping</h4></li>
                        <li><p>Sign up for update and get free shipping</p></li>
                    </ul>
                    
                </div>
                <div class="col-md-4">
                    <ul>
                        <img  src="images/box.png" />
                        <li><h4>30 Minutes Delievery</h4></li>
                        <li><p>Everything you order will be qucckly deliever to your door</p></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <img  src="images/quality.png" />
                        <li><h4>Best Quality Guarantee</h4></li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php include_once("Footer.php"); ?>
    