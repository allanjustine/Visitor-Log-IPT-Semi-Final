@extends('base')

@section('content')

@if ($info = Session::get('info'))
<div class="card-body bg-success text-white" style="margin-bottom: 5px">
    {{$info}}
</div>
@endif
<div class="float-right">
<a style="background: rgb(56,89,158);
background: linear-gradient(90deg, rgba(56,89,158,1) 3%, rgba(68,68,7,1) 100%);" href="{{url('/users/create')}}" class="btn btn-primary">
    Add New User</a>
</div>

<h1>List of Users</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>ID#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)

        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->lname}}</td>
            <td>{{$u->fname}}</td>
            <td>{{$u->email}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop
