@extends('layouts/base')

@section('content')

    <div class="row">
        <section class="content">

            <h1>Bergabung</h1>
            <h3>Mari bergabung bersama membangun nilai-nilai keterbukaan, kejujuran integritas</h3>
            {{ Form::open(array('url' => 'organizations', 'class' => 'form-horizontal')) }}
            <div class="box-body">
                <div class="form-group">
                    {{ Form::label('name', 'Name', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('name','',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('organization_type', 'Organization type', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('organization_type',$organizationTypes, '', array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('hierarchy', 'Hierarchy', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('hierarchy',$hierarchies, '', array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('tax_file_number', 'Tax file number', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('tax_file_number','',array('class' => 'form-control')) }}
                    </div>
                </div> 
                <div class="form-group">
                    {{ Form::label('reg_no', 'Registration number', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('reg_no','',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('address', 'Address', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('address','',array('class' => 'form-control')); }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('village', 'Village', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('village',$villages, '', array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('district', 'District', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('district',$districts, '', array('class' => 'form-control')) }}
                    </div>
                </div>                
                <div class="form-group">
                    {{ Form::label('city', 'City', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('city',$cities, '', array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('state', 'State', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::select('state', array('1' => 'State'),'',array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('url', 'Url', array('class' => 'col-sm-2 control-label')); }}
                    <div class="col-sm-4">
                        {{ Form::text('url','',array('class' => 'form-control')); }}
                    </div>
                </div>
                <div class="form-group">
                {{ Form::label('', '', array('class' => 'col-sm-2 control-label')); }}
                <div class="col-sm-4">
                    {{ Form::submit('Hantar', array('class' => 'btn btn-primary')) }}
                </div>
            </div>
            </div>    
            {{ Form::close() }}
        </section>
    </div>

    <script type="text/javascript">
        $(function () {

         });
    </script>

@stop
