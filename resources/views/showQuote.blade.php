@extends('base')
@section('content')
<div class="report-header">
					<h1 class="recent-Articles">Manage quote Details</h1>
					<a href="/quote/create"><button class="view">Add quote</button></a>
				</div>

				<div class="report-body">
					<table border='2'>
					<div class="report-topic-heading">
						<td><h3 class="t-op" style='margin: 10px;'>ID</h3></td>
						<td><h3 class="t-op" style='margin: 10px;'>quote Title</h3></td>
						<th colspan='2'><h3 class="t-op" style='margin: 10px;'>ACTIONS</h3></th>
						
					</div>
					
					<div class="items">
					@foreach($quotedata as $data)
					<tr>
						<div class="item1" style='margin:0'>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->id}}</h3></td>
							<td><h3 class="t-op-nextlvl" style='margin: 35px;'>{{$data->quote}}</h3></td>
							<!-- <a href="/quote/{{$data->id}}"><h3 class="t-op-nextlvl label-tag">Delete</h3></a> -->
							<form action="{{url('/quote')}}/{{$data->id}}" method="post">
								@csrf
								@method('DELETE')
							<td style='padding: 20px;'><button type="submit"><h3 class="t-op-nextlvl label-tag" style='padding: 20px; background-color: #f00000; '>Delete</h3></button></td>
							</form>
							<td style='padding: 20px;'><a href="{{route('quote.edit',$data->id)}}"><button><h3 class="t-op-nextlvl label-tag" style='padding: 20px;'>Update</h3></button></a></td>
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