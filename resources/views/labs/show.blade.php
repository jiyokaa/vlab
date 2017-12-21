@extends('layouts.4col')

@section('content')

   <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">{{ $lab->name }}
        <small> Computer lists</small>
      </h1>

      <div class="row">
      @foreach ($computers as $computer)
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="{{ url('computers') }}/{{$computer->id}}"><img class="card-img-top" src="{{ asset('images/Windows_Desktop.png') }}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{ $computer->link }}" target="_blank">{{ $computer->name }}</a>
              </h4>
              <p class="card-text">{{ $computer->ip }}
                @if(!Auth::guest())
                  @if (Auth::user()->type=='Admin')
                    <?= Form::open(array('url'=>'computers/'.$computer->id,'method'=>'delete')) ?>
                      <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    <?= Form::close() ?>
                  @endif
                @endif
              </p>
            </div>
          </div>
        </div>
      @endforeach
      </div>
       <!-- /.row -->
      <?= link_to('computers/create/?id='.$lab->id, $title = 'Add new machine', ['class' => 'btn btn-primary'], $secure = null); ?>
      <br>
      <!-- Div show status update -->
      @if (session('status'))
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            {{ session('status') }}
        </div>
      @endif
      <!-- Pagination -->
        {!! $computers->render() !!}  

    </div>
    <!-- /.container -->

@endsection
