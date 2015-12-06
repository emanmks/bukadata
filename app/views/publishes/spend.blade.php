@extends('layouts/base')

@section('content')

    <div class="row">
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <h1>Penyerapan Anggaran</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Rekap Bulanan</h3>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <div class="btn-group">
                              <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </div>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                          <div class="row">
                            <div class="col-md-8">
                              <p class="text-center">
                                <strong>Penyerapan Anggaran: 1 Januari, 2015 - 31 Juli, 2015</strong>
                              </p>
                              <div class="chart">
                                <!-- Sales Chart Canvas -->
                                <canvas id="salesChart" style="height: 180px;"></canvas>
                              </div><!-- /.chart-responsive -->
                            </div><!-- /.col -->
                            <div class="col-md-4">
                              <p class="text-center">
                                <strong>Goal Completion</strong>
                              </p>
                              <div class="progress-group">
                                <span class="progress-text">Pencairan</span>
                                <span class="progress-number"><b>160</b>/200</span>
                                <div class="progress sm">
                                  <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                </div>
                              </div><!-- /.progress-group -->
                              <div class="progress-group">
                                <span class="progress-text">Penerimaan</span>
                                <span class="progress-number"><b>310</b>/400</span>
                                <div class="progress sm">
                                  <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                </div>
                              </div><!-- /.progress-group -->
                              <div class="progress-group">
                                <span class="progress-text">Belanja</span>
                                <span class="progress-number"><b>480</b>/800</span>
                                <div class="progress sm">
                                  <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                </div>
                              </div><!-- /.progress-group -->
                              <div class="progress-group">
                                <span class="progress-text">Sales</span>
                                <span class="progress-number"><b>250</b>/500</span>
                                <div class="progress sm">
                                  <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                </div>
                              </div><!-- /.progress-group -->
                            </div><!-- /.col -->
                          </div><!-- /.row -->
                        </div><!-- ./box-body -->
                        <div class="box-footer">
                          <div class="row">
                            <div class="col-sm-3 col-xs-6">
                              <div class="description-block border-right">
                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                                <h5 class="description-header">Rp35.210.43</h5>
                                <span class="description-text">TOTAL REVENUE</span>
                              </div><!-- /.description-block -->
                            </div><!-- /.col -->
                            <div class="col-sm-3 col-xs-6">
                              <div class="description-block border-right">
                                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                <h5 class="description-header">Rp10,390.90</h5>
                                <span class="description-text">TOTAL COST</span>
                              </div><!-- /.description-block -->
                            </div><!-- /.col -->
                            <div class="col-sm-3 col-xs-6">
                              <div class="description-block border-right">
                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                                <h5 class="description-header">Rp24,813.53</h5>
                                <span class="description-text">TOTAL PROFIT</span>
                              </div><!-- /.description-block -->
                            </div><!-- /.col -->
                            <div class="col-sm-3 col-xs-6">
                              <div class="description-block">
                                <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                                <h5 class="description-header">1200</h5>
                                <span class="description-text">GOAL COMPLETIONS</span>
                              </div><!-- /.description-block -->
                            </div>
                          </div><!-- /.row -->
                        </div><!-- /.box-footer -->
                      </div><!-- /.box -->
                </div>
            </div>
            
        </section>
    </div>

    {{ HTML::script('plugins/sparkline/jquery.sparkline.min.js') }}
    {{ HTML::script('plugins/chartjs/Chart.min.js') }}
    {{ HTML::script('dist/js/pages/dashboard2.js') }}

    <script type="text/javascript">
        $(function () {

         });
    </script>

@stop
