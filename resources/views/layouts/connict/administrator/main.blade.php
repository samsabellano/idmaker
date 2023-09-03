@extends('index')

@section('page-header')
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb page__header__title">
        <li class="breadcrumb-item">
            <a class="text-dark fw-bold">Administrator</a>
        </li>
        @section('breadcrumbs-page-name')@show
    </ol>
</nav>
@endsection

@section('page-main-content')
<div class="row administrator">
    <div class="col-12">
        @include('layouts.connict.administrator.partials._administrator_tab')
    </div>
    <div class="col-12">
        @section('admin-main-content')@show
    </div>
</div>
@endsection
