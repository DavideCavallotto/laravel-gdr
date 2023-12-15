@extends('layouts.app')

@section('content')
    @forelse ($characters as $character)
        {{ $characters->name }}
    @empty
        <span>Error</span>
    @endforelse
@endsection
