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
                <?php echo $userID; ?>
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

                <!-- Include jQuery library -->


                <div class="form-group input-group">
                    <div class="btc-exp">
                        Use the wallet address below to make your deposit
                    </div>
                    <div class="form-group input-group">
                        <div class="row align-items-center w-100">
                            <div class="col-sm-2 pr-0">BTC</div>
                            <div class="col-sm-8 ">
                                <input disabled name="username w-100" class="form-control w-100"
                                       value="bc1qldk0yfuj66hs6406murakdewqs9e6drjezzdd0"
                                       placeholder="Full name" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <div class="depo-amunt pb-3">
                            Amount to deposit.
                        </div>
                        <div class="infu w-100">
                            <input class="form-control crypto-select w-100" id="btc-address" placeholder="e.g 500"
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

