@extends('layouts.app')

@section('content')
<div id="page-container" class="header-navbar-fixed">
	<header id="header-navbar" class="content-mini content-mini-full">
		<div class="text-center">
			<a class="h5" href="/">{{ Html::image('img/infinity-logo.jpg', 'Infinity Logo', array('class' => 'sidebar-mini-hide')) }}</a>
		</div>
	</header>
    <main id="main-container" style="min-height: 1500px;">
    	<div class="content bg-white">
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="block">
    					<div id="filter_container" style="display:none;">
    						<div style="width:20%;float:left;">
    							<div id="fl1"></div>
    						</div>
    						<div style="width:20%;float:left;">
    							<div id="fl2"></div>
    						</div>
    						<div style="width:20%;float:left;">
    							<div id="fl3"></div>
    						</div>
    						<div style="width:20%;float:left;">
    							<div id="fl4"></div>
    						</div>
    						<div style="width:20%;float:left;">
    							<div id="fl5"></div>
    						</div>
    					</div>
    					<div id="form_container" style="clear:both;">
    						<div id="c1">
    							<h2 class="text-center push-50 push-50-t">Property Type</h2>
    							<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="property_type" value="house"/>
		    							{{ Html::image('img/property_type/house.png', 'House', array('style' => 'width: 100%')) }}
			    						<span>HOUSE</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="property_type" value="flat"/>
		    						{{ Html::image('img/property_type/flat.png', 'Flat', array('style' => 'width: 100%')) }}
			    						<span>FLAT</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="property_type" value="maisonette"/>
		    						{{ Html::image('img/property_type/maisonette.png', 'Maisonette', array('style' => 'width: 100%')) }}
			    						<span>MAISONETTE</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="property_type" value="bungalow"/>
		    						{{ Html::image('img/property_type/bungalow.png', 'Bungalow', array('style' => 'width: 100%')) }}
			    						<span>BUNGALOW</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="property_type" value="park"/>
		    						{{ Html::image('img/property_type/park home.png', 'Park Home', array('style' => 'width: 100%')) }}
			    						<span>PARK HOME</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="house" style="display:none;">
    							<h2 class="text-center push-50 push-50-t">Detachment</h2>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="detachment" value="Det"/>
		    							{{ Html::image('img/detachment/detached.png', 'Detached', array('style' => 'width:100%;')) }}
			    						<span>DETACHED</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="detachment" value="Semi"/>
		    						{{ Html::image('img/detachment/semi-detached.png', 'Semi-Detached', array('style' => 'width:100%;')) }}
			    						<span>SEMI-DETACHED</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="detachment" value="End-terrace"/>
		    						{{ Html::image('img/detachment/eng-terrace.png', 'End-Terrace', array('style' => 'width:100%;')) }}
			    						<span>END-TERRACE</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="detachment" value="Mid-terrace"/>
		    						{{ Html::image('img/detachment/mid-terrace.png', 'Mid-Terrace', array('style' => 'width:100%')) }}
			    						<span>MID-TERRACE</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="park" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">Size</h2>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="size" value="Single"/>
		    							{{ Html::image('img/size/single.png', 'Single', array('style' => 'width:100%;')) }}
			    						<span>Single</span>
			    					</label>
		    					</div>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="size" value="Double"/>
		    							{{ Html::image('img/size/double.png', 'Double', array('style' => 'width:100%;')) }}
			    						<span>Double</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="park_rooms" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">No of Bedrooms</h2>
    						</div>
    						<div id="flat" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">External Walls</h2>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="flat_walls" value="2"/>
		    						{{ Html::image('img/walls/2-.png', '2-', array('style' => 'width:100%')) }}
		    							<span>2-</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="flat_walls" value="3"/>
		    						{{ Html::image('img/walls/3+.png', '3+', array('style' => 'width:100%')) }}
		    							<span>3+</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="flat_rooms" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">No of Bedrooms</h2>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="flat_rooms" value="1"/>
		    						{{ Html::image('img/rooms/1.png', '1', array('style' => 'width:100%%;')) }}
			    						<span>1</span>
			    					</label>
		    					</div>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="flat_rooms" value="2"/>
		    						{{ Html::image('img/rooms/2.png', '2', array('style' => 'width:100%;')) }}
			    						<span>2</span>
			    					</label>
		    					</div>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="flat_rooms" value="3+"/>
		    						{{ Html::image('img/rooms/3.png', '3+', array('style' => 'width:100%;')) }}
			    						<span>3+</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="maisonette" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">External Walls</h2>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="maisonette_walls" value="2"/>
		    						{{ Html::image('img/walls/2-.png', '2-', array('style' => 'width:100%')) }}
		    							<span>2-</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="maisonette_walls" value="3"/>
		    						{{ Html::image('img/walls/3+.png', '3+', array('style' => 'width:100%')) }}
		    							<span>3+</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="maisonette_rooms" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">No of Bedrooms</h2>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="maisonette_rooms" value="2-"/>
		    						{{ Html::image('img/rooms/2.png', '2-', array('style' => 'width:100%;')) }}
			    						<span>2-</span>
			    					</label>
		    					</div>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="maisonette_rooms" value="3+"/>
		    						{{ Html::image('img/rooms/3.png', '3+', array('style' => 'width:100%;')) }}
			    						<span>3+</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="bungalow" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">Detachment</h2>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="bung_detachment" value="Det"/>
		    							{{ Html::image('img/detachment/detached.png', 'Detached', array('path' => 'bung_det', 'style' => 'width:100%;')) }}
			    						<span>DETACHED</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="bung_detachment" value="Semi/End"/>
		    						{{ Html::image('img/detachment/semi-detached.png', 'Semi-Detached', array('path' => 'bung_gen', 'style' => 'width:100%;')) }}
			    						<span>SEMI-DETACHED</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="bung_detachment" value="Semi/End2"/>
		    						{{ Html::image('img/detachment/eng-terrace.png', 'End-Terrace', array('path' => 'bung_gen', 'style' => 'width:100%;')) }}
			    						<span>END-TERRACE</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="bung_detachment" value="Mid"/>
		    						{{ Html::image('img/detachment/mid-terrace.png', 'Mid-Terrace', array('path' => 'bung_gen', 'style' => 'width:100%')) }}
			    						<span>MID-TERRACE</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="bung_det" style='display: none;'>
    							<h2 class="text-center push-50 push-50-t">No of Bedrooms</h2>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="bung_rooms" value="2-"/>
		    						{{ Html::image('img/rooms/2.png', '2-', array('style' => 'width:100%;')) }}
			    						<span>2-</span>
			    					</label>
    							</div>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="bung_rooms" value="3+"/>
		    						{{ Html::image('img/rooms/3.png', '3+', array('style' => 'width:100%;')) }}
			    						<span>3+</span>
			    					</label>
    							</div>
    						</div>
    						<div id="bung_gen" style='display: none;'>
    							<h2 class="text-center push-50 push-50-t">No of Bedrooms</h2>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="bung_rooms" value="1"/>
		    						{{ Html::image('img/rooms/1.png', '1', array('style' => 'width:100%;')) }}
			    						<span>1</span>
			    					</label>
    							</div>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="bung_rooms" value="2"/>
		    						{{ Html::image('img/rooms/2.png', '2', array('style' => 'width:100%;')) }}
			    						<span>2</span>
			    					</label>
    							</div>
    							<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="bung_rooms" value="3+"/>
		    						{{ Html::image('img/rooms/3.png', '3+', array('style' => 'width:100%;')) }}
			    						<span>3+</span>
			    					</label>
    							</div>
    							<div class="col-lg-3">
    							</div>
    						</div>
    						<div id="Det" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">No of Bedrooms</h2>
    							<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="det_rooms" value="2-"/>
		    						{{ Html::image('img/rooms/2.png', '2-', array('style' => 'width:100%;')) }}
			    						<span>2-</span>
			    					</label>
		    					</div>
		    					<div style="width:20%;float:left;padding:5px;">
			    					<label>
		    							<input type="radio" name="det_rooms" value="3"/>
		    						{{ Html::image('img/rooms/3.png', '3', array('style' => 'width:100%;')) }}
			    						<span>3</span>
			    					</label>
		    					</div>
		    					<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="det_rooms" value="4"/>
			    						{{ Html::image('img/rooms/4.png', '4', array('style' => 'width:100%;')) }}
			    						<span>4</span>
			    					</label>
		    					</div>
		    					<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="det_rooms" value="5"/>
			    						{{ Html::image('img/rooms/5.png', '5', array('style' => 'width:100%;')) }}
			    						<span>5</span>
			    					</label>
		    					</div>
		    					<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="det_rooms" value="6+"/>
			    						{{ Html::image('img/rooms/6.png', '6+', array('style' => 'width:100%;')) }}
			    						<span>6+</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="Semi" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">No of Bedrooms</h2>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="semi_rooms" value="2-"/>
		    						{{ Html::image('img/rooms/2.png', '2-', array('style' => 'width:100%;')) }}
			    						<span>2-</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
		    							<input type="radio" name="semi_rooms" value="3"/>
		    						{{ Html::image('img/rooms/3.png', '3', array('style' => 'width:100%;')) }}
			    						<span>3</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="semi_rooms" value="4"/>
			    						{{ Html::image('img/rooms/4.png', '4', array('style' => 'width:100%;')) }}
			    						<span>4</span>
			    					</label>
		    					</div>
		    					<div class="col-lg-3">
			    					<label>
			    						<input type="radio" name="semi_rooms" value="5+"/>
			    						{{ Html::image('img/rooms/5.png', '5+', array('style' => 'width:100%;')) }}
			    						<span>5+</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="End-terrace" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">No of Bedrooms</h2>
    							<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="end_rooms" value="1"/>
		    						{{ Html::image('img/rooms/1.png', '1', array('style' => 'width:100%;')) }}
			    						<span>1</span>
			    					</label>
		    					</div>
    							<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="end_rooms" value="2"/>
		    						{{ Html::image('img/rooms/2.png', '2', array('style' => 'width:100%;')) }}
			    						<span>2</span>
			    					</label>
		    					</div>
		    					<div style="width:20%;float:left;padding:5px;">
			    					<label>
		    							<input type="radio" name="end_rooms" value="3"/>
		    						{{ Html::image('img/rooms/3.png', '3', array('style' => 'width:100%;')) }}
			    						<span>3</span>
			    					</label>
		    					</div>
		    					<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="end_rooms" value="4"/>
			    						{{ Html::image('img/rooms/4.png', '4', array('style' => 'width:100%;')) }}
			    						<span>4</span>
			    					</label>
		    					</div>
		    					<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="end_rooms" value="5+"/>
			    						{{ Html::image('img/rooms/5.png', '5+', array('style' => 'width:100%;')) }}
			    						<span>5+</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="Mid-terrace" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">No of Bedrooms</h2>
    							<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="end_rooms" value="1"/>
		    						{{ Html::image('img/rooms/1.png', '1', array('style' => 'width:100%;')) }}
			    						<span>1</span>
			    					</label>
		    					</div>
    							<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="end_rooms" value="2"/>
		    						{{ Html::image('img/rooms/2.png', '2', array('style' => 'width:100%;')) }}
			    						<span>2</span>
			    					</label>
		    					</div>
		    					<div style="width:20%;float:left;padding:5px;">
			    					<label>
		    							<input type="radio" name="end_rooms" value="3"/>
		    						{{ Html::image('img/rooms/3.png', '3', array('style' => 'width:100%;')) }}
			    						<span>3</span>
			    					</label>
		    					</div>
		    					<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="end_rooms" value="4"/>
			    						{{ Html::image('img/rooms/4.png', '4', array('style' => 'width:100%;')) }}
			    						<span>4</span>
			    					</label>
		    					</div>
		    					<div style="width:20%;float:left;padding:5px;">
			    					<label>
			    						<input type="radio" name="end_rooms" value="5+"/>
			    						{{ Html::image('img/rooms/5.png', '5+', array('style' => 'width:100%;')) }}
			    						<span>5+</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="c2" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">Pre Main Heating Source</h2>
    							<div class="col-lg-2">
	    							<label>
			    						<input type="radio" name="pre_main_heating" value="Gas boiler"/>
			    						{{ Html::image('img/pmh/Gas Boiler.png', 'Gas boiler', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Gas boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="pre_main_heating" value="Electric storage heaters"/>
			    						{{ Html::image('img/pmh/Electric storage heaters.png', 'Electric storage heaters', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Electric storage heaters</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="pre_main_heating" value="LPG boiler"/>
			    						{{ Html::image('img/pmh/LPG Boiler.png', 'LPG boiler', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>LPG boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="pre_main_heating" value="Oil boiler"/>
			    						{{ Html::image('img/pmh/Oil Boiler.png', 'Oil boiler', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Oil boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="pre_main_heating" value="Solid fossil fuel boiler"/>
			    						{{ Html::image('img/pmh/Solid fossil fuel boiler.png', 'Solid fossil fuel boiler', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Solid fossil fuel boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="pre_main_heating" value="Electric boiler"/>
			    						{{ Html::image('img/pmh/Electric boiler.png', 'Electric boiler', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Electric boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="pre_main_heating" value="Electric room heaters"/>
			    						{{ Html::image('img/pmh/Electric room heaters.png', 'Electric room heaters', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Electric room heaters</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="pre_main_heating" value="Gas room heaters"/>
			    						{{ Html::image('img/pmh/Gas room heaters.png', 'Gas room heaters', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Gas room heaters</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="pre_main_heating" value="Solid fossil fuel room heaters"/>
			    						{{ Html::image('img/pmh/Solid fossil fuel room heaters.png', 'Solid fossil fuel room heaters', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Solid fossil fuel room heaters</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="pre_main_heating" value="Gas fire with back boiler"/>
			    						{{ Html::image('img/pmh/gas fire with back boiler.png', 'Gas fire with back boiler', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Gas fire with back boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="pre_main_heating" value="Gas back boiler to radiators"/>
			    						{{ Html::image('img/pmh/Gas back boiler to radiators.png', 'Gas back boiler to radiators', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Gas back boiler to radiators</span>
			    					</label>
			    				</div>
    						</div>
    						<div id="c3" style="display: none;">
    							<h2 class="text-center push-50 push-50-t">Post Main Heating Source</h2>
    							<div class="col-lg-2">
	    							<label>
			    						<input type="radio" name="post_main_heating" value="Gas boiler"/>
			    						{{ Html::image('img/pmh/Gas Boiler.png', 'Gas boiler', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Gas boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="post_main_heating" value="LPG boiler"/>
			    						{{ Html::image('img/pmh/LPG Boiler.png', 'LPG boiler', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>LPG boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="post_main_heating" value="Electric boiler"/>
			    						{{ Html::image('img/pmh/Electric boiler.png', 'Electric boiler', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Electric boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="post_main_heating" value="Biomass boiler"/>
			    						{{ Html::image('img/pmh/biomass boiler.png', 'Biomass boiler', array('style' => 'width:100%;margin:25px auto;')) }}
			    						<span>Biomass boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="post_main_heating" value="ASHP"/>
			    						{{ Html::image('img/pmh/ashp.png', 'ASHP', array('style' => 'width:100%;margin:25px auto;')) }}
			    						<span>ASHP</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="post_main_heating" value="GSHP"/>
			    						{{ Html::image('img/pmh/gshp.png', 'GSHP', array('style' => 'width:100%;margin:25px auto;')) }}
			    						<span>GSHP</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="post_main_heating" value="Oil boiler"/>
			    						{{ Html::image('img/pmh/Oil Boiler.png', 'Oil boiler', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>Oil boiler</span>
			    					</label>
			    				</div>
		    					<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="post_main_heating" value="N/A"/>
			    						{{ Html::image('img/pmh/n-a.png', 'N/A', array('style' => 'width:100%;margin:0 auto;')) }}
			    						<span>N/A</span>
			    					</label>
			    				</div>
    						</div>
    						<div id="c4" style="display:none;">
    							<h2 class="text-center push-50 push-50-t">Campaign Measure</h2>
    							<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="campaign_measure" value="Boiler"/>
		    							{{ Html::image('img/boiler.png', 'Boiler', array('style' => 'width:71%;margin:0 auto;')) }}
			    						<span>Boiler</span>
			    					</label>
		    					</div>
    							<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="campaign_measure" value="Cavity Wall Insulation"/>
		    							{{ Html::image('img/wall insulation.png', 'Cavity Wall Insulation', array('style' => 'width:71%;margin:0 auto;')) }}
			    						<span>Cavity Wall Insulation</span>
			    					</label>
		    					</div>
    							<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="campaign_measure" value="ESH"/>
		    							{{ Html::image('img/esh.png', 'ESH', array('style' => 'width:71%;margin:0 auto;')) }}
			    						<span>ESH</span>
			    					</label>
		    					</div>
    							<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="campaign_measure" value="Loft Insulation"/>
		    							{{ Html::image('img/loft insulation.png', 'Loft Insulation', array('style' => 'width:71%;margin:0 auto;')) }}
			    						<span>Loft Insulation</span>
			    					</label>
		    					</div>
    							<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="campaign_measure" value="Solid Wall Insulation"/>
		    							{{ Html::image('img/solid wall insulation.png', 'Solid Wall Insulation', array('style' => 'width:71%;margin:0 auto;')) }}
			    						<span>Solid Wall Insulation</span>
			    					</label>
		    					</div>
    							<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="campaign_measure" value="Micro-Generation"/>
		    							{{ Html::image('img/micro generation.png', 'Micro-Generation/Solar_PV', array('style' => 'width:71%;margin:0 auto;')) }}
			    						<span>Micro-Generation/Solar_PV</span>
			    					</label>
		    					</div>
    							<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="campaign_measure" value="Other Heating"/>
		    							{{ Html::image('img/other heating.png', 'Other Heating', array('style' => 'width:71%;margin:0 auto;')) }}
			    						<span>Other Heating</span>
			    					</label>
		    					</div>
    							<div class="col-lg-2">
			    					<label>
			    						<input type="radio" name="campaign_measure" value="Other Insulation"/>
		    							{{ Html::image('img/other insulation.png', 'Other Insulation', array('style' => 'width:71%;margin:0 auto;')) }}
			    						<span>Other Insulation</span>
			    					</label>
		    					</div>
    						</div>
    						<div id="boiler" style="display:none;">
    							<h2 class="text-center push-50 push-50-t">Boiler</h2>
    							<div id="b1">
    								<div class="form-group col-md-4">
    									<label class="1label" style="display: block;"><div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div></label>
									<label>Measure Type</label>
    									<select id="b1_choice" class="form-control">
    										<option value="">--</option>
    										<option value="Broken">Broken</option>
			    							<option value="First_time">First Time</option>
			    							<option value="Repair">Repair</option>
			    							<option value="Upgrade">Upgrade</option>
    									</select>
    								</div>
    							</div>
    							<div id="b2">
    								<div class="form-group col-md-4">
    									<label class="2label"><div class="alert alert-danger"><h3 class="font-w400">!</h3></div></label>
    									<select id="b2_choice" class="form-control">
    									</select>
    								</div>
    							</div>
    							<div id="b3" style="display: none;">
    								<div class="form-group col-md-4">
    									<label class="3label"><div class="alert alert-danger"><h3 class="font-w400">!</h3></div></label>
    									<select id="b3_choice" class="form-control">
    										<option value="">--</option>
		    								<option value="nopreHCs">nopreHCs</option>
		    								<option value="preHCs">preHCs</option>
    									</select>
    								</div>
    							</div>
    						</div>
    						<div id="cwi" style="display:none;">
    							<h2 class="text-center push-50 push-50-t">Cavity Wall Insulation</h2>
    							<div class='form-group col-md-4'>
									<label class="1label" style="display: block;"><div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div></label>
									<label>Measure Type</label>
    								<select id="cwi_choice" class="form-control">
    									<option value="">--</option>
    									<option value="CWI_0.040">CWI_0.040</option>
    									<option value="CWI_0.027">CWI_0.027</option>
    									<option value="CWI_0.033">CWI_0.033</option>
    									<option value="PWI_Cavity">PWI_Cavity</option>
    								</select>
    							</div>
    						</div>
    						<div id="esh" style="display:none;">
    							<h2 class="text-center push-50 push-50-t">ESH</h2>
    							<div class="col-md-4 form-group">
									<label class="1label" style="display: block;"><div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div></label>
									<label>Measure Type</label>
    								<select id="esh1_choice" class="form-control">
    									<option value="">--</option>
    									<option value="Broken">Broken</option>
    									<option value="Repair">Repair</option>
    									<option value="Upgrades">Upgrades</option>
    								</select>
    							</div>
    							<div class="col-md-4 form-group">
									<label class="2label"><div class="alert alert-danger"><h3 class="font-w400">!</h3></div></label>
    								<select id="esh2_choice" class="form-control">
    									<option value="">--</option>
    									<option value="fan">Fan</option>
    									<option value="HHR">HHR</option>
    								</select>
    							</div>
    							<div class="col-md-4 form-group">
									<label class="3label"><div class="alert alert-danger"><h3 class="font-w400">!</h3></div></label>
    								<select id="esh3_choice" class="form-control">
    									<option value="">--</option>
    									<option value="cavity">Cavity</option>
    									<option value="solid">Solid</option>
    								</select>
    							</div>
    						</div>
    						<div id="li" style="display:none;">
    							<h2 class="text-center push-50 push-50-t">Loft Insulation</h2>
    							<div class='form-group col-md-4'>
									<label class="1label" style="display: block;"><div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div></label>
									<label>Measure Type</label>
    								<select id="li_choice" class="form-control">
    									<option value="">--</option>
    									<option value="LI_lessequal100">LI_lessequal100</option>
    									<option value="LI_greater100">LI_greater100</option>
    								</select>
    							</div>
    						</div>
    						<div id="swi" style="display:none;">
    							<h2 class="text-center push-50 push-50-t">Solid Wall Insulation</h2>
    							<div class="col-md-3 form-group">
									<label class="1label" style="display: block;"><div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div></label>
									<label>Measure Type</label>
    								<select id="swi1_choice" class="form-control">
    									<option value="">--</option>
    									<option value="EWI">EWI</option>
    									<option value="IWI">IWI</option>
    								</select>
    							</div>
    							<div class="col-md-3 form-group">
									<label class="2label"><div class="alert alert-danger"><h3 class="font-w400">!</h3></div></label>
    								<select id="swi2_choice" class="form-control">
    									<option value="">--</option>
    									<option value="cavity">Cavity</option>
    									<option value="solid">Solid</option>
    								</select>
    							</div>
    							<div class="col-md-3 form-group">
									<label class="3label"><div class="alert alert-danger"><h3 class="font-w400">!</h3></div></label>
    								<select id="swi3_choice" class="form-control">
    									<option value="">--</option>
    									<option value="0.45">0.45</option>
    									<option value="0.6">0.6</option>
    									<option value="1">1</option>
    									<option value="1.7">1.7</option>
    									<option value="2">2</option>
    								</select>
    							</div>
    							<div class="col-md-3 form-group">
									<label class="4label"><div class="alert alert-danger"><h3 class="font-w400">!</h3></div></label>
    								<select id="swi4_choice" class="form-control">
    								</select>
    							</div>
    						</div>
    						<div id="oh" style="display:none;">
    							<h2 class="text-center push-50 push-50-t">Other Heating</h2>
								<div class="form-group col-md-4">
									<label class="1label" style="display: block;"><div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div></label>
									<label>Measure Type</label>
									<select id="oh_choice" class="form-control">
										<option value="">--</option>
										<option value="cavity">Cavity</option>
		    							<option value="solid">Solid</option>
									</select>
								</div>
    						</div>
    						<div id="oo" style="display:none;">
    							<h2 class="text-center push-50 push-50-t">Other Insulation</h2>
								<div class="form-group col-md-4">
									<label class="1label" style="display: block;"><div class="alert alert-danger"><h3 class="font-w400">Choose One!</h3></div></label>
									<label>Measure Type</label>
									<select id="oi_choice" class="form-control">
										<option value="">--</option>
										<option value="DP">DP</option>
										<option value="FRI">FRI</option>
										<option value="HPED_greater_60">HPED_greater_60</option>
										<option value="HPED_less_60">HPED_less_60</option>
										<option value="PHI_floor">PHI_floor</option>
										<option value="PHI_roof">PHI_roof</option>
										<option value="PHI_roof">PHI_roof</option>
										<option value="PHI_wall">PHI_wall</option>
										<option value="RIRI_res_in">RIRI_res_in</option>
										<option value="RIRI_res_unin">RIRI_res_unin</option>
										<option value="UFI">UFI</option>
										<option value="WG_improveddouble">WG_improveddouble</option>
										<option value="WG_singletodouble">WG_singletodouble</option>
									</select>
								</div>
    						</div>
    						<div id="c5" style="display: none;">
    							<form action="{{  URL::to('costscore/getcostscore') }}" method="post" style="text-align: center">
    								@csrf
    								<input type="hidden" id="cm" name="cm" value=""/>
		    						<input type="hidden" id="mt" name="mt" value=""/>
		    						<input type="hidden" id="pt" name="pt" value=""/>
		    						<input type="hidden" id="pmh" name="pmh" value=""/>
		    						<input type="hidden" id="pmh2" name="pmh2" value=""/>
		    						<button type="submit" class="btn btn-primary">Get Result</button>
    							</form>
    						</div>
    					</div>
			    	</div>
			    </div>
    		</div>
    	</div>
    </main>
</div>
@endsection