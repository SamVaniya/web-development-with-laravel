@extends('base')
@section('content')
<div class="report-header">
					<h1 class="recent-Articles">User And Content Management</h1>
					<button class="view">View All</button>
				</div>

				<div class="report-body">
					<div class="report-topic-heading">
						<h3 class="t-op">Table</h3>
						<h3 class="t-op">Description</h3>
					</div>

					<div class="items">
						<a href="/user">
						<div class="item1">
							<h3 class="t-op-nextlvl">User Details</h3>
							<h3 class="t-op-nextlvl">Manage User Details from here</h3>
						</div>
						</a>

						<a href="/music">
						<div class="item1">
							<h3 class="t-op-nextlvl">Music Detals</h3>
							<h3 class="t-op-nextlvl">Manage Music Details from here</h3>
						</div>
						</a>

						<a href="/video">
						<div class="item1">
							<h3 class="t-op-nextlvl">Video Details</h3>
							<h3 class="t-op-nextlvl">Manage video Details from here</h3>
						</div>
						</a>


						<a href="/yoga">
						<div class="item1">
							<h3 class="t-op-nextlvl">Yoga Details</h3>
							<h3 class="t-op-nextlvl">Manage yoga Details from here</h3>
						</div>
						</a>


						<a href="/story">
						<div class="item1">
							<h3 class="t-op-nextlvl">Story Details</h3>
							<h3 class="t-op-nextlvl">Manage story Details from here</h3>
						</div>
						</a>


						<a href="/quote">
						<div class="item1">
							<h3 class="t-op-nextlvl">Quote Details</h3>
							<h3 class="t-op-nextlvl">Manage quote Details from here</h3>
						</div>
						</a>


						
					</div>
				</div>


@stop