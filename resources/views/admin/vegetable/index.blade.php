@extends('admin.layouts.basic')

@section('breadcrumb')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Vegetable</a>
      </li>
      <li class="breadcrumb-item active">Overview</li>
    </ol>
@endsection

@section('content')
    <vegetable-index></vegetable-index>
@endsection
