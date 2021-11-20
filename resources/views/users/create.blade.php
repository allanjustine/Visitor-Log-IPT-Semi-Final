@extends('base')

@section('content')


    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header"><h1 style="text-align: center;">Create New User</h1></div>
                    <div class="card-body">

                        {!! Form::open(['url'=>'/users', 'method'=>'post']) !!}
                        <div class="form-group">
                            {{ Form::label('lname', 'Last Name') }}
                            {{ Form::text('lname', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('fname', 'First Name') }}
                            {{ Form::text('fname', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email',) }}
                            {{ Form::text('email', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('password',) }}
                            {{ Form::password('password', ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            <button style="background: rgb(56,89,158);
                            background: linear-gradient(90deg, rgba(56,89,158,1) 3%, rgba(68,68,7,1) 100%);" class="btn btn-primary float-right">Create User</button>
                        </div>

                        @include('errors')

                        {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection
