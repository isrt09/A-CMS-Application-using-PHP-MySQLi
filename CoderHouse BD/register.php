<?php include('pages/header.php'); ?>
<!-- MAIN CONTAINER STARTS-->
<div id="layoutAuthentication" class="bg-primary">
    <div id="layoutAuthentication_content">
       <main>
           <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header bg-dark text-white"><h3 class="text-center font-weight-bold my-4">CREATE ACCOUNT</h3></div>
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1 font-weight-bold" for="inputFirstName">First Name</label>
                                                <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1 font-weight-bold" for="inputLastName">Last Name</label>
                                                <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1 font-weight-bold" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1 font-weight-bold" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1 font-weight-bold" for="inputConfirmPassword">Confirm Password</label>
                                                <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="login.php"><b>Create Account</b></a></div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="login.php"><b>Have an account? Go to login</b></a></div>
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