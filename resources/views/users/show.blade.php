@extends('layouts.layout')
@section('content')
	<h1>User - Show</h1>
	<table class="table table-bordered ">
		<thead class="thead-dark">
			<tr>
				<th>Number</th>
				<th>Name</th>
				<th>Email</th>
				<th>Birthdate</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $item)
				<tr>
					<td>{{$item->id}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->email}}</td>
					<td>{{$item->birthdate}}</td>
					<td>
						<form method="POST" action="{{action('MyuserController@delete',$item->id)}}">
	                        @csrf
	                        {{method_field('DELETE')}}
	                        <button type="submit" class="btn btn-danger btn-sm btn-block">Hapus</button>
                        </form>    
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<a href="/index/create" class="btn btn-primary">Insert</a>
@endsection