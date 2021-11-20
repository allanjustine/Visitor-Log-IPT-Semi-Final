@extends('base')

@section('content')


    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header"><h1 style="text-align: center;">Create New Visitor</h1></div>
                    <div class="card-body">

                        {!! Form::open(['url'=>'/visitorlog', 'method'=>'post']) !!}
                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('phone', 'Phone') }}
                            {{ Form::text('phone', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('purpose', 'Purpose') }}
                            {{ Form::text('purpose', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('time', 'Time (no characters and spaces)') }}
                            {{ Form::text('time', null, ['class'=>'form-control', 'placeholder'=>'hr/min/sec']) }}
                        </div>

                        <div class="form-group">
                            <button style="background: rgb(56,89,158);
                            background: linear-gradient(90deg, rgba(56,89,158,1) 3%, rgba(68,68,7,1) 100%);" class="btn btn-primary float-right">Save</button>
                        </div>

                        @include('errors')

                        {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection
