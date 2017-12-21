@extends('layouts.4col')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Lab Page</div>

                <div class="panel-body">

                {!! Form::open(array('url' => 'labs','files' => true)) !!}

                <div class="col-xs-8">
                    <div class="form-group">
                        <?= Form::label('name', 'Lab name'); ?>
                        <?= Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Lab name/ชื่อห้อง']); ?> 
                    </div>

                    <div class="form-group">
                        <?= Form::label('type', 'Lab type'); ?>
                        <?= Form::text('type', null, ['class' => 'form-control', 'placeholder' => 'Lab type/รายละเอียดของห้อง']); ?> 
                    </div>

                    
                    <div class="form-group">
                        <?= Form::label('max_coms', 'Max Computers'); ?>
                        <?= Form::text('max_coms', null, ['class' => 'form-control', 'placeholder' => 'Max Computers']); ?> 
                    </div>

                    <div class="form-group">
                           <?= Form::submit('Add',['class'=>'btn btn-primary']); ?>
                    </div>
                </div>

                {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
