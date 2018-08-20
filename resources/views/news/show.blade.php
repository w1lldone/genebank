@extends('layouts.master')

@section('content')
    <news-detail title="{{ $data['title'] }}" image="{{ $data['image'] }}" body="{{ $data['body'] }}"></news-detail>
@endsection
