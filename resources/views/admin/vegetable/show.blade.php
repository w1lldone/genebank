@extends('admin.layouts.basic')

@section('content')
    <vegetable-show :vegetable-id="{{ $vegetable }}"></vegetable-show>
@endsection
