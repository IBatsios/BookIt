<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row" style="padding-top: 25px;">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <h3><?php echo $_data['description']; ?></h3>
    </div>
    <div class="col-lg-3"></div>
</div>
    <form action="" method="post" style="padding-top: 25px;">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg">
                <input type="text" class="form-control" id="fname" placeholder="First Name">
                <br>
                <input type="text" class="form-control" id="lname" placeholder="Last Name">
                <br>
                <input type="text" class="form-control" id="address" placeholder="Street Address">
                <br>
                <input type="text" class="form-control" id="city" placeholder="City">
                <br>
                <div class="row">
                    <div class="col-sm">
                        <!-- TODO: define states somewhere and make the state field a drop-down menu -->
                        <input type="text" class="form-control" id="state" placeholder="State">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="zip" placeholder="Zip">
                    </div>
                </div>
                <br>
                <!-- Phone number is not automatically validated by the form type. -->
                <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
            </div>
            <div class="col-lg">
                <input type="email" class="form-control" id="email" placeholder="Email">
                <br>
                <input type="email" class="form-control" id="confirm_email" placeholder="Retype Email">
                <br>
                <input type="text" class="form-control" id="password" placeholder="Password">
                <br>
                <input type="text" class="form-control" id="confirm_password" placeholder="Verify Password">
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row" style="padding-top: 35px;">
            <div class="col-lg-4"></div>
            <input type="submit" value="Register" class="col-lg-4 btn btn-primary">
            <div class="col-lg-4"></div>
        </div>
    </form>
<div class="row" style="padding-top: 25px;">
    <div class="col-lg-4"></div>
    <div class="col-lg-4"><h5>Already have an account?</h5></div>
    <div class="col-lg-4"></div>
</div>
<div class="row" style="padding-bottom: 30px;">
    <div class="col-lg-4"></div>
    <div class="col-lg-4"><a href="<?php echo URLROOT; ?>/users/login" class="red">Login Here</a></div>
    <div class="col-lg-4"></div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
