<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "DASHBOARD RISIKO KORPORAT")) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <div class="page-container">

                <div class="row">
                    <div class="col-lg-12">
                    <body onload="doOnLoad()">
                        <h2><center>DASHBOARD RISIKO KORPORAT</center></h2>
                        <div style="clear:left"></div>
                        <h5 style="font-size: 24px; margin-left: 10px;">Kamus Risiko</h5>
                        <div id="gridbox_korporat" style="margin-top:5px;width:100%; height:600px; background-color:white;"></div>
                        <br>
                        <div><h3>Peta Risiko ERI/ERSK</h3></div>
                        <div id="chartdiv" style="height: 500px;"></div>

                        <script>
                            var myGrid;
                            var myDataProcessor;

                            function doOnLoad() {
                                myGrid = new dhtmlXGridObject('gridbox_korporat');
                                myGrid.setImagePath("<?= base_url('assets/codebase/imgs/'); ?>");
                                myGrid.setHeader("No,Sasaran,Kategori Risiko,Peristiwa Risiko,Penyebab,KRI,PIC,Threshold,#cspan,#cspan,Nilai Threshold, Realisasi Oktober 2024,Status", null, [
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em",
                                    "text-align:center;vertical-align:middle;font-size: 0.8em"
                                ]);
                                myGrid.setInitWidths("30,100,100,100,150,200,100,100,100,100,100,200,100");
                                myGrid.setColAlign("center,center,center,center,center,center,center,center,center,center,center,center,center");
                                myGrid.setColTypes("ron,ron,ron,ron,ron,ron,ron,ro,ro,ro,ron,ron,ron");
                                myGrid.enableMultiline(true);
                                myGrid.init();
                                myGrid.sortRows(1);
                                myGrid.setPagingSkin("bricks");
                                myGrid.enableRowspan(true);
                                myGrid.enableColSpan(true);
                                myGrid.enableStableSorting(false);
                                myGrid.attachEvent("onXLE", showLoading);
                                myGrid.attachEvent("onXLS", function() { showLoading(true); });
                                myGrid.enableRowsHover(true, "hover");

                                myGrid.load("<?= base_url('home/data_monitoringkri_das'); ?>", function() {
                                    myGrid.attachHeader("#rspan,#rspan,#rspan,#rspan,#rspan,#rspan,#rspan,AMAN,HATI-HATI,BAHAYA,#rspan,#rspan,#rspan",
                                        [
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em",
                                            "text-align:center;vertical-align:middle;font-size: 0.8em"
                                        ]);
                                    myGrid.setSizes();
                                });
                            }

                            function showLoading(fl) {
                                if (fl === true)
                                    $("#loading").show();
                                else
                                    $("#loading").hide();
                            }

                            function RefreshData() {
                                myGrid.clearAndLoad('<?= base_url("home/data_monitoringkri_das"); ?>');
                            }

                            $(document).ready(function () {
                                // Additional JavaScript code
                            });

                            // amCharts Code
                            am5.ready(function() {
                                var root = am5.Root.new("chartdiv");
                                root.setThemes([am5themes_Animated.new(root)]);

                                var chart = root.container.children.push(
                                    am5xy.XYChart.new(root, {
                                        panX: false,
                                        panY: false,
                                        wheelX: "none",
                                        wheelY: "none",
                                        paddingLeft: 0,
                                        paddingRight: 0,
                                        layout: root.verticalLayout
                                    })
                                );

                                var yRenderer = am5xy.AxisRendererY.new(root, {
                                    visible: false,
                                    minGridDistance: 20,
                                    inversed: true,
                                    minorGridEnabled: true
                                });
                                yRenderer.grid.template.set("visible", false);

                                var yAxis = chart.yAxes.push(
                                    am5xy.CategoryAxis.new(root, {
                                        renderer: yRenderer,
                                        categoryField: "category"
                                    })
                                );

                                var xRenderer = am5xy.AxisRendererX.new(root, {
                                    visible: false,
                                    minGridDistance: 30,
                                    inversed: true,
                                    minorGridEnabled: true
                                });
                                xRenderer.grid.template.set("visible", false);

                                var xAxis = chart.xAxes.push(
                                    am5xy.CategoryAxis.new(root, {
                                        renderer: xRenderer,
                                        categoryField: "category"
                                    })
                                );

                                var series = chart.series.push(
                                    am5xy.ColumnSeries.new(root, {
                                        calculateAggregates: true,
                                        stroke: am5.color(0xffffff),
                                        clustered: false,
                                        xAxis: xAxis,
                                        yAxis: yAxis,
                                        categoryXField: "x",
                                        categoryYField: "y",
                                        valueField: "value"
                                    })
                                );

                                series.columns.template.setAll({
                                    tooltipText: "{value}",
                                    strokeOpacity: 1,
                                    strokeWidth: 2,
                                    cornerRadiusTL: 5,
                                    cornerRadiusTR: 5,
                                    cornerRadiusBL: 5,
                                    cornerRadiusBR: 5,
                                    width: am5.percent(100),
                                    height: am5.percent(100),
                                    templateField: "columnSettings"
                                });

                                var circleTemplate = am5.Template.new({});

                                series.set("heatRules", [{
                                    target: circleTemplate,
                                    min: 10,
                                    max: 35,
                                    dataField: "value",
                                    key: "radius"
                                }]);

                                series.bullets.push(function() {
                                    return am5.Bullet.new(root, {
                                        sprite: am5.Circle.new(root, {
                                            fill: am5.color(0x000000),
                                            fillOpacity: 0.5,
                                            strokeOpacity: 0
                                        }, circleTemplate)
                                    });
                                });

                                series.bullets.push(function() {
                                    return am5.Bullet.new(root, {
                                        sprite: am5.Label.new(root, {
                                            fill: am5.color(0xffffff),
                                            populateText: true,
                                            centerX: am5.p50,
                                            centerY: am5.p50,
                                            fontSize: 10,
                                            text: "{value}"
                                        })
                                    });
                                });

                                var colors = {
                                    critical: am5.color(0xca0101),
                                    bad: am5.color(0xe17a2d),
                                    medium: am5.color(0xe1d92d),
                                    good: am5.color(0x5dbe24),
                                    verygood: am5.color(0x0b7d03)
                                };

                                var data = [
                                    // Your data here...
                                ];

                                series.data.setAll(data);

                                yAxis.data.setAll([
                                    { category: "Hampir Pasti Terjadi" },
                                    { category: "Sangat Mungkin Terjadi" },
                                    { category: "Bisa Terjadi" },
                                    { category: "Jarang Terjadi" },
                                    { category: "Sangat Jarang Terjadi" }
                                ]);

                                xAxis.data.setAll([
                                    { category: "Sangat Tinggi" },
                                    { category: "Tinggi" },
                                    { category: "Moderat" },
                                    { category: "Rendah" },
                                    { category: "Sangat Rendah" }
                                ]);

                                chart.appear(1000, 100);
                            });
                        </script>
                        </body>
                    </div>
                </div> <!-- end row -->

            </div> <!-- container -->

            <?= $this->include('partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?= $this->include('partials/customizer') ?>

    <?= $this->include('partials/footer-scripts') ?>

    <!-- Bootstrap Wizard Form js -->
    <script src="/vendor/vanilla-wizard/js/wizard.min.js"></script>

    <!-- Wizard Form Demo js -->
    <script src="/js/components/form-wizard.js"></script>

    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Peta Risiko ERI/ERSK -->
    <script>
		am5.ready(function() {

		// Create root element
		// https://www.amcharts.com/docs/v5/getting-started/#Root_element
		var root = am5.Root.new("chartdiv");

		// Set themes
		// https://www.amcharts.com/docs/v5/concepts/themes/
		root.setThemes([
		am5themes_Animated.new(root)
		]);

		// Create chart
		// https://www.amcharts.com/docs/v5/charts/xy-chart/
		var chart = root.container.children.push(
		am5xy.XYChart.new(root, {
			panX: false,
			panY: false,
			wheelX: "none",
			wheelY: "none",
			paddingLeft: 0,
			paddingRight: 0,
			layout: root.verticalLayout
		})
		);

		// Create axes and their renderers
		var yRenderer = am5xy.AxisRendererY.new(root, {
		visible: false,
		minGridDistance: 20,
		inversed: true,
		minorGridEnabled: true
		});

		yRenderer.grid.template.set("visible", false);

		var yAxis = chart.yAxes.push(
		am5xy.CategoryAxis.new(root, {
			renderer: yRenderer,
			categoryField: "category"
		})
		);

		var xRenderer = am5xy.AxisRendererX.new(root, {
		visible: false,
		minGridDistance: 30,
		inversed: true,
		minorGridEnabled: true
		});

		xRenderer.grid.template.set("visible", false);

		var xAxis = chart.xAxes.push(
		am5xy.CategoryAxis.new(root, {
			renderer: xRenderer,
			categoryField: "category"
		})
		);

		// Create series
		// https://www.amcharts.com/docs/v5/charts/xy-chart/#Adding_series
		var series = chart.series.push(
		am5xy.ColumnSeries.new(root, {
			calculateAggregates: true,
			stroke: am5.color(0xffffff),
			clustered: false,
			xAxis: xAxis,
			yAxis: yAxis,
			categoryXField: "x",
			categoryYField: "y",
			valueField: "value"
		})
		);

		series.columns.template.setAll({
		tooltipText: "{value}",
		strokeOpacity: 1,
		strokeWidth: 2,
		cornerRadiusTL: 5,
		cornerRadiusTR: 5,
		cornerRadiusBL: 5,
		cornerRadiusBR: 5,
		width: am5.percent(100),
		height: am5.percent(100),
		templateField: "columnSettings"
		});

		var circleTemplate = am5.Template.new({});

			// Add heat rule
			// https://www.amcharts.com/docs/v5/concepts/settings/heat-rules/
			series.set("heatRules", [{
			target: circleTemplate,
			min: 10,
			max: 35,
			dataField: "value",
			key: "radius"
			}]);

			series.bullets.push(function () {
			return am5.Bullet.new(root, {
				sprite: am5.Circle.new(
				root,
				{
					fill: am5.color(0x000000),
					fillOpacity: 0.5,
					strokeOpacity: 0
				},
				circleTemplate
				)
			});
			});

			series.bullets.push(function () {
			return am5.Bullet.new(root, {
				sprite: am5.Label.new(root, {
				fill: am5.color(0xffffff),
				populateText: true,
				centerX: am5.p50,
				centerY: am5.p50,
				fontSize: 10,
				text: "{value}"
				})
			});
			});

			var colors = {
			critical: am5.color(0xca0101),
			bad: am5.color(0xe17a2d),
			medium: am5.color(0xe1d92d),
			good: am5.color(0x5dbe24),
			verygood: am5.color(0x0b7d03)
			};

			// Set data
			// https://www.amcharts.com/docs/v5/charts/xy-chart/#Setting_data
						var data = [
						{
							y: "Hampir Pasti Terjadi",
							x: "Sangat Rendah",
							columnSettings: {
							fill: colors.good
							},
							value: 7
						},
						{
							y: "Sangat Mungkin Terjadi",
							x: "Sangat Rendah",
							columnSettings: {
							fill: colors.verygood
							},
							value: 4
						},
						{
							y: "Bisa Terjadi",
							x: "Sangat Rendah",
							columnSettings: {
							fill: colors.verygood
							},
							value: 3
						},
						{
							y: "Jarang Terjadi",
							x: "Sangat Rendah",
							columnSettings: {
							fill: colors.verygood
							},
							value: 2
						},
						{
							y: "Sangat Jarang Terjadi",
							x: "Sangat Rendah",
							columnSettings: {
							fill: colors.verygood
							},
							value: 1
						},
						{
							y: "Hampir Pasti Terjadi",
							x: "Rendah",
							columnSettings: {
							fill: colors.medium
							},
							value: 12
						},
						{
							y: "Sangat Mungkin Terjadi",
							x: "Rendah",
							columnSettings: {
							fill: colors.good
							},
							value: 9
						},
						{
							y: "Bisa Terjadi",
							x: "Rendah",
							columnSettings: {
							fill: colors.good
							},
							value: 8
						},
						{
							y: "Jarang Terjadi",
							x: "Rendah",
							columnSettings: {
							fill: colors.good
							},
							value: 6
						},
						{
							y: "Sangat Jarang Terjadi",
							x: "Rendah",
							columnSettings: {
							fill: colors.verygood
							},
							value: 5
						},
						{
							y: "Hampir Pasti Terjadi",
							x: "Moderat",
							columnSettings: {
							fill: colors.bad
							},
							value: 17
						},
						{
							y: "Sangat Mungkin Terjadi",
							x: "Moderat",
							columnSettings: {
							fill: colors.medium
							},
							value: 14
						},
						{
							y: "Bisa Terjadi",
							x: "Moderat",
							columnSettings: {
							fill: colors.medium
							},
							value: 13
						},
						{
							y: "Jarang Terjadi",
							x: "Moderat",
							columnSettings: {
							fill: colors.good
							},
							value: 11
						},
						{
							y: "Sangat Jarang Terjadi",
							x: "Moderat",
							columnSettings: {
							fill: colors.good
							},
							value: 10
						},
						{
							y: "Hampir Pasti Terjadi",
							x: "Tinggi",
							columnSettings: {
							fill: colors.critical
							},
							value: 22
						},
						{
							y: "Sangat Mungkin Terjadi",
							x: "Tinggi",
							columnSettings: {
							fill: colors.bad
							},
							value: 19
						},
						{
							y: "Bisa Terjadi",
							x: "Tinggi",
							columnSettings: {
							fill: colors.bad
							},
							value: 18
						},
						{
							y: "Jarang Terjadi",
							x: "Tinggi",
							columnSettings: {
							fill: colors.bad
							},
							value: 16
						},
						{
							y: "Sangat Jarang Terjadi",
							x: "Tinggi",
							columnSettings: {
							fill: colors.medium
							},
							value: 15
						},
						{
							y: "Hampir Pasti Terjadi",
							x: "Sangat Tinggi",
							columnSettings: {
							fill: colors.critical
							},
							value: 25
						},
						{
							y: "Sangat Mungkin Terjadi",
							x: "Sangat Tinggi",
							columnSettings: {
								fill: colors.critical
							},
							value: {
								amount: 24,
								count: 1
							}
						},
						{
							y: "Bisa Terjadi",
							x: "Sangat Tinggi",
							columnSettings: {
							fill: colors.critical
							},
							value: 23
						},
						{
							y: "Jarang Terjadi",
							x: "Sangat Tinggi",
							columnSettings: {
							fill: colors.critical
							},
							value: 21
						},
						{
							y: "Sangat Jarang Terjadi",
							x: "Sangat Tinggi",
							columnSettings: {
							fill: colors.critical
							},
							value: 20
							
						}
						];

						series.data.setAll(data);

						yAxis.data.setAll([
						{ category: "Hampir Pasti Terjadi" },
						{ category: "Sangat Mungkin Terjadi" },
						{ category: "Bisa Terjadi" },
						{ category: "Jarang Terjadi" },
						{ category: "Sangat Jarang Terjadi" }
						]);

						xAxis.data.setAll([
						{ category: "Sangat Tinggi" },
						{ category: "Tinggi" },
						{ category: "Moderat" },
						{ category: "Rendah" },
						{ category: "Sangat Rendah" }
						]);

						// Make stuff animate on load
						// https://www.amcharts.com/docs/v5/concepts/animations/#Initial_animation
						chart.appear(1000, 100);

						}); // end am5.ready()
						</script>

</body>

</html>