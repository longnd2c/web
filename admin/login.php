<?php include "templates/top.php";?>
<?php include "templates/navbar.php";?>


    <div class="container">
    <form action="#"  method="post" class="login-form">
                      
                        <h2>Login</h2>
                        <p class="message"></p>
                        <div>
                          <div class="txtb">
                            <input type="text" id="username" name="username" require="required">
                            <span data-placeholder="Username"></span>
                          </div>
                          <div class="txtb">
                            <input type="password" id="password" name="password" require="required">
                            <span data-placeholder="Password"></span>
                          </div>
                          <input type="button" class="logbtn" id="btnlogin" value="Login" name="btnlogin">
                          <input type="hidden" name="admin_login" value="1">
                          <div class="bottom-login">
                            Don't have account? <a href="register.php">Sign up</a>
                          </div>
                        </div>
                    
                  </form>
    </div>

<?php include "templates/footer.php";?>

<script src="js/main.js"></script>