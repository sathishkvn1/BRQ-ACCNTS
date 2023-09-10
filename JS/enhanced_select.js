$('.brq_selection input[type="text"]').on("focus",function(e){//if focus select input 
    var parent_id = $(this).parent('div').attr("id");//parent div id
    var target_ul=$("#"+parent_id+" ul");//select field ul
    var target_ul_id=$("#"+parent_id+" ul").attr("id");//select field ul id
    $("#"+parent_id+" ul").css("display","block");//display all li in a ul when input select
    var target_hidden_field= $("#"+parent_id+" input[type='hidden']");//select hidden field
    var target_hidden_field_value= $("#"+parent_id+" input[type='hidden']").attr("value");//hidden field value
    var target_hidden_field_id = target_hidden_field.attr("id");//hidden field id
    var target_first_li= $("#"+parent_id+" ul li:first-child");//first li in a ul
    var target_li = $("#"+parent_id+" li");//all li in a ul
    var target_input = $("#"+parent_id+" input[type='text']");//input field
    var target_input_id =target_input.attr("id");//input field
    var target_input_val =target_input.val();//input value
    target_ul.css("max-height", "200px");
    target_ul.css("max-width", "160px");
    target_ul.css("overflow-y", "auto");
    var highestValue = -Infinity;
    $("#" + target_ul_id + " li").each(function()
     {
      var li_dataValue = $(this).data("value");
      if (!isNaN(li_dataValue))
         {
        highestValue = Math.max(highestValue, parseFloat(li_dataValue));
        }
    });//finf highest data-value  from avcailable li
    
    console.log("Highest data-value:", highestValue);
 
    if(target_hidden_field_value == undefined)//if there is no value inside hidden field take not applicable case
    {
         $("#"+target_ul_id+" li").removeClass("element-hover");//remove focus fromm all li
         target_first_li.click();//automatically click the not applicable li
          target_first_li.addClass("element-hover");//add focus class into not applicable li
          target_input.click();//for click again the input
          var top_focused_value_select_id = target_first_li.text();//get text from focused li text\
          $("#" + target_input_id).val(top_focused_value_select_id);//display value into input focused li
             target_input.select();// Select all text within the input field
    }
    else//if there is value inside hidden input field
    {
      
         $("#"+target_ul_id+" li").removeClass("element-hover");//remove all li
         target_li.css("display","block");//make all li is visible
         $('#' + parent_id + ' li[data-value="' + target_hidden_field_value.toString() + '"]').addClass("element-hover");//focus class add into which li data value stored in hidden field
        var focused_hidden_field_id= $('#' + parent_id + ' li[data-value="' + target_hidden_field_value.toString() + '"]');
        console.log(focused_hidden_field_id);
         var top_focused_value_select_id = focused_hidden_field_id.text();//get text from focused li text
        $("#" + target_input_id).val(top_focused_value_select_id);//display value into input focused li
        target_input.select();// Select all text within the input field
    }
    key_press(parent_id);//call the key press value and pass parent id as parameter 
    });
    
    function key_press(parent_id)
    {
        
        var target_ul=$("#"+parent_id+" ul");
        var target_ul_id=$("#"+parent_id+" ul").attr("id");
        var target_hidden_field= $("#"+parent_id+" input[type='hidden']");
        var target_hidden_field_value= $("#"+parent_id+" input[type='hidden']").attr("value");
        var target_hidden_field_id = target_hidden_field.attr("id");
        var target_first_li= $("#"+parent_id+" ul li:first-child");
        var target_input =$("#"+parent_id+" input[type='text']");//input
        var target_input_id =$("#"+parent_id+" input[type='text']").attr("id");//input
        var target_input_val =target_input.attr("value");//input value
        var target_modal_id=$("#"+parent_id).attr("data-value"); 
         var highestValue = -Infinity;
       $("#" + target_ul_id + " li").each(function() {
       var li_dataValue = $(this).data("value");
          if (!isNaN(li_dataValue)) {
           highestValue = Math.max(highestValue, parseFloat(li_dataValue));
           }
        });
    
        $(window).off("keyup");//unbind the key up fuction ,it avoid multiple key press fn.
        $(window).on("keyup", function (e) {
        if ($("#"+target_modal_id).hasClass("show"))
        {
          if ($(target_input).is(":focus"))
            {
                var select_li = $('#'+target_ul_id+' li');
                var select_liSelectedClass = $('#'+target_ul_id+' li.element-hover');
                var select_liSelected;
                if (e.which === 40)//if click key down botton
                  {
                    if($('#'+target_ul_id).css('display') == 'block') 
                        {
                            if (select_liSelectedClass) 
                                {
                                        select_liSelectedClass.removeClass('element-hover');// // Remove focus from the current li
                                        var next = select_liSelectedClass.nextAll('li:visible').first();// Get the next visible li
                                    if (next.length > 0)// If there is a next visible li
                                        {
                                            var nextset_val = next.attr("data-value");// Get the data-value of the next li
                                            select_liSelectedClass = next.addClass('element-hover');// Add focus class to the next li
                                            enter_key_focused_value_select_id = select_liSelectedClass.text();//// get text from focused li
                                            console.log("enter_key_focused_value_select_id:", enter_key_focused_value_select_id);
                                            console.log("target_input_id:", target_input_id);
                                            console.log("Selected input element:", $("#" + target_input_id));
                                            // Scroll behavior
                                            var liHeight = next.outerHeight(); // Height of the next list item
                                            $('#' + target_ul_id).scrollTop($('#' + target_ul_id).scrollTop() + liHeight);
                                            $("#" + target_input_id).val(enter_key_focused_value_select_id);//display value of focused li into input field
                                        }//end if next li exist
                                    else//there is no next visible li
                                        {
                                            var nextVisible = select_li.filter(':visible').first();//get first visible li
                                            if (nextVisible.length > 0) //check first visible li is exist
                                                {
                                                    select_liSelectedClass.removeClass('element-hover'); // Remove the focus from the current element
                                                    nextVisible.addClass('element-hover'); //focus first vible li
                                                    enter_key_focused_value_select_id = nextVisible.text();//get text fromfocused li
                                                    console.log("enter_key_focused_value_select_id:", enter_key_focused_value_select_id);
                                                    console.log("target_input_id:", target_input_id);
                                                    console.log("Selected input element:", $("#" + target_input_id));
                                                    target_ul.scrollTop(0); // Set scroll position to the top
                                                    $("#" + target_input_id).val(enter_key_focused_value_select_id);//display value of focused li into input field
                                                }
                                        }
                                }
                        }
                 }//end key down
                       else if (e.which === 38) //key up
                       {
                         if($('#'+target_ul_id).css('display') == 'block')
                              {
                                 if (select_liSelectedClass)
                                   {
                                
                                       select_liSelectedClass.removeClass('element-hover');
                                       prev = select_liSelectedClass.prevAll('li:visible').first(); // Get the previous visible li
                                       var prevset_val = prev.attr("data-value");//get the data value of  previous visible li
                                    
                                       console.log(prev.length);
                                       console.log(highestValue);
                                       if (prev.length > 0) //if there is visible previous li
                                          {
                                           
                                               var prev_val = prev.attr("data-value");// Get the data-value of the next li
                                               select_liSelectedClass = prev.addClass('element-hover');// Add focus class to the next li
                                               enter_key_focused_value_select_id = select_liSelectedClass.text();//// get text from focused li
                                               console.log("enter_key_focused_value_select_id:", enter_key_focused_value_select_id);
                                              
                
                                               console.log("target_input_id:", target_input_id);
                                               console.log("Selected input element:", $("#" + target_input_id));
                                               
                                               $("#" + target_input_id).val(enter_key_focused_value_select_id);////display value of focused li into input field
                                               
                                               //for scroll bar movement
                                               var liHeight = prev.outerHeight();
                                               $('#' + target_ul_id).scrollTop($('#' + target_ul_id).scrollTop() - liHeight);
                                           } //if close when next li exist
                                           else //if there is  no visible previous li
                                           {
                                               var lastVisibleLi = select_li.filter(':visible').last(); //get last visible li
                                               if (lastVisibleLi.length > 0) 
                                               {
                                                   select_li.removeClass('element-hover');
                                                   lastVisibleLi.addClass('element-hover');//add focus to last vible li
                                                   enter_key_focused_value_select_id = lastVisibleLi.text();//get text from focused li
                                                   console.log("enter_key_focused_value_select_id:", enter_key_focused_value_select_id);
                                                    console.log("target_input_id:", target_input_id);
                                                    console.log("Selected input element:", $("#" + target_input_id));

                                                       // Scroll to the top when no next visible li is found
                                                      target_ul.scrollTop(0); // Set scroll position to the top                                        // Scroll to the bottom when no next visible li is found
                                                      var totalHeight = target_ul[0].scrollHeight;
                                                      target_ul.scrollTop(totalHeight);
                                                    $("#" + target_input_id).val(enter_key_focused_value_select_id);////display value of focused li into input field
                                                   // $("#" + target_input_id).attr("value", enter_key_focused_value_select_id);//add the value into text field
                                               }
                                           }//else close
                                   } 
                               }
                       }
                }
                
                    
    
           }
           
        });//key up function end
        function pressHandler(e)
             {
                 var parent_id = $(this).parent('div').attr("id");
                 var target_ul_id=$("#"+parent_id+" ul").attr("id");
                 var target_hidden_field= $("#"+parent_id+" input[type='hidden']");
                 var target_hidden_field_value= $("#"+parent_id+" input[type='hidden']").attr("value");
                 var target_hidden_field_id = target_hidden_field.attr("id");
                 var target_ul = $("#"+parent_id+" ul");
                 var target_li = $("#"+parent_id+" li");
                 var target_first_li= $("#"+parent_id+" ul li:first-child");
                 var target_input =$("#"+parent_id+" input[type='text']");//input
                 var target_input_id =$("#"+parent_id+" input[type='text']").attr("id");//input
                 var target_input_val =target_input.attr("value");//input value
                 var target_modal_id=$("#"+parent_id).attr("data-value");
                 if( e.which === 40 ||  e.which === 38 || e.which === 13 || e.shiftKey && e.keyCode == 9)//key down ,key up,enter key ,shift+tab
                    {
                        console.log("function activated");
                    }
                else
                    {
                        value_select_input=this.value;//value of input field
                        if(value_select_input !='')//if value not null
                            {
                                if($('#' + parent_id + ' li[data-value="' + target_hidden_field_value.toString() + '"]').css('display') == 'none')//if stored value is not visible
                                    {
                                        target_li.removeClass("element-hover");//remove focus from li
                                         var visibleLi = $('#' + parent_id + ' li:visible').first();//get first visible li
                                        if (visibleLi.length > 0)//if visible li is exist
                                         {
                                            visibleLi.addClass('element-hover');//add focus into visible li
                                         } 
                                        else //if there is no visible li
                                         {
                                            target_li.removeClass("element-hover");//remove focus from li
                                            target_first_li.click();//click first li
                                            target_first_li.addClass("element-hover");//add focus into first li
                                            target_input.click();
                                            target_li.css("display","block");//make visible all li visile`
                                        }
                                    }
                             }
                             else
                             {
                                if($('#'+target_ul_id).css('display') == 'block') //if uinput field blank
                                {
                                    target_input.click();//just click input field for display li items
                                }
                             }
                            
                      }
                }
                $("#"+target_input_id).on("keyup", pressHandler);
               
                
    }//end of the fuction

//if enter press enter key from input field click focused elemnt and hide ul
    $(".brq_selection").on("keydown", function(event) {
        if (event.which === 13) { // Check if the key pressed is the Enter key (key code 13 ==enter key)
            var current_id = $(this).attr("id"); // Get the ID of the current element with the class "brq_selection"
            var current_ul_id = $("#" + current_id + " ul").attr("id");// Get the ID of the ul element within the current "brq_selection"
            if($('#'+current_ul_id).css('display') == 'block') 
            {
                // Simulate a click event on an element with the class "element-hover" within the ul
                $("#" + current_ul_id + " .element-hover").click();// Hide the ul element
                $("#" + current_ul_id).css("display", "none");
            }
        }

    });
