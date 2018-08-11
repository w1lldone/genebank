@extends('admin.layouts.basic')

@section('breadcrumb')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Vegetable</a>
      </li>
      <li class="breadcrumb-item">
          <a href="{{ route('admin.vegetable.index') }}">Overview</a>
      </li>
      <li class="breadcrumb-item active">
          Details
      </li>
    </ol>
@endsection

@section('content')
    <vegetable-show :vegetable-id="{{ $vegetable }}"></vegetable-show>
@endsection
