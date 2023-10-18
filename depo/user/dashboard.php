<?php require_once('header.php'); ?>

<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <div class="form-container rounded py-4 px-3 ">
            <h3>
                Hello <?= isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest' ?> <br>
            </h3>
            <h4>
                Note: only use this form if you are ready to make a deposit now
                <?php echo $user_id ?>
                <?php echo $userID ?>
            </h4>
            <form action="">
                <div class="form-group input-group">
                    <div class="row align-items-center">
                        <div class="col-sm-4 pr-0">User Name</div>
                        <div class="col-sm-8 pl-2">
                            <input disabled name="username w-100" class="form-control w-100"
                                   value="<?= $_SESSION['username'] ?>"
                                   placeholder="Full name" type="text">
                        </div>
                    </div>
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
                    <div class="pt-3 w-100">
                        <select class="form-control w-100">
                            <option selected=""> Select wallet address</option>
                            <option id="btc">Bitcoin</option>
                            <option id="eth">Ethereum</option>
                            <option id="usdc">USD Coin</option>
                            <option id="bnb">BNB</option>
                        </select>
                    </div>
                </div> <!-- form-group end.// -->
                <div class="form-group input-group">
                    <input disabled class="form-control crypto-select " id="btc-address" value="brtererwewe"
                           type="text">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <div class="depo-amunt pb-3">
                        Amount to deposit.
                    </div>
                    <div class="infu">
                        <input class="form-control crypto-select " id="btc-address" placeholder="e.g 500"
                               type="text">
                    </div>
                </div> <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Submit deposit for review</button>
                </div> <!-- form-group// -->
            </form>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>

