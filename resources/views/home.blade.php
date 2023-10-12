@extends('layouts.app')

@section('page-title', $page_title)

@section('main-content')
<h1 class="my-3">Comics</h1>

<div class="row row-cols-3 g-3">

    @foreach($comics as $comic)
    <div class="col">
        <div class="card">
            <div class="card-header">
                {{ $comic['title'] }}
            </div>
            <div class="card-body">
                <img src="{{ $comic['thumb']}}" class="img-fluid">
                <p>
                    {{$comic['description']}}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection