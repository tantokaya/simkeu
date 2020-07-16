/*=========================================================================================
    File Name: form-tooltip-valid.js
    Description: form tooltip validation etc..
    ----------------------------------------------------------------------------------------
    Item name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
(function(window, document, $) {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  // Loop over them and prevent submission
  // $("button").click(function () {
  //   var form = $(".needs-validation");
  //   if (form[0].checkValidity() === false) {
  //       event.preventDefault();
  //       event.stopPropagation();
  //   }
  //   form.addClass('was-validated');
  // });

  
  $('#gaji_pokok').keyup(function(){
      var jumlah = $(this).val();
      $("#bersih").val(jumlah);
   });

  $('#tunj_istri').keyup(function(){
      var jumlah = parseInt($(this).val()) + parseInt($('#gaji_pokok').val());
      $("#bersih").val(jumlah || 0);
   });

  $('#tunj_anak').keyup(function(){
      var jumlah = parseInt($(this).val()) + parseInt($('#gaji_pokok').val()) + parseInt($('#tunj_istri').val());
      $("#bersih").val(jumlah || 0);
   });

  $('#tunj_upns').keyup(function(){
      var jumlah = parseInt($(this).val()) + parseInt($('#gaji_pokok').val()) + parseInt($('#tunj_istri').val()) 
      + parseInt($('#tunj_anak').val());
      $("#bersih").val(jumlah || 0);
   });

  $('#tunj_struk').keyup(function(){
      var jumlah = parseInt($(this).val()) + parseInt($('#gaji_pokok').val()) + parseInt($('#tunj_istri').val()) 
      + parseInt($('#tunj_anak').val()) + parseInt($('#tunj_upns').val());
      $("#bersih").val(jumlah || 0);
   });

  $('#tunj_fung').keyup(function(){
      var jumlah = parseInt($(this).val()) + parseInt($('#gaji_pokok').val()) + parseInt($('#tunj_istri').val()) 
      + parseInt($('#tunj_anak').val()) + parseInt($('#tunj_upns').val()) + parseInt($('#tunj_struk').val());
      $("#bersih").val(jumlah || 0);
   });

  $('#tunj_beras').keyup(function(){
      var jumlah = parseInt($(this).val()) + parseInt($('#gaji_pokok').val()) + parseInt($('#tunj_istri').val()) 
      + parseInt($('#tunj_anak').val()) + parseInt($('#tunj_upns').val()) + parseInt($('#tunj_struk').val())
      + parseInt($('#tunj_fung').val());
      $("#bersih").val(jumlah || 0);
   });

  $('#tunj_pph').keyup(function(){
      var jumlah = parseInt($(this).val()) + parseInt($('#gaji_pokok').val()) + parseInt($('#tunj_istri').val()) 
      + parseInt($('#tunj_anak').val()) + parseInt($('#tunj_upns').val()) + parseInt($('#tunj_struk').val())
      + parseInt($('#tunj_fung').val()) + parseInt($('#tunj_beras').val());
      $("#bersih").val(jumlah || 0);
   });

  $('#pot_pfk').keyup(function(){
      var jumlah = parseInt($(this).val()) + parseInt($('#gaji_pokok').val()) + parseInt($('#tunj_istri').val()) 
      + parseInt($('#tunj_anak').val()) + parseInt($('#tunj_upns').val()) + parseInt($('#tunj_struk').val())
      + parseInt($('#tunj_fung').val()) + parseInt($('#tunj_pph').val()) + parseInt($('#tunj_beras').val());
      $("#bersih").val(jumlah || 0);
   });

  $('#pot_pph').keyup(function(){
      var jumlah = parseInt($(this).val()) + parseInt($('#gaji_pokok').val()) + parseInt($('#tunj_istri').val()) 
      + parseInt($('#tunj_anak').val()) + parseInt($('#tunj_upns').val()) + parseInt($('#tunj_struk').val())
      + parseInt($('#tunj_fung').val()) + parseInt($('#tunj_pph').val()) + parseInt($('#tunj_beras').val()) 
      - parseInt($('#pot_pfk').val());
      $("#bersih").val(jumlah || 0);
   });

  $('#pot_tabrum').keyup(function(){
      var jumlah = parseInt($(this).val()) + parseInt($('#gaji_pokok').val()) + parseInt($('#tunj_istri').val()) 
      + parseInt($('#tunj_anak').val()) + parseInt($('#tunj_upns').val()) + parseInt($('#tunj_struk').val())
      + parseInt($('#tunj_fung').val()) + parseInt($('#tunj_pph').val()) + parseInt($('#tunj_beras').val()) 
      - parseInt($('#pot_pfk').val()) - parseInt($('#pot_pph').val());
      $("#bersih").val(jumlah || 0);
   });

})(window, document, jQuery);
