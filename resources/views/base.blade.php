<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Bootstrap CSS v5.2.1 -->
  <title>WithYou || Admin panel</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
	
    
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">WithYou</div>
			<img src=
"{{ asset('media/lines.png')}}"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon">
		</div>

		<div class="searchbar">
			<input type="text"
				placeholder="Search">
			<div class="searchbtn">
			<img src=
"{{ asset('media/search.png')}}"
					class="icn srchicn"
					alt="search-icon">
			</div>
		</div>

		<div class="message">
			<div class="circle"></div>
			<img src=
"{{ asset('media/bell.png')}}"
				class="icn"
				alt="">
			<div class="dp">
			<img src=
"{{ asset('media/user.png')}}"
					class="dpicn"
					alt="dp">
			</div>
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
				<a href="/dash">
					<div class="nav-option option1">
						<img src=
"{{ asset('media/menu.png')}}"
							class="nav-img"
							alt="dashboard">
						<h3> Dashboard</h3>
					</div>
					</a>

					<a href="/manage">
					<div class="option2 nav-option">
						<img src=
"{{ asset('media/calc.png')}}"
							class="nav-img"
							alt="articles">
						<h3> Manage Users & Content</h3>
					</div>
					</a>

					<a href="/manageactivity">
					<div class="nav-option option3">
						<img src=
"{{ asset('media/activ.png')}}"
							class="nav-img"
							alt="report">
						<h3> User Activity</h3>
					</div>
					</a>

					<div class="nav-option option5">
						<img src=
"{{ asset('media/report.png')}}"
							class="nav-img"
							alt="blog">
						<h3> Profile</h3>
					</div>

					<div class="nav-option option6">
						<img src=
"{{ asset('media/setting.png')}}"
							class="nav-img"
							alt="settings">
						<h3> Settings</h3>
					</div>

					<div class="nav-option logout">
						<img src=
"{{ asset('media/logout.png')}}"
							class="nav-img"
							alt="logout">
						<h3>Logout</h3>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<img src=
"{{ asset('media/search.png')}}"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div>

			<div class="box-container">

				<div class="box box1">
					<div class="text">
						<h2 class="topic-heading">60.5k</h2>
						<h2 class="topic">Article Views</h2>
					</div>

					<img src=
"{{ asset('media/eye.png')}}"
						alt="Views">
				</div>

				<div class="box box2">
					<div class="text">
						<h2 class="topic-heading">150</h2>
						<h2 class="topic">Likes</h2>
					</div>

					<img src=
"{{ asset('media/like.png')}}"
						alt="likes">
				</div>

				<div class="box box3">
					<div class="text">
						<h2 class="topic-heading">320</h2>
						<h2 class="topic">Comments</h2>
					</div>

					<img src=
"{{ asset('media/messege.png')}}"
						alt="comments">
				</div>

				<div class="box box4">
					<div class="text">
						<h2 class="topic-heading">70</h2>
						<h2 class="topic">Published</h2>
					</div>

					<img src=
"{{ asset('media/tick.png')}}" alt="published">
				</div>
			</div>

			<div class="report-container">
                @yield('content')
				<!-- <div class="report-header">
					<h1 class="recent-Articles">Recent Articles</h1>
					<button class="view">View All</button>
				</div>

				<div class="report-body">
					<div class="report-topic-heading">
						<h3 class="t-op">Article</h3>
						<h3 class="t-op">Views</h3>
						<h3 class="t-op">Comments</h3>
						<h3 class="t-op">Status</h3>
					</div>

					<div class="items">
						<div class="item1">
							<h3 class="t-op-nextlvl">Article 73</h3>
							<h3 class="t-op-nextlvl">2.9k</h3>
							<h3 class="t-op-nextlvl">210</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 72</h3>
							<h3 class="t-op-nextlvl">1.5k</h3>
							<h3 class="t-op-nextlvl">360</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 71</h3>
							<h3 class="t-op-nextlvl">1.1k</h3>
							<h3 class="t-op-nextlvl">150</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 70</h3>
							<h3 class="t-op-nextlvl">1.2k</h3>
							<h3 class="t-op-nextlvl">420</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 69</h3>
							<h3 class="t-op-nextlvl">2.6k</h3>
							<h3 class="t-op-nextlvl">190</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 68</h3>
							<h3 class="t-op-nextlvl">1.9k</h3>
							<h3 class="t-op-nextlvl">390</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 67</h3>
							<h3 class="t-op-nextlvl">1.2k</h3>
							<h3 class="t-op-nextlvl">580</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
