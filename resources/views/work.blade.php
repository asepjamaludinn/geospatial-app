@extends('layouts.app')

@section('title', 'Project | Asep Jamaludin')
@section('meta_description', 'Koleksi karya pengembangan web oleh Asep Jamaludin.')

@section('content')
<div class="w-full min-h-[70vh] flex flex-col items-center justify-center">
    <h1 class="text-7xl sm:text-9xl md:text-[12rem] lg:text-[15rem] font-light tracking-tighter text-gray-900 leading-none">
        Works
    </h1>
</div>

<div class="w-full max-w-7xl mx-auto pb-32 mt-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 lg:gap-x-24 gap-y-24 md:gap-y-16">
        @foreach($works as $index => $work)
            <x-project-card :work="$work" :index="$index" />
        @endforeach
    </div>
</div>
@endsection