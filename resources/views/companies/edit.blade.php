@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Company</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $company->email }}">
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo:</label>
                            @if ($company->logo)
                            <img src="{{ asset('storage/' . $company->logo) }}" alt="Company logo" style="max-height: 100px; max-width: 100px;">
                            @endif
                            <input type="file" name="logo" id="logo" class="form-control-file" accept="image/*">
                        </div>

                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="url" name="website" id="website" class="form-control" value="{{ $company->website }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
