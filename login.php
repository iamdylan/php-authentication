<!--header-->
<?php require_once 'includes/header.php'; ?>

<!--navbar-->
<?php require_once 'includes/navbar.php'; ?>
 
    <div class="container">

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class='card card-body  bg-light mt-5'>
                    <h2>Login</h2>
                    <p>Enter credentials to log in.</p>

                    <?php 
                    echo getMsg('msg_notify'); 
                
                    //getting errors on form
                    $err = getMsg('errors');
                  
                    //getting data back that was entered on form
                    $data = getMsg('form_data');
                    ?>
                    
                    <form action="<?php echo(URLROOT) ?>/process/p_login.php" method='POST'>

                    <div class="form-group">
                        <label for='username'>Username: <sup>*</sup></label>
                        <input type='text' name="username" value="<?php echo($data['username']); ?>" class="form-control form-control-lg <?php echo(isset($err['username_err'])) ? 'is-invalid' : ''; ?>">
                         <span class="invalid-feedback"><?php echo($err['username_err']); ?></span>
                    </div>

                    <div class="form-group">
                        <label for='password'>Password: <sup>*</sup></label>
                        <input type='password' name="password" value="<?php echo($data['password']); ?>" class="form-control form-control-lg <?php echo(isset($err['password_err'])) ? 'is-invalid' : ''; ?>">
                         <span class="invalid-feedback"><?php echo($err['password_err']); ?></span>
                    </div>
                  
                        <div class="form-check mb-2 text-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember-me">
                            <label class="form-check-label text-primary" for="exampleCheck1">Remember Me</label>
                        </div>

                        <div class="row">
                            <div class='col'>
                                <input type='submit' name='login' value='Login' class='btn  btn-block color-set'>
                            </div>

                        </div>
                        <div class="row">
                            <div class='col'>
                                <a href="<?php echo(URLROOT); ?>/forget_password.php" class="btn  btn-block">Forgot your passsword?</a>
                            </div>

                            <div class='col'>
                                <a href="<?php echo(URLROOT); ?>/register.php" class="btn  btn-block">Need an account?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'includes/footer.php'; ?>