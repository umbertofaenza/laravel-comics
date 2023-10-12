@extends('layouts.app')

@section('page-title', $page_title)

@section('main-content')
<section id="comics">
    {{-- section title --}}
    <span class="section-title">Current Series</span>
    {{-- row --}}
    <div class="row row-cols-3 g-3">
        {{-- cols with cards --}}
        @foreach($comics as $comic)
        <div class="col">
            <div class="comic-card">
                <div class="card-body">
                    <img src="{{ $comic['thumb']}}">
                    <span class="comic-title">
                        {{ $comic['title'] }}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection