<!-- Modal for Add and Edit Menu Start Here -->
<div class="modal fade bottom modal-old-vouchers masters_add_edit customer_supplier_master comapany_create_financial_year_modal"
    id="create_new_financial_year_modal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-full-height modal-bottom">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="display: flex;align-items: center;">
                <div>Create New Financial Year Master</div>
                <i class="fa fa-close" id="new_financial_year_cancel_icon"></i>
            </div>
            <!-- <div class="modal-header-two">
                <div></div>
            </div> -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="last_financial_year_box">
                            <div class="year_headding">Last Financial Year</div>
                            <div class="year_body">
                                <div class="row row-odd">
                                    <div class="col-md-7">
                                        <label>Financial Year Begin Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                        <!-- 01/04/2023 -->
                                        <input type="text" id="financial_year_begin_date"
                                            name="financial_year_begin_date" readonly>
                                      
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-7">
                                        <label>Book Begin Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                       01/04/2023 
                                    <input type="text" id="book_begin_date" name="book_begin_date">
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Financial Year End Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                        <!-- 31/03/2023 -->
                                        <input type="text" id="financial_year_end_date" name="financial_year_end_date"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="new_financial_year_box">
                            <div class="year_headding">New Financial Year</div>
                            <div class="year_body">
                                <div class="row row-odd">
                                    <div class="col-md-7">
                                        <label>Financial Year Begin Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="new_financial_year_begin_date"
                                            name="new_financial_year_begin_date" readonly>


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7">
                                        <label>Financial Year End Date<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="new_financial_year_end_date"
                                            name="new_financial_year_end_date" readonly>
                                        <input type="hidden" id="new_financial_year"  name="new_financial_year"></input> 
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <!-- <div class="col-md-12">
                                <a class="btn" style="float:right;" href="#"><i
                                        class="fas fa-calendar-check"></i><span>S</span>et Year</a>
                            </div> -->
                            <div class="create_btn">
                                <button id="create_financial_year_btn" class="create_financial_year_btn"><i
                                        class="fas fa-plus-circle"></i>Crea<span>T</span>e</button>
                                <button id="cancel_financial_year_btn"
                                    class="cancel_financial_year_btn"><span>C</span>ancel</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script>
    $("#cancel_financial_year_btn").on("click", function () {
        $("#create_new_financial_year_modal").modal("hide");
    });
    $("#new_financial_year_cancel_icon").on("click", function () {
        $("#create_new_financial_year_modal").modal("hide");
    });
    function formatDate(dateString) {
        var parts = dateString.split('-');
        return parts[2] + '-' + parts[1] + '-' + parts[0]; // Convert to dd-mm-yyyy format
    }

    function fetchDataAndDisplayInModal() {
        var token = "<?php echo $_SESSION['li_token']; ?>";
        $.ajax({
            type: 'POST',
            url: BASE_URL + "index.php/" + accountsController + "/create_new_financial_year_for_modal",
            dataType: 'json',
            data: {
                li_token: token
            },

            success: function (response) {
                console.log("response fr financailyear", response);
               
                $('input[name="financial_year_begin_date"]').val(response.last_financial_year.financial_year_begin_date);
                $('input[name="financial_year_end_date"]').val(response.last_financial_year.financial_year_end_date);

                $('input[name="new_financial_year_begin_date"]').val(response.next_financial_year_begin_date);
                $('input[name="new_financial_year_end_date"]').val(response.financial_year_end_date);
                $('input[name="new_financial_year"]').val(response.financial_year);
            },
            error: function (xhr, status, error) {
                console.log('Error:', xhr, status, error);
                alert('Error occurred while fetching data.');
            }
        });
    }

    $("#create_financial_year_btn").click(function () {
        // Get the values of the input fields
        var new_financial_year_begin_date   = $("#new_financial_year_begin_date").val();
        var new_financial_year_end_date     = $("#new_financial_year_end_date").val();
        var new_financial_year              = $("#new_financial_year").val();

        var token = "<?php echo $_SESSION['li_token']; ?>";
        var formData = {
            new_financial_year_begin_date: new_financial_year_begin_date,
            // new_book_begin_date: new_book_begin_date,
            new_financial_year_end_date: new_financial_year_end_date,
            new_financial_year: new_financial_year,
            li_token: token
        };

        // AJAX request to the server
        var url = BASE_URL + "index.php/" + accountsController + "/save_new_financial_year";
        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: "json",
            success: function (response) {
                console.log(response);
                alert("Success: " + response.message);
                location.reload();
            },
            error: function (xhr, status, error) {

                console.log(xhr);
                console.log(status);
                console.log(error);
                alert("Error: " + xhr.responseText);
            }
        });
    });
    $(window).on("keydown", function (e) {

        if (e.keyCode == 67) {
            if ($("#create_new_financial_year_modal").hasClass("show")) {
                $("#create_new_financial_year_modal").modal("hide");
            }
        }
        if (e.keyCode == 84) {
            if ($("#create_new_financial_year_modal").hasClass("show")) {
                $("#create_financial_year_btn").click();
            }
        }
    });
  
</script>