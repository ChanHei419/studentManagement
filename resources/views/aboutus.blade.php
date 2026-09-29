@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <h2 class="h3 mb-3">About This Project</h2>
        <p>
            This is a <strong>Student Management System</strong> built with Laravel 12 to practise
            full-stack application development — from database design and Eloquent ORM to Blade
            templating, validation, and pagination.
        </p>

        <h3 class="h5 mt-4">What It Demonstrates</h3>
        <ul>
            <li>MVC architecture with grouped, prefixed, and named routes</li>
            <li>Eloquent models with soft deletes, factories, and relationships</li>
            <li>Database migrations and seeders (200+ countries)</li>
            <li>Server-side search and pagination on real data</li>
            <li>Request validation, CSRF protection, and flash messaging</li>
            <li>Blade layouts, reusable views, and Bootstrap-based UI</li>
        </ul>

        <h3 class="h5 mt-4">Modules</h3>
        <ul>
            <li><strong>Countries</strong> — complete CRUD with search and pagination</li>
            <li><strong>Students</strong> — Eloquent / DB experiments with soft deletes</li>
            <li><strong>Teachers</strong> — model CRUD fundamentals</li>
        </ul>

        <p class="mt-4 mb-0">
            Source code:
            <a href="https://github.com/ChanHei419/studentManagement" target="_blank" rel="noopener">github.com/ChanHei419/studentManagement</a>
        </p>
    </div>
</div>
@endsection
