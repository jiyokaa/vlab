@extends('layouts.4col')

@section('content')
<div class="container">

                <h1 class="my-4">Create Computer Page</h1>

                <div class="panel-body">

                {!! Form::open(array('url' => 'computers','files' => true)) !!}

                <div class="col-xs-8">
                    <div class="form-group">
                        <?= Form::label('name', 'Computer name'); ?>
                        <?= Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Computer name']); ?> 
                    </div>

                    <div class="form-group">
                        <?= Form::label('ip', 'IP'); ?>
                        <?= Form::text('ip', null, ['class' => 'form-control', 'placeholder' => 'IP']); ?> 
                    </div>

                    
                    <div class="form-group">
                        <?= Form::label('link', 'Link'); ?>
                        <?= Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Link']); ?> 
                    </div>
                    <div class="form-group">
                        <?= Form::label('lab_id', 'lab_id'); ?>
                        <?= Form::text('lab_id', $lab_id , ['class' => 'form-control', 'placeholder' => 'lab_id']); ?> 
                    </div>
                    <div class="form-group">
                           <?= Form::submit('Add',['class'=>'btn btn-primary']); ?>
                    </div>
                </div>

                {!! Form::close() !!}
                    

    </div>
</div>
@endsection
