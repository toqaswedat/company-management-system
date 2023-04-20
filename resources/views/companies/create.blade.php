@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Create Company</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo:</label>
                            <input type="file" name="logo" id="logo" class="form-control-file" accept="image/*">
                        </div>

                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="url" name="website" id="website" class="form-control" value="{{ old('website') }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
