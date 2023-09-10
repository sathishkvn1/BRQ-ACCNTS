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
		.modal-backdrop.fade.show
		{
			width: calc(100% - 170px);
			height: calc(100% - 71px);
			top: 71px;
		}
	</style>


	<script src="<?php echo base_url('admin-accounts/js/jquery-3.6.0.min.js'); ?>">
	</script>

	<!-- select2 css -->
	<link href="<?php echo base_url('admin-accounts/dist/css/select2.min.css'); ?>" rel="stylesheet" /> 
	<!-- select 2 -->
</head>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

	<div class="wrapper">

		<!-- Navbar  TOP NAV BAR MESSAGES & SEARCH -->
		<?php include("header-nav-search-messages.php"); ?>
		<!-- /.navbar  TOP NAVE BAR MESSAGES & SEARCH-->
       


		<!--- For sidebar Right Navigation for Short Cut Key like Tally -->
		<?php include("index-sidebar-navigation-right.php"); ?>
		<!--- End : For sidebar Right Navigation for Short Cut Key like Tally -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Main content -->
			<section class="content section_index">
				<div class="container-fluid">

					<div class="row">
				
						<!-- Index Left Side Start-->
						<!-- For Programming purpose mention index left + id of the element -->
						<div class="col-md-6 px-4 border-right index_left">
							<div class="row">
								<div class="col-lg-12 text-center mt-2">
									<div class="text-blue" style="font-size:12px;"><strong>CURRENT PERIOD</strong></div>
									<div><strong>1-Apr-17 to 31-Mar-18</strong>
								
									</div>
								</div>
							</div>
							<div class="row row_fullheight">
								<!-- current period cards start -->
								<div class="col-lg-4">
									<div class="card current-period">
										<div class="card-body">
											<div class="card-title">CASH IN HAND</div>
											<p class="card-text">0.00</p>
										</div>
										<div class="card-footer">
											<a class="a_focus" href="#"> More Info <i
													class="pl-1 fas fa-arrow-alt-circle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card current-period">
										<div class="card-body">
											<div class="card-title">CASH IN BANK</div>
											<p class="card-text">0.00</p>
										</div>
										<div class="card-footer">
											<a class="a_focus" href="#"> More Info <i
													class="pl-1 fas fa-arrow-alt-circle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card current-period">
										<div class="card-body">
											<div class="card-title">RENEW PENDINGS</div>
											<p class="card-text">0.00</p>
										</div>
										<div class="card-footer">
											<a class="a_focus" href="#"> More Info <i
													class="pl-1 fas fa-arrow-alt-circle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card current-period">
										<div class="card-body">
											<div class="card-title">DUE INSTALLMENTS</div>
											<p class="card-text">0.00</p>
										</div>
										<div class="card-footer">
											<a class="a_focus" href="#"> More Info <i
													class="pl-1 fas fa-arrow-alt-circle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card current-period">
										<div class="card-body">
											<div class="card-title">PAYABLES</div>
											<p class="card-text">0.00</p>
										</div>
										<div class="card-footer">
											<a class="a_focus" href="#"> More Info <i
													class="pl-1 fas fa-arrow-alt-circle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card current-period">
										<div class="card-body">
											<div class="card-title">PAYABLES</div>
											<p class="card-text">0.00</p>
										</div>
										<div class="card-footer">
											<a class="a_focus" href="#"> More Info <i
													class="pl-1 fas fa-arrow-alt-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- current period cards end -->


								<!-- card overdue invoice & paid expense start -->
								<div class="col-lg-12">
									<div class="card card-overdue-invoice-paid-expense">
										<div class="card-header">
											<i class="pr-1 fas fa-arrow-alt-circle-right"></i>Overdue Invoices & Paid
											expenses
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-lg-12">
													<h5 class="card-title">Overdue Invoices</h5>
												</div>
												<div class="col-lg-9 border-bottom">
													<p class="card-text">Invoice NO.1 Payee BRQ ASSOCIATES USD Total
														118000.00</p>
												</div>
												<div class="col-lg-3 border-bottom">
													<a class="a_focus btn" href="#">More Info<i
															class="pl-1 fas fa-arrow-alt-circle-right"></i></a>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-lg-12">
													<h5 class="card-title">Month Paid Expenses</h5>
												</div>
												<div class="col-lg-9 border-bottom">
													<p class="card-text"><i class="pr-1 fa fa-question-circle"></i>No
														expense found</p>
												</div>
												<div class="col-lg-3 border-bottom">
													<a class="a_focus btn" href="#">More Info<i
															class="pl-1 fas fa-arrow-alt-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- card overdue invoice & paid expense end -->


								<!-- card net income start -->
								<div class="col-lg-12">
									<div class="card card-net-income">
										<div class="card-header">
											<i class="pr-1 fas fa-arrow-alt-circle-right"></i>Net Income
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-lg-6 border-bottom">
													<div class="card-text-left">Fisical Year</div>
												</div>
												<div class="col-lg-6 border-bottom">
													<div class="card-text-right">2021</div>
												</div>
												<div class="col-lg-6 border-bottom">
													<div class="card-text-left">Income</div>
												</div>
												<div class="col-lg-6 border-bottom">
													<div class="card-text-right">-100000</div>
												</div>
												<div class="col-lg-6 border-bottom">
													<div class="card-text-left">Expense</div>
												</div>
												<div class="col-lg-6 border-bottom">
													<div class="card-text-right">0</div>
												</div>
												<div class="col-lg-6 border-bottom">
													<div class="card-text-left">Net Income</div>
												</div>
												<div class="col-lg-6 border-bottom">
													<div class="card-text-right">-100000</div>
												</div>
												<div class="col-lg-12 border-bottom">
													<div><a class="a_focus btn" href="#"> More Info <i
																class="pl-1 fas fa-arrow-alt-circle-right"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card-header">
											<i class="pr-1 fas fa-arrow-alt-circle-right"></i>Business Expenses (This
											Month)
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-lg-12 border-bottom">
													<div><a class="a_focus btn" href="#"> More Info <i
																class="pl-1 fas fa-arrow-alt-circle-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- card net income end -->
						</div>
						<!-- Index Left Side End -->

						<!-- Index Right Side Start-->
						<!-- For Programming purpose mention index right + id of the element -->
						<div class="col-md-6 px-4 index_right">

							<div class="row">
								<div class="col-lg-12 current_date">
									<div><strong>30-Mar-20</strong></div>
									<div>Monday</div>
								</div>
								<div class="col-lg-12 text-center mt-2">
									<div class="text-blue" style="font-size:12px;"><strong>CURRENT DATE</strong></div>
									<div><strong>Saturday, 1-Apr-2017</strong></div>
								</div>
							</div>
							<div class="row row_fullheight">
								<div class="col-lg-8 offset-lg-2">
									<div class="card card-current-date">
										<div class="card-header">
											Gateway of <span class="fw-600">BRQ ERP 9</span>
										</div>
										<div class="card-body">

											<!-- short-key title and content -->
											<ul class="card-title mainMenuIndex" id="index_ul">
												<h6>MASTERS</h6>
												<li class="card-text selected" id="li_create_master"><a href="#" id="create_master"
														data-toggle="modal" data-target="#masters"
														tabindex="-1"><span>C</span>reate</a></li>
												<li class="card-text"><a href="#" data-toggle="modal"
														data-target="#masters_two" id="create_master_two"
														tabindex="-1" ><span>C</span>reate(new)</a></li>
												<li class="card-text"><a href="#" tabindex="-1" id="alter"><span>A</span>lter</a>
												</li>
												<li class="card-text"><a href="#" id="chart_of_account" tabindex="-1">C<span>H</span>art of
														Accounts</a></li>

												<h6>TRANSACTIONS</h6>
												<li class="card-text"><a href="#" id="vouchers_li" data-toggle="modal"
														data-target="#vouchers" tabindex="-1"><span>V</span>oucher</a>
												</li>
												<li class="card-text"><a href="#" tabindex="-1" id="day_book">Day
														Boo<span>K</span></a></li>

												<h6>UTLITIES</h6>
												<li class="card-text"><a href="#" tabindex="-1" id="utilities">Ba<span>N</span>king</a>
												</li>

												<h6>REPORTS</h6>
												<li class="card-text"><a href="#" tabindex="-1" id="balance_sheet"><span>B</span>alance
														Sheet</a></li>
												<li class="card-text"><a href="#" tabindex="-1"><span>P</span>rofit &
														Loss A/C</a></li>
												<li class="card-text"><a href="#" tabindex="-1"><span>S</span>tock
														Summary</a></li>
												<li class="card-text"><a href="#" tabindex="-1"><span>R</span>atio
														Analysis</a></li>

												<li class="card-text mt-4"><a href="#"
														tabindex="-1"><span>D</span>isplay More Reports</a></li>

												<li class="card-text my-4"><a href="#"
														tabindex="-1"><span>Q</span>uit</a></li>
											</ul>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Index Right Side End-->
					</div>
				</div>
			</section>
		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- ./wrapper -->


	<!-- Modal for Vouchers Menu Start Here -->
	<div class="modal fade bottom modal-old-vouchers masters vouchers_menu library-li-movement" id="vouchers" role="dialog"
		data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-full-height modal-bottom">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<div style="display:flex;align-items:center;width:100%;justify-content:space-between;">List Of Vouchers
					<i class="fa fa-close" id="list_of_vouchers_new_cancel_icon"></i>
					</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 key-control-menu">
							<ul class="ul_movement" data-target="vouchers">
								<!-- in data-targer write modal id name -->
								<li class="card-text element-hover"><a
										href='<?php echo base_url("brqadmin-accounts/contra_voucher"); ?>'><span
											class="short-key">F3</span><span>:</span>Contra</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/payment_voucher"); ?>'><span
											class="short-key">F4</span><span>:</span>Payment</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/debit_note_voucher"); ?>'><span
											class="short-key">F5</span><span>:</span>Debit Note</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/receipt_voucher"); ?>'
										title="Ctrl + F5"><span
											class="short-key single">F5</span><span>:</span>Receipt</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/credit_note_voucher"); ?>'><span
											class="short-key">F6</span><span>:</span>Credit Note</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/journal_voucher"); ?>'
										title="Ctrl + F6"><span
											class="short-key single">F6</span><span>:</span>Journal</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/sales_voucher"); ?>'><span
											class="short-key">F7</span><span>:</span>Sales</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/delivery_challan_voucher"); ?>'><span
											class="short-key">F8</span><span>:</span>Delivery Challan</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/purchase_voucher"); ?>'><span
											class="short-key">F9</span><span>:</span>Purchase</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal for Vouchers Menu End Here -->

	<!-- Modal for Masters Menu Start Here -->
	<div class="modal fade bottom modal-old-vouchers masters library-li-movement" id="masters" role="dialog" data-backdrop="static"
		data-keyboard="false">
		<div class="modal-dialog modal-full-height modal-bottom">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header modal-header-with-close-icon">
					<div class="modal-title">List Of Masters</div>
					<i class="fa fa-close" id="list_of_masters_cancel_icon"></i>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 key-control-menu">
							<ul class="ul_movement" data-target="masters">
								<li class="card-text element-hover"><a
										href='<?php echo base_url("brqadmin-accounts/supplier_master"); ?>'>Supplier
										Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/customer_master"); ?>'>Customer
										Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/hsn_master"); ?>'>HSN / SAC
										Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/tax_master"); ?>'>TAX Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/manufacture_master"); ?>'>Manufacture
										Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/item_master"); ?>'>Item Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/route_master"); ?>'>Route
										Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/account_head_master"); ?>'>Account
										Head Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/sku_master"); ?>'>SKU Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/group_master"); ?>'>Group
										Master</a>
								</li>

								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/customer_master"); ?>'>Customer
										Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/hsn_master"); ?>'>HSN / SAC
										Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/tax_master"); ?>'>TAX Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/manufacture_master"); ?>'>Manufacture
										Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/item_master"); ?>'>Item Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/route_master"); ?>'>Route
										Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/account_head_master"); ?>'>Account
										Head Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/sku_master"); ?>'>SKU Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/group_master"); ?>'>Group
										Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/customer_master"); ?>'>Customer
										Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/hsn_master"); ?>'>HSN / SAC
										Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/tax_master"); ?>'>TAX Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/manufacture_master"); ?>'>Manufacture
										Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/item_master"); ?>'>Item Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/route_master"); ?>'>Route
										Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/account_head_master"); ?>'>Account
										Head Master</a></li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/sku_master"); ?>'>SKU Master</a>
								</li>
								<li class="card-text"><a
										href='<?php echo base_url("brqadmin-accounts/group_master"); ?>'>Group
										Master</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal for Masters Menu End Here -->



	<!-- Modal for Masters_two Menu Start Here -->
	<div class="modal fade bottom modal-create-side-new library-li-movement "  id="masters_two" role="dialog" data-backdrop="static"
		data-keyboard="false">
		<div class="modal-dialog modal-full-height modal-bottom">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header modal-header-with-close-icon">
					<div class="modal-title">List Of Masters(new)</div>
					<i class="fa fa-close" id="list_of_masters_new_cancel_icon"></i>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 key-control-menu">
							<!-- <div class="wrapper">
								<div class="outer_div"> -->
									<ul class="ul_movement">
										<li class="element element-hover" id="master_change_company"><a href='#'>Change
												Company</a></li>
										<li class="element" id="master_change_show_more"><a href='#'>Show More</a></li>
										<li class="double_touch_hide_show_li" id="accounting_masters"
											data-value="li_accounting_masters">Accounting Masters
										</li>

										<li class="element li_accounting_masters" id="master_group"><a href='#'
												data-toggle="modal" data-target="#company_creation_second"
												data-backdrop="false" tabindex="-1" autofocus>Group</a></li>
										<li class="element li_accounting_masters" id="master_ledger"><a
												href='#'>Ledger</a></li>
										<li class="element li_accounting_masters" id="master_cost_center"><a
												href='#'>Cost Center</a></li>
										<li class="element li_accounting_masters" id="master_currency"><a
												href='#'>Currency</a></li>
										<li class="element li_accounting_masters" id="master_coucher_type"><a
												href='#'>Voucher Type</a></li>
										<li class="double_touch_hide_show_li " id="master_inventory_masters"
											data-value="li_inventory_masters">Inventory Master
										</li>
										<li class="element li_inventory_masters" id="master_stock_group"><a
												href='#'>Stock Group</a>
										</li>
										<li class="element li_inventory_masters" id="master_stock_category"><a
												href='#'>Stock Category</a>
										</li>
										<li class="element li_inventory_masters" id="master_stock_item"><a
												href='#'>Stock Item</a>
										</li>
										<li class="element li_inventory_masters" id="master_unit"><a href='#'>Unit</a>
										</li>
										<li class="element li_inventory_masters" id="master_godown"><a
												href='#'>Godown</a>
										</li>
										<li class="element li_inventory_masters" id="master_price_level"><a
												href='#'>Price levels</a>
										</li>
										<li class="element li_inventory_masters" id="master_price_list_stock_group"><a
												href='#'>Price list(Stock Group)</a>
										</li>
										<li class="element li_inventory_masters" id="master_price_list_stock_category">
											<a href='#'>Price list(Stock Category)</a>
										</li>
										<li class="double_touch_hide_show_li" id="master_payroll_masters"
											data-value="li_payroll_masters">Payroll Masters</li>

										<li class="element li_payroll_masters" id="master_employee_group"><a
												href='#'>Employee Group</a>
										</li>
										<li class="element li_payroll_masters" id="master_employee"><a href='#'>Employee
											</a>
										</li>
										<li class="element li_payroll_masters" id="master_units_work"><a href='#'>Units
												(Work) </a>
										</li>
										<li class="element li_payroll_masters" id="master_attendence_product_type"><a
												href='#'>Attendence/Production Type</a>
										</li>
										<li class="element li_payroll_masters" id="master_pay_heads"><a href='#'>Pay
												Heads</a>
										</li>
										<li class="element li_payroll_masters" id="master_payroll_voucher_type"><a
												href='#'>Payroll Voucher Type</a>
										</li>
										<li class="double_touch_hide_show_li" id="master_statutory_master"
											data-value="li_statutory_masters">Statutory Masters
										</li>
										<li class="element li_statutory_masters" id="master_tds_nature_of_payment"><a
												href='#'>TDS Nature of Payments</a>
										</li>
										<li class="element li_statutory_masters" id="master_tcs_nature_of_payment"><a
												href='#'>TCS Nature of Payments</a>
										</li>
										<li class="element li_statutory_masters" id="master_tax_units"><a href='#'>Tax
												Units</a>
										</li>
										<li class="element li_statutory_masters" id="gst_classification"><a href='#'>GST Classification</a>
										</li>
										<li class="double_touch_hide_show_li" id="master_statutory_detailes"
											data-value="li_statutory_detailes">Statutory
										Detailes</li>
										<li class="element li_statutory_detailes" id="master_gst_detailes" onclick="openGstModal()"><a
												href='#'>GST Details</a>
										</li>
										<li class="element li_statutory_detailes" id="master_tds_detailes"><a
												href='#' >TDS Details</a>
										</li>
										<li class="element li_statutory_detailes" id="master_tcs_detailes"><a
												href='#' data-toggle="modal" data-target="#tcs_details_modal">TCS Details</a>
										</li>
										<li class="element li_statutory_detailes" id="master_vat_registration_detailes">
											<a href='#'>VAT Registration Detailes</a>
										</li>
										<li class="element li_statutory_detailes"
											id="master_excise_registration_detailes"><a href='#'>Excise Registration
												Detailes</a>
										</li>
										<li class="element li_statutory_detailes" id="master_cin_detailes"><a
												href='#'>PAN/CIN Details</a>
										</li>
									</ul>
								<!-- </div>
							</div> -->


						</div>
					</div>
				</div>
			</div>
		</div>
		 <!------------------------------------------------------------------
                    Modal for Gst_classification Details Start 
    ------------------------------------------------------------------>
	<?php include 'company_modal_for_gst_classification.php';?>


		<!----------- bottom-js ---------------------->
		<?php include("bottom-js.php"); ?>
		<!------------- bottom-js end --------------->

		
</body>


</html>


<script>
 
	  var company_id = <?php echo $company_id; ?>;
	  if (company_id == 0) {

			loadCompanyDetails();                       //Defined in company-select.php file
			$('#company_select').modal('show');
		 }

// to open gst_classification modal
	$("#gst_classification").on("click",function(){
		fetchAndDisplayData();
		$('#gst_classification_modal').modal('show');
	})


  // to open tds modal
  $('#masters_two').on('click', '#master_tds_detailes a', function (event) {
	// $('#tds_details_modal').modal('show');
		 populateTDSModal();
		$('#tds_details_modal').modal('hide');
	
   });
   $('#tds_details_modal').on('hidden.bs.modal', function (e) {
  
    $('.modal-backdrop').remove();
});

 // to open tcs modal
$('#masters_two').on('click', '#master_tcs_detailes a', function (event) {
	$('#masters_two').modal('hide');
	populateTCSModal();
});

// to open vat modal
$('#masters_two').on('click', '#master_vat_registration_detailes a', function (event) {
	
	$('#masters_two').modal('hide');
	populateVATModal();
});

 
    $('#masters_two').on('click', '#master_tds_detailes a', function (event) {
        event.preventDefault(); 
        
		$('#masters_two').modal('hide');
        $('#tds_details_modal').modal('show');
    });

// to open gst modal
function openGstModal(){
	
 var company_id = <?php echo $this->session->userdata('company_id'); ?>;

var token = "<?php echo $_SESSION['li_token']; ?>";
// alert(token);
$.ajax({
	url: BASE_URL + "index.php/" + accountsController + "/get_gst_row_count",
	type: 'POST',
	dataType: 'json',
	data: {
		company_id: company_id, li_token: token
	},
 
	success: function (response) {
		// console.log(response);
		var rowCount = response.row_count;

		if (rowCount > 1) {
			$('#masters_two').modal('hide');
			$('#company_multiple_gst').modal('show');
			loadMultipleGst();
		} else {
			 $('#masters_two').modal('hide');
			
			getAddressType();
			$('#gst_modal').modal('show');
			openGstModalById(response.data[0].id); 
		}
	},
	error: function (xhr, status, error) {
		console.log('Error response:', xhr.responseText);
		console.log('An error occurred:', error);
	   
	}
});

}

function openGstModalById(gstId) {
  // Fetch GST details by ID and open the gst_modal
  getGstDetailsById(gstId);
}
	

$('#index_ul li').on('click', function() {
    // Remove the "selected" class from all list items
    $('#index_ul li').removeClass('selected');
    // Add the "selected" class to the clicked item
    $(this).addClass('selected');
  });

$(window).on("keydown", function (e)
 {
	// if ($("#masters_two").hasClass("show")) 
	if (!$(".dropdown").hasClass('show') && !$(".modal").hasClass("show"))  // this code block to execute when neither dropdown nor modal is open
	{
		var main_class =$('#index_ul');//ul class
		var li = $('#index_ul li');//li's of ul
		var liSelectedClass = $('#index_ul li.selected');//selected item
		var liSelected;
		var focused_li;
		if (e.which === 40) 
			{
				
				if (liSelectedClass) 
					{
						liSelectedClass.removeClass('selected');
						next = liSelectedClass.next();
						if (!next.hasClass('card-text')) 
							{
								next = next.next();
							}
							if (next.length > 0)
							{
								liSelectedClass = next.addClass('selected');
							} 
							else 
							{
								liSelectedClass = li.eq(0).addClass('selected');
							}
					}
				else
				{
						liSelectedClass = li.eq(0).removeClass('selected');
						liSelectedClass = li.eq(1).addClass('selected');
				}
			}
		else if (e.which === 38) 
			{
				if (liSelectedClass)
				{
					liSelectedClass.removeClass('selected');
					prev = liSelectedClass.prev();
					if (!prev.hasClass('card-text')) {
						prev = prev.prev();
					}
					if (prev.length > 0) {
						liSelectedClass = prev.addClass('selected');
					} else {
						liSelectedClass = li.last().addClass('selected');
					}
				}
				else {
						liSelectedClass = liSelectedClass.prev().addClass('selected');
						liSelectedClass = liSelectedClass.removeClass('selected');
					}
			}
			else if (e.which === 13) //wamt to check
			{
				
				if (liSelectedClass)
				 {
        			var modalId = liSelectedClass.find('a').attr("data-target"); // Get the data-target attribute value
       				 if (modalId)
					  {
						// alert(modalId)
						// Close any open modal first
						$(".modal.show").modal("hide");

						// Open the selected modal
						$(modalId).modal("show");
				 	 }
     			 }
			}
	}
});
	






	// hide and  show li items  when you doble click on headding of li elements in list of masters modal
	$(".double_touch_hide_show_li").dblclick(function () {
		var id_side_heading = $(this).attr("id");
		var li_group_name = $(this).attr("data-value");
		$("li." + li_group_name).toggle();
	});
	
	//focus on clicable element and remove focus from previous selactable element in masters modal
	$('ul.ul_movement li').click(function () {
		var remove_select = $(".element-hover").attr("id");
		$("#" + remove_select).removeClass("element-hover");
		var master_element_id = $(this).attr('id');
		$("#" + master_element_id).addClass("element-hover");
	});



</script>
<script>
	$('#list_of_masters_cancel_icon').click(function () {
        // Close the modal by selecting its ID and calling modal('hide')
        $('#masters').modal('hide');
    });
	$('#list_of_masters_new_cancel_icon').click(function () {
        // Close the modal by selecting its ID and calling modal('hide')
        $('#masters_two').modal('hide');
    });
	$('#list_companies_cancel_icon').click(function () {
        // Close the modal by selecting its ID and calling modal('hide')
        $('#company_select').modal('hide');
    });
	
</script>


<script>
	//li movement modal library
	
$("#list_of_vouchers_new_cancel_icon").on("click",function(){
	$("#vouchers").modal("hide");
})

// $(document).ready(function () {
//     save();
// });
</script>

