@extends('layouts.master')

@section('content')
    <char-detail genus="{{ $genus }}" pin="{{ $pin }}"></char-detail>
@endsection
