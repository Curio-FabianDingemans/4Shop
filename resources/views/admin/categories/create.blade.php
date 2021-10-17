@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-center my-5">

	<form action="{{ route('admin.categories.store') }}" method="POST" style="min-width: 320px;" enctype="multipart/form-data">

		<h4>Nieuwe catogorie</h4>

		<div class="form-group">
			<label for="title">Naam</label>
			<input type="text" id="title" name="name" class="form-control">
		</div>
		<div class="form-group">
            <label class="form-check-label" for="active">
                Actief
            </label>
            <input type="checkbox" id="active" name="active">
		</div>

		<button type="submit" class="form-control btn btn-primary my-2">Opslaan</button>
		{{ csrf_field() }}
	</form>
</div>

@endsection
