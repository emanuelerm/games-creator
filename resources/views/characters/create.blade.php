@extends('layouts.app')

@section('content')
	<form action="{{ route('admin.characters.store') }}" method="POST">
		@csrf
		<div class="row justify-content-center mb-3 mt-5 mx-5 text-white">
			<div class="col-8">
				<div class="col-auto mb-5">
					<label for="name" class="form-label">Nome</label>
					<input type="text" name="name" class="form-control" id="name">
				</div>
				<div class="col-auto mb-5">
					<label for="description">Descrizione</label>
					<textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
				</div>
				<div class="col d-flex justify-content-between">
					<div class="col-2">
						<label for="attack">Soprannome</label>
						<input type="text" name="subnme" id="subname" class="form-control">
					</div>
					<div class="col-2">
						<label for="defence">Ruolo</label>
						<input type="text" name="role" id="role" class="form-control">
					</div>
					<div class="col-2">
						<label for="speed">Provenienza</label>
						<input type="text" name="derivation" id="derivation" class="form-control">
					</div>
					<div class="col-2">
						<label for="life">Difficoltà</label>
						<input type="text" name="difficoulty" id="difficoulty" class="form-control">
					</div>
				</div>
				<div class="d-flex justify-content-center mb-3 gap-3 mt-5">
					<button type="submit" class="btn btn-primary">Add character</button>
					<button type="reset" class="btn btn-secondary px-4">Reset form</button>
				</div>
			</div>
		</div>
	</form>
@endsection
