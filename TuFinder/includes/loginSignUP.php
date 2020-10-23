

<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-1 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Create Account</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="loginAndSignup.php" method="post" class="row">
                       
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                         <div class="col-12">

                        <select name="SignupAs" id="category" class="form-control mb-3">
                          <option disabled="disabled" selected="selected">Sign Up As </option>
                          <option >Tutor</option>
                          <option >Parent</option>
                          <option >Student</option>
                        </select>
                      </div>
                         <div class="col-12">
                        <select name="Subject" id="category" class="form-control mb-3" >
                           <option disabled="disabled" selected="selected">Subject</option>
                          <option >Math</option>
                          <option >Science</option>
                          <option >Social Studies</option>
                          <option >Arts</option>
                          <option >Business Studies</option>
                          <option >Language</option>
                          <option >Others</option>
                        </select>
                      </div>
                         <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" name="signup" value="signup" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
</div>


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-1 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Sign In</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="loginAndSignup.php" id="thiss" method="post" class="row">
                    <div class="col-12">
                            <input type="email" class="form-control mb-3" id="loginEmail" name="loginEmail" placeholder="Email">
                        </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password" value="323">
                    </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn-primary" name="login" value="SIGN IN" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- edit profile -->
