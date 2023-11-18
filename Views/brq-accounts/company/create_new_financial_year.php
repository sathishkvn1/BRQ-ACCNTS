<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>brq-glob-tech | Accounts</title>
    <!--- top-css. ---->
    <?php include("top-css.php"); ?>
    <!--- // end top-css --->

    <style>
        .modal-backdrop.fade.show {
            height: calc(100% - 71px);
            top: 71px;
        }

        /* -- */
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"
    style="background:#fffaf4!important;">
    <div class="wrapper masters_pages">

        <!-- Navbar  TOP NAV BAR MESSAGES & SEARCH -->
        <?php include("header-nav-search-messages.php"); ?>
        <!-- /.navbar  TOP NAVE BAR MESSAGES & SEARCH-->
        <?php include("voucher-sidebar-navigation-right.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="section_create_new_financial_year" style="height: calc(100vh - 71px);">


                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="last_financial_year">
                            <div class="content-heading">Last Financial Year</div>
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Financial Year Begin Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                        01/04/2023
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Book Begin Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                        01/04/2023
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Financial Year End Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                        31/03/2023
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="new_financial_year">
                            <div class="content-heading">New Financial Year</div>
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Financial Year Begin Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="new_financial_year_begin_date">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Book Begin Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="new_financial_year_begin_date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Financial Year End Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="new_financial_year_begin_date">
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                        <div class="create_btn">
                            <a href="#">
                            <i class="fas fa-plus-circle"></i>
                            <span>C</span>reate</a>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </section>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!----- ----- bottom-js ---------------------->
    <?php include("bottom-js.php"); ?>
    <!------------- bottom-js end --------------->

    <!----- ----- Masters-js ---------------------->
    <?php include("bottom-js-masters.php"); ?>
    <!------------- Masters-js end --------------->

</body>

</html>