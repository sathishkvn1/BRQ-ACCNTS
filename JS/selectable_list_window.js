$(window).on("keyup", function (e) 
	{
		var modalCommonClass = $(".library-li-movement.show");//library-li-movement is library class it it include in modal class,if modal open

		if (modalCommonClass.length > 0) 
			{
				var opened_modal_id = modalCommonClass.first().attr("id");//get id of opened modal

				if ($("#"+opened_modal_id).hasClass("show")) //if modal open
				{
					var scrollli = $('#' + opened_modal_id + ' .ul_movement li');//each li of open modal
					var scrollul = $('#' + opened_modal_id + ' .ul_movement');//ul of open modal
					var scrollliSelectedClass = $('#' + opened_modal_id + ' .ul_movement li.element-hover');//focused li item in modal

					var scrollliSelected;
					if (e.which === 40)//key down 
					{
						
						if (scrollliSelectedClass)
						{
							scrollliSelectedClass.removeClass('element-hover'); //remove focused class from element
							
							var next = scrollliSelectedClass.nextAll('li:visible').first(); //get next visible li
						
							
							if (next.length > 0) //if next item is existing
							{
								scrollliSelectedClass = next.addClass('element-hover'); //add focus class into focused item
								var liHeight = next.outerHeight(); //scroll bar scrolling based on down key press
                            	scrollul.scrollTop($('#' + opened_modal_id + ' .ul_movement').scrollTop() + liHeight);
							}
							else //if next item is not existing 
							{
								 if ($("#" + opened_modal_id + ' .list_of_dynamic_li').length > 0) {// if the list company exist insider of list_of_dynamic_li div 
								 	var next_first = $("#" + opened_modal_id + ' .list_of_dynamic_li li:first:visible');
								    next_first.addClass('element-hover'); // add focus class into next visible class
									var elementWithHoverClass = $("#" + opened_modal_id + ' .list_of_dynamic_li .element-hover');//scroll 
									var liHeight = next.outerHeight(); 
                            		scrollul.scrollTop($('#' + opened_modal_id + ' .ul_movement').scrollTop() + liHeight);
								 }
								 else// if there is no next visible class
								 {
									scrollliSelectedClass = $('#' + opened_modal_id + ' .ul_movement li').filter(':visible').first().addClass('element-hover');//get focus on the first visible li of the modal
									scrollul.scrollTop(0); // will goto scroll bar top 
								}
							}
						}
					}
					if (e.which === 38)//key up
					{
						if (scrollliSelectedClass) 
						{
							scrollliSelectedClass.removeClass('element-hover');//remove focus li
							var prev = scrollliSelectedClass.prevAll('li:visible').first();
							if (prev.length > 0) {// if previous visible class existing
								scrollliSelectedClass = prev.addClass('element-hover');
								var liHeight = prev.outerHeight();//scrolling 
								scrollul.scrollTop($('#' + opened_modal_id + ' .ul_movement').scrollTop() - liHeight);
								} 
								else // there is no prev li
								{
									scrollliSelectedClass = scrollli.filter(':visible').last().addClass('element-hover'); //focus last visible li of ul
									scrollul.scrollTop(0); //                                     
									var totalHeight = scrollul[0].scrollHeight;
									scrollul.scrollTop(totalHeight);
								}
						}
					}
					if (e.which === 13)// if press enter key
					 {
						var id_of_selected_element = $("#" + opened_modal_id + " .element-hover").attr("id");// get the id of focus element
					
						if ($("#" + id_of_selected_element).hasClass("double_touch_hide_show_li"))// if focused item is headding
						 {
							var data_value_of_id = $("#" + id_of_selected_element).attr("data-value");
							// alert(data_value_of_id);
							 $("li." + data_value_of_id).toggle();// 
						} 
						else 
						{
							
							var link = document.querySelector("#" + opened_modal_id + " .element-hover a");
							if (link)
							 {
									
									var href = link.getAttribute("href");
									var dataToggle = link.getAttribute("data-toggle");
  									var dataTarget = link.getAttribute("data-target");
									
									 
  									if (dataToggle && dataTarget) {
									$(dataTarget).modal("show");
									}
									else if (href && href !== "#" && href.trim() !== "") {
										link.click();
									}
								}
						}
					}

				}
			}
	});

	$(".library-li-movement .ul_movement li").on("click", function () {
		var opened_modal = $(this).closest(".library-li-movement.show");
		if (opened_modal.length > 0) {
			var opened_modal_id = opened_modal.attr("id");
			
			
		} 
	});



	$(".library-li-movement .ul_movement li").on("click", function () {
    var opened_modal = $(this).closest(".library-li-movement.show");
    
    if (opened_modal.length > 0) {
        var opened_modal_id = opened_modal.attr("id");
        opened_modal.find(".ul_movement li").removeClass("element-hover");
        $(this).addClass("element-hover");
        // alert(opened_modal_id);
    }
	if($(this).hasClass("double_touch_hide_show_li"))
	{
		var data_value_of_id = $(this).attr("data-value");
		$("li." + data_value_of_id).toggle(); 
	}
});
	