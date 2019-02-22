@extends('layouts.app')

@section('content')

<h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut,
        blanditiis delectus deserunt doloribus eaque eos hic illum iusto molestias
        nam nisi obcaecati officia perferendis repudiandae tempora tempore ullam voluptatum.</p>

@endsection

@section('sidebar')

    @parent

    <p>This is appended to the sidebar</p>

@endsection
