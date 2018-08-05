@extends('layouts.master')

@section('content')
    <char-detail :vegetable-id="{{ $vegetable }}" :genus-id="{{ $genus }}"></char-detail>
@endsection
