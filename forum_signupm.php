<!-- Modal -->
<form action="loginsystem_signup.php" method="post">
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Signup E-coding</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">



                    <div class="mb-3 col-md-12">
                        <label for="email" class="form-label">E-mail Address</label>
                        <input type="text" maxlength=20; class="form-control" id="email" name="email">

                    </div>
                    <div class="mb-3  col-md-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" maxlength=20; class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3  col-md-12">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" maxlength=20; class="form-control" id="cpassword" name="cpassword">
                        <div id="emailHelp" class="form-text">Make sure to type the same Password</div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox" required>
                        <label class="form-check-label" for="checkbox">Check me out</label>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</form>