@extends('layouts.app')

@section('title', 'Countries')

@section('content')
<div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
    <div>
        <h1 class="h3 mb-1">Countries</h1>
        <p class="text-muted mb-0">Browse, search, add, edit, and delete country records.</p>
    </div>
    <a href="{{ url('countries/add') }}" class="btn btn-primary">+ Add Country</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form method="GET" action="{{ route('countries.index') }}" class="mb-3">
    <div class="input-group" style="max-width: 420px;">
        <input
            type="text"
            name="search"
            value="{{ $search ?? '' }}"
            placeholder="Search by name or code..."
            class="form-control"
        />
        <button type="submit" class="btn btn-outline-primary">Search</button>
    </div>
</form>

<div class="card shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Code</th>
                    <th scope="col" class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <td><span class="badge bg-secondary">{{ $country->code }}</span></td>
                        <td class="text-end">
                            <a href="{{ URL('countries/edit', $country->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ URL('countries/delete', $country->id) }}" method="post" class="d-inline" onsubmit="return confirm('Delete this country?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">No countries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer bg-white">
        {{ $countries->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
