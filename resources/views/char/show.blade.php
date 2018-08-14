@extends('layouts.master')

@section('content')
    <char-vegetable-list :genus-id="{{ $genus }}"></char-vegetable-list>
@endsection
