@extends('base')
@section('content')
<div class="report-header">
					<h1 class="recent-Articles">Manage Story Details</h1>
					<a href="/story/create"><button class="view">Add Story</button></a>
				</div>

				<div class="report-body">
				<table border='2'>
					<div class="report-topic-heading">
						<td><h3 class="t-op" style='margin: 10px;'>ID</h3></td>
						<td><h3 class="t-op" style='margin: 10px;'>Story Name</h3></td>
						<td><h3 class="t-op" style='margin: 10px;'>Story Type</h3></td>
						<td><h3 class="t-op" style='margin: 10px;'>Story path</h3></td>
						<th colspan='2'><h3 class="t-op" style='margin: 10px;'>ACTIONS</h3></th>
					</div>
					
					<div class="items">
					@foreach($storydata as $data)
					<tr>
						<div class="item1" style='margin:0'>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->id}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->story_name}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->story_type}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->story_path}}</h3></td>
							<!-- <a href="/story/{{$data->id}}"><h3 class="t-op-nextlvl label-tag">Delete</h3></a> -->
							<form action="{{url('/story')}}/{{$data->id}}" method="post">
								@csrf
								@method('DELETE')
							<td style='padding: 20px;'><button type="submit"><h3 class="t-op-nextlvl label-tag" style='padding: 20px; background-color: #f00000; '>Delete</h3></button></td>
							</form>
							<td style='padding: 20px;'><a href="{{route('story.edit',$data->id)}}"><button><h3 class="t-op-nextlvl label-tag" style='padding: 20px;'>Update</h3></button></a></td>
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
				</div>

@stop