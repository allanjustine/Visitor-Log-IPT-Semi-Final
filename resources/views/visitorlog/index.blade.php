@extends('base')

@section('content')

@if ($info = Session::get('info'))
<div class="card-body bg-success text-white" style="margin-bottom: 5px">
    {{$info}}
</div>
@endif
<div class="float-right">
<a style="background: rgb(56,89,158);
background: linear-gradient(90deg, rgba(56,89,158,1) 3%, rgba(68,68,7,1) 100%);" href="{{url('/visitorlog/create')}}" class="btn btn-primary">
    Add New Visitor</a>
</div>

<h1>List of Visitor</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Purpose</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach($visitorlog as $v)

        <tr>
            <td>{{$v->name}}</td>
            <td>{{$v->phone}}</td>
            <td>{{$v->purpose}}</td>
            <td>{{$v->time}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop
