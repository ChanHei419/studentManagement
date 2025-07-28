@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <h2>About Us</h2>
    <p>Welcome to our website! We are a dedicated team committed to providing the best services to our customers.</p>
    <h3>Our Mission</h3>
    <p>Our mission is to innovate and deliver high-quality solutions that meet the needs of our clients while fostering a culture of excellence and collaboration.</p>
    <h3>Our Team</h3>
    <ul>
        <li>John Doe - Founder & CEO</li>
        <li>Jane Smith - Lead Developer</li>
        <li>Emily Johnson - Marketing Director</li>
    </ul>
    <h3>Our History</h3>
    <p>Founded in 2010, we started as a small startup and have grown into a trusted name in the industry, serving thousands of customers worldwide.</p>
    {{-- <p>ben:{{$id}}, benchan:{{$name}}</p> --}}
@endsection