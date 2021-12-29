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
var_dump($chart7);
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
						<div class="alert-title">TRANSFORMASI ORGANISASI</div>
						TAHAP 01
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-3">
			<div class="card card-danger">
				<div class="card-body">
					<div class="alert alert-info">
						<div class="alert-title">TRANSFORMASI MANAJEMEN KERJA</div>
						TAHAP 02
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-3">
			<div class="card card-danger">
				<div class="card-body">
					<div class="alert alert-warning">
						<div class="alert-title">TRANSFORMASI JABATAN</div>
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
					<div class="panel-heading"> <h6 class="panel-title"></span> </h6> </div> 
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
								$this->registerJs("var obj_div=$('#chart1'); gen_donut(obj_div,'PROSES VERIFIKASI',$js_cc1); ");
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
				<h4></h4>
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
					<div class="panel-heading"> <h3 class="panel-title"><span class="glyphicon glyphicon glyphicon-signal"></span> </h3> </div> 
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
								$this->registerJs("var obj_div=$('#chart2'); gen_donut(obj_div,'Belum Mengajukan',$js_cc1); ");
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
			<h4></h4>
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
				<div class="panel-heading"> <h3 class="panel-title"><span class="glyphicon glyphicon glyphicon-signal"></span></h3> </div> 
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
							$this->registerJs("var obj_div=$('#chart3'); gen_donut(obj_div,'Menolak',$js_cc1); ");
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
			<h4></h4>
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
				<div class="panel-heading"> <h4 class="panel-title"><span class="glyphicon glyphicon glyphicon-signal"></span> </h4> </div> 
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
							$this->registerJs("var obj_div=$('#chart4'); gen_donut(obj_div,'Total Pengajuan',$js_cc1); ");
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


<!-- chart5 -->
<div class="col">
<div class="col-12 col-md-6 col-lg-3">
	<div class="card">
		<div class="card-header">
			<h4></h4>
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
				<div class="panel-heading"> <h3 class="panel-title"><span class="glyphicon glyphicon glyphicon-signal"></span> </h3> </div> 
				<div class="panel-body">
					<!--row1 -->
					<div class="row">
						<!-- col1--->
						<div class="col-md-3" style="text-align: center;">
							<?php
							$data1 = [];
							for ($i = 0; $i < count($chart5); $i++) {
								$data1[] = $chart5[$i]['cc_hn'];
							}
							$js_cc1 = implode(",", $data1);
							$this->registerJs("var obj_div=$('#chart5'); gen_donut(obj_div,'Selesai',$js_cc1); ");
							?>
							<div id="chart5" style="width: 300px; height: 200px; float: left"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
</div>

<!--  chart6-->
<?php
echo Highcharts::widget([
    'scripts' => [
        'modules/exporting',
        'themes/grid-light',
    ],
    'options' => [
        'title' => [
            'text' => 'Rekapitulasi ASN Pusat',
        ],
        'xAxis' => [
           // 'categories' => ['Apples', 'Oranges', 'Pears', 'Bananas', 'Plums'],
        	'categories' => $chart6
        ],
        'labels' => [
            'items' => [
                [
                    'html' => 'Total ',
                    'style' => [
                        'left' => '50px',
                        'top' => '18px',
                        'color' => new JsExpression('(Highcharts.theme && Highcharts.theme.textColor) || "black"'),
                    ],
                ],
            ],
        ],
        'series' => [
            [
                'type' => 'column',
                'name' => 'KEMENTERIAN',
                'data' => [2, 3, 5, 7],
            ],
            [
                'type' => 'column',
                'name' => 'Lembaga Negara',
                'data' => [2, 3, 5, 7],
            ],
            [
                'type' => 'column',
                'name' => 'Lembaga NonStruktural',
                'data' => [4, 3, 3, 9],
            ],
            [
                'type' => 'column',
                'name' => 'Lembaga Penyiaran',
                'data' => [4, 3, 3, 9],
            ],
               [
                'type' => 'column',
                'name' => 'LPNK',
                'data' => [4, 3, 3, 9],
            ],
            [
                'type' => 'column',
                'name' => 'ALAT NEGARA',
                'data' => [4, 3, 3, 9],
            ],
            [
                'type' => 'column',
                'name' => 'Lembaga Pemerintah',
                'data' => [4, 3, 3, 9],
            ],

            [
                'type' => 'spline',
                'name' => 'Average',
                'data' => [3, 2.67, 3, 6.33],
                'marker' => [
                    'lineWidth' => 2,
                    'lineColor' => new JsExpression('Highcharts.getOptions().colors[3]'),
                    'fillColor' => 'white',
                ],
            ],
            [
                'type' => 'pie',
                'name' => 'Total Pengajuan',
                'data' => [
                    [
                        'name' => 'KEMENTERIAN',
                        'y' => 13,
                        'color' => new JsExpression('Highcharts.getOptions().colors[0]'), // Jane's color
                    ],
                    [
                        'name' => 'Lembaga Negara',
                        'y' => 23,
                        'color' => new JsExpression('Highcharts.getOptions().colors[1]'), // John's color
                    ],
                    [
                        'name' => 'Lembaga NonStruktural',
                        'y' => 19,
                        'color' => new JsExpression('Highcharts.getOptions().colors[2]'), // Joe's color
                    ],
                    [
                        'name' => 'Lembaga Penyiaran',
                        'y' => 13,
                        'color' => new JsExpression('Highcharts.getOptions().colors[3]'), // Jane's color
                    ],
                    [
                        'name' => 'LPNK',
                        'y' => 23,
                        'color' => new JsExpression('Highcharts.getOptions().colors[4]'), // John's color
                    ],
                    [
                        'name' => 'ALAT NEGARA',
                        'y' => 19,
                        'color' => new JsExpression('Highcharts.getOptions().colors[5]'), // Joe's color
                    ],
                    [
                        'name' => 'Lembaga Pemerintah',
                        'y' => 19,
                        'color' => new JsExpression('Highcharts.getOptions().colors[6]'), // Joe's color
                    ],
                ],
                'center' => [100, 80],
                'size' => 100,
                'showInLegend' => false,
                'dataLabels' => [
                    'enabled' => false,
                ],
            ],
        ],
    ]
]);
?>



<!--  chart6-->
<!-- <div class="row">

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
					<p>
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
			$this->registerJsFile('@web/js/chart-spedo.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
			?>
			<div class="panel panel-default"> 
				<div class="panel-heading"> <h3 class="panel-title"><span class="glyphicon glyphicon glyphicon-signal"></span> </h3> </div> 
				<div class="panel-body">
					<!--row1 -->
					<div class="row">
						<!-- col1--->
						<div class="col-md-3" style="text-align: center;">
							<?php
							$data1 = [];
							for ($i = 0; $i < count($chart5); $i++) {
								$data1[] = $chart5[$i]['cc_hn'];
							}
							$js_cc1 = implode(",", $data1);
							$this->registerJs("var obj_div=$('#chart5'); gen_donut(obj_div,'Selesai',$js_cc1); ");
							?>
							<div id="chart5" style="width: 300px; height: 200px; float: left"></div>


					</p>
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
 -->


