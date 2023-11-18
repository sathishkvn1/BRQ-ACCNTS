<style>
.dropdown-item.inactive-link {
		pointer-events: none !important;
		cursor: default !important;
		text-decoration: none !important;
  }

	.nav-pills .nav-link {
		color: #c2c7d0;
	}

	.height-20 {
		min-height: 20px !important;
		height: 20px !important;
	}

	/* For Dropdown Backdrop */
	.dropdown.show:before {
		position: fixed;
		top: 49px;
		bottom: 0;
		left: 0;
		right: 0;
		background-color: #b6bcbf;
    	opacity: 0.8 !important;
		content: '';
		z-index: 999 !important;
	}
	.dropdown-divider {
        border-top: 1px solid  #ccc; 
        margin: 8px 0; 
    }
/* css for toast down starts here  */
#snackbar
 {
    visibility: hidden; 
    min-width: 262px;
    margin-left: -125px;
    text-align: center;
    border-radius: 2px;
    padding: 10px 6px;
    position: fixed;
    z-index: 1;
	right: 5px;
	bottom: 0px;
    font-size: 17px;
    height: fit-content;
}
#snackbar h5.title 
{
	font-weight: 700;
    padding-bottom: 9px;
}
#snackbar.success h5.title 
{
    border-bottom: 2px solid green;
}
#snackbar.warning h5.title 
{
    border-bottom: 2px solid orange;
}
#snackbar.failure h5.title 
{
    border-bottom: 2px solid red;
}
#snackbar .content {
    padding: 46px 10px;
}
#snackbar p {
    font-weight: 600;
    color: #171616;
    font-size: 14px;
    max-width: 300px;
}

#snackbar.failure
{
	background-color:white!important;
	color:red!important;
	border: 2px solid red;
	font-weight: 700;
    color: red;
}
#snackbar.warning
{
	background-color:white!important;
	color:orange!important;
	border: 2px solid orange;
	font-weight: 700;
    color: orange;
}
#snackbar.success
{
	background-color:white!important;
	color:green!important;
	border: 2px solid green;
	font-weight: 700;
    color: green;
}

#toast {
	visibility: hidden;
    min-width: 272px;
    margin-left: 0px;
    text-align: center;
    padding: 5px 17px;
    position: fixed;
    z-index: 1;
    right: 0px;
    top:50px;
    font-size: 19px;
    height: fit-content;
    border-radius: 8px;
}

#toast .title
{
    margin:4px;
    font-weight: 900;
}
#toast .content
{
    margin:4px!important;
}

#toast.success
{
	background-color: rgb(10, 146, 55)!important;
	color:white!important;
	font-weight: 500;
}

#toast.warning
{
	background-color: rgb(146, 137, 10)!important;
	color:white!important;
	font-weight: 500;
}

#toast.failure
{
	background-color: rgb(180, 32, 6)!important;
	color:white!important;
	font-weight: 500;
}
#toast.show,
#snackbar.show
{
    visibility: visible!important;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s!important;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* common taost animation starts effect */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
/* common taost animation ends effect */

</style>

<!-- ===== Nav Start ==== -->
<div class="row">
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">

		<!-- Logo Start -->
		<div class="col-lg-1">
			<a href="<?php echo base_url("accounts");?>">
				<img src="<?php echo base_url('admin-accounts/img/admin-accounts-logo.png') ?>">
			</a>
		</div>
		<!-- Logo End -->

		<!-- Left Side Start -->
		<div class="col-lg-4">
			<ul class="navbar-nav">
				<li class="nav-item">
					<div class="dropdown" id="dropdown_Comapany">
						<a href="#" class="nav-link" id="companydropdownMenuButton" data-toggle="dropdown">
							<span>K</span><span>:</span>Company
						</a>
						<div class="dropdown-menu">
						<!-- data-toggle="modal"  data-target="#company_select" -->
							
							<a class="dropdown-item" href="#" id="btncreate" data-backdrop="false" onclick="companyCreation(); disableSubmenu();" tabindex="-1" autofocus><span>C</span>reate</a>
							<a class="dropdown-item" href="#" data-toggle="modal" id="btnaltercompany" data-target="#company_creation" onclick="disableSubmenu();" data-backdrop="false" tabindex="-1" autofocus><span>A</span>lter</a>
							
							<a class="dropdown-item" href="#" id="company_select_link" data-backdrop="false" onclick="disableSubmenu();" autofocus tabindex="-1"><span>S</span>elect <span class="right">Alt + F3</span></a>
							<div class="dropdown-divider"></div>
							 <a class="dropdown-item" href="#" data-toggle="modal" id="btnfinancialyearmaster" data-target="#financial_year_master" onclick="disableSubmenu();" tabindex="-1"><span>F</span></span>inancial Year Master</a> 
						
							<a class="dropdown-item" href="#" data-toggle="modal" id="btncreatefinancialyear" data-target="#create_new_financial_year_modal" onclick="disableSubmenu();" tabindex="-1">C<span>r</span></span>eate Financial Year</a>
							
							<div class="dropdown-divider"></div>
							<a class="dropdown-item"  href="#"  id="btnalter_company_features" data-backdrop="false" onclick="disableSubmenu();" tabindex="-1" autofocus><span>F</span>eatures</a>
							<!-- <a class="dropdown-item" href="<-?php echo base_url('AccountsInventory/inventory_master_settings'); ?>" tabindex="-1" autofocus><span>I</span>nventory</a> -->
		
						</div>
					</div>
				</li>
				<li class="nav-item">
					<div class="dropdown" id="dropdown_Data">
						<a href="#" class="nav-link" id="dataMenuButton" data-toggle="dropdown">
							<span>Y</span><span>:</span>Inventory
						</a>
						<div class="dropdown-menu">
							<p class="inside_content_p">INVENTORY DATA</p>
							<!-- <a class="dropdown-item" href="<-?php  echo base_url("AccountsInventory/inventory_master_settings") ?>" tabindex="-1" autofocus><span>I</span>nventory Master Settings</a> -->
							<a class="dropdown-item" href="<?php echo base_url('AccountsInventory/inventory_master_settings'); ?>?source=fromHeaderNav">
								<span>I</span>nventory Master Settings
							</a>

							<a class="dropdown-item" href="#" tabindex="-1"><span>R</span>estore</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>S</span>plit </a>
							<p class="config_p">CONFIGURE</p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>D</span>ata Path</a>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<div class="dropdown" id="dropdown_exchange">
						<a href="#" class="nav-link" id="exchangedropdownMenuButton" data-toggle="dropdown">
							<span>Z</span><span>:</span>Exchange
						</a>
						<div class="dropdown-menu">
							<p class="config_p">CONFIGURE</p>
							<a class="dropdown-item" href="#" tabindex="-1">Data Sy<span>N</span>chronisation</a>
						</div>
					</div>
				</li>
				</ul>
		</div>
		<!-- Left Side End -->

		<!-- Center Start -->
		<div class="col-lg-2">
			<a href="#" class="nav-link go-to" tabindex="-1"><span>G</span<span>:</span>Go To</a>
		</div>
		<!-- Center End -->

		<!-- Right Start -->
		<div class="col-lg-5">
			<ul class="navbar-nav" style="margin:0 60px 0 -60px;">
				<li class="nav-item">
					<div class="dropdown" id="dropdown_import">
						<a href="#" class="nav-link" id="importdropdownMenuButton" data-toggle="dropdown">
							<span>O</span><span>:</span>Import
						</a>
						<div class="dropdown-menu">
							<p class="inside_content_p">COMPANY DATA</p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>M</span>aster</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>T</span>ransaction</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>B</span>ank Details</a>
							<a class="dropdown-item configuration" href="#" tabindex="-1">Co<span>N</span>figuration</a>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<div class="dropdown" id="dropdown_export">
						<a href="#" class="nav-link" id="exportdropdownMenuButton" data-toggle="dropdown">
							<span>E</span><span>:</span>Export
						</a>
						<div class="dropdown-menu">
							<p class="inside_content_p">REPORTS</p>
							<p class="light_gray_shade">CuRrent<span class="right">Ctrl+E</span></p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>O</span>thers</a>
							<p class="inside_content_p">COMPANY DATA</p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>M</span>asters</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>T</span>ransactions</a>
							<a class="dropdown-item configuration" href="#" tabindex="-1">Co<span>N</span>figuration</a>
						</div>
					</div>
				</li>

				<li class="nav-item">
					<div class="dropdown" id="dropdown_mail">
						<a href="#" class="nav-link" id="emaildropdownMenuButton" data-toggle="dropdown">
							<span>M</span><span>:</span>Email
						</a>
						<div class="dropdown-menu">
							<p class="inside_content_p">REPORTS</p>
							<p class="light_gray_shade">CuRrent<span class="right">Ctrl+M</span></p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>O</span>thers</a>
							<a class="dropdown-item configuration" href="#" tabindex="-1">Co<span>N</span>figuration</a>
						</div>
					</div>
				</li>

				<li class="nav-item">
					<div class="dropdown" id="dropdown_print">
						<a href="#" class="nav-link" id="printdropdownMenuButton" data-toggle="dropdown">
							<span>P</span><span>:</span>Print
						</a>
						<div class="dropdown-menu">
						<p class="inside_content_p">REPORTS</p>
							<p class="light_gray_shade">CuRrent<span class="right">Ctrl+P</span></p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>O</span>thers</a>
							<a class="dropdown-item configuration" href="#" tabindex="-1">Co<span>N</span>figuration</a>
							<a class="dropdown-item" href="inventory.php" tabindex="-1" autofocus><span>I</span>nventory</a>
						</div>
					</div>
				</li>

				<li class="nav-item">
					<div class="dropdown" id="help_drop_down">
						<a href="#" class="nav-link" id="helpdropdownMenuButton" data-toggle="dropdown">
							<span>F1</span><span>:</span>Help <span class="red_dot"></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#" tabindex="-1" autofocus>Tally<span>H</span>elp <span class="right">ctrl+F1</span></a>
							<a class="dropdown-item" href="#" tabindex="-1">What's<span>N</span>ew</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>U</span>pgrade</a>
							<a class="dropdown-item mb-3" href="#" tabindex="-1"><span>T</span>allyShop</a>
							<a class="dropdown-item " href="#" tabindex="-1">T<span>R</span>oubleshooting</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>S</span>ettings</a>
							<a class="dropdown-item mb-3" href="#" tabindex="-1">TDLS&Add<span>O</span>ns</a>
							<a class="dropdown-item" href="#" tabindex="-1">A<span>B</span>out</a>
						</div>
					</div>
				</li>

			</ul>
		</div>
		<!-- Right End -->

		 <!-- toast  starts here -->
		 <div class="main_warning" id="snackbar">
			<h5 class="title"></h3>
			<p class="content"></p>
		</div>
		<div class="main_warning" id="toast">
			<h5 class="title"></h3>
			<p class="content"></p>
		</div>
        <!-- toast for ends here -->

	</nav>
</div>
<!-- === NAV END ==== -->

<div class="row">
	<nav class="sub-header navbar navbar-expand navbar-white navbar-light">
		<div class="col-lg-4">
			<div class="text-left">Accounting Voucher Creation</div>
		</div>
		<div class="col-lg-4 text-white">
			<div class="text-center" id="header_company_name">BRQ GLOB TECH PVT LTD</div>
		</div>
		<div class="col-lg-4">
			<div class="text-right"><i class="fas fa-times"></i></div>
		</div>
	</nav>
</div>

<script>

    function disableSubmenu() {

	    var alterSubmenu 		        = $('#btnaltercompany');
        var selectLinkSubmenu 		    = $('#company_select_link');
        var financialyearmasterSubmenu 	= $('#btnfinancialyearmaster');
        var createfinancialyearSubmenu 	= $('#btncreatefinancialyear');
        var companyfeaturesSubmenu 	    = $('#btnalter_company_features');

       
        if (alterSubmenu  && selectLinkSubmenu && financialyearmasterSubmenu && createfinancialyearSubmenu && companyfeaturesSubmenu ) {
            $('#btnaltercompany ,#company_select_link,#btnfinancialyearmaster,#btncreatefinancialyear,#btnalter_company_features ').addClass('inactive-link');
           
        }
    }

    function enableSubmenu() {
        
         if (alterSubmenu  && selectLinkSubmenu && financialyearmasterSubmenu && createfinancialyearSubmenu && companyfeaturesSubmenu ) {
            $('#btnaltercompany ,#company_select_link,#btnfinancialyearmaster,#btncreatefinancialyear,#btnalter_company_features ').removeClass('inactive-link');
            
           
        }
    }


function alert_message(type,title,textmsg) {
    //type values :  'success','failure','warning'
    var alertmessage_window = document.getElementById("snackbar");
    alertmessage_window.className = "show","";
    setTimeout(function(){ alertmessage_window.className = alertmessage_window.className.replace("show", ""); }, 3000);

        $('#snackbar').addClass(type);
        $("#snackbar .title").text(title);
        $("#snackbar .content").text(textmsg);
}

function toast_message(type,title,textmsg) {
    //type values :  'success','failure','warning'
    var toast_window = document.getElementById("toast");
    toast_window.className = "show","";
    setTimeout(function(){ toast_window.className = toast_window.className.replace("show", ""); }, 3000);

        $('#toast').addClass(type);
        $("#toast .title").text(title);
        $("#toast .content").text(textmsg);
}


   
 

    </script>