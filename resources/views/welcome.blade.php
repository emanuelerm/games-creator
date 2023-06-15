@extends('layouts.app')
@vite('resources/scss/animation/home.scss')
@section('content')
	<div class="my-container">
		<svg class="my-svg" viewBox="0 0 1260 300">
			<symbol id="s-text">
				<text
				text-anchor="middle" x="50%" y="80%">
                Game creator
				</text>
			</symbol>

			<g class="g-ants">
				<use xlink:href="#s-text" class="text-copy"></use>
				<use xlink:href="#s-text" class="text-copy"></use>
				<use xlink:href="#s-text" class="text-copy"></use>
				<use xlink:href="#s-text" class="text-copy"></use>
				<use xlink:href="#s-text" class="text-copy"></use>
				<use xlink:href="#s-text" class="text-copy"></use>
			</g>
		</svg>
	</div>
@endsection
