<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ledger Index</title>
    <?php include("application/views/brq-accounts/top-css.php"); ?>

</head>
<body>

<div class="wrapper">
    	<!-- Navbar  TOP NAV BAR MESSAGES & SEARCH -->
	    <?php include('application/views/brq-accounts/header_nav_bar.php');?>
		<!-- /.navbar  TOP NAVE BAR MESSAGES & SEARCH-->


		<!--- For sidebar Right Navigation for Short Cut Key like Tally -->
		<?php include("application/views/brq-accounts/index-sidebar-navigation-right.php"); ?>
		<!--- End : For sidebar Right Navigation for Short Cut Key like Tally -->

</div>


<!-- Modal for Masters Menu Start Here -->
	<div class="modal fade bottom modal-old-vouchers masters library-li-movement" id="ledger_submenu_selection_modal" role="dialog" data-backdrop="static"
		data-keyboard="false">
		<div class="modal-dialog modal-full-height modal-bottom">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="search_wrapper 	justify-content-center">
					<h6>Master Creation</h6>
					<input type="text" class="mb-2" id="searchInput" >
				</div>

				<div class="modal-header modal-header-with-close-icon">
					<div class="modal-title">List Of Ledger</div>
					<i class="fa fa-close" id="list_of_ledger_cancel_icon" onclick="cancelLegderIndex();"></i>
				</div>
				<div class="modal-body">
                <div class="row">
                    <div class="col-md-12 key-control-menu">
                        <ul class="ul_movement" data-target="ledger_submenu_selection_modal">
                            <?php foreach ($acc_accounts_group as $row): ?>
                                <li class="element li_inventory_masters" value="<?php echo $row->accounts_group_name; ?>"><a href='<?php echo base_url("AccountsLedger/$row->link?group_id=$row->id&group_name=$row->accounts_group_name") ?>'><?php echo $row->accounts_group_name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
			</div>
		</div>
	</div>
	<!-- Modal for Masters Menu End Here -->
        
  
    <!----------- bottom-js ---------------------->
	<?php include("application/views/brq-accounts/bottom-js.php"); ?>
	<!------------- bottom-js end --------------->   
   


    
</body>
</html>
<script>

$(document).ready(function() {

    $('#ledger_submenu_selection_modal').modal('show');

    $('#list_of_ledger_cancel_icon').click(function () {
        $('#ledger_submenu_selection_modal').modal('hide');
    });
});
   


</script>
<script>
function cancelLegderIndex()
{

    window.history.back();

}

function handleEscapeLedgerCreation(event) {
    if (event.key === "Escape") {
        cancelLegderIndex();
		window.history.back();
	
        
    }
}
$('#ledger_submenu_selection_modal').on('keydown', handleEscapeLedgerCreation);

</script>
<script>
document.getElementById("searchInput").addEventListener("input", function() {
    var searchValue = this.value.toLowerCase();
    var listItems = document.querySelectorAll(".ul_movement li");

    // Remove element-hover class from all li elements
    listItems.forEach(function(item) {
        item.classList.remove("element-hover");
        var linkText = item.textContent.toLowerCase();
        if (linkText.includes(searchValue)) {
            item.style.display = "list-item";
        } else {
            item.style.display = "none";
        }
    });

    // Add element-hover class to the top most visible li element
    var visibleItems = document.querySelectorAll(".ul_movement li[style*='list-item']");
    if (visibleItems.length > 0) {
        var firstVisibleItem = visibleItems[0];
        firstVisibleItem.classList.add("element-hover");
    }
    if (!visibleItems.length === 0) {
      
		$(this).find('li:first').addClass('element-hover');
    }
	
});
</script>
<script>

$(document).ready(function() {
            
         
            $('#ledger_submenu_selection_modal').on('shown.bs.modal', function () {
                $('#searchInput').focus();
                });

           });

	document.addEventListener("DOMContentLoaded", function () {
    var lastClickedItem = localStorage.getItem("lastClickedItem");

    if (lastClickedItem) {
        var activeItem = document.querySelector(".ul_movement .element-hover");
        if (activeItem) {
            activeItem.classList.remove("element-hover");
        }

        var targetItem = document.querySelector(".ul_movement li[value='" + lastClickedItem + "']");
        if (targetItem) {
            targetItem.classList.add("element-hover");

            var allItems = document.querySelectorAll(".ul_movement li:not([value='" + lastClickedItem + "'])");
            allItems.forEach(function (item) {
                item.classList.remove("element-hover");
            });
        }
    }

    var listItems = document.querySelectorAll(".ul_movement li");
    listItems.forEach(function (item) {
        item.addEventListener("click", function () {
            localStorage.setItem("lastClickedItem", item.getAttribute("value"));

            var otherItems = document.querySelectorAll(".ul_movement li:not([value='" + item.getAttribute("value") + "'])");
            otherItems.forEach(function (otherItem) {
                otherItem.classList.remove("element-hover");
            });
        });
    });
});


</script>

