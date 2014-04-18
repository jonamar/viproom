$(function() { // Document Ready


  //plugin bootstrap minus and plus
  //http://jsfiddle.net/laelitenetwork/puJ6G/
  $('.btn-number').click(function(e){
      e.preventDefault();

      fieldName = $(this).attr('data-field');
      type      = $(this).attr('data-type');
      var input = $("input[name='"+fieldName+"']");
      var currentVal = parseInt(input.val());
      if (!isNaN(currentVal)) {
          if(type == 'minus') {

              if(currentVal > input.attr('min')) {
                  input.val(currentVal - 1).change();
              }
              if(parseInt(input.val()) == input.attr('min')) {
                  $(this).attr('disabled', true);
              }

          } else if(type == 'plus') {

              if(currentVal < input.attr('max')) {
                  input.val(currentVal + 1).change();
              }
              if(parseInt(input.val()) == input.attr('max')) {
                  $(this).attr('disabled', true);
              }

          }
      } else {
          input.val(0);
      }
  });
  $('.input-number').focusin(function(){
     $(this).data('oldValue', $(this).val());
  });
  $('.input-number').change(function() {

      minValue =  parseInt($(this).attr('min'));
      maxValue =  parseInt($(this).attr('max'));
      valueCurrent = parseInt($(this).val());

      name = $(this).attr('name');
      if(valueCurrent >= minValue) {
          $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
      } else {
          alert('Sorry, the minimum value was reached');
          $(this).val($(this).data('oldValue'));
      }
      if(valueCurrent <= maxValue) {
          $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
      } else {
          alert('Sorry, the maximum value was reached');
          $(this).val($(this).data('oldValue'));
      }


  });
  $(".input-number").keydown(function (e) {
          // Allow: backspace, delete, tab, escape, enter and .
          if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
               // Allow: Ctrl+A
              (e.keyCode == 65 && e.ctrlKey === true) ||
               // Allow: home, end, left, right
              (e.keyCode >= 35 && e.keyCode <= 39)) {
                   // let it happen, don't do anything
                   return;
          }
          // Ensure that it is a number and stop the keypress
          if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
              e.preventDefault();
          }
      });



  // STICKY FOOTER
  // http://stackoverflow.com/questions/11163770/jquery-hide-show-div-but-to-keep-toggle-link-from-hiding-too
  var $showhide = $(".showhide-button");
  var $stickyfooter = $("#stickyfooter");
  var $stickyfootertitle = $("#showhide-button");

  $stickyfooter.hide();
  $showhide.show();

  $showhide.click(function(){
      var showMenu = $("#stickyfooter").css("display") == "block";

      $stickyfooter.slideToggle("fast");

      if(showMenu)
      {
          $stickyfootertitle.animate({
              bottom:'0px'
          }, "fast").toggleClass('closed');
      }
      else
      {
         $stickyfootertitle.animate({
              bottom:'270px'
          }, "fast").toggleClass('closed');
      }
  });

});// end: document ready
