<?php include('header.php'); ?>
<?php include('menubar.php'); ?> 

        <!-- main-area -->
        <main>
            <!-- 404-area -->
            <section class="error-area pt-80 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="error-content text-center">
                                <div class="error_txt bounce">404</div>
                                <h5>oops! The page you requested was not found!</h5>
                                <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
                                <div class="search_form">
                                    <form method="post">
                                        <input name="text" id="text" type="text" placeholder="Search" class="form-control">
                                        <button type="submit" class="icon_search"><i class="flaticon-loupe"></i></button>
                                    </form>
                                </div>
                                <a href="index.php" class="btn btn-fill-out">Back To Shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 404-area-end -->

<?php include('ad.php'); ?>
        </main>
<?php include('footer.php'); ?> 