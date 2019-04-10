<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inventroy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link href="<?php echo base_url(); ?>asset/login/images/icons/favicon.ico" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>asset/login/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>asset/login/vendor/animate/animate.css" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>asset/login/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">  
<!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>asset/login/vendor/animsition/css/animsition.min.css" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>asset/login/vendor/select2/select2.min.css" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>asset/login/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">  
<!--===============================================================================================-->
    <link href="<?php echo base_url(); ?>asset/login/css/util.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/login/css/main.css" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
    <?php
    $error = $this->session->userdata('error');
    if (!empty($error)) {
        ?>
        <div class="alert alert-danger"><?php
            echo $error;
            ?></div>
    <?php }$this->session->unset_userdata('error'); ?>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-b-160 p-t-50">
                <form class="login100-form validate-form" role="form" action="<?php echo base_url() ?>login" method="post">
   

                    <!-- <span class="login100-form-title p-b-43">
                        Inventory
                    </span > -->
                    <img style="display: block;  width: 100%;" src="asset/img/logo.png">
                    <span class="login100-form-title p-t-23">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('error'); ?>
                    </span>
                    <br>
                    <div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
                        <input class="input100" type="text" name="user_name">
                        <span class="label-input100">Username</span>
                    </div>
                    
                    
                    <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                        <span class="label-input100">Password</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="submit">
                            Sign in
                        </button>
                    </div>
                    
                    <div class="text-center w-full p-t-23">
                        <!-- <a href="<?php // echo base_url()?>forget_password" class="txt1">
                            Forgot password?
                        </a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>asset/login/vendor/jquery/jquery-3.2.1.min.js" ></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>asset/login/vendor/animsition/js/animsition.min.js" ></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>asset/login/vendor/bootstrap/js/popper.js" ></script>
    <script src="<?php echo base_url() ?>asset/login/vendor/bootstrap/js/bootstrap.min.js" ></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>asset/login/vendor/select2/select2.min.js" ></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>asset/login/vendor/daterangepicker/moment.min.js" ></script>
    <script src="<?php echo base_url() ?>asset/login/vendor/daterangepicker/daterangepicker.js" ></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>asset/login/vendor/countdowntime/countdowntime.js" ></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>asset/login/js/main.js" ></script>

</body>
</html>