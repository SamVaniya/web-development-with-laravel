@extends('base')
@section('content')
<div class="report-header">
					<h1 class="recent-Articles">Manage yoga Details</h1>
					<a href="/yoga/create"><button class="view">Add yoga</button></a>
				</div>

				<div class="report-body">
					<table border='2'>
					<div class="report-topic-heading">
						<td><h3 class="t-op" style='margin: 10px;'>ID</h3></td>
						<td><h3 class="t-op" style='margin: 10px;'>yoga Title</h3></td>
						<td><h3 class="t-op" style='margin: 10px;'>yoga path</h3></td>
						<th colspan='2'><h3 class="t-op" style='margin: 10px;'>ACTIONS</h3></th>
					</div>
					
					<div class="items">
						@foreach($yogadata as $data)
						<tr>
						<div class="item1" style='margin:0'>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->id}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->yoga_name}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->yoga_tutorial_path}}</h3></td>
							<form action="{{url('/yoga')}}/{{$data->id}}" method="post">
								@csrf
								@method('DELETE')
							<td style='padding: 20px;'><button type="submit"><h3 class="t-op-nextlvl label-tag" style='padding: 20px; background-color: #f00000; '>Delete</h3></button></td>
							</form>
							<td style='padding: 20px;'><a href="{{route('yoga.edit',$data->id)}}"><button><h3 class="t-op-nextlvl label-tag" style='padding: 20px;'>Update</h3></button></a></td>
						</div>
						</tr>
						@endforeach

						<!-- <div class="item1">
							<h3 class="t-op-nextlvl">Article 69</h3>
							<h3 class="t-op-nextlvl">2.6k</h3>
							<h3 class="t-op-nextlvl">190</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div> -->

						

					</div>
					</table>

						
				</div>
				

@stop