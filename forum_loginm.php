<!-- Modal -->
<form action="forum_handal_login.php" method="post">

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login E-coding</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">



                    <div class="mb-3 col-md-12">
                        <label for="loginEmail" class="form-label">E-mail Address</label>
                        <input type="eamil" maxlength=20; class="form-control" id="loginEmail" name="loginEmail">

                    </div>
                    <div class="mb-3  col-md-12">
                        <label for="loginPass" class="form-label">Password</label>
                        <input type="password" maxlength=20; class="form-control" id="loginPass" name="loginPass">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox" required>
                        <label class="form-check-label" for="checkbox">Check me out</label>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>
</form>