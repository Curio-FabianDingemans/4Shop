@extends('layouts.admin')

@section('content')

	<div class="d-flex justify-content-between align-items-center my-4">
		<h4>Catogorien</h4>
		<div>
			<a href="{{ route('admin.categories.create') }}">Nieuw product toevoegen</a>
		</div>
	</div>

    <table class="table table-striped table-hover">
        <tr>
            <th>Naam</th>
            <th>Actief</th>
            <th colspan="4">&nbsp;</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->active == 0 ? "Nee" : "Ja" }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', $category->id) }}">Aanpassen</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
