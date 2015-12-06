@extends('layouts/base')

@section('content')

    <!-- Morris charts -->
    {{ HTML::style("plugins/morris/morris.css") }}

    <div class="row">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <h1>Estimasi Pajak</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Estimasi Penerimaan Pajak Januari - Juli 2015</h3>
                        </div>

                        <div class="box-body chart-responsive">
                            <div class="chart" id="tax-chart" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}
    {{ HTML::script('plugins/morris/morris.min.js') }}

    <script type="text/javascript">
        $(function () {

            "use strict";

            // Payment CHART
            var payment = new Morris.Line({
                element: 'tax-chart',
                resize: true,
                data: [
                    {y: 'Januari', a: 7, b: 6},
                    {y: 'Februari', a: 9, b: 8},
                    {y: 'Maret', a: 7, b: 5},
                    {y: 'April', a: 6, b: 6},
                    {y: 'Mei', a: 9, b: 6},
                    {y: 'Juni', a: 7, b: 5}
                    ],
                 xkey: 'y',
                ykeys: ['a','b'],
                labels: ['Estimasi','Penerimaan'],
                barColors: ['#00a65a', '#f56954'],
                hideHover: 'auto'
            });
        });
    </script>

@stop
