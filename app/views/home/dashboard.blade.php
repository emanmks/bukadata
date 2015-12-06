@extends('layouts/base')

@section('content')
    <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-institution"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Perusahaan</span>
                  <span class="info-box-number">85,256</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Follower</span>
                  <span class="info-box-number">2,976,410</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-diamond"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Data Terbuka</span>
                  <span class="info-box-number">725,265,299</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-archive"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Transaksi</span>
                  <span class="info-box-number">1,124,512,256</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Penyerapan Anggaran Bulanan</h3>
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
                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                      </p>
                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" style="height: 180px; width: 671px;" width="671" height="180"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                      <p class="text-center">
                        <strong>Statistik</strong>
                      </p>
                      <div class="progress-group">
                        <span class="progress-text">Pendapatan</span>
                        <span class="progress-number"><b>155</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 77%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Pencairan</span>
                        <span class="progress-number"><b>210</b>/400</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 62%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Penjualan</span>
                        <span class="progress-number"><b>400</b>/800</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 50%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Pajak</span>
                        <span class="progress-number"><b>250</b>/500</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 50%"></div>
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
                        <h5 class="description-header">IDR 15,210,445,123.43</h5>
                        <span class="description-text">Total Pendapatan</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                        <h5 class="description-header">IDR 12,551,295,432,64</h5>
                        <span class="description-text">Total Pencairan</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                        <h5 class="description-header">IDR 3,829,413,221,06</h5>
                        <span class="description-text">Total Penjualan</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                        <h5 class="description-header">IDR 8,512,522,921,54</h5>
                        <span class="description-text">Total Pajak</span>
                      </div><!-- /.description-block -->
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- USERS LIST -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Perusahaan Terakhir Bergabung</h3>
                      <div class="box-tools pull-right">
                        <span class="label label-danger">8 Perusahaan Baru</span>
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                      <ul class="users-list clearfix">
                        <li>
                          <img src="http://placehold.it/128x128" alt="Company Logo">
                          <a class="users-list-name" href="#">PT. ABC Indonesia</a>
                          <span class="users-list-date">Today</span>
                        </li>
                        <li>
                          <img src="http://placehold.it/128x128" alt="Company Logo">
                          <a class="users-list-name" href="#">PT. Pembangunan Perumahan</a>
                          <span class="users-list-date">Yesterday</span>
                        </li>
                        <li>
                          <img src="http://placehold.it/128x128" alt="Company Logo">
                          <a class="users-list-name" href="#">CV. Jaya Sentosa</a>
                          <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                          <img src="http://placehold.it/128x128" alt="Company Logo">
                          <a class="users-list-name" href="#">CV. FPI</a>
                          <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                          <img src="http://placehold.it/128x128" alt="Company Logo">
                          <a class="users-list-name" href="#">CV. Damai Sajalah</a>
                          <span class="users-list-date">13 Jan</span>
                        </li>
                        <li>
                          <img src="http://placehold.it/128x128" alt="Company Logo">
                          <a class="users-list-name" href="#">PT. Prudential</a>
                          <span class="users-list-date">14 Jan</span>
                        </li>
                        <li>
                          <img src="http://placehold.it/128x128" alt="Company Logo">
                          <a class="users-list-name" href="#">PT. Santai Abadi</a>
                          <span class="users-list-date">15 Jan</span>
                        </li>
                        <li>
                          <img src="http://placehold.it/128x128" alt="Company Logo">
                          <a class="users-list-name" href="#">CV. Civurus Monerte</a>
                          <span class="users-list-date">15 Jan</span>
                        </li>
                      </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                      <a href="javascript:void(0)" class="uppercase">Lihat Semua Perusahaan</a>
                    </div><!-- /.box-footer -->
                </div><!--/.box -->
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Pembayaran Pajak Terakhir</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Pembayaran No</th>
                          <th>Perusahaan</th>
                          <th>Periode</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="pages/examples/invoice.html">PP-1592086927</a></td>
                          <td>PT. Emas Setia</td>
                          <td>Januari, 2015</td>
                          <td><span class="label label-warning">40%</span></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">PP-1592051326</a></td>
                          <td>PT. Sinar Diesel</td>
                          <td>Maret, 2015</td>
                          <td><span class="label label-info">Processing</span></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">PP-1592092818</a></td>
                          <td>CV. Makmur Sentosa</td>
                          <td>January, 2015</td>
                          <td><span class="label label-danger">24.56%</span></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">PP-1592024451</a></td>
                          <td>PT. Aman Jaya</td>
                          <td>Desember, 2014</td>
                          <td><span class="label label-success">100%</span></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">PP-1592091181</a></td>
                          <td>PT. Pembangunan Perumahan</td>
                          <td>Agustus, 2014</td>
                          <td><span class="label label-success">100%</span></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">PP-1592029184</a></td>
                          <td>CV. Setya Novanto</td>
                          <td>Febuari, 2015</td>
                          <td><span class="label label-danger">45%</span></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">PP-2049185719</a></td>
                          <td>PT. Anti Korupsi</td>
                          <td>Mei, 2015</td>
                          <td><span class="label label-success">100%</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Lihat Semua Pembayaran</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">Lihat Semua Hutang</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Estimasi Penerimaan Pajak 2015</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body chart-responsive">
                      <div class="chart" id="revenue-chart" style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <svg height="300" version="1.1" width="486" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;">
                        <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">BukaDATA</desc>
                        <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                        <text x="49.203125" y="261" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                        </text>
                        <path fill="none" stroke="#aaaaaa" d="M61.703125,261H461" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                        <text x="49.203125" y="202" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan>
                        </text>
                        <path fill="none" stroke="#aaaaaa" d="M61.703125,202H461" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                        <text x="49.203125" y="143" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan>
                        </text>
                        <path fill="none" stroke="#aaaaaa" d="M61.703125,143H461" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                        <text x="49.203125" y="84.00000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal">
                        <tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan>
                        </text>
                        <path fill="none" stroke="#aaaaaa" d="M61.703125,84.00000000000003H461" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                        <text x="49.203125" y="25.00000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal">
                        <tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan>
                        </text>
                        <path fill="none" stroke="#aaaaaa" d="M61.703125,25.00000000000003H461" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                        <text x="387.7389694714459" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan>
                        </text>
                        <text x="210.1658756075334" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan>
                        </text>
                        <path fill="#74a5c1" stroke="none" d="M61.703125,219.05493333333334C72.86208991494533,219.56626666666668,95.18001974483596,222.62345,106.33898465978129,221.10026666666667C117.49794957472662,219.57708333333335,139.81587940461725,209.1355825136612,150.97484431956258,206.86946666666668C162.01251613760633,204.6279825136612,184.0878597736938,204.88215,195.12553159173754,203.06986666666666C206.1632034097813,201.25758333333332,228.23854704586876,194.9129178506375,239.2762188639125,192.3712C250.43518377885783,189.80155118397084,272.7531136087485,182.51721666666668,283.9120785236938,182.6244C295.07104343863915,182.73158333333333,317.38897326852975,204.18057122040074,328.5479381834751,193.22866666666667C339.58561000151883,182.39580455373408,361.66095363760627,101.94395359116024,372.69862545565,95.48533333333336C383.6150041767922,89.09768692449357,405.4477616190765,135.1380230769231,416.3641403402187,141.8436C427.523105255164,148.69818974358975,449.84103508505467,147.7554,461,149.726L461,261L61.703125,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                        <path fill="none" stroke="#3c8dbc" d="M61.703125,219.05493333333334C72.86208991494533,219.56626666666668,95.18001974483596,222.62345,106.33898465978129,221.10026666666667C117.49794957472662,219.57708333333335,139.81587940461725,209.1355825136612,150.97484431956258,206.86946666666668C162.01251613760633,204.6279825136612,184.0878597736938,204.88215,195.12553159173754,203.06986666666666C206.1632034097813,201.25758333333332,228.23854704586876,194.9129178506375,239.2762188639125,192.3712C250.43518377885783,189.80155118397084,272.7531136087485,182.51721666666668,283.9120785236938,182.6244C295.07104343863915,182.73158333333333,317.38897326852975,204.18057122040074,328.5479381834751,193.22866666666667C339.58561000151883,182.39580455373408,361.66095363760627,101.94395359116024,372.69862545565,95.48533333333336C383.6150041767922,89.09768692449357,405.4477616190765,135.1380230769231,416.3641403402187,141.8436C427.523105255164,148.69818974358975,449.84103508505467,147.7554,461,149.726" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                        <circle cx="61.703125" cy="219.05493333333334" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="106.33898465978129" cy="221.10026666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="150.97484431956258" cy="206.86946666666668" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="195.12553159173754" cy="203.06986666666666" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="239.2762188639125" cy="192.3712" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="283.9120785236938" cy="182.6244" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="328.5479381834751" cy="193.22866666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="372.69862545565" cy="95.48533333333336" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="416.3641403402187" cy="141.8436" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="461" cy="149.726" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <path fill="#eaf2f5" stroke="none" d="M61.703125,240.02746666666667C72.86208991494533,239.8072,95.18001974483596,241.35496666666666,106.33898465978129,239.1464C117.49794957472662,236.93783333333334,139.81587940461725,223.33676429872497,150.97484431956258,222.35893333333334C162.01251613760633,221.39173096539162,184.0878597736938,233.23263333333333,195.12553159173754,231.36626666666666C206.1632034097813,229.4999,228.23854704586876,209.2890577413479,239.2762188639125,207.428C250.43518377885783,205.54649107468123,272.7531136087485,214.43916666666667,283.9120785236938,216.39600000000002C295.07104343863915,218.35283333333334,317.38897326852975,232.37947613843355,328.5479381834751,223.08266666666668C339.58561000151883,213.88690947176687,361.66095363760627,148.2268241252302,372.69862545565,142.42573333333334C383.6150041767922,136.68839079189686,405.4477616190765,170.47037838827842,416.3641403402187,176.92893333333336C427.523105255164,183.53101172161175,449.84103508505467,190.23343333333335,461,194.66826666666668L461,261L61.703125,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                        <path fill="none" stroke="#a0d0e0" d="M61.703125,240.02746666666667C72.86208991494533,239.8072,95.18001974483596,241.35496666666666,106.33898465978129,239.1464C117.49794957472662,236.93783333333334,139.81587940461725,223.33676429872497,150.97484431956258,222.35893333333334C162.01251613760633,221.39173096539162,184.0878597736938,233.23263333333333,195.12553159173754,231.36626666666666C206.1632034097813,229.4999,228.23854704586876,209.2890577413479,239.2762188639125,207.428C250.43518377885783,205.54649107468123,272.7531136087485,214.43916666666667,283.9120785236938,216.39600000000002C295.07104343863915,218.35283333333334,317.38897326852975,232.37947613843355,328.5479381834751,223.08266666666668C339.58561000151883,213.88690947176687,361.66095363760627,148.2268241252302,372.69862545565,142.42573333333334C383.6150041767922,136.68839079189686,405.4477616190765,170.47037838827842,416.3641403402187,176.92893333333336C427.523105255164,183.53101172161175,449.84103508505467,190.23343333333335,461,194.66826666666668" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                        <circle cx="61.703125" cy="240.02746666666667" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="106.33898465978129" cy="239.1464" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="150.97484431956258" cy="222.35893333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="195.12553159173754" cy="231.36626666666666" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="239.2762188639125" cy="207.428" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="283.9120785236938" cy="216.39600000000002" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="328.5479381834751" cy="223.08266666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="372.69862545565" cy="142.42573333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="416.3641403402187" cy="176.92893333333336" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                        <circle cx="461" cy="194.66826666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            
                        </circle></svg>
                        <div class="morris-hover morris-default-style" style="left: 59.339px; top: 143px; display: none;">
                        <div class="morris-hover-row-label">2011 Q2</div>
                        <div class="morris-hover-point" style="color: #a0d0e0">
                      Item 1:
                      2,778
                    </div><div class="morris-hover-point" style="color: #3c8dbc">
                      Item 2:
                      2,294
                    </div></div></div>
                    </div><!-- /.box-body -->
                </div>
              <!-- Info Boxes Style 2 -->
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-legal"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Partai Politik & Institusi Pemerintah</span>
                  <span class="info-box-number">219</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 10%"></div>
                  </div>
                  <span class="progress-description">
                    10% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-institution"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">BUMN & BUMD</span>
                  <span class="info-box-number">3,975</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 20%"></div>
                  </div>
                  <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-building"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Swasta</span>
                  <span class="info-box-number">14,512</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 30%"></div>
                  </div>
                  <span class="progress-description">
                    30% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-user-secret"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Individual</span>
                  <span class="info-box-number">163,921</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <span class="progress-description">
                    50% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Penggunaan Browser</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="160" width="195" style="width: 195px; height: 160px;"></canvas>
                      </div><!-- ./chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                      <ul class="chart-legend clearfix">
                        <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                        <li><i class="fa fa-circle-o text-green"></i> IE</li>
                        <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                        <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                        <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                        <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                      </ul>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">Medan <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                    <li><a href="#">Jakarta <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a></li>
                    <li><a href="#">Bandung <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>

    {{ HTML::script('plugins/sparkline/jquery.sparkline.min.js') }}
    {{ HTML::script('plugins/chartjs/Chart.min.js') }}
    {{ HTML::script('dist/js/pages/dashboard2.js') }}

    <script type="text/javascript">
        $(function () {

         });
    </script>

@stop
