@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="fs-4 text-secondary my-4">
			{{ __('Dashboard') }}
		</h2>
		<div class="row justify-content-center ">
			<div class="col">
				<div class="card bg-body-tertiary">
					<div class="card-header fw-bold fs-5">{{ __('User Dashboard') }}</div>
					<div>
						<ul class="p-0 m-0">
							<li class="px-3 m-0">
								<a class="text-dark fw-semibold" href="{{route('characters.index')}}">Characters card</a>
							</li>
							<li class="px-3 m-0">
								<a class="text-dark fw-semibold" href="{{url('/')}}">Come back to home</a>
							</li>
						</ul>
					</div>
					<div class="card-body fs-6 fw-light">
						@if (session('status'))
							<div class="alert alert-success fs-6 fw-light" role="alert">
								{{ session('status') }}
							</div>
						@endif

						{{ __('You are logged in!') }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
