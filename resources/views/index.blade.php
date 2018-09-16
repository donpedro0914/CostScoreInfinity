@extends('layouts.app')

@section('content')
<div id="page-container" class="header-navbar-fixed">
	<header id="header-navbar" class="content-mini content-mini-full">
		<div class="text-center">
			<a class="h5" href="/">{{ Html::image('img/infinity-logo.jpg', 'Infinity Logo', array('class' => 'sidebar-mini-hide')) }}</a>
		</div>
	</header>
    <main id="main-container" style="min-height: 351px;">
    	<div class="content bg-gray-lighter">
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="block">
    					<div id="filter_container" style="display:none;">
    						<ul class="filter_list">
    							<li id="fl1"></li>
    							<li id="fl2"></li>
    							<li id="fl3"></li>
    							<li id="fl4"></li>
    							<li id="fl5"></li>
    							<li id="fl6"></li>
    						</ul>
    					</div>
				    	<div id="form_container">
				    		<ul class="form-steps">
				    			<li id="s1" class="active"><a>1. Campaign Measure</a></li>
				    			<li id="s2" class=""><a>2. Measure Type</a></li>
				    			<li id="s3" class=""><a>3. Property Type</a></li>
				    			<li id="s4" class=""><a>4. Pre Main Heating</a></li>
				    			<li id="s5" class=""><a>5. Post Main Heating</a></li>
				    			<li id="s6" class=""><a>6. Name of Uplift</a></li>
				    		</ul>
		    				<div id="c1" class="push-t-10">
		    					<label>
		    						<input type="radio" name="measure_category" value="Boiler"/>
		    						<span>Boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="measure_category" value="Cavity Wall Insulation"/>
		    						<span>Cavity Wall Insulation</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="measure_category" value="ESH"/>
		    						<span>ESH</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="measure_category" value="Loft Insulation"/>
		    						<span>Loft Insulation</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="measure_category" value="Solid Wall Insulation"/>
		    						<span>Solid Wall Insulation</span>
		    					</label>
		    				</div>
		    				<div id="c2" class="push-t-10" style="display: none;">
		    					<div id="mc_boiler" style="display:none;">
		    						<div class="col-md-4">
			    						<select id="mc_boiler1" class="form-control">
			    							<option value="">--</option>
			    							<option value="Broken">Broken</option>
			    							<option value="First_time">First Time</option>
			    							<option value="Repair">Repair</option>
			    							<option value="Upgrade">Upgrade</option>
			    						</select>
		    						</div>
		    						<div class="col-md-4" id="B_Broken_Repair_Upgrade" style="display:none;">
		    							<select id="mc_boiler2" class="form-control">
		    								<option value="cavity">Cavity</option>
		    								<option value="solid">Solid</option>
		    							</select>
		    						</div>
		    						<div class="col-md-4" id="B_First_time" style="display:none;">
		    							<select id="mc_boiler2" class="form-control">
		    								<option value="">--</option>
		    								<option value="CH_cavity">Cavity</option>
		    								<option value="CH_solid">Solid</option>
		    							</select>
		    						</div>
		    						<div class="col-md-4" id="B_Broken_Repair_Upgrade_Cavity_Solid" style="display:none;">
		    							<select id="mc_boiler3" class="form-control">
		    								<option value="">--</option>
		    								<option value="nopreHCs">nopreHCs</option>
		    								<option value="preHCs">preHCs</option>
		    							</select>
		    						</div>
		    					</div>
		    					<div id="mc_cwi" style="display:none;">
			    					<label>
			    						<input type="radio" name="property_type" value="CWI_0.040"/>
			    						<span>CWI_0.040</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="property_type" value="CWI_0.027"/>
			    						<span>CWI_0.027</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="property_type" value="CWI_0.033"/>
			    						<span>CWI_0.033</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="property_type" value="PWI_Cavity"/>
			    						<span>PWI_Cavity</span>
			    					</label>		    						
		    					</div>
		    					<div id="mc_esh" style="display:none;"></div>
		    					<div id="mc_li" style="display:none;"></div>
		    					<div id="mc_mg" style="display:none;"></div>
		    					<div id="mc_swi" style="display:none;"></div>
		    					<div id="mc_oi" style="display:none;"></div>
		    					<div id="mc_oh" style="display:none;"></div>
		    				</div>
		    				<div id="c3" class="push-t-10" style="display: none;">
		    					<div id="pt1">
			    					<label>
			    						<input type="radio" name="property_type" value="house"/>
			    						<span>House</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="property_type" value="flat"/>
			    						<span>Flat</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="property_type" value="maisonette"/>
			    						<span>Maisonette</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="property_type" value="bungalow"/>
			    						<span>Bungalow</span>
			    					</label>
			    				</div>
			    				<div id="h1" style="display: none;">
			    					<label>
			    						<input type="radio" name="h1_val" value="Det"/>
			    						<span>Detached</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="h1_val" value="Semi"/>
			    						<span>Semi-Detached</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="h1_val" value="End-terrace"/>
			    						<span>End-Terrace</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="h1_val" value="Mid-terrace"/>
			    						<span>Mid-Terrace</span>
			    					</label>
			    				</div>
			    				<div id="f1" style="display: none; ">
			    					<label>
			    						<input type="radio" name="f1_val" value="2"/>
			    						<span>2-</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="f1_val" value="3"/>
			    						<span>3+</span>
			    					</label>
			    				</div>
			    				<div id="m1" style="display: none; ">
			    					<label>
			    						<input type="radio" name="m1_val" value="2"/>
			    						<span>2-</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="m1_val" value="3"/>
			    						<span>3+</span>
			    					</label>
			    				</div>
			    				<div id="b1" style="display: none;">
			    					<label>
			    						<input type="radio" name="b1_val" value="Det"/>
			    						<span>Detached</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="b1_val" value="Semi/End"/>
			    						<span>Semi-Detached</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="b1_val" value="Semi/End"/>
			    						<span>End-Terrace</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="b1_val" value="Mid"/>
			    						<span>Mid-Terrace</span>
			    					</label>
			    				</div>
			    				<div id="f1_rooms" style="display: none;">
			    					<label>
			    						<input type="radio" name="f1_rooms" value="1"/>
			    						<span>1</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="f1_rooms" value="2"/>
			    						<span>2</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="f1_rooms" value="3+"/>
			    						<span>3+</span>
			    					</label>
			    				</div>
			    				<div id="m1_rooms" style="display: none;">
			    					<label>
			    						<input type="radio" name="m1_rooms" value="2-"/>
			    						<span>2-</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="m1_rooms" value="3+"/>
			    						<span>3+</span>
			    					</label>
			    				</div>
			    				<div id="bd_rooms" style="display: none;">
			    					<label>
			    						<input type="radio" name="bd_rooms" value="2-"/>
			    						<span>2-</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="bd_rooms" value="3+"/>
			    						<span>3+</span>
			    					</label>
			    				</div>
			    				<div id="bse_rooms" style="display: none;">
			    					<label>
			    						<input type="radio" name="bse_rooms" value="1"/>
			    						<span>1</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="bse_rooms" value="2"/>
			    						<span>2</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="bse_rooms" value="3+"/>
			    						<span>3+</span>
			    					</label>
			    				</div>
			    				<div id="det_rooms" style="display:none;">
			    					<label>
			    						<input type="radio" name="det_rooms" value="2-"/>
			    						<span>2-</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="det_rooms" value="3"/>
			    						<span>3</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="det_rooms" value="4"/>
			    						<span>4</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="det_rooms" value="5"/>
			    						<span>5</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="det_rooms" value="6+"/>
			    						<span>6+</span>
			    					</label>
			    				</div>
			    				<div id="semi_rooms" style="display:none;">
			    					<label>
			    						<input type="radio" name="semi_rooms" value="2-"/>
			    						<span>2-</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="semi_rooms" value="3"/>
			    						<span>3</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="semi_rooms" value="4"/>
			    						<span>4</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="semi_rooms" value="5+"/>
			    						<span>5+</span>
			    					</label>
			    				</div>
			    				<div id="end_terrace_rooms" style="display:none;">
			    					<label>
			    						<input type="radio" name="end_terrace_rooms" value="1"/>
			    						<span>1</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="end_terrace_rooms" value="2"/>
			    						<span>2</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="end_terrace_rooms" value="3"/>
			    						<span>3</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="end_terrace_rooms" value="4"/>
			    						<span>4</span>
			    					</label>
			    					<label>
			    						<input type="radio" name="end_terrace_rooms" value="5+"/>
			    						<span>5+</span>
			    					</label>
			    				</div>
		    				</div>
		    				<div id="c4" class="push-t-10" style="display: none;">
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="Gas boiler"/>
		    						<span>Gas boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="Electric storage heaters"/>
		    						<span>Electric storage heaters</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="LPG boiler"/>
		    						<span>LPG boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="Oil boiler"/>
		    						<span>Oil boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="Solid fossil fuel boiler"/>
		    						<span>Solid fossil fuel boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="Electric boiler"/>
		    						<span>Electric boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="Electric room heaters"/>
		    						<span>Electric room heaters</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="Gas room heaters"/>
		    						<span>Gas room heaters</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="Solid fossil fuel room heaters"/>
		    						<span>Solid fossil fuel room heaters</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="Gas fire with back boiler"/>
		    						<span>Gas fire with back boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="pre_main_heating" value="Gas back boiler to radiators"/>
		    						<span>Gas back boiler to radiators</span>
		    					</label>
		    				</div>
		    				<div id="c5" class="push-t-10" style="display: none;">
		    					<label>
		    						<input type="radio" name="post_main_heating" value="Gas boiler"/>
		    						<span>Gas boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="post_main_heating" value="LPG boiler"/>
		    						<span>LPG boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="post_main_heating" value="Electric boiler"/>
		    						<span>Electric boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="post_main_heating" value="Biomass boiler"/>
		    						<span>Biomass boiler</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="post_main_heating" value="ASHP"/>
		    						<span>ASHP</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="post_main_heating" value="GSHP"/>
		    						<span>GSHP</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="post_main_heating" value="Oil boiler"/>
		    						<span>Oil boiler</span>
		    					</label>
		    				</div>
		    				<div id="c6_broken" class="push-t-10" style="display: none;">
		    					<form id="getCostScoreForm_Broken">
		    						<input type="hidden" id="cm" name="cm" value=""/>
		    						<input type="hidden" id="mt" name="mt" value=""/>
		    						<input type="hidden" id="pt" name="pt" value=""/>
		    						<input type="hidden" id="pmh" name="pmh" value=""/>
		    						<input type="hidden" id="pmh2" name="pmh2" value=""/>
		    						<input type="hidden" id="nu" name="nu" value=""/>
		    						<button type="button" class="btn btn-primary" id="getCostScoreBtn_Broken">Submit</button>
		    					</form>
		    				</div>
		    				<div id="c6" class="push-t-10" style="display: none;">
		    					<label>
		    						<input type="radio" name="nu_val" value="N/A"/>
		    						<span>N/A</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="nu_val" value="LA_F&#38;G_nonPRS_insulation"/>
		    						<span>LA_F&G_nonPRS_insulation</span>
		    					</label>
		    					<label>
		    						<input type="radio" name="nu_val" value="nonmainsgas_insulation"/>
		    						<span>nonmainsgas_insulation</span>
		    					</label>
		    					<form id="getCostScoreForm_Broken">
		    						<input type="hidden" id="cm" name="cm" value=""/>
		    						<input type="hidden" id="mt" name="mt" value=""/>
		    						<input type="hidden" id="pt" name="pt" value=""/>
		    						<input type="hidden" id="pmh" name="pmh" value=""/>
		    						<input type="hidden" id="pmh2" name="pmh2" value=""/>
		    						<input type="hidden" id="nu" name="nu" value=""/>
		    						<button type="button" class="btn btn-primary" id="getCostScoreBtn">Submit</button>
		    					</form>
		    				</div>
		    				<div id="final_result" class="push-t-10" style="display: none;">
		    					<table class="table">
		    						<thead>
		    							<tr>
		    								<th>Cost Score</th>
		    								<th>Annual Savings</th>
		    								<th>L</th>
		    								<th>Uplift</th>
		    								<th>Average POPT Factor</th>
		    							</tr>
		    						</thead>
		    						<tbody>
		    							<tr>
		    								<td id="cs_val"></td>
		    								<td id="as_val"></td>
		    								<td id="l_val"></td>
		    								<td id="u_val"></td>
		    								<td id="av_val"></td>
		    							</tr>
		    						</tbody>
		    					</table>
		    				</div>
				    	</div>
			    	</div>
			    </div>
    		</div>
    	</div>
    </main>
</div>
@endsection