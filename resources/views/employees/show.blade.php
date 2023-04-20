@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $employee->first_name }} {{ $employee->last_name }}</h3>
                </div>

                <div class="card-body">
                    <p><strong>Email:</strong> {{ $employee->email }}</p>
                    <p><strong>Phone:</strong> {{ $employee->phone }}</p>
                    <p><strong>Company:</strong> {{ $employee->company->name }}</p>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
