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
						<a href="/manageuser">
						<div class="item1">
							<h3 class="t-op-nextlvl">User Music Activity</h3>
							<h3 class="t-op-nextlvl">Manage User Music Activity from here</h3>
						</div>
						</a>

						<a href="/music">
						<div class="item1">
							<h3 class="t-op-nextlvl">User Video Activity</h3>
							<h3 class="t-op-nextlvl">Manage Video Music Activity from here</h3>
						</div>
						</a>

						<a href="/video">
						<div class="item1">
							<h3 class="t-op-nextlvl">User Story Activity</h3>
							<h3 class="t-op-nextlvl">Manage User Story Activity from here</h3>
						</div>
						</a>


						<a href="/yoga">
						<div class="item1">
							<h3 class="t-op-nextlvl">User Quote Activity</h3>
							<h3 class="t-op-nextlvl">Manage User Quote Activity from here</h3>
						</div>
						</a>


						<a href="/story">
						<div class="item1">
							<h3 class="t-op-nextlvl">User Yoga Activity</h3>
							<h3 class="t-op-nextlvl">Manage User Yoga Activity from here</h3>
						</div>
						</a>

						
					</div>
				</div>


@stop