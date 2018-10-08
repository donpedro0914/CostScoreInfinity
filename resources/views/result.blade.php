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
    					<table class="table">
    						<thead>
    							<tr>
    								<th>Name of Uplift</th>
    								<th>Cost Score</th>
    								<th>Annual Savings</th>
    								<th>L</th>
    								<th>Uplift</th>
    								<th>Average POPT Factor</th>
    							</tr>
    						</thead>
    						<tbody>
    							@forelse($costscore as $cs)
    							<tr>
    								<td id="cs_val">{{ $cs->name_of_uplift }}</td>
    								<td id="cs_val">{{ $cs->cost_score }}</td>
    								<td id="as_val">{{ $cs->annual_saving }}</td>
    								<td id="l_val">{{ $cs->l }}</td>
    								<td id="u_val">{{ $cs->uplift }}</td>
    								<td id="av_val">{{ $cs->average_popt_factor }}</td>
    							</tr>
    							@empty
                                <tr>
                                    <td colspan="6" class="text-center"><p style="font-size: 20px;" class="text-danger font-w700">No Result!<br><br><span>*** The combination you have chosen does not result on a cost score, please try again***</span></p><a href="/"><button type="button" class="btn btn-primary">Try Again</button></a></td>
                                </tr>
                                @endforelse
                                @if(!empty($costscore))
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <a href="/"><button type="button" class="btn btn-primary">Calculate Again</button></a>
                                    </td>
                                </tr>
                                @endif
    						</tbody>
    					</table>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>
@endsection