@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $company->name }}</h3>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Email:</strong> {{ $company->email }}</li>
                        <li class="list-group-item"><strong>Logo:</strong> @if ($company->logo) <img src="{{ asset('storage/' . $company->logo) }}" alt="Company logo" style="max-height: 100px; max-width: 100px;"> @else No logo @endif</li>
                        <li class="list-group-item"><strong>Website:</strong> {{ $company->website }}</li>
                    </ul>
                </div>

                <div class="card-footer">
                    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this company?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
