@extends('base')
@section('content')
				<div class="report-header">
					<h1 class="recent-Articles">Manage User Details</h1>
					<a href="/user/create"><button class="view">Add User</button></a>
				</div>

		<div class="report-body">
			<table border='2'>
					<div class="report-topic-heading">
						<th><h3 class="t-op" style='margin: 5px;'>ID</h3></th>
						<th><h3 class="t-op" style='margin: 10px;'>Username</h3></th>
						<th><h3 class="t-op" style='margin: 10px;'>Date of Birth</h3></th>
						<th><h3 class="t-op" style='margin: 10px;'>Contact</h3></th>
						<th><h3 class="t-op" style='margin: 10px;'> Email ID</h3></th>
						<th><h3 class="t-op" style='margin: 10px;'>Hobbies</h3></th>
						<th colspan='2'><h3 class="t-op" style='margin: 10px;'>ACTIONS</h3></th>
						<!-- <th><h3 class="t-op" style='margin: 10px;'>UPDATE</h3></th> -->
					</div>
					
					<div class="items">
					@foreach($userdata as $data)
					<tr>
						<div class="item1" style='margin:0'>
							<td style='padding: 20px;'><h3 class="t-op-nextlvl" style='margin: 15px;'>{{$data->id}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 15px;'>{{$data->user_name}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 15px;'>{{$data->user_dob}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 15px;'>{{$data->user_contact}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 15px;'>{{$data->user_email}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 15px;'>{{$data->user_hobbies}}</h3></td>
							<!-- <a href="deleteuser/{{$data->id}}"><h3 class="t-op-nextlvl label-tag">Delete</h3></a> -->
							<form action="{{url('/user')}}/{{$data->id}}" method="post">
								@csrf
								@method('DELETE')
							<td style='padding: 20px;'><button type="submit"><h3 class="t-op-nextlvl label-tag" style='padding: 20px; background-color: #f00000; '>Delete</h3></button></td>
							</form>
							<td style='padding: 20px;'><a href="{{route('user.edit',$data->id)}}"><button><h3 class="t-op-nextlvl label-tag" style='padding: 20px;'>Update</h3></button></a></td>
						</div>
						</tr>
					@endforeach

					</div>
					</table>

						
					</div>
				</div>

@stop