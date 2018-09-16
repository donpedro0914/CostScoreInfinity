$(document).ready(function(){

  App.initHelper('datepicker');
  App.initHelper('tags-inputs');
  // App.initHelper('appear-countTo');
  App.initHelper('slimscroll');
  $('.jsselect2').select2();

  var baseurl=window.location.protocol + "//" + window.location.host + "/"; 
  
  toastr.options = {
    "closeButton": true,
    "debug": true,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-center",
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "800",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

  $('input[type=radio][name=measure_category]').on('click', function() {

    $('.form-steps #s2').addClass('active');
    $('#form_container #c1').hide();
    $('#form_container #c2').show();
    $('#filter_container').show();
    $('#filter_container #fl1').html($(this).val());

    if(this.value=='Boiler') {
      $('#mc_boiler').show();
    } else if(this.value=="Cavity Wall Insulation") {
      $('#mc_cwi').show();
    } else if(this.value=="ESH") {
      $('#mc_esh').show();
    } else if(this.value=="Loft Insulation") {
      $('#mc_li').show();
    } else if(this.value=="Micro-Generation") {
      $('#mc_mg').show();
    } else if(this.value=="Solid Wall Insulation") {
      $('#mc_swi').show();
    } else if(this.value=="Other Insulation") {
      $('#mc_oi').show();
    } else if(this.value=="Other Heating") {
      $('#mc_oh').show();
    } else {
      $('#mc_boiler').hide();
      $('#mc_cwi').hide();
      $('#mc_esh').hide();
      $('#mc_li').hide();
      $('#mc_mg').hide();
      $('#mc_swi').hide();
      $('#mc_oi').hide();
      $('#mc_oh').hide();
    }
  });

  $('#mc_boiler1').on('change', function() {
    var boiler = $(this).val();

    if(boiler == 'Broken' || boiler == 'Repair' || boiler == 'Upgrade') {
      $('#B_Broken_Repair_Upgrade').show();
      $('#B_Broken_Repair_Upgrade_Cavity_Solid').show();
      $('#B_First_time').hide();
    } else if(boiler == 'First_time') {
      $('#B_Broken_Repair_Upgrade').hide();
      $('#B_First_time').show();
      $('#B_Broken_Repair_Upgrade_Cavity_Solid').hide();
    } else {
      $('#B_Broken_Repair_Upgrade').hide();
      $('#B_First_time').hide();
      $('#B_Broken_Repair_Upgrade_Cavity_Solid').hide();      
    }
  });

  $('#B_Broken_Repair_Upgrade_Cavity_Solid #mc_boiler3').on('change', function() {
    var mc_boiler1 = $('#mc_boiler1').val();
    var mc_boiler2 = $('#mc_boiler2').val();
    var mc_boiler3 = $(this).val();
    var measure_type = 'B_' + mc_boiler1 + '_' + mc_boiler2 + '_' + mc_boiler3;
    

    $('#filter_container #fl2').html(measure_type);
    $('#getCostScoreForm_Broken #mt').val(measure_type);

    $('.form-steps #s3').addClass('active');
    $('#form_container #c2').hide();
    $('#form_container #c3').show();
  });

  $('#B_First_time #mc_boiler2').on('change', function() {
    var mc_boiler1 = $('#mc_boiler1').val();
    var mc_boiler2 = $(this).val();
    var measure_type = 'B_' + mc_boiler1 + '_' + mc_boiler2;

    $('#filter_container #fl2').html(measure_type);
    $('#getCostScoreForm_Broken #mt').val(measure_type);

    $('.form-steps #s3').addClass('active');
    $('#form_container #c2').hide();
    $('#form_container #c3').show();
  });

  $('input[type=radio][name=property_type]').on('change', function() {
    var pt = $(this).val();

    if(pt=='house') {
      $('#h1').show();
      $('#pt1').hide();
    } else if(pt == 'flat') {
      $('#f1').show();
      $('#pt1').hide();    	
    } else if(pt == 'maisonette') {
      $('#m1').show();
      $('#pt1').hide();    	
    } else if(pt == 'bungalow') {
      $('#b1').show();
      $('#pt1').hide();     	
    } else if(pt == 'CWI_0.040') {
    	$('#c2').hide();
    	$('#c3').show();
    	$('#filter_container #fl2').html(pt);
    	$('#getCostScoreForm_Broken #mt').val(pt);
    	$('#s3').addClass('active');
    }
  });

  $('input[type=radio][name=h1_val]').on('change', function(e) {
    var h1 = $(this).val();

    if(h1 == 'Det') {
      $('#det_rooms').show();
      $('#h1').hide();
      $('#filter_container #fl3').html(h1);
    } else if(h1 == 'Semi') {
      $('#semi_rooms').show();
      $('#h1').hide();
      $('#filter_container #fl3').html(h1);
    } else if(h1 == 'End-terrace') {
      $('#end_terrace_rooms').show();
      $('#h1').hide();
      $('#filter_container #fl3').html(h1);
    } else if(h1 == 'Mid-terrace') {
      $('#end_terrace_rooms').show();
      $('#h1').hide();
      $('#filter_container #fl3').html(h1);
    }

  });

  $('input[type=radio][name=b1_val]').on('change', function(e) {
    var h1 = $(this).val();

    if(h1 == 'Det') {
      $('#bd_rooms').show();
      $('#b1').hide();
      $('#filter_container #fl3').html('Bung_' + h1);
    } else if(h1 == 'Semi/End') {
      $('#bse_rooms').show();
      $('#b1').hide();
      $('#filter_container #fl3').html('Bung_' + h1);
    } else if(h1 == 'Mid') {
      $('#bse_rooms').show();
      $('#b1').hide();
      $('#filter_container #fl3').html('Bung_' + h1);
    }

  });

  $('input[type=radio][name=f1_val]').on('change', function(e) {
    var f1 = $(this).val();

    if(f1 == '2') {
      $('#f1_rooms').show();
      $('#f1').hide();
      $('#filter_container #fl3').html(f1+ 'W_Flat');
    } else if(f1 == '3') {
      $('#f1_rooms').show();
      $('#f1').hide();
      $('#filter_container #fl3').html(f1+ 'W_Flat');    	
    }

  });

  $('input[type=radio][name=m1_val]').on('change', function(e) {
    var m1 = $(this).val();

    if(m1 == '2') {
      $('#m1_rooms').show();
      $('#m1').hide();
      $('#filter_container #fl3').html(m1+ 'W_Maisonette');
    } else if(m1 == '3') {
      $('#m1_rooms').show();
      $('#m1').hide();
      $('#filter_container #fl3').html(m1+ 'W_Maisonette');    	
    }

  });

  $('input[type=radio][name=f1_rooms]').on('change', function() {
	var det = $(this).val();
  	
      var data = $('#filter_container #fl3').html() + '_' + det;

    var property_type = data;

    $('#filter_container #fl3').html(property_type);
    $('.form-steps #s4').addClass('active');
    $('#form_container #c3').hide();
    $('#form_container #c4').show();
  });

  $('input[type=radio][name=m1_rooms]').on('change', function() {
	var det = $(this).val();
  	
    var p1 =  $('input[type=radio][name=property_type]').val();
    if(p1 == 'house') {
      var data = $('#filter_container #fl3').html() + '_' + det;
    }
    var property_type = data;

    $('#filter_container #fl3').html(property_type);
    $('.form-steps #s4').addClass('active');
    $('#form_container #c3').hide();
    $('#form_container #c4').show();
  });

  $('input[type=radio][name=bd_rooms]').on('change', function() {
	var det = $(this).val();
  	
	var data = $('#filter_container #fl3').html() + '_' + det;

    var property_type = data;

    $('#filter_container #fl3').html(property_type);
    $('.form-steps #s4').addClass('active');
    $('#form_container #c3').hide();
    $('#form_container #c4').show();
  });

  $('input[type=radio][name=bse_rooms]').on('change', function() {
	var det = $(this).val();
  	
	var data = $('#filter_container #fl3').html() + '_' + det;

    var property_type = data;

    $('#filter_container #fl3').html(property_type);
    $('.form-steps #s4').addClass('active');
    $('#form_container #c3').hide();
    $('#form_container #c4').show();
  });

  $('input[type=radio][name=det_rooms]').on('change', function() {
	var det = $(this).val();
  	
      var data = $('#filter_container #fl3').html() + '_' + det;

    var property_type = data;

    $('#filter_container #fl3').html(property_type);
    $('.form-steps #s4').addClass('active');
    $('#form_container #c3').hide();
    $('#form_container #c4').show();
  });

  $('input[type=radio][name=semi_rooms]').on('change', function() {
	var semi = $(this).val();

      var data = $('#filter_container #fl3').html() + '_' + semi;

    var property_type = data;

    $('#filter_container #fl3').html(property_type);
    $('.form-steps #s4').addClass('active');
    $('#form_container #c3').hide();
    $('#form_container #c4').show();
  });

  $('input[type=radio][name=end_terrace_rooms]').on('change', function() {
	var end_terrace = $(this).val();

      var data = $('#filter_container #fl3').html() + '_' + end_terrace;
 
    var property_type = data;

    $('#filter_container #fl3').html(property_type);
    $('.form-steps #s4').addClass('active');
    $('#form_container #c3').hide();
    $('#form_container #c4').show();
  });

  $('input[type=radio][name=pre_main_heating]').on('change', function() {

  	var cav = $('#filter_container #fl1').html();

  	if(cav == 'Cavity Wall Insulation') {
		var pre_main_heating = $(this).val();
	$('#filter_container #fl4').html(pre_main_heating);
	    $('#getCostScoreForm_Broken #pmh').val($('#filter_container #fl4').html());
	    $('.form-steps #s5').addClass('active');
	    $('.form-steps #s6').addClass('active');
	    $('#form_container #c4').hide();
	    $('#form_container #c6').show();
	    $('#getCostScoreForm_Broken #pmh2').val('N/A');
      $('#filter_container #fl5').html('N/A');
  	} else {
	    var pre_main_heating = $(this).val();

	    $('#filter_container #fl4').html(pre_main_heating);
	    $('#getCostScoreForm_Broken #pmh').val($('#filter_container #fl4').html());
	    $('.form-steps #s5').addClass('active');
	    $('#form_container #c4').hide();
	    $('#form_container #c5').show();
	}
  });



  $('input[type=radio][name=post_main_heating]').on('change', function() {

    var post_main_heating = $(this).val();

    $('#filter_container #fl5').html(post_main_heating);
    $('.form-steps #s6').addClass('active');
    $('#form_container #c5').hide();
    if($('input[type=radio][name=measure_category]').val() == 'Boiler' && $('#mc_boiler1').val() == 'Broken') {
      $('#getCostScoreForm_Broken #nu').val('broken_central_heating');
      $('#filter_container #fl6').html('broken_central_heating');
      $('#form_container #c6_broken').show();
    } else if($('input[type=radio][name=measure_category]').val() == 'Boiler' && $('#mc_boiler1').val() != 'Broken'){
      $('#getCostScoreForm_Broken #nu').val('N/A');
      $('#form_container #c6_broken').show();
      $('#filter_container #fl6').html('N/A');
    } else {
      $('#form_container #c6').show();
    }


    $('#getCostScoreForm_Broken #cm').val($('#filter_container #fl1').html());
    if($('input[type=radio][name=h1_val]').val() == 'Det') {
      $('#getCostScoreForm_Broken #pt').val($('#filter_container #fl3').html());
    } else if($('input[type=radio][name=h1_val]').val() == 'Semi') {
    	$('#getCostScoreForm_Broken #pt').val($('#filter_container #fl3').html());
    } else {
    	$('#getCostScoreForm_Broken #pt').val($('#filter_container #fl3').html());
    }

    $('#getCostScoreForm_Broken #pmh2').val($('input[type=radio][name=post_main_heating]').val());
  });


  $('input[type=radio][name=nu_val]').on('change', function() {

	  $('#getCostScoreForm_Broken #cm').val($('#filter_container #fl1').html());
  $('#getCostScoreForm_Broken #pt').val($('#filter_container #fl3').html());
	$('#filter_container #fl6').html($(this).val());
  	$('#getCostScoreForm_Broken #nu').val($('#filter_container #fl6').html());
  });

  $('#getCostScoreBtn_Broken').on('click', function(e) {
  	$('#c6_broken').hide();

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    e.preventDefault();

    var cm = $('#cm').val();
    var mt = $('#mt').val();
    var pt = $('#pt').val();
    var pmh = $('#pmh').val();
    var pmh2 = $('#pmh2').val();
    var nu = $('#nu').val();

    $.ajax({
      url: baseurl + 'costscore/getcostscore',
      type: 'get',
      data: {'measure_category':cm, 'measure_type':mt, 'property_type':pt, 'pre_main_heating_source_for_the_property':pmh, 'post_main_heating_source_for_the_property':pmh2, 'name_of_uplift':nu},
      success:function(data) {
        setTimeout(function() {
        	$('#final_result').show();
			$('#cs_val').html(data['cost_score']);
			$('#as_val').html(data['annual_saving']);
			$('#l_val').html(data['l']);
			$('#u_val').html(data['uplift']);
			$('#av_val').html(data['average_popt_factor']);
        },500);
      }
    });
  });

  $('#getCostScoreBtn').on('click', function(e) {
  	$('#c6').hide();

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    e.preventDefault();

    var cm = $('#cm').val();
    var mt = $('#mt').val();
    var pt = $('#pt').val();
    var pmh = $('#pmh').val();
    var pmh2 = $('#pmh2').val();
    var nu = $('#nu').val();

    $.ajax({
      url: baseurl + 'costscore/getcostscore',
      type: 'get',
      data: {'measure_category':cm, 'measure_type':mt, 'property_type':pt, 'pre_main_heating_source_for_the_property':pmh, 'post_main_heating_source_for_the_property':pmh2, 'name_of_uplift':nu},
      success:function(data) {
        setTimeout(function() {
        	$('#final_result').show();
			$('#cs_val').html(data['cost_score']);
			$('#as_val').html(data['annual_saving']);
			$('#l_val').html(data['l']);
			$('#u_val').html(data['uplift']);
			$('#av_val').html(data['average_popt_factor']);
        },500);
      }
    });
  });


});