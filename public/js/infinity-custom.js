$(document).ready(function(){

  //CD1
  $('input[type=radio][name=property_type]').on('click', function() {
    var property_type = $('input[type=radio][name=property_type]:checked').val();

    if(property_type == 'house') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/property_type/house.png" alt="House" data="c1" style="width: 100%;">';

    } else if(property_type == 'flat') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/property_type/flat.png" alt="Flat" data="c1" style="width: 100%">';

    } else if (property_type == 'maisonette') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/property_type/maisonette.png" alt="Maisonette" data="c1" style="width: 100%">';

    } else if (property_type == 'bungalow') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/property_type/bungalow.png" alt="Bungalow" style="width: 100%;" data="c1">';

    } else if (property_type == 'park') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/property_type/park home.png" alt="Park Home" data="c1" style="width: 100%;">';
    }

    $('#filter_container').show();

    $('html, body').animate({
      scrollTop: $('#form_container').offset().top + 70
    }, 400);

    $('#fl1').html('<div class="h4 push-20 font-w300">Propety Type</div><label>'+img+'<span class="push-20-t font-w400">'+$(img).attr('alt')+'</span></label>');

    $('#c1').hide();
    $('#'+property_type).show();
  });

  //Park Home
  $('input[type=radio][name=size]').on('click', function() {
    var size = $('input[type=radio][name=size]:checked').val();

    if(size == 'Single') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/size/single.png" data="park" alt="Single" style="width: 100%;">';

    } else if(size == 'Double') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/size/double.png" data="park" alt="Double" style="width: 100%;">';

    }

    $('#fl2').html('<div class="h4 push-20 font-w300">Size</div><label>'+img+'<span class="push-20-t font-w400">'+$(img).attr('alt')+'</span></label>');
    $('#park').hide();
    $('#pt').val($('input[type=radio][name=size]:checked').val()+'_park_home');
    $('#c2').show();

  });

  //Bungalow
  $('input[type=radio][name=bung_detachment]').on('click', function() {
  	var bung_detachment = $('input[type=radio][name=bung_detachment]:checked').val();

  	if(bung_detachment == 'Det') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/detachment/detached.png" path="bung_det" alt="Detached" data="bungalow" style="width:100%;">';

    } else if(bung_detachment == 'Semi/End') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/detachment/semi-detached.png" path="bung_gen" alt="Semi-Detached" data="bungalow" style="width:100%;">';

    } else if(bung_detachment == 'Semi/End2') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/detachment/eng-terrace.png" path="bung_gen" alt="End-Terrace" data="bungalow" style="width:100%;">';

    } else if(bung_detachment == 'Mid') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/detachment/mid-terrace.png" path="bung_gen" alt="Mid-Terrace" data="bungalow" style="width:100%;">';

    }

    $('#fl2').html('<div class="h4 push-20 font-w300">Detachment</div><label>'+img+'<span class="push-20-t font-w400">'+$(img).attr('alt')+'</span></label>');

    $('#bungalow').hide();
    var bung = bung_detachment.replace('2', '');
    var path = $(img).attr('path');
    $('#'+path).show();

  });

  //Bungalow Rooms
  $('input[type=radio][name=bung_rooms]').on('click', function() {
  	var bung_rooms = $('input[type=radio][name=bung_rooms]:checked').val();

  	if(bung_rooms == '1') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/1.png" alt="1" data="bung_det" style="width: 100%;">';

  	} else if(bung_rooms == '2') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/2.png" alt="2" data="bung_det" style="width: 100%;">';

  	} else if(bung_rooms == '2-') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/2.png" alt="2-" data="bung_det" style="width: 100%;">';

  	} else if(bung_rooms == '3+') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/3.png" alt="3+" data="bung_det" style="width: 100%;">';

  	}

  	$('#fl3').html('<div class="h4 push-20 font-w300">No of Bedrooms</div><label>'+img+'<span class="push-20-t font-w400">'+$(img).attr('alt')+'</span></label>');

  	$('#pt').val('Bung_'+$('input[type=radio][name=bung_detachment]:checked').val()+'_'+bung_rooms);
  	$('#bung_det').hide();
  	$('#bung_gen').hide();


    $('#c2').show();

  });

  //House
  $('input[type=radio][name=detachment]').on('click', function() {
    var detachment = $('input[type=radio][name=detachment]:checked').val();

    if(detachment == 'Det') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/detachment/detached.png" alt="Detached" data="house" style="width: 100%;">';

    } else if(detachment == 'Semi') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/detachment/semi-detached.png" alt="Semi-Detached" data="house" style="width: 100%">';

    } else if(detachment == 'End-terrace') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/detachment/eng-terrace.png" alt="End-Terrace" data="house" style="width: 100%">';

    } else if(detachment == 'Mid-terrace') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/detachment/mid-terrace.png" alt="Mid-Terrace" data="house" style="width: 100%;">';

    }

    $('#fl2').html('<div class="h4 push-20 font-w300">Detachment</div><label>'+img+'<span class="push-20-t font-w400">'+$(img).attr('alt')+'</span></label>');

    $('html, body').animate({
      scrollTop: $('#form_container').offset().top + 70
    }, 400);

    $('#house').hide();
    $('#'+detachment).show();
    
  });

  //Det
  $('input[type=radio][name=det_rooms]').on('click', function() {
    var rooms = $('input[type=radio][name=det_rooms]:checked').val();

    if(rooms == '2-') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/2.png" alt="2-" data="Det" style="width: 100%;">';

    } else if(rooms == '3') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/3.png" alt="3" data="Det" style="width: 100%;">';

    } else if(rooms == '4') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/4.png" alt="4" data="Det" style="width: 100%;">';

    } else if(rooms == '5') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/5.png" alt="5" data="Det" style="width: 100%;">';

    } else if(rooms = '6+') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/6.png" alt="6+" data="Det" style="width: 100%;">';

    }

    $('#fl3').html('<div class="h4 push-20 font-w300">No of Bedrooms</div><label>'+img+'<span class="push-20-t font-w400">'+rooms+'</span></label>');

    $('#Det').hide();
    $('#c2').show();

    $('#pt').val($('input[type=radio][name=detachment]:checked').val()+'_'+rooms);

  });

  //Semi
  $('input[type=radio][name=semi_rooms]').on('click', function() {
  	var semi_rooms = $('input[type=radio][name=semi_rooms]:checked').val();

  	if(semi_rooms == '2-') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/2.png" alt="2-" data="Semi" style="width: 100%;">';

  	} else if(semi_rooms == '3') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/3.png" alt="3" data="Semi" style="width: 100%;">';

  	} else if(semi_rooms == '4') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/4.png" alt="4" data="Semi" style="width: 100%;">';

  	} else if(semi_rooms == '5+') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/5.png" alt="5+" data="Semi" style="width: 100%;">';

  	}
  	$('#fl3').html('<div class="h4 push-20 font-w300">No of Bedrooms</div><label>'+img+'<span class="push-20-t font-w400">'+semi_rooms+'</span></label>');
  	$('#Semi').hide();
    $('#c2').show();

    $('#pt').val($('input[type=radio][name=detachment]:checked').val()+'_'+semi_rooms);

  });

  //Mid/End-Terrace
  $('input[type=radio][name=end_rooms]').on('click', function() {
  	var end_rooms = $('input[type=radio][name=end_rooms]:checked').val();

  	if(end_rooms == '1') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/1.png" alt="1" data="End-terrace" style="width: 100%;">';

  	} else if(end_rooms == '2') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/2.png" alt="2" data="End-terrace" style="width: 100%;">';

  	} else if(end_rooms == '3') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/3.png" alt="3" data="End-terrace" style="width: 100%;>';

  	} else if(end_rooms == '4') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/4.png" alt="4" data="End-terrace" style="width: 100%;">';

  	} else if(end_rooms == '5+') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/5.png" alt="5+" data="End-terrace" style="width: 100%;">';

  	}

  	$('#fl3').html('<div class="h4 push-20 font-w300">No of Bedrooms</div><label>'+img+'<span class="push-20-t font-w400">'+end_rooms+'</span></label>');
  	$('#End-terrace').hide();
  	$('#Mid-terrace').hide();
  	$('#c2').show();

  	$('#pt').val($('input[type=radio][name=detachment]:checked').val()+'_'+end_rooms);


  });

  //Flat Walls
  $('input[type=radio][name=flat_walls]').on('click', function() {
  	var flat_walls = $('input[type=radio][name=flat_walls]:checked').val();

  	if(flat_walls == '2') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/walls/2-.png" alt="2-" data="flat" style="width: 100%;">';

  	} else if(flat_walls == '3') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/walls/3+.png" alt="3+" data="flat" style="width: 100%;">';

  	}

  	$('#fl2').html('<div class="h4 push-20 font-w300">External Walls</div><label>'+img+'<span>'+$(img).attr('alt')+'</span></label>');

  	$('#flat').hide();
  	$('#flat_rooms').show();

  });

  //Flat Rooms
  $('input[type=radio][name=flat_rooms]').on('click', function() {
  	var flat_rooms = $('input[type=radio][name=flat_rooms]:checked').val();

  	if(flat_rooms == '1') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/1.png" alt="1" data="flat_rooms" style="width: 100%;">';

  	} else if(flat_rooms == '2') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/2.png" alt="2" data="flat_rooms" style="width: 100%;">';

  	} else if(flat_rooms == '3+') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/3.png" alt="3+" data="flat_rooms" style="width: 100%;">';

  	}

  	$('#fl3').html('<div class="h4 push-20 font-w300">No of Bedrooms</div><label>'+img+'<span class="push-20-t font-w400">'+$(img).attr('alt')+'</span></label>');
  	$('#flat_rooms').hide();
  	$('#c2').show();
  	$('#pt').val($('input[type=radio][name=flat_walls]:checked').val()+'W_'+$('input[type=radio][name=property_type]:checked').val().substr(0,1).toUpperCase()+$('input[type=radio][name=property_type]:checked').val().substr(1)+'_'+flat_rooms);

  });

  //Maisonette Walls
  $('input[type=radio][name=maisonette_walls]').on('click', function() {
  	var maisonette_walls = $('input[type=radio][name=maisonette_walls]:checked').val();

  	if(maisonette_walls == '2') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/walls/2-.png" alt="2-" data="maisonette" style="width: 100%;">';

  	} else if(maisonette_walls == '3') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/walls/3+.png" alt="3+" data="maisonette" style="width: 100%;">';

  	}

  	$('#fl2').html('<div class="h4 push-20 font-w300">External Walls</div><label>'+img+'<span>'+$(img).attr('alt')+'</span></label>');

  	$('#maisonette').hide();
  	$('#maisonette_rooms').show();

  });

  //Maisonette Rooms
  $('input[type=radio][name=maisonette_rooms]').on('click', function() {
  	var maisonette_rooms = $('input[type=radio][name=maisonette_rooms]:checked').val();

  	if(maisonette_rooms == '2-') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/2.png" alt="2-" data="maisonette_rooms" style="width: 100%;">';

  	} else if(maisonette_rooms == '3+') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/rooms/3.png" alt="3+" data="maisonette_rooms" style="width: 100%;">';
  	}

  	$('#fl3').html('<div class="h4 push-20 font-w300">No of Bedrooms</div><label>'+img+'<span class="push-20-t font-w400">'+maisonette_rooms+'</span></label>');
  	$('#maisonette_rooms').hide();
  	$('#c2').show();

  	$('#pt').val($('input[type=radio][name=maisonette_walls]:checked').val()+'W_'+$('input[type=radio][name=property_type]:checked').val().substr(0,1).toUpperCase()+$('input[type=radio][name=property_type]:checked').val().substr(1)+'_'+maisonette_rooms);

  });

  //Pre Main Heating Source
  $('input[type=radio][name=pre_main_heating]').on('click', function() {
  	var pre_main_heating = $('input[type=radio][name=pre_main_heating]:checked').val();

  	if(pre_main_heating == 'Gas boiler') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/Gas Boiler.png" alt="Gas boiler" data="c2" style="width: 100%;">';

  	} else if(pre_main_heating == 'Electric storage heaters') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/Electric storage heaters.png" alt="Electric storage heaters" data="c2" style="width: 100%;">';

  	} else if(pre_main_heating == 'LPG boiler') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/LPG Boiler.png" alt="LPG boiler" data="c2" style="width: 100%;">';

  	} else if(pre_main_heating == 'Oil boiler') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/Oil Boiler.png" alt="Oil boiler" data="c2" style="width: 100%;">';

  	} else if(pre_main_heating == 'Solid fossil fuel boiler') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/Solid fossil fuel boiler.png" alt="Solid fossil fuel boiler" data="c2" style="width: 100%;">';

  	} else if(pre_main_heating == 'Electric boiler') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/Electric boiler.png" alt="Electric boiler" data="c2" style="width: 100%;">';

  	} else if(pre_main_heating == 'Electric room heaters') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/Electric room heaters.png" alt="Electric room heaters" data="c2" style="width: 100%;">';

  	} else if(pre_main_heating == 'Gas room heaters') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/Gas room heaters.png" alt="Gas room heaters" data="c2" style="width: 100%;">';

  	} else if(pre_main_heating == 'Solid fossil fuel room heaters') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/Solid fossil fuel room heaters.png" alt="Solid fossil fuel room heaters" data="c2" style="width: 100%;">';

  	} else if(pre_main_heating == 'Gas fire with back boiler') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/gas fire with back boiler.png" alt="Gas fire with back boiler" data="c2" style="width: 100%;">';

  	} else if(pre_main_heating == 'Gas back boiler to radiators') {

  		var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/pmh/Gas back boiler to radiators.png" alt="Gas back boiler to radiators" data="c2" style="width: 100%;">';
  	}

  	$('#fl4').html('<div class="h4 push-20 font-w300">Current Heating System</div><label>'+img+'<span class="push-20-t font-w400">'+pre_main_heating+'</span></label>');

  	$('#c2').hide();
  	$('#c3').show();
  	$('#pmh').val(pre_main_heating);

  });

  //Post Main Heating Source
  $('input[type=radio][name=post_main_heating]').on('click', function() {
  	var post_main_heating = $('input[type=radio][name=post_main_heating]:checked').val();

  	$('#c3').hide();
  	$('#c4').show();
  	$('#pmh2').val(post_main_heating);

  });

  //Campaign Measure
  $('input[type=radio][name=campaign_measure]').on('click', function() {
  	var campaign_measure = $('input[type=radio][name=campaign_measure]:checked').val();

  	if(campaign_measure == 'Boiler') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/boiler.png" alt="Boiler" data="c4" style="width: 100%;">';
  		var cm = 'boiler';

  	} else if(campaign_measure == 'Cavity Wall Insulation') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/wall insulation.png" alt="Cavity Wall Insulation" data="c4" style="width: 100%;">';
  		var cm = 'cwi';

  	} else if(campaign_measure == 'ESH') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/esh.png" alt="ESH" data="c4" style="width: 100%;">';
  		var cm = 'esh';

  	} else if(campaign_measure == 'Loft Insulation') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/loft insulation.png" alt="Loft Insulation" data="c4" style="width: 100%;">';
  		var cm = 'li';

  	} else if(campaign_measure == 'Solid Wall Insulation') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/solid wall insulation.png" alt="Solid Wall Insulation" data="c4" style="width: 100%;">';
  		var cm = 'swi';

  	} else if(campaign_measure == 'Micro-Generation') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/micro generation.png" data="c4" alt="Micro-Generation/Solar_PV" style="width: 100%;">';
      var cm = 'c5';
      $('#mt').val('Solar_PV');

    } else if(campaign_measure == 'Other Heating') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/other heating.png" data="c4" alt="Other Heating" style="width: 100%;">';
      var cm = 'oh';

    } else if(campaign_measure == 'Other Insulation') {

      var img ='<img src="https://costscore.infinityenergyorganisation.co.uk/img/other insulation.png" alt="Other Insulation" style="width: 100%;">';
      var cm = 'oo';

    }

    $('.1label').empty();
    $('.1label').append('<div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div>');

    $('#fl5').html('<small>Undo</small><div class="h4 push-20 font-w300">Campaign Measure</div><label>'+img+'<span class="push-20-t font-w400">'+$(img).attr('alt')+'</span></label>');

  	$('#c4').hide();
  	$('#'+cm).show();

  	$('#cm').val(campaign_measure);
  	
  });

  //OH Choice
  $('#oh_choice').on('change', function() {
    var oh_choice = $(this).val();
    $(this).attr('style', '1px solid #e6e6e6');

    $('#oh').hide();
    $('#c5').show();

    $('#mt').val('Heating_controls_'+oh_choice);

  });

  //OI Choice
  $('#oi_choice').on('change', function() {
    var oi_choice = $(this).val();
    $(this).attr('style', '1px solid #e6e6e6');

    $('#oo').hide();
    $('#c5').show();

    $('#mt').val(oi_choice);

  });  

  //Boiler 1st Part
  $('#b1_choice').on('change', function(){
  	var b1_choice = $(this).val();
    $(this).attr('style', '1px solid #e6e6e6');
  	
  	if(b1_choice == 'Broken' || b1_choice == 'Repair' || b1_choice == 'Upgrade') {

  		$('#b2_choice').empty();
  		$('#b2_choice').append('<option value="">--</option><option value="cavity">Cavity</option><option value="solid">Solid</option>');
  		$('#b3').show()
      $('.1label').empty();
      $('.1label').append('<div class="alert alert-success"><h3 class="font-w400">Done!</h3></div>');
      $('.2label').empty();
      $('.2label').append('<div class="alert alert-danger"><h3 class="font-w400">Now Choose One!</h3></div>');

  	} else if(b1_choice == 'First_time') {

  		$('#b2_choice').empty();
  		$('#b2_choice').append('<option value="">--</option><option value="CH_cavity">Cavity</option><option value="CH_solid">Solid</option>');
  		$('#b3').hide()
      $('.1label').empty();
      $('.1label').append('<div class="alert alert-success"><h3 class="font-w400">Done!</h3></div>');
      $('.2label').empty();
      $('.2label').append('<div class="alert alert-danger"><h3 class="font-w400">Now Choose One!</h3></div>');

  	} else {

  		$('#b2_choice').empty();
  		$('#b3').show()
      $('.1label').empty();
      $('.1label').append('<div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div>');
  	}
  });

  //Boiler 2nd Part
  $('#b2_choice').on('change', function() {

  	var b2_choice = $(this).val();

    $(this).attr('style', '1px solid #e6e6e6');

  	if(b2_choice == 'CH_cavity' || b2_choice == 'CH_solid') {

  		$('#boiler').hide();
  		$('#c5').show();

  		$('#mt').val('B_'+$('#b1_choice').val()+'_'+b2_choice);

  	} else {

      $('.2label').empty();
      $('.2label').append('<div class="alert alert-success"><h3 class="font-w400">Done!</h3></div>');
      $('.3label').empty();
      $('.3label').append('<div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div>');
    }
  });

  //Boiler 3rd Part
  $('#b3_choice').on('change', function() {
  	var b3_choice = $(this).val();
    $(this).attr('style', '1px solid #e6e6e6');

  	$('#boiler').hide();
  	$('#c5').show();
  	$('#mt').val('B_'+$('#b1_choice').val()+'_'+$('#b2_choice').val()+'_'+b3_choice);
  });

  //CWI Choice
  $('#cwi_choice').on('change', function() {
    var cwi_choice = $(this).val();
    $(this).attr('style', '1px solid #e6e6e6');

    $('#cwi').hide();
    $('#c5').show();
    $('#mt').val(cwi_choice);
  });

  //LI Choice
  $('#li_choice').on('change', function() {
    var li_choice = $(this).val();
    $(this).attr('style', '1px solid #e6e6e6');

    $('#li').hide();
    $('#c5').show();
    $('#mt').val(li_choice);
  });

  //SWI 3rd Part
  $('#swi3_choice').on('change', function() {
    var swi3_choice = $(this).val();
    $(this).attr('style', '1px solid #e6e6e6');

    if(swi3_choice == '0.45') {

      $('#swi4_choice').empty();
      $('#swi4_choice').append('<option value="">--</option><option value="0.14">0.14</option><option value="0.17">0.17</option><option value="0.21">0.21</option><option value="0.3">0.3</option>');

    } else if(swi3_choice == '0.6') {

      $('#swi4_choice').empty();
      $('#swi4_choice').append('<option value="">--</option><option value="0.15">0.15</option><option value="0.18">0.18</option><option value="0.24">0.24</option><option value="0.3">0.3</option><option value="0.35">0.35</option>');

    } else if(swi3_choice == '1') {

      $('#swi4_choice').empty();
      $('#swi4_choice').append('<option value="">--</option><option value="0.17">0.17</option><option value="0.21">0.21</option><option value="0.28">0.28</option><option value="0.3">0.3</option><option value="0.45">0.45</option>');

    } else if(swi3_choice == '1.7') {

      $('#swi4_choice').empty();
      $('#swi4_choice').append('<option value="">--</option><option value="0.18">0.18</option><option value="0.23">0.23</option><option value="0.3">0.3</option><option value="0.32">0.32</option><option value="0.55">0.55</option>');

    } else if(swi3_choice == '2') {

      $('#swi4_choice').empty();
      $('#swi4_choice').append('<option value="">--</option><option value="0.18">0.18</option><option value="0.25">0.25</option><option value="0.3">0.3</option><option value="0.5">0.5</option><option value="0.6">0.6</option>');
    
    } else {

      $('#swi4_choice').empty();

    }

  });

  //SWI 1st Part
  $('#swi1_choice').on('change', function() {
    $(this).attr('style', '1px solid #e6e6e6');
    $('.1label').empty();
    $('.1label').append('<div class="alert alert-success"><h3 class="font-w400">Done!</h3></div>');
    $('.2label').empty();
    $('.2label').append('<div class="alert alert-danger"><h3 class="font-w400">Now Choose One!</h3></div>');
  });

  //SWI 2nd Part
  $('#swi2_choice').on('change', function() {
    $(this).attr('style', '1px solid #e6e6e6');
    $('.2label').empty();
    $('.2label').append('<div class="alert alert-success"><h3 class="font-w400">Done!</h3></div>');
    $('.3label').empty();
    $('.3label').append('<div class="alert alert-danger"><h3 class="font-w400">Now Choose One!</h3></div>');
  });

  //SWI 3rd Part
  $('#swi3_choice').on('change', function() {
    $(this).attr('style', '1px solid #e6e6e6');
    $('.3label').empty();
    $('.3label').append('<div class="alert alert-success"><h3 class="font-w400">Done!</h3></div>');
    $('.4label').empty();
    $('.4label').append('<div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div>');
  });

  //SWI 4th Part
  $('#swi4_choice').on('change', function() {

    $(this).attr('style', '1px solid #e6e6e6');
    $('#swi').hide();
    $('#c5').show();
    if($('#swi3_choice').val() == '2') {
      swi3_choice = '2.0'
    } else {
      swi3_choice = $('#swi3_choice').val();
    }
    $('#mt').val($('#swi1_choice').val()+'_'+$('#swi2_choice').val()+'_'+swi3_choice+'_'+$('#swi4_choice').val());

  });

  //ESH 1st Part
  $('#esh1_choice').on('change', function() {
    $(this).attr('style', '1px solid #e6e6e6');
    $('#esh .1label').empty();
    $('#esh .1label').append('<div class="alert alert-success"><h3 class="font-w400">Done!</h3></div>');
  })

  //ESH 2st Part
  $('#esh2_choice').on('change', function() {
    $(this).attr('style', '1px solid #e6e6e6');
    $('.2label').empty();
    $('.2label').append('<div class="alert alert-success"><h3 class="font-w400">Done!</h3></div>');
  })

  //ESH 3rd Part
  $('#esh3_choice').on('change', function() {
    $(this).attr('style', '1px solid #e6e6e6');
    var esh3_choice = $(this).val();

    $('#esh').hide();
    $('#c5').show();
    $('#mt').val('ESH_'+$('#esh1_choice').val()+'_'+$('#esh2_choice')+'_'+esh3_choice);

  });

  $('#fl1').on('click', function() {

    $('#c1').hide();
    $('#house').hide();
    $('#park').hide();
    $('#park_rooms').hide();
    $('#flat').hide();
    $('#flat_rooms').hide();
    $('#maisonette').hide();
    $('#maisonette_rooms').hide();
    $('#bungalow').hide();
    $('#bung_det').hide();
    $('#bung_gen').hide();
    $('#Det').hide();
    $('#Semi').hide();
    $('#End-terrace').hide();
    $('#Mid-terrace').hide();
    $('#c2').hide();
    $('#c3').hide();
    $('#c4').hide();
    $('#boiler').hide();
    $('#cwi').hide();
    $('#esh').hide();
    $('#li').hide();
    $('#swi').hide();
    $('#oh').hide();
    $('#oo').hide();
    $('#c4').hide();
    $('#c5').hide();
    $('.2label').empty();
    $('.3label').empty();
    $('.4label').empty();

    var data = $('#fl1 img').attr('data');

    $('html, body').animate({
      scrollTop: $('#form_container').offset().top + 70
    }, 400);

    $('#'+data).show();
  });

  $('#fl2').on('click', function() {

    $('#c1').hide();
    $('#house').hide();
    $('#park').hide();
    $('#park_rooms').hide();
    $('#flat').hide();
    $('#flat_rooms').hide();
    $('#maisonette').hide();
    $('#maisonette_rooms').hide();
    $('#bungalow').hide();
    $('#bung_det').hide();
    $('#bung_gen').hide();
    $('#Det').hide();
    $('#Semi').hide();
    $('#End-terrace').hide();
    $('#Mid-terrace').hide();
    $('#c2').hide();
    $('#c3').hide();
    $('#c4').hide();
    $('#boiler').hide();
    $('#cwi').hide();
    $('#esh').hide();
    $('#li').hide();
    $('#swi').hide();
    $('#oh').hide();
    $('#oo').hide();
    $('#c4').hide();
    $('#c5').hide();

    var data = $('#fl2 img').attr('data');

    $('html, body').animate({
      scrollTop: $('#form_container').offset().top + 70
    }, 400);

    $('#'+data).show();
  });

  $('#fl3').on('click', function() {

    $('#c1').hide();
    $('#house').hide();
    $('#park').hide();
    $('#park_rooms').hide();
    $('#flat').hide();
    $('#flat_rooms').hide();
    $('#maisonette').hide();
    $('#maisonette_rooms').hide();
    $('#bungalow').hide();
    $('#bung_det').hide();
    $('#bung_gen').hide();
    $('#Det').hide();
    $('#Semi').hide();
    $('#End-terrace').hide();
    $('#Mid-terrace').hide();
    $('#c2').hide();
    $('#c3').hide();
    $('#c4').hide();
    $('#boiler').hide();
    $('#cwi').hide();
    $('#esh').hide();
    $('#li').hide();
    $('#swi').hide();
    $('#oh').hide();
    $('#oo').hide();
    $('#c4').hide();
    $('#c5').hide();

    var data = $('#fl3 img').attr('data');

    $('html, body').animate({
      scrollTop: $('#form_container').offset().top + 70
    }, 400);

    $('#'+data).show();
  });

  $('#fl4').on('click', function() {

    $('#c1').hide();
    $('#house').hide();
    $('#park').hide();
    $('#park_rooms').hide();
    $('#flat').hide();
    $('#flat_rooms').hide();
    $('#maisonette').hide();
    $('#maisonette_rooms').hide();
    $('#bungalow').hide();
    $('#bung_det').hide();
    $('#bung_gen').hide();
    $('#Det').hide();
    $('#Semi').hide();
    $('#End-terrace').hide();
    $('#Mid-terrace').hide();
    $('#c2').hide();
    $('#c3').hide();
    $('#c4').hide();
    $('#boiler').hide();
    $('#cwi').hide();
    $('#esh').hide();
    $('#li').hide();
    $('#swi').hide();
    $('#oh').hide();
    $('#oo').hide();
    $('#c4').hide();
    $('#c5').hide();

    var data = $('#fl4 img').attr('data');

    $('html, body').animate({
      scrollTop: $('#form_container').offset().top + 70
    }, 400);

    $('#'+data).show();
  });

  $('#fl5').on('click', function() {

    $('#c1').hide();
    $('#house').hide();
    $('#park').hide();
    $('#park_rooms').hide();
    $('#flat').hide();
    $('#flat_rooms').hide();
    $('#maisonette').hide();
    $('#maisonette_rooms').hide();
    $('#bungalow').hide();
    $('#bung_det').hide();
    $('#bung_gen').hide();
    $('#Det').hide();
    $('#Semi').hide();
    $('#End-terrace').hide();
    $('#Mid-terrace').hide();
    $('#c2').hide();
    $('#c3').hide();
    $('#c4').hide();
    $('#boiler').hide();
    $('#cwi').hide();
    $('#esh').hide();
    $('#li').hide();
    $('#swi').hide();
    $('#oh').hide();
    $('#oo').hide();
    $('#c4').hide();
    $('#c5').hide();
    $('select').attr('style', 'border:1px solid #c54736');
    $('.2label').empty();
    $('.3label').empty();
    $('.4label').empty();
    $('.2label').append('<div class="alert alert-danger"><h3 class="font-w400">!</h3></div>');
    $('.3label').append('<div class="alert alert-danger"><h3 class="font-w400">!</h3></div>');
    $('.4label').append('<div class="alert alert-danger"><h3 class="font-w400">!</h3></div>');
    $('#b1_choice').prop('selectedIndex',0);
    $('#b2_choice').prop('selectedIndex',0);
    $('#b3_choice').prop('selectedIndex',0);
    $('#cwi_choice').prop('selectedIndex',0);
    $('#esh1_choice').prop('selectedIndex',0);
    $('#esh2_choice').prop('selectedIndex',0);
    $('#esh3_choice').prop('selectedIndex',0);
    $('#li_choice').prop('selectedIndex',0);
    $('#swi1_choice').prop('selectedIndex',0);
    $('#swi2_choice').prop('selectedIndex',0);
    $('#swi3_choice').prop('selectedIndex',0);
    $('#swi4_choice').prop('selectedIndex',0);

    var data = $('#fl5 img').attr('data');

    $('html, body').animate({
      scrollTop: $('#form_container').offset().top + 70
    }, 400);

    $('#'+data).show();
  });

  //Select
  var select = $('select').val();
  if(select == '') {
    $('select').attr('style', 'border:1px solid #c54736');
  } else {
    $('select').attr('style', 'border:1px solid #e6e6e6');
  }

});