<?php

use yii\helpers\Html;
use hscstudio\mimin\components\Mimin;

use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;

// $this->registerCSSFile('css/metro-all.css');
// $this->registerCSSFile('css/start.css');
// $this->registerJSFile(Yii::$app->homeUrl.'js/metro.min.js', ['depends' => [yii\web\JqueryAsset::className()]]);
// $this->registerJSFile(Yii::$app->homeUrl.'js/start.js', ['depends' => [yii\web\JqueryAsset::className()]]);
/* @var $this yii\web\View */
/* @var $this yii\web\View */

?>
<div class="container-fluid start-screen no-scroll-y h-100">

	<h2 class="section-title">TAHAPAN PENYEDERHANAAN BIROKRASI</h2>
	<p class="section-lead">
		............
	</p>

	<div class="row sortable-card">
		<div class="col-12 col-md-6 col-lg-3">
			<div class="card card-danger">
				<div class="card-body">
					<div class="alert alert-success">
						<div class="alert-title">PENYEDERHANAAN BIROKRASI</div>
						TAHAP 01
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-3">
			<div class="card card-danger">
				<div class="card-body">
					<div class="alert alert-info">
						<div class="alert-title">PENYETARAAN JABATAN</div>
						TAHAP 02
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-3">
			<div class="card card-danger">
				<div class="card-body">
					<div class="alert alert-warning">
						<div class="alert-title">PEMBAHARUAN MANAJEMEN KERJA</div>
						TAHAP 03
					</div>
				</div>
			</div>
		</div>

	</div>




</section>



<div class="row">
	<div class="col">


	<!--  chart1-->

	<div class="col-12 col-md-6 col-lg-3">
		<div class="card">
			<div class="card-header">
				<h4>Status Usulan</h4>
			</div>
			<div class="card-body1">

				<div style='display: none'>
					<?=
					Highcharts::widget([
						'scripts' => [
							'highcharts-more',
            //'themes/grid',
          //  'modules/exporting',
							'modules/solid-gauge',
						]
					]);
					?>
				</div> 
				<?php
//$webroot = Yii::$app->request->BaseUrl;
				$this->registerJsFile('@web/js/chart-donut.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
				?>
				<div class="panel panel-default"> 
					<div class="panel-heading"> <h6 class="panel-title"></span> Proses Verifikasi</h6> </div> 
					<div class="panel-body">
						<!--row1 -->
						<div class="row">
							<!-- col1--->
							<div class="col-md-3" style="text-align: center;">
								<?php
								$data1 = [];
								for ($i = 0; $i < count($chart1); $i++) {
									$data1[] = $chart1[$i]['cc_hn'];
								}
								$js_cc1 = implode(",", $data1);
								$this->registerJs("var obj_div=$('#chart1'); gen_donut(obj_div,'PAN-RB',$js_cc1); ");
								?>
								<div id="chart1" style="width: 300px; height: 200px; float: left"></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>


	<!-- chart2 -->

<div class="col">
	<div class="col-12 col-md-6 col-lg-3">
		<div class="card">
			<div class="card-header">
				<h4>Status Usulan</h4>
			</div>
			<div class="card-body1">

				<div style='display: none'>
					<?=
					Highcharts::widget([
						'scripts' => [
							'highcharts-more',
            //'themes/grid',
          //  'modules/exporting',
							'modules/solid-gauge',
						]
					]);
					?>
				</div> 
				<?php
//$webroot = Yii::$app->request->BaseUrl;
				$this->registerJsFile('@web/js/chart-donut.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
				?>
				<div class="panel panel-default"> 
					<div class="panel-heading"> <h3 class="panel-title"><span class="glyphicon glyphicon glyphicon-signal"></span> Belum Mengajukan</h3> </div> 
					<div class="panel-body">
						<!--row1 -->
						<div class="row">
							<!-- col1--->
							<div class="col-md-3" style="text-align: center;">
								<?php
								$data1 = [];
								for ($i = 0; $i < count($chart2); $i++) {
									$data1[] = $chart2[$i]['cc_hn'];
								}
								$js_cc1 = implode(",", $data1);
								$this->registerJs("var obj_div=$('#chart2'); gen_donut(obj_div,'PAR-RB',$js_cc1); ");
								?>
								<div id="chart2" style="width: 300px; height: 200px; float: left"></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>


<!-- chart3 -->
<div class="col">

<div class="col-12 col-md-6 col-lg-3">
	<div class="card">
		<div class="card-header">
			<h4>Status Usulan</h4>
		</div>
		<div class="card-body1">

			<div style='display: none'>
				<?=
				Highcharts::widget([
					'scripts' => [
						'highcharts-more',
            //'themes/grid',
          //  'modules/exporting',
						'modules/solid-gauge',
					]
				]);
				?>
			</div> 
			<?php
//$webroot = Yii::$app->request->BaseUrl;
			$this->registerJsFile('@web/js/chart-donut.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
			?>
			<div class="panel panel-default"> 
				<div class="panel-heading"> <h3 class="panel-title"><span class="glyphicon glyphicon glyphicon-signal"></span> Menolak</h3> </div> 
				<div class="panel-body">
					<!--row1 -->
					<div class="row">
						<!-- col1--->
						<div class="col-md-3" style="text-align: center;">
							<?php
							$data1 = [];
							for ($i = 0; $i < count($chart3); $i++) {
								$data1[] = $chart3[$i]['cc_hn'];
							}
							$js_cc1 = implode(",", $data1);
							$this->registerJs("var obj_div=$('#chart3'); gen_donut(obj_div,'PAR-RB',$js_cc1); ");
							?>
							<div id="chart3" style="width: 300px; height: 200px; float: left"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
</div>


<!-- chart4 -->
<div class="col">
<div class="col-12 col-md-6 col-lg-3">
	<div class="card">
		<div class="card-header">
			<h4>Total Usulan</h4>
		</div>
		<div class="card-body1">

			<div style='display: none'>
				<?=
				Highcharts::widget([
					'scripts' => [
						'highcharts-more',
            //'themes/grid',
          //  'modules/exporting',
						'modules/solid-gauge',
					]
				]);
				?>
			</div> 
			<?php
//$webroot = Yii::$app->request->BaseUrl;
			$this->registerJsFile('@web/js/chart-donut.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
			?>
			<div class="panel panel-default"> 
				<div class="panel-heading"> <h3 class="panel-title"><span class="glyphicon glyphicon glyphicon-signal"></span> Mengajukan</h3> </div> 
				<div class="panel-body">
					<!--row1 -->
					<div class="row">
						<!-- col1--->
						<div class="col-md-3" style="text-align: center;">
							<?php
							$data1 = [];
							for ($i = 0; $i < count($chart4); $i++) {
								$data1[] = $chart4[$i]['cc_hn'];
							}
							$js_cc1 = implode(",", $data1);
							$this->registerJs("var obj_div=$('#chart4'); gen_donut(obj_div,'PAR-RB',$js_cc1); ");
							?>
							<div id="chart4" style="width: 300px; height: 200px; float: left"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
</div>


<div class="row">

	<h2 class="section-title">Sortable Card</h2>
	<p class="section-lead">
		Other cool cards, this one can be sorted.
	</p>

	<div class="row sortable-card">
		<div class="col-12 col-md-6 col-lg-3">
			<div class="card card-primary">
				<div class="card-header">
					<h4>Card Header</h4>
				</div>
				<div class="card-body">
					<p>Card <code>.card-primary</code></p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-3">
			<div class="card card-secondary">
				<div class="card-header">
					<h4>Card Header</h4>
				</div>
				<div class="card-body">
					<p>Card <code>.card-secondary</code></p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-3">
			<div class="card card-danger">
				<div class="card-header">
					<h4>Card Header</h4>
				</div>
				<div class="card-body">
					<p>Card <code>.card-danger</code></p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-3">
			<div class="card card-warning">
				<div class="card-header">
					<h4>Card Header</h4>
				</div>
				<div class="card-body">
					<p>Card <code>.card-warning</code></p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

</div>



