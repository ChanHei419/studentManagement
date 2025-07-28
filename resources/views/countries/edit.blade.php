@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Country</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{URL('countries/update',$country->id) }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Country Name</label>
            <input type="text" class="form-control" id="name" name="name"  required value="{{ $country->name }}" required>
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Country Code</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ $country->code }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Country</button>
    </form>
</div>
@endsection