<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.modal_left_large .modal-dialog .modal-content .modal-body > .row {
    height: 100%;
    margin: 0;
    min-height: 566px !important;
    width :100% !important;
}
.card-current-date .card-body {
    padding: 0;
    min-height: 500px !important;
}
.company_select .card-current-date .card-body ul li.selected {
    background: var(--dark-yellow);
    width: 350px!important;
}
.bg-success {
    background-color: yellow; 
   
}
</style>

</head>
<body>

<!-- ===============================================================
                Company Creation Modal Start Here
================================================================= -->


    <?php include 'company-creation.php';?>

    <?php include 'company_financial_year_master.php';?>
<!-- =============================================================== 
                Company Creation Modal End Here
================================================================= -->



<!-- ================================================================= 
                Modal for Company Features Start
==================================================================== -->
<?php include 'company-features.php';?>



    <!------------------------------------------------------------------
                    Modal for GST Details Start 
    ------------------------------------------------------------------>
    
    <?php include 'company-gst-details.php';?>

    <?php include 'company_multiple_gst.php';?>

    <?php include 'company_gst_an_other_details_modal.php';?>
    <?php include 'company_create_new_financial_year_modal.php';?>
    

    
        <!-- Modal for LUT / Bond Details Start (this modal comes under company-gst-details.php page -->
      
        <!-- Modal for LUT / Bond Details End Here-->

    <!--------------------------------------------------------------------
                    Modal for GST Details End Here
    -------------------------------------------------------------------->

    <!--------------------------------------------------------------------
                     Modal for TDS Details Start
    -------------------------------------------------------------------->
    <?php include 'company-tds-details.php';?>

    <!--------------------------------------------------------------------
                 Modal for TDS Details End Here
    -------------------------------------------------------------------->

    <!--------------------------------------------------------------------
                     Modal for TCS Details Start
    -------------------------------------------------------------------->
    <?php include 'company-tcs-details.php';?>
    <!--------------------------------------------------------------------
                 Modal for TCS Details End Here
    -------------------------------------------------------------------->

    <!-- For Both TCS and TDS Modals -->
    <!-- Set / Alter Details of Person ModalM Start Here -->
    <div class="modal fade backdrop modal_common modal_centered_sm set_alter_person_details_modal my-modal " id="set_alter_person_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Person Responsible Details</h6>
                    </div>
                </div>
                <div class="modal-body">

                    <!-- Single content start here -->
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Name<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text"  id="person_name"  name="person_name"class="autofocus enable" tabindex="10076">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Son / Daughter of<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_son_daughter_of" name="person_son_daughter_of" class="enable" tabindex="10077" >
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Designation<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="enable"  tabindex="10078" id="person_designation" name="person_designation">
                                </div>
                            </div>
                         
                          
                            <div class="row">
                                <div class="col-md-8">
                                    <label>PAN<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_pan" name="person_pan" class="enable" tabindex="10079">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Flat No<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_flat_no" name="person_flat_no" class="enable"  tabindex="10080">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Name of Premises / Building<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_premises_building" name="person_premises_building" class="enable" tabindex="10081">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Road / Street / Lane<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_road" name="person_road" class="enable"  tabindex="10082">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Area / Location<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_area" name="person_area"  tabindex="10083">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Town / City / District<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_city" class="enable" name="person_city"  tabindex="10084">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>State<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_state" state="person_state" class="input_data_value_up_down without_backdrop_modal enable" data-target="#state_list" tabindex="10085">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Pincode<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_pincode" name="person_pincode" class="enable" tabindex="10086">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Mobile No<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_mobile" name="person_mobile" class="enable" tabindex="10087">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>STD Code<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="enable" id="person_std_code" name="person_std_code" tabindex="10088">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Telephone<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_telephone" name="person_telephone" class="enable" tabindex="10089">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>E-mail ID<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="person_email" name="person_email" class="modal_last_input_field enable" data-target="#set_alter_person_modal" tabindex="10090">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                        </div>
                    </div>
                    <!-- Single content start here -->

                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <em>( Note : All the above details will be used in challan, Forms & Returns )</em>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Set / Alter Details of Person ModalM End Here -->


    <!--------------------------------------------------------------------
                     Modal for VAT Details Start
    -------------------------------------------------------------------->

    <?php include 'company-vat-details.php';?>

    <!--------------------------------------------------------------------
                     Modal for VAT Details End
    -------------------------------------------------------------------->
   <!--------------------------------------------------------------------
                     Modal for Excise Details Start
    -------------------------------------------------------------------->
    <!--<?php //include 'company-excise-details.php';?>-->

    <!--------------------------------------------------------------------
                         Modal for Excise Details End
    -------------------------------------------------------------------->

        <!--------------------------------------------------------------------
                     Modal for Enable Service tax Details Start
    -------------------------------------------------------------------->
    <?php //include 'company-service-tax-details.php';?>

    <!--------------------------------------------------------------------
                       Modal for Enable Service tax Details Start
    -------------------------------------------------------------------->


    <!--------------------------------------------------------------------
                     Modal for Statutory Details Start
    -------------------------------------------------------------------->

    <div class="modal fade backdrop modal_common modal_centered_lg payroll_statutory_modal_details my-modal" id="payroll_statutory_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-md" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Payroll Statutory Details</h6>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row">

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12">
                                    <h6>Provident Fund</h6>

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Company Code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="autofocus" tabindex="10096">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Company Account Group Code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10097">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Company Security Code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10098">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                </div>
                                <!-- Single features Section End Here -->

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12">
                                    <h6>Employee State Insurance</h6>

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Company Code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10099">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>ESI Branch Office<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10100">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Standard Working Days Per Month<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="w-max-100" tabindex="10101">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                </div>
                                <!-- Single features Section End Here -->

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12">
                                    <h6>National Pension Scheme</h6>

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Corporate Registration Number<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10102">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Corporate Branch Office Number<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10103">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                </div>
                                <!-- Single features Section End Here -->

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12">
                                    <h6>Income Tax</h6>

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Tax Deduction and Colection Account Number (TAN)<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10104">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>TAN Registration Number<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="1005">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Income Tax Circle or Ward<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10101">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Deductor Type<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <select tabindex="10102">
                                                <option value="Government">Government</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Deductor Branch/Division<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10103">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Name of Person Responsible<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10104">
                                        </div>

                                        <div class="col-md-12 sub_features">

                                            <div class="row">
                                                <div class="col-md-7">
                                                    <label>Son / Daughter of <span class="colon">:</span></label> 
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" tabindex="10105">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>Designation<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" tabindex="10106">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-7">
                                            <label>PAN<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="modal_last_input_field" data-target="#payroll_statutory_modal" tabindex="10107">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                </div>
                                <!-- Single features Section End Here -->

                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <em>( Note : All the above details will be used in Challan, Forms & Returns )</em>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------------------
                     Modal for Statutory Details End
    -------------------------------------------------------------------->

    <!--------------------------------------------------------------------
                     Modal for Statutory Details Start
    -------------------------------------------------------------------->

    <div class="modal fade backdrop modal_common multiple_addresses_modal my-modal" id="multiple_addresses_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-sm" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Company : <span>Company Name</span> </h6>
                    </div>
                    <div class="sub_head">
                        <h6>Address Types</h6>
                    </div>
                </div>
                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-12 primary_address">
                            <div><span>1.</span> <input type="text" value="Primary" class="with_backdrop_modal_blur autofocus" data-target="#multiple_address_details_modal"  tabindex="10108" readonly></div>
                        </div>
                        <div class="col-md-12">

                            <table>
                                <tbody>
                                    <tr>
                                        <td>2.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal"  tabindex="10109"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10110"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10111"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10112"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10113"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10114"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10115">></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10116">></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10117">></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10118">></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10119">></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10120">></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10121"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10122"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10123"></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10124"></td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10125"></td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10126"></td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td><input type="text" class="with_backdrop_modal_blur" data-target="#multiple_address_details_modal" tabindex="10127"></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

        <!-- Modal for Multiple Address Details Start Here -->
        <div class="modal fade backdrop modal_common multiple_address_details_modal my-modal" id="multiple_address_details_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal_header">
                        <div class="main_head">
                            <h6>Company : <span>Company Name</span> </h6>
                        </div>
                    </div>
                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-12">

                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Mailing Name<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" class="autofocus" tabindex="10128">
                                    </div>
                                </div>
                                <!-- Single Row End Here -->

                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Address<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-7">
                                        <textarea rows="4" tabindex="10129"></textarea>
                                    </div>
                                </div>
                                <!-- Single Row End Here -->

                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Pincode<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" tabindex="10130">
                                    </div>
                                </div>
                                <!-- Single Row End Here -->

                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Phone No<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" tabindex="10131">
                                    </div>
                                </div>
                                <!-- Single Row End Here -->

                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Mobile No<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" tabindex="10132">
                                    </div>
                                </div>
                                <!-- Single Row End Here -->

                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>E-Mail <span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" tabindex="10133">
                                    </div>
                                </div>
                                <!-- Single Row End Here -->

                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Website<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" class="modal_last_input_field" data-target="#multiple_address_details_modal" tabindex="10134">
                                    </div>
                                </div>
                                <!-- Single Row End Here -->

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Multiple Address Details End Here -->

    <!--------------------------------------------------------------------
                     Modal for Statutory Details End
    -------------------------------------------------------------------->



<!-- =================================================================
                Modal for Company Features End Here
=================================================================== -->

<!-- =================================================================
                Modal for select under company End Here
=================================================================== -->

<?php include 'company-select.php';?>


</body>
</html>


<script>

$(document).ready(function() {


   // Click event handler for company selection


});  // end of document.ready


</script>





