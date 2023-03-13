@extends('base')
@section('content')
<div class="report-header">
					<h1 class="recent-Articles">Update Story Form</h1>
					<a href="/story"><button class="view">View All</button></a>
				</div>
<form action="{{route('story.update',$story->id)}}" method="post">
	@csrf
    @method('PUT')
    <table border='2'>
        <tr>
		<td><label for="username">Story name</label></td>
		<td><input type="text" id="usname" name="usname" required value='{{$story->story_name}}'></td>
        </tr>
        <tr>
		<td><label for="userdob">Story Type</label></td>
		<td><input type="text" id="ustype" name="ustype" required value='{{$story->story_type}}'></td>
        </tr>
        <tr>
		<td><label for="usercontact">Story path</label></td>
		<td><input type="text" id="uspath" name="uspath" required value='{{$story->story_path}}'></td>
        </tr>
        <tr>
		<td colspan='2'><center><input type="submit" value="Submit" class="submit-btn"></center></td>
        </tr>
		<tr>
		<td colspan='2'><center><a href="/story"><input type="submit" value="Cancel" class="submit-btn" style='background-color: #f00000;'></a></center></td>
        </tr>
        </table>
	</form>
    <style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			font-size: 1.2rem;
			margin-top: 50px;
		}

		label {
			display: block;
			margin-top: 10px;
			font-weight: bold;
			text-align: center;
		}

		input[type="text"], input[type="text"], input[type="text"] {
			padding: 5px;
			margin-top: 5px;
			font-size: 1rem;
			border-radius: 5px;
			border: none;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
			width: 300px;
			max-width: 100%;
		}

		.submit-btn {
			padding: 10px 20px;
			margin-top: 20px;
			background-color: #2196F3;
			color: #fff;
			font-size: 1.2rem;
			border: none;
			border-radius: 5px;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}

		.submit-btn:hover {
			background-color: #0D47A1;
		}

		.error {
			color: red;
			font-weight: bold;
			margin-top: 10px;
			text-align: center;
		}
	</style>
@stop