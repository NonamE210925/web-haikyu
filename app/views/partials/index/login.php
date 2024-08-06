<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="my-4 p-3 bg-light">
                
                <div>
                    <h4><i class="fa fa-key"></i> User Login</h4>
                    <hr />
                    <?php
                    $this::display_page_errors();
                    ?>
                    <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>" class="needs-validation form page-form" method="post">
                        <div class="input-group form-group">
                            <input placeholder="Username Or Email" name="username"  required="required" class="form-control" type="text"  />
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="form-control-feedback fa fa-user"></i></span>
                            </div>
                        </div>
                        
                        <div class="input-group form-group">
                            
                            <input  placeholder="Password" required="required" v-model="user.password" name="password" class="form-control " type="password" />
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="form-control-feedback fa fa-key"></i></span>
                            </div>
                        </div>
                        <div class="row clearfix mt-3 mb-3">
                            
                            <div class="col-6">
                                <a href="<?php print_link('passwordmanager') ?>" class="text-danger"> Reset Password?</a>
                            </div>
                            
                        </div>
                        
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-block btn-md" type="submit"> 
                                <i class="load-indicator">
                                    <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader> 
                                </i>
                                Login <i class="fa fa-key"></i>
                            </button>
                        </div>
                        <hr />
                        
                        <div class="text-center">
                            Don't Have an Account? <a href="<?php print_link("index/register") ?>" class="btn btn-success">Register
                            <i class="fa fa-user"></i></a>
                        </div>
                        
                    </form>
                </div>
                
                
            </div>
        </div>
    </div>
</div> -->
<style>
    .login-container {
        margin-top: 100px;
        font-family: 'Roboto', sans-serif;
    }

    .login-card {
        background-color: #1A232C;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    }

    .login-card h4 {
        color: #EF9600;
        margin-bottom: 20px;
    }

    .input-group-text {
        background-color: #2D3E50;
        border: none;
        color: white;
    }

    .form-control {
        background-color: #1A232C;
        border: 1px solid #2D3E50;
        color: white;
    }

    .form-control:focus {
        background-color: #1A232C;
        border-color: #EF9600;
        box-shadow: none;
        color: white;
    }

    .btn-primary {
        background-color: #EF9600;
        border: none;
    }

    .btn-primary:hover {
        background-color: #D87A00;
    }

    .text-danger {
        color: #EF9600 !important;
    }

    .text-danger:hover {
        text-decoration: underline;
    }

    .custom-divider {
        border-top: 1px solid #2D3E50;
        margin: 20px 0;
    }
</style>
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="login-card">
                <h4><i class="fa fa-key"></i> Admin Login</h4>
                <hr class="custom-divider" />
                <?php
                $this::display_page_errors();
                ?>
                <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>" class="needs-validation form page-form" method="post">
                    <div class="input-group form-group">
                        <input placeholder="Username Or Email" name="username" required="required" class="form-control" type="text" />
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <input placeholder="Password" required="required" v-model="user.password" name="password" class="form-control" type="password" />
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                    </div>
                    <div class="row clearfix mt-3 mb-3">
                        <div class="col-6">
                            <a href="<?php print_link('passwordmanager') ?>" class="text-danger"> Reset Password?</a>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary btn-block btn-md" type="submit">
                            <i class="load-indicator">
                                <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader>
                            </i>
                            Login <i class="fa fa-key"></i>
                        </button>
                    </div>
                    <hr class="custom-divider" />
                </form>
            </div>
        </div>
    </div>
</div>