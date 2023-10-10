<!-- Modal for Add and Edit Menu Start Here -->
<div class="modal fade bottom modal-old-vouchers masters_add_edit customer_supplier_master modal_financial" id="financial_year_master"
    role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-full-height modal-bottom">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="display: flex; align-items: center;">
                <div> Financial Year Master</div>
                <i class="fa fa-close" id="financial_year_master_cancel_icon"></i>
            </div>
            <div class="modal-body">
                <div class="row">
                    <table class="table table-striped table-hover">
                        <tr class="table-row-headding ">
                            <th>Year Begin Date</th>
                            <th>End Date</th>
                             <th>Current Year</th>
                        </tr>
                        <?php foreach ($financial_year as $year): ?>
                            <tr>
                                <td><?= $year['financial_year_begin_date'] ?></td>
                                <td><?= $year['financial_year_end_date'] ?></td>
                              
                                <td>
                                    <input type="radio" name="select_year" value="<?= $year['id'] ?>" <?php if ($year['is_current_year'] === 'yes') echo 'checked'; ?>>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                    </table>
                        <div class="col-md-12">
                        <!-- <a class="btn" style="float:right;" href="#"><i class="fas fa-calendar-check"></i><span>S</span>et Year</a> -->
                        <button id="set_year_btn" class="set_year_btn btn" type="button">
                             <i class="fas fa-calendar-check"></i><span>S</span>et Year
                        </button>
                        <button id="cancel_year_btn" class="cancel_year_btn btn" type="button">
                            <span>C</span>ancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal for Add and Edit Menu End Here -->
<script>
    $(window).on("keydown",function(e){
  

if(e.keyCode==67)
{
    if($("#financial_year_master").hasClass("show"))
    {
        $("#financial_year_master").modal("hide");
    }
}
if(e.keyCode==83)
{
    if($("#financial_year_master").hasClass("show"))
    {
        $("#set_year_btn").click();
    }
}
});


    $("#financial_year_master_cancel_icon").on("click",function()
    {
        $("#financial_year_master").modal("hide");
    });
    $("#cancel_year_btn").on("click",function()
    {
        $("#financial_year_master").modal("hide");
    });
    $(document).ready(function() {
        $("#set_year_btn").click(function() {
            const selected_year_id = $("input[name='select_year']:checked").val();
            //  alert(selected_year_id);
            var url = BASE_URL + "index.php/" + accountsController + "/update_current_year";
            var token = "<?php echo $_SESSION['li_token']; ?>";
            
           
            $.ajax({
                url: url,
                type: "POST",
                data: { selected_year_id: selected_year_id, li_token: token },
                dataType: "json",
                success: function(data) {
                   
                    console.log(data);
                    alert(data.message);
                    location.reload();
                },
                error: function(error) {
                   
                    console.error('Error:', error);
                    alert(error);
                }
            });
        });
    });
</script>

