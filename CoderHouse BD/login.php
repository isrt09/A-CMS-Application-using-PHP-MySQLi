<?php include('pages/header.php'); ?>
<!-- MAIN CONTAINER STARTS-->
<div id="layoutAuthentication" class="bg-primary">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header bg-dark text-white"><h1 class="text-center font-weight-bold">LOGIN</h1></div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label class="small mb-1 font-weight-bold" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1 font-weight-bold" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                            <label class="custom-control-label font-weight-bold" for="rememberPasswordCheck">Remember password</label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html"><b>Forgot Password?</b></a>
                                        <a class="btn btn-primary" href="index.php">Login</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="register.php"><b>Need an account? Sign up!</b></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>            
</div>            
 <!-- MAIN CONTAINER ENDS-->
<?php include('footer.php'); ?>