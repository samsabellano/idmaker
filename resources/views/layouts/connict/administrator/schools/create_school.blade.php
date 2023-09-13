@extends('layouts.connict.administrator.main', ['title' => 'Administrator - Manage Education'])

@section('breadcrumbs-page-name')
<li class="breadcrumb-item page__name" aria-current="page">
    <a href="{{ route('connict.administrator.school.index') }}" class="text-dark">
        School
    </a>
</li>
<li class="breadcrumb-item page__name active" aria-current="page">New</li>
@endsection

@section('admin-main-content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-9 mt-3">
        @livewire('school.create-school')
    </div>
</div>
@endsection
