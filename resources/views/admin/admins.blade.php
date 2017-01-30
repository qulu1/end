@extends('layouts.layout')

@section('content')	
	<tr>
		<th>Name</th>
		<th>Email</th> 
	</tr>
	@foreach($users as $key)
	<tr>
		<td>{{$key->name}}</td>
		<td>{{$key->email}}</td> 
		<td><a href={{ url('admins/'. $key->id ./'edit') }} class="btn btn-success">Update</a></td>
		<td><a href={{ url('admins/'. $key->id ./'delete') }} class="btn btn-danger">Delete</a></td>
	</tr>
	@endforeach 
@endsection
