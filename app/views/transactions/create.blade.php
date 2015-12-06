@extends('layouts/base')

@section('content')

	<div class="row">
        <section class="content">
        	{{ Form::open(array('url' => 'transactions', 'class' => 'form-horizontal')) }}
        	<div class="box-body">
                <div class="form-group">
                    {{ Form::label('project', 'Project', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('project',$projects,'',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('category', 'Category', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('category',$categories,'',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('tax', 'Tax', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('tax',$taxes,'',array('class' => 'form-control')) }}
                    </div>
                </div>
        		<div class="form-group">
                    {{ Form::label('object', 'Object', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('object',array('Money' => 'Money', 'Goods' => 'Goods', 'Service' => 'Service'),'',array('class' => 'form-control')) }}
                    </div>
                </div>
        		<div class="form-group">
                    {{ Form::label('transaction_date', 'Transaction date', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('transaction_date','',array('class' => 'form-control')) }}
                    </div>
                </div>
        		<div class="form-group">
                    {{ Form::label('transaction_date', 'Transaction date', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('transaction_date','',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('uom', 'UOM', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('uom',$uoms,'',array('class' => 'form-control')) }}
                    </div>
                </div>
        		<div class="form-group">
                    {{ Form::label('details', 'Details', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::textarea('details','',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('amount', 'Amount', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('amount','',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('discount', 'Discount', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('discount','',array('class' => 'form-control')) }}
                    </div>
                </div>  
                <div class="form-group">
                    {{ Form::label('discount_amount', 'Discount amount', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('discount_amount','',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('tax_inclusive', 'Tax inclusive', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('tax_inclusive',array('true' => 'True', 'false' => 'False'),'',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('is_deleted', 'Is deleted', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('is_deleted',array('true' => 'True', 'false' => 'False'),'',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('deleted_by', 'Deleted by', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('deleted_by','',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('deleted_at', 'Deleted at', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('deleted_at','',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('', '', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::submit('Hantar', array('class' => 'btn btn-primary')) }}
                    </div>
                </div>                                                            
        	</div>
        </section>
</div>

@stop