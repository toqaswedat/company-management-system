@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Companies</h3>
                    <a href="{{ route('companies.create') }}" class="btn btn-primary">Create Company</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Website</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>
                                        @if ($company->logo)
                                            <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}" width="50">
                                        @endif
                                    </td>
                                    <td>{{ $company->website }}</td>
                                    <td>
                                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit</a>

                                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this company?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
