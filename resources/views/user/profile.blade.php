@extends('templates.pages.generic')

@section('content')
	<div class="row">

		<aside class="user-info col-md-12 col-lg-3">

			<div class="text-center">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                
                <span class="user-name">
                    {{ $user->name }}
				</span>

				<p class="text-muted">
                    asdad
				</p>
            </div>

			<hr>


			<ul class="user-metadata text-center text-lg-left">
				<li>
					<i class="icon-location"></i> {{ $user->country }}
				</li>

				<li>
					<i class="icon-mail"></i>

					<a href="mailto:{{ $user->email }}">
						asdasd
					</a>
				</li>

				
				<li>
					<i class="icon-link"></i>

					<a target="_blank" href="{{ $user->url }}">

					</a>
				</li>

			</ul>

			<hr class="hidden-lg-up">
		</aside>


		<section class="user-content col-md-12 col-lg-9">
			<nav class="user-profile">
				<a href="#" class="list-inline-item active">Profil</a>
			</nav>


				<div class="user-projects">
					<span class="title">
						<a href="">
						</a>
					</span>
					
					<span class="text-muted summary">
					</span>

					<ul class="list-inline metadata">
						<li class="list-inline-item">
							<i class="icon-gear"></i> 
						</li>

						<li class="list-inline-item">
							<i class="icon-fork"></i> Designer
						</li>


						<li class="list-inline-item">
							<i class="icon-group"></i> Developer
						</li>

						<li class="list-inline-item">
							<i class="icon-release"></i> 
						</li>

					</ul>
				</div>
				

				<hr>

		</section>
	</div>
@endsection