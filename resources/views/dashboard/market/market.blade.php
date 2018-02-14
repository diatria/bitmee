@extends('layout.dashboard')
@section('header')
<title id="ttbtcidr"></title>
@if($auth == false)
<coinmarket>{{strtolower($coin_info['type'])}}</coinmarket>
@endif
@endsection
@section('content')
@if($auth == false)
<div class="content">
	<div class="row">
		<div class="col-md-8">
			<div class="card bitnesia">
				<div class="market-graph-title">
					<div class="row">
						<div class="col-md-3 market-graph-ticker">
							<div class="market-graph-ticker-item">
								<table>
									<tr>
										<td class="market-graph-table-info-type">{{$coin_info['label']}}</td>
									</tr>
									<tr>
										<td class="market-graph-table-info-type-title">Saldo</td>
									</tr>
									<tr>
										<td class="market-graph-table-info-type-value">Rp. 12.000.000</td>
									</tr>
								</table>
							</div>
						</div>

						<div class="col-md-9 market-graph-ticker">
							<div class="market-graph-ticker-item rg">
								<table>
									<tr>
										<td class="market-graph-table-title">Change</td>
									</tr>
									<tr>
										<?php $market_percent = $market_prices[strtolower($coin_info['type'])]/$coin_price_24h[strtolower($coin_info['type'])]*100-100 ?>
										<td class="market-graph-table-value">
											<h5 id="graph-percent{{strtolower($coin_info['type'])}}-color"><i id="graph-percent{{strtolower($coin_info['type'])}}-icon"></i>
												<span id="graph-percent{{strtolower($coin_info['type'])}}">{{round($market_percent, 1)."%"}}</span>
											</h5>
										</td>
									</tr>
								</table>
							</div>
							<div class="market-col-line rg"></div>
							<div class="market-graph-ticker-item rg">
								<table>
									<tr>
										<td class="market-graph-table-title">Harga Terendah</td>
									</tr>
									<tr>
										@if($coin_info['curr'] == 'IDR')
											<td class="market-graph-table-value">{{App\Helper\NumberHelper::NumberFormat($coin_price['low'])}} IDR</td>
										@else
											<td class="market-graph-table-value">{{sprintf('%.8f', $coin_price['low'] / 100000000)}} BTC</td>
										@endif
									</tr>
								</table>
							</div>
							<div class="market-col-line rg"></div>
							<div class="market-graph-ticker-item rg">
								<table>
									<tr>
										<td class="market-graph-table-title">Harga Tertinggi</td>
									</tr>
									<tr>
										@if($coin_info['curr'] == 'IDR')
											<td class="market-graph-table-value">{{App\Helper\NumberHelper::NumberFormat($coin_price['high'])}} IDR</td>
										@else
											<td class="market-graph-table-value">{{sprintf('%.8f', $coin_price['high'] / 100000000)}} BTC</td>
										@endif
									</tr>
								</table>
							</div>
							<div class="market-col-line rg"></div>
							<div class="market-graph-ticker-item rg">
								<table>
									<tr>
										<td class="market-graph-table-title">Harga Terkini</td>
									</tr>
									<tr>
										@if($coin_info['curr'] == 'IDR')
											<td class="market-graph-table-value">{{App\Helper\NumberHelper::NumberFormat($coin_price['last_price'])}} IDR</td>
										@else
											<td class="market-graph-table-value">{{sprintf('%.8f', $coin_price['last_price'] / 100000000)}} BTC</td>
										@endif
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div>
					<div id="chartbtc" style="height: 300px; min-width: 310px"></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bitnesia">
				<div class="market-info-coin">
					<div class="market-info-coin-title">
						Market
					</div>
					<div class="market-info-coin-content">
						<div class="market-info-coin-content-title">
							<div class="market-line-table-content">
								<div class="block-title">Market</div>
								<div class="block-price">Price</div>
								<div class="block-value">Volume</div>
								<div class="block-change">Change</div>
							</div>
						</div>
						<hr>
						<div class="market-info-coin-content-value">
							<a href="{{url('market/btcidr')}}" class="market-line-table-content" id="linebtcidr">
								<div class="block-title">BTC/IDR</div>
								<div class="block-price" id="btcidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['btcidr'])}}</div>
								<div class="block-value" id="volbtcidr">0 IDR</div>
								<div class="block-change" id="percentbtcidr-color"><i id="percentbtcidr-icon"></i> <span class="percentbtcidr"></span></div>
							</a>
							<a href="{{url('market/bchidr')}}" class="market-line-table-content" id="linebchidr">
								<div class="block-title">BCH/IDR</div>
								<div class="block-price" id="bchidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['bchidr'])}}</div>
								<div class="block-value" id="volbchidr">0 IDR</div>
								<div class="block-change" id="percentbchidr-color"><i id="percentbchidr-icon"></i> <span class="percentbchidr"></span></div>
							</a>
							<a href="{{url('market/btgidr')}}" class="market-line-table-content" id="linebtgidr">
								<div class="block-title">BTG/IDR</div>
								<div class="block-price" id="btgidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['btgidr'])}}</div>
								<div class="block-value" id="volbtgidr">0 IDR</div>
								<div class="block-change" id="percentbtgidr-color"><i id="percentbtgidr-icon"></i> <span class="percentbtgidr"></span></div>
							</a>
							<a href="{{url('market/ethidr')}}" class="market-line-table-content" id="lineethidr">
								<div class="block-title">ETH/IDR</div>
								<div class="block-price" id="ethidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['ethidr'])}}</div>
								<div class="block-value" id="volethidr">0 IDR</div>
								<div class="block-change" id="percentethidr-color"><i id="percentethidr-icon"></i> <span class="percentethidr"></span></div>
							</a>
							<a href="{{url('market/etcidr')}}" class="market-line-table-content" id="lineetcidr">
								<div class="block-title">ETC/IDR</div>
								<div class="block-price" id="etcidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['etcidr'])}}</div>
								<div class="block-value" id="voletcidr">0 IDR</div>
								<div class="block-change" id="percentetcidr-color"><i id="percentetcidr-icon"></i> <span class="percentetcidr"></span></div>
							</a>
							<a href="{{url('market/ignisidr')}}" class="market-line-table-content" id="lineignisidr">
								<div class="block-title">IGNIS/IDR</div>
								<div class="block-price" id="ignisidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['ignisidr'])}}</div>
								<div class="block-value" id="volignisidr">0 IDR</div>
								<div class="block-change" id="percentignisidr-color"><i id="percentignisidr-icon"></i> <span class="percentignisidr"></span></div>
							</a>
							<a href="{{url('market/ltcidr')}}" class="market-line-table-content" id="lineltcidr">
								<div class="block-title">LTC/IDR</div>
								<div class="block-price" id="ltcidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['ltcidr'])}}</div>
								<div class="block-value" id="volltcidr">0 IDR</div>
								<div class="block-change" id="percentltcidr-color"><i id="percentltcidr-icon"></i> <span class="percentltcidr"></span></div>
							</a>
							<a href="{{url('market/nxtidr')}}" class="market-line-table-content" id="linenxtidr">
								<div class="block-title">NXT/IDR</div>
								<div class="block-price" id="nxtidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['nxtidr'])}}</div>
								<div class="block-value" id="volnxtidr">0 IDR</div>
								<div class="block-change" id="percentnxtidr-color"><i id="percentnxtidr-icon"></i> <span class="percentnxtidr"></span></div>
							</a>
							<a href="{{url('market/wavesidr')}}" class="market-line-table-content" id="linewavesidr">
								<div class="block-title">WAVES/IDR</div>
								<div class="block-price" id="wavesidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['wavesidr'])}}</div>
								<div class="block-value" id="volwavesidr">0 IDR</div>
								<div class="block-change" id="percentwavesidr-color"><i id="percentwavesidr-icon"></i> <span class="percentwavesidr"></span></div>
							</a>
							<a href="{{url('market/stridr')}}" class="market-line-table-content" id="linestridr">
								<div class="block-title">XLM/IDR</div>
								<div class="block-price" id="stridr">{{App\Helper\NumberHelper::NumberFormat($market_prices['stridr'])}}</div>
								<div class="block-value" id="volstridr">0 IDR</div>
								<div class="block-change" id="percentstridr-color"><i id="percentstridr-icon"></i> <span class="percentstridr"></span></div>
							</a>
							<a href="{{url('market/xrpidr')}}" class="market-line-table-content" id="linexrpidr">
								<div class="block-title">XRP/IDR</div>
								<div class="block-price" id="xrpidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['xrpidr'])}}</div>
								<div class="block-value" id="volxrpidr">0 IDR</div>
								<div class="block-change" id="percentxrpidr-color"><i id="percentxrpidr-icon"></i> <span class="percentxrpidr"></span></div>
							</a>
							<a href="{{url('market/xzcidr')}}" class="market-line-table-content" id="linexzcidr">
								<div class="block-title">XZC/IDR</div>
								<div class="block-price" id="xzcidr">{{App\Helper\NumberHelper::NumberFormat($market_prices['xzcidr'])}}</div>
								<div class="block-value" id="volxzcidr">0 IDR</div>
								<div class="block-change" id="percentxzcidr-color"><i id="percentxzcidr-icon"></i> <span class="percentxzcidr"></span></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@else
<div class="content">
	<div class="row">
		{!!$response!!}
	</div>
</div>
@endif
@endsection
@section('footer')
<script src="{{url('js/jquery-ui.min.js')}}"></script>
<script src="{{url('js/socket.min.js')}}"></script>
<script src="{{url('js/ihr.min.js')}}"></script>
<script src="{{url('js/bitnesia/market.js')}}"></script>
<script>
	
</script>
@endsection