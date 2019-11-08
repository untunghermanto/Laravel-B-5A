@extends('layouts.layout_saran')
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header" style="background: #A8329E">
			<h1 style="color:white">Saran</h1>
		</div>
		<div class="card-header">
			<table class="table table-bordered ">
				<thead style="background: #6F32A8;color: white">
					<tr>
						<th>Number</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody style="background: white">
					<?php $number=1;?>
					@foreach($data as $item)
						<tr>
							<td>{{$number}}</td>
							<td>{{$item->firstname}}</td>
							<td>{{$item->lastname}}</td>
							<td>{{$item->email}}</td>
							<td>{{$item->phone}}</td>
							<td>{{$item->message}}</td>
						</tr>
						<?php $number++;?>
									
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection