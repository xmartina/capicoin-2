<?php require_once('header.php'); ?>

    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="form-container rounded py-4 px-3 ">
                <h3>
                    Hello <?= $_SESSION['username'] ?> <br>
                    <!-- Assuming you have set $authenticatedUserID in your authentication code -->
<!--                    --><?php //= isset($authenticatedUserID) ? $authenticatedUserID : "User ID not available"; ?>
                </h3>
                <h4>
                    Note: only use this form if you are ready to make a deposit now
                </h4>
                <form action="">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">User Name</div>
                            <div class="col-sm-8">
                                <input disabled name="" class="form-control" value="<?= $_SESSION['username'] ?>" placeholder="Full name" type="text">
                            </div>
                        </div>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="" class="form-control" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                    <!--<div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select" style="max-width: 120px;">
                            <option selected="">+971</option>
                            <option value="1">+972</option>
                            <option value="2">+198</option>
                            <option value="3">+701</option>
                        </select>
                        <input name="" class="form-control" placeholder="Phone number" type="text">
                    </div>-->
                    <div class="form-group input-group">
                        <div class="btc-exp">
                            Use the wallet address below to make your deposit
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                        </div>
                        <select class="form-control">
                            <option selected=""> Select wallet address</option>
                            <option id="btc">Bitcoin</option>
                            <option id="eth">Ethereum</option>
                            <option id="usdc">USD Coin</option>
                            <option id="bnb">BNB</option>
                        </select>
                    </div> <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input disabled class="form-control d-none" id="btc-address" value="brtererwewe" placeholder="Create password" type="password">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Repeat password" type="password">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Create Account</button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="">Log In</a></p>
                </form>
            </div>
        </div>
    </div>

<?php require_once('footer.php'); ?>

