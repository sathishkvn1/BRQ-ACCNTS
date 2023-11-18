


    <div class="modal fade backdrop modal_common modal_centered_lg inventory_modal " 
            id="stock_item_master_gst_rate_details" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal_header">
                        <div class="main_head">
                            <h6>HSN/SAC & GST Rate Details</h6>
                            <i class="fa fa-close" onclick="cancelGstRateDetails();" id="stock_group_creation_cancel_icon"></i>
                        </div>
                    </div>
                    <div class="modal-body" >
                        <div class="row">
                            <!-- Left Side Start Here -->
                            <div class="col-md-12">

                                <!-- Left Content -->
                                <div class="row">

                                    <!-- Single features Section Start Here -->
                                    <div class="col-md-12">
                                   
                                       <!-- Single Row Start Here -->
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Gst applicability<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable" tabindex="13800" name="gst_applicable" id="gst_applicable">
                                                    <?php foreach ($acc_stock_gst_applicability as $acc_stock_gst_applicability): ?>
                                                        <option value="<?php echo $acc_stock_gst_applicability->id; ?>"><?php echo $acc_stock_gst_applicability->gst_applicability; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                          </div>
                                        <!-- Single Row End Here -->
                                     
                                    </div>
                                    <!-- Single features Section End Here -->

                                    <!-- Single  Section Start Here -->
                                    <div class="col-md-12">
                                        <h6 class="h6_underline">HSN/SAC & Related Details</h6>
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>HSN/SAC Details<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable"  name="hsn_sac_details_id" id="hsn_sac_details_id" tabindex="13801">
                                                <?php foreach ($acc_gst_hsn_sac_related_action as $acc_gst_hsn_sac_related_action): ?>
                                                        <option value="<?php echo $acc_gst_hsn_sac_related_action->id; ?>"><?php echo $acc_gst_hsn_sac_related_action->hsn_sac_related_action; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                     
                                        <div class="hide_show_based_on_hsn_sac_field">
                                                 <!-- Single Row Start Here -->
                                            <div class="row" id="source_of_details_section">
                                                <div class="col-md-6">
                                                    <label class="enable_disable">Source of Details<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="enable_disable " tabindex="13802" name="source_of_details" id="source_of_details" >
                                                            <option value="1"  data-value="Not_Available">Not Available</option>
                                                            <option value="2" data-value="Company"></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row" id="hsn_gst_classification_section">
                                                <div class="col-md-6">
                                                    <label>Gst Classification<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="enable"  name="hsn_gst_classification_id" id="hsn_gst_classification_id" tabindex="13803">
                                                        <?php foreach ($acc_gst_classification as $acc_gst_classification): ?>
                                                            <option value="<?php echo $acc_gst_classification->id; ?>"><?php echo $acc_gst_classification->gst_classification_name; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row" id="hsn_sac_section">
                                                <div class="col-md-6">
                                                    <label class="enable_disable">HSN/SAC<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                <input type="text" class="enable"  name="hsn_sac_number"
                                                    id="hsn_sac_number" tabindex="13804">
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="enable_disable">Description<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                <input type="text" class="enable"  name="hsn_sac_description"
                                                    id="hsn_sac_description" tabindex="13805">
                                                </div>

                                        </div>
                                        <!-- Single Row End Here -->
                                    </div>
                                    </div>
                                        <!-- Single  Section Start Here -->
                                    <div class="col-md-12">
                                        <h6 class="h6_underline">GST Rate & Related Details</h6>
                                        <!-- Single Row start Here -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>GST Rate Details<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="enable"name="gst_rate_details_id" id="gst_rate_details_id" tabindex="13806">
                                                        <option value="1" data-value="As_per_Company_Stock Group" selected>As per Company/Stock Group</option>
                                                        <option value="2" data-value="Specify_details_here" >Specify Details Here</option>
                                                        <option value="3" data-value="use_gst_classification " >Use Gst Classification</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <!-- Single Row End Here -->



                                        <div class="element_under_gst_rate_details">
                                                    <!-- Single Row start Here -->
                                                    <div class="row"  id="gst_classification_section">
                                                        <div class="col-md-6">
                                                            <label>GST Classification<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select class="enable"  name="gst_gst_classification_id" id="gst_gst_classification_id" tabindex="13807">
                                                            
                                                                <?php foreach ($acc_rate_related_gst_classification as $acc_rate_related_gst_classification): ?>
                                                                    <option value="<?php echo $acc_rate_related_gst_classification->id; ?>"><?php echo $acc_rate_related_gst_classification->gst_classification_name; ?></option>
                                                                <?php endforeach; ?>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Taxability Type<span class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="enable"  name="taxability_type_id" id="taxability_type_id" tabindex="13808">
                                                                <?php foreach ($acc_gst_taxability_type as $acc_gst_taxability_type): ?>
                                                                    <option value="<?php echo $acc_gst_taxability_type->id; ?>"><?php echo $acc_gst_taxability_type->gst_taxability_type; ?></option>
                                                                <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>IGST Rate<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <input type="text" class="enable ratewithpercentage"  name="igst_rate"
                                                                id="igst_rate" tabindex="13809">
                                                            <span>%</span>
                                                        </div>
                                                    </div>
                                                <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>CGST Rate<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <input type="text" class="enable ratewithpercentage"  name="cgst_rate"
                                                                id="cgst_rate" tabindex="13810">
                                                                <span>%</span>
                                                        </div>
                                                    </div>
                                                <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>SGST/UTGST Rate<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <input type="text" class="enable ratewithpercentage"  name="sgst_utgst_rate"
                                                                id="sgst_utgst_rate" tabindex="13811">
                                                                <span>%</span>
                                                        </div>
                                                    </div>
                                                <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Cess Valuation Type<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <select  class="enable"  name="cess_valuation_type_id" id="cess_valuation_type_id" tabindex="13812">
                                                             <?php foreach ($acc_gst_cess_valuation_type as $acc_gst_cess_valuation_type): ?>
                                                                    <option value="<?php echo $acc_gst_cess_valuation_type->id; ?>"><?php echo $acc_gst_cess_valuation_type->gst_cess_valuation_type; ?></option>
                                                                <?php endforeach; ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Cess Rate<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <input type="text" class="enable ratewithpercentage"  name="cess_rate"
                                                                id="cess_rate" tabindex="13813">
                                                            <span>%</span>
                                                        </div>
                                                    </div>
                                                <!-- Single Row End Here -->
                                                <!-- Single Row Start Here -->
                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Applicable for Reverse Charge<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="applicable_for_reverse_charge"
                                                            name="applicable_for_reverse_charge" tabindex="13814">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Single Row End Here -->
                                                <!-- Single Row Start Here -->
                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Eligible for Input Tax Credit<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="eligible_for_input_tax_credit"
                                                            name="eligible_for_input_tax_credit" tabindex="13815">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Single Row End Here -->
                                            </div>  
                                            
                                            <div class="section_type_of_supply">
                                                <!-- Single Row start Here -->
                                                <div class="row mt-2">
                                                    <div class="col-md-6">
                                                        <label class="h6 bold">Type of Supply<span class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="enable" tabindex="13816" name="type_of_supply" id="type_of_supply">
                                                                <?php foreach ($acc_stock_type_of_supply as $acc_supply): ?>
                                                                    <option value="<?php echo $acc_supply->id; ?>"><?php echo $acc_supply->type_of_supply; ?></option>
                                                                <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Single Row End Here -->  
                                            </div>

                                </div>
                                     <!-- Single  Section Start Here -->

                                </div>
                                <!-- Left Content -->
                            </div>
                            <!-- Left Side End Here -->

                        </div>
                        
                    </div>
                    <div class="border_bottom_for_save_cancel"> </div>
                            <div class="row save_cancel_section ">
                                <div class="col-12">
                                     <button id="save_gst_rate_details" class="new_stock_btn save_inventory_btn btn" type="button" tabindex="13817">
                                        <i class="fas fa-calendar-check"></i><span>S</span>ave
                                    </button>
                                    <button onclick="cancelGstRateDetails();" class="cancel_stock_btn btn" type="button" tabindex="13818">
                                        <span>C</span>ancel
                                    </button>
                                 
                                </div>
                                         
                        </div>
                    
                </div>
            </div>
        </div>

      <!----------- bottom-js ---------------------->
		<?php include("application/views/brq-accounts/bottom-js.php"); ?>
		<!------------- bottom-js end --------------->
        <script>
         
           
           $( document ).ready(function() {

            $('#stock_item_master_gst_rate_details').on('shown.bs.modal', function () {
            $('#gst_applicable').focus();

          
            
                $("#gst_applicable").on("change",function()
                {
        
                   var gst_applicable_val=$("#gst_applicable").val();
                   if(gst_applicable_val=="1")
                   {
                        $("#hsn_sac_details_id,#hsn_gst_classification_id,#gst_rate_details_id,#gst_gst_classification_id,#type_of_supply").prop('disabled', true);
                        
                   
                   }
                   else if(gst_applicable_val=="2")
                   {
                        $("#hsn_sac_details_id,#hsn_gst_classification_id,#gst_rate_details_id,#gst_gst_classification_id,#type_of_supply").prop('disabled', false);
                        
                   }
        
                });

            

            });

         
            var hsn_sac_details_id_val = $("#hsn_sac_details_id").val();
              //1-Asper Company /Stock Group
             // 2-Specify details Here
             //3-use gst classification
             //4-specify in voucher

             if(hsn_sac_details_id_val=="1")//if Asper Company /Stock Group disable all ement under sac
            {
                $(".hide_show_based_on_hsn_sac_field").show();
                $(".hide_show_based_on_hsn_sac_field .row").show();
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select, .hide_show_based_on_hsn_sac_field .col-md-4 input").prop('disabled', true);
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select.enable, .hide_show_based_on_hsn_sac_field .col-md-4 input.enable").removeClass("enable");
                $(".hide_show_based_on_hsn_sac_field .col-md-6 label.enable_disable").css("color", "#888");
                
                $("#hsn_gst_classification_section").hide();

            }
           
            else if(hsn_sac_details_id_val=="2")//if Specify details Here ,hide  hsn_gst_classification_section
            {
                $(".hide_show_based_on_hsn_sac_field").show();
                $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_section").hide();
                if($(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id").removeClass("enable");
                    }
                if(!$(".hide_show_based_on_hsn_sac_field #hide_show_based_on_hsn_sac_field").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hide_show_based_on_hsn_sac_field").removeClass("enable");
                    }
                if(!$(".hide_show_based_on_hsn_sac_field #hsn_sac_description").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").removeClass("enable");
                    }

            }
            else if(hsn_sac_details_id_val=="3")//if use gst classification enable classification ,disable hsn sac and description
            {
                
                $(".hide_show_based_on_hsn_sac_field").show();
                if($(".hide_show_based_on_hsn_sac_field #hsn_sac_description").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").removeClass("enable");
                    }
                if($(".hide_show_based_on_hsn_sac_field #hsn_sac_number").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_number").removeClass("enable").prop('disabled', false);
                    }
                    
                if(!$(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id").hasClass("enable"))
                    {
                       
                        $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id").addClass("enable").prop('disabled', false);
                    }
                    $(".hide_show_based_on_hsn_sac_field .col-md-6 label.enable_disable").css("color", "#888");
                    $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").prop('disabled', true);
                    $(".hide_show_based_on_hsn_sac_field #hsn_sac_number").prop('disabled', true);
                    $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_section").show();
                    

            }
            else if(hsn_sac_details_id_val=="4")// hide all three element under hsn_sac_details_id_val
            {
               
                $(".hide_show_based_on_hsn_sac_field").hide();
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select,.hide_show_based_on_hsn_sac_field .col-md-4 input").removeClass("enable");

            }




            var gst_rate_details_id_val = $("#gst_rate_details_id").val();
            if(gst_rate_details_id_val=="1")//if Asper Company /Stock Group disable all ement under sac
            {
                $(".element_under_gst_rate_details .row").show();
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', true).removeClass("enable");
                $(".element_under_gst_rate_details .col-md-6 label,.element_under_gst_rate_details .col-md-4 span").css('color','#888');


            }
            if(gst_rate_details_id_val=="2")//if Asper Company hide gst_classification_id
            {

                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', false).addClass("enable");
                $(".element_under_gst_rate_details .col-md-6 label,.element_under_gst_rate_details .col-md-4 span").css('color','#000');
                $("#gst_classification_section").hide();
                $("#gst_gst_classification_id").removeClass("enable");
                
            }
            if(gst_rate_details_id_val=="3")//disable all element ,but visible gst_classification_section
            {
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', true).removeClass("enable");
                $(".element_under_gst_rate_details .col-md-6 label,.element_under_gst_rate_details .col-md-4 span").css('color','#000');
                $("#gst_classification_section").show();
                $("#gst_gst_classification_id").addClass("enable").prop('disabled', false);
            }
           });

    </script>
    <script>
        // on change function working in HSN/SAC Details
     
        $("#hsn_sac_details_id").on("change",function(){
            //1-Asper Company /Stock Group
            // 2-Specify details Here
            //3-use gst classification
            //4-specify in voucher
            
            var hsn_sac_details_id_val = $("#hsn_sac_details_id").val();
            if(hsn_sac_details_id_val=="1")//if Asper Company /Stock Group disable all ement under sac
            {
                $(".hide_show_based_on_hsn_sac_field").show();
                $(".hide_show_based_on_hsn_sac_field .row").show();
                $("#hsn_gst_classification_section").hide();
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select, .hide_show_based_on_hsn_sac_field .col-md-4 input")
                .prop('disabled', true);
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select.enable, .hide_show_based_on_hsn_sac_field .col-md-4 input.enable").removeClass("enable");
                $(".hide_show_based_on_hsn_sac_field .col-md-6 label.enable_disable").css("color", "#888");

            }
           
            else if(hsn_sac_details_id_val=="2")//if Specify details Here ,hide  hsn_gst_classification_section
            {
               
                $(".hide_show_based_on_hsn_sac_field").show();
                $("#source_of_details_section").hide();
                $("#hsn_sac_number, #hsn_sac_description").addClass("enable")


                $(".hide_show_based_on_hsn_sac_field #hsn_sac_number").prop('disabled', false);
                $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").prop('disabled', false);

                $(".hide_show_based_on_hsn_sac_field .col-md-6 label.enable_disable").css("color", "#000");
                

                $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_section").hide();
                if($(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id").removeClass("enable");
                    }
                if(!$(".hide_show_based_on_hsn_sac_field #hide_show_based_on_hsn_sac_field").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hide_show_based_on_hsn_sac_field").removeClass("enable");
                    }
                if(!$(".hide_show_based_on_hsn_sac_field #hsn_sac_description").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").removeClass("enable");
                    }

            }
            else if(hsn_sac_details_id_val=="3")//if use gst classification enable classification ,disable hsn sac and description
            {
                $(".hide_show_based_on_hsn_sac_field").show();
                $("#source_of_details_section").hide();
               
                if($(".hide_show_based_on_hsn_sac_field #hsn_sac_description").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").removeClass("enable");
                    }
                if($(".hide_show_based_on_hsn_sac_field #hsn_sac_number").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_number").removeClass("enable").prop('disabled', false);
                    }
                    
                if(!$(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id").addClass("enable").prop('disabled', false);
                    }
                    $(".hide_show_based_on_hsn_sac_field .col-md-6 label.enable_disable").css("color", "#888");
                    $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").prop('disabled', true);
                    $(".hide_show_based_on_hsn_sac_field #hsn_sac_number").prop('disabled', true);
                    $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_section").show();
                    

            }
            else if(hsn_sac_details_id_val=="4")// hide all three element under hsn_sac_details_id_val
            {
                $(".hide_show_based_on_hsn_sac_field").hide();
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select,.hide_show_based_on_hsn_sac_field .col-md-4 input").removeClass("enable");

            }

            


        });
        // gst_rate_details_id on change
        $("#gst_rate_details_id").on("change",function()
        {
           //1-Asper Company /Stock Group
            // 2-Specify details Here
           
           
            var gst_rate_details_id_val = $("#gst_rate_details_id").val();
            if(gst_rate_details_id_val=="1")//if Asper Company /Stock Group disable all ement under sac
            {
                $(".element_under_gst_rate_details .row").show();
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', true).removeClass("enable");
                $(".element_under_gst_rate_details .col-md-6 label,.element_under_gst_rate_details .col-md-4 span").css('color','#888');


            }
            if(gst_rate_details_id_val=="2")//if Asper Company hide gst_classification_id
            {
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', false).addClass("enable");
                $(".element_under_gst_rate_details .col-md-6 label,.element_under_gst_rate_details .col-md-4 span").css('color','#000');
                $("#gst_classification_section").hide();
                $("#gst_gst_classification_id").removeClass("enable");
                
            }
            if(gst_rate_details_id_val=="3")//disable all element ,but visible gst_classification_section
            {
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', true).removeClass("enable");
                $(".element_under_gst_rate_details .col-md-6 label,.element_under_gst_rate_details .col-md-4 span").css('color','#000');
                $("#gst_classification_section").show();
                $("#gst_gst_classification_id").addClass("enable").prop('disabled', false);
            }
           
        });
        $("#hsn_gst_classification_id").on("change", function() {
        
        var hsn_gst_classification_id_option = ($("#hsn_gst_classification_id option:selected").val());
         var token = "<?php echo $_SESSION['li_token']; ?>";
            // Save the changes made in the gst_modal
      
            $.ajax({
                url: BASE_URL + "index.php/AccountsInventory/get_hsn_sac_details",
                type: 'POST',
                dataType: 'json',
                data: {
                 
                    hsn_gst_classification_id: $("#hsn_gst_classification_id").val(),
                    li_token: token
                },
                success: function (response) {
                   
                    console.log("response of hsn/sac details gst is",response);
                   
                                  $('#hsn_sac_number').val(response[0].hsn_sac);
                                  $('#hsn_sac_description').val(response[0].description);


                },
                error: function (xhr, status, error) {
                console.log('Error response:', xhr.responseText);
                console.log('An error occurred:', error);
                alert('An error occurred while get HSN/SAC details. Please check the console for more information.');
            }
            });

    });
        $("#gst_gst_classification_id").on("change", function() {
        
        var gst_classification_id_option = ($("#gst_gst_classification_id option:selected").val());
         var token = "<?php echo $_SESSION['li_token']; ?>";
            // Save the changes made in the gst_modal
      
            $.ajax({
                url: BASE_URL + "index.php/AccountsInventory/get_gst_rate_details",
                type: 'POST',
                dataType: 'json',
                data: {
                 
                    gst_classification_id: $("#gst_gst_classification_id").val(),
                    li_token: token
                },
                success: function (response) {
                   
                    console.log("response of gst rate details gst is",response);
                             $('#igst_rate').val(response.igst_rate);
                             $('#cgst_rate').val(response.cgst_rate);
                             $('#sgst_utgst_rate').val(response.sgst_utgst_rate);
                             $('#cess_rate').val(response.cess_rate);


                },
                error: function (xhr, status, error) {
                console.log('Error response:', xhr.responseText);
                console.log('An error occurred:', error);
                alert('An error occurred while get HSN/SAC details. Please check the console for more information.');
            }
            });

    });

    </script>

<script>
$('.yes_no,.enable').keydown(function (e) {

    if ($("#stock_item_master_gst_rate_details").hasClass("show")) {
        if (e.which === 13) {
        company_feature_field_id = $(this).prop('type');
        currentId = $(this).attr('id');
                if(currentId == 'type_of_supply' ){
                    $('#save_gst_rate_details').focus();
                    event.preventDefault();
                }
        var gst_applicable_value=$("#gst_applicable").val();
          
        if(gst_applicable_value=="1")
        {
            $('#save_gst_rate_details').focus();
                    event.preventDefault();
        }

        if (company_feature_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');

            var next = parseInt(currentTabindex) + 1;

            var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

            if (currentTabindex >= 13800  && currentTabindex < 14000 ) {


                while (next < 14000  ) {

                    if ($('[tabindex^="' + (parseInt(next)) + '"]').hasClass('enable')) {
                        nextInput = $('[tabindex^="' + next + '"]');
                        if (nextInput.length) {
                            nextInput.focus();
                            return false;
                        }
                    }
                    next++;
                }
            }
        }
    }
      
        if (e.which === 67) {

        }
       
    }


});
    </script>

    <script>

var token 				= $("#csrf-token").attr('content'); //CSRF token newly added by sandeep
var BASE_URL = "<?php echo base_url(); ?>";
 
$('#save_gst_rate_details').click(function() {
               
    
    var formData  = new FormData();

    
 
    if ($("#gst_applicable").val() === "2") {
       
    formData.append('gst_applicable', $("#gst_applicable").val()); 

    formData.append('hsn_sac_details_id', $("#hsn_sac_details_id").val()); 
	formData.append('source_of_details', $("#source_of_details").val()); 
	formData.append('hsn_gst_classification_id', $("#hsn_gst_classification_id").val()); 
	formData.append('hsn_sac_number', $("#hsn_sac_number").val()); 
	formData.append('hsn_sac_description', $("#hsn_sac_description").val());
	formData.append('gst_rate_details_id', $("#gst_rate_details_id").val());
	if($("#gst_rate_details_id").val() !== "1")
	{
	   
    	if($("#gst_rate_details_id").val() === "3")
    	    formData.append('gst_gst_classification_id', $("#gst_gst_classification_id").val());
    	
    		if($("#gst_rate_details_id").val() === "2")
    	        formData.append('taxability_type_id', $("#taxability_type_id").val());
    	        
    	formData.append('igst_rate', $("#igst_rate").val());
    	formData.append('cgst_rate', $("#cgst_rate").val());
    	formData.append('sgst_utgst_rate', $("#sgst_utgst_rate").val());
        formData.append('cess_valuation_type_id', $("#cess_valuation_type_id").val());
    	formData.append('cess_rate', $("#cess_rate").val());
    	formData.append('applicable_for_reverse_charge', $("#applicable_for_reverse_charge").val());
        formData.append('eligible_for_input_tax_credit', $("#eligible_for_input_tax_credit").val());
	}
    formData.append('type_of_supply', $("#type_of_supply").val());
    
      
   }

   else if($("#gst_applicable").val() === "1") {
       
    formData.append('gst_applicable', $("#gst_applicable").val()); 
   
    
      
   }


   
	

	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsInventory/save_gst_rate_details/",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {

            $("#rowID").val(response.insertedRowId);
            $('#stock_item_master_gst_rate_details').modal('hide'); 
            $('stock_item_master_additional_details').show();
            $("#set_hsn_sac_gst_details").focus();

            flag_id=($("#flag_id").val());
            cancelGstRateDetails();

            if(flag_id === "0")
            {
                toast_message('success','Saved',response.message)
            }
            else if(flag_id === "1")
            {
            
                    toast_message('success','Updated',response.message)
            }

        },
        error: function(xhr, status, error) {
           
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
});

</script>

<script>
function cancelGstRateDetails()
{

    $('#stock_item_master_gst_rate_details').modal('hide');
        $("#set_hsn_sac_gst_details").focus()
   
}

function handleEscapeKeyGst(event) {
    if (event.key === "Escape") {
        cancelGstRateDetails();
        
    }
}
$('#stock_item_master_gst_rate_details').on('keydown', handleEscapeKeyGst);

</script>

