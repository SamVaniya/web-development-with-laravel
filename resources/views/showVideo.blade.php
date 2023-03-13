@extends('base')
@section('content')
<div class="report-header">
					<h1 class="recent-Articles">Manage Video Details</h1>
					<a href="/video/create"><button class="view">Add Video</button></a>
				</div>

				<div class="report-body">
				<table border='2'>
					<div class="report-topic-heading">
						<th><h3 class="t-op" style='margin: 5px;'>ID</h3></th>
						<th><h3 class="t-op" style='margin: 10px;'>Video Title</h3></th>
						<th><h3 class="t-op" style='margin: 10px;'>Video Type</h3></th>
						<th><h3 class="t-op" style='margin: 10px;'>Video path</h3></th>
						<th colspan='2'><h3 class="t-op" style='margin: 10px;'>ACTIONS</h3></th>
					</div>
					
					<div class="items">
					@foreach($videodata as $data)
					<tr>
						<div class="item1" style='margin:0'>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->id}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->video_title}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->video_type}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->video_path}}</h3></td>
							<!-- <a href="/video/{{$data->id}}"><h3 class="t-op-nextlvl label-tag">Delete</h3></a> -->
							<form action="{{url('/video')}}/{{$data->id}}" method="post">
								@csrf
								@method('DELETE')
							<td style='padding: 20px;'><button type="submit"><h3 class="t-op-nextlvl label-tag" style='padding: 20px; background-color: #f00000; '>Delete</h3></button></td>
							</form>
							<td style='padding: 20px;'><a href="{{route('video.edit',$data->id)}}"><button><h3 class="t-op-nextlvl label-tag" style='padding: 20px;'>Update</h3></button></a></td>
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

						
					</div>
				</div>

@stop