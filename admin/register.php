<?php include "templates/top.php";?>
<?php include "templates/navbar.php";?>


    <div class="container">
    <form action="#"  method="post" class="register-form">
                      
                        <h2>Register</h2>
                        <p class="message"></p>
                        <div>
                        <div class="txtb">
                            <input type="text" id="name" name="name">
                            <span data-placeholder="Full Name"></span>
                          </div>
                          <div class="txtb">
                            <input type="text" id="username" name="username">
                            <span data-placeholder="Username"></span>
                          </div>
                          <div class="txtb">
                            <input type="password" id="password" name="password">
                            <span data-placeholder="Password"></span>
                          </div>
                          <div class="txtb">
                            <input type="password" id="cpassword" name="cpassword">
                            <span data-placeholder="Confirm Password"></span>
                          </div>
                          <input type="hidden" name="admin_register" value="1">
                          <input type="button" class="logbtn" id="btnregister" value="Register">
                        </div>
                    
                  </form>
    </div>

<?php include "templates/footer.php";?>

<script src="js/main.js"></script>