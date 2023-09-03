@extends('layouts.connict.administrator.main', ['title' => 'Administrator - Manage Education'])

@section('breadcrumbs-page-name')
<li class="breadcrumb-item page__name active" aria-current="page">Education</li>
@endsection

@section('admin-main-content')
<div class="row">
    <div class="col-12 mb-4 d-flex align-items-center justify-content-between">
        <h6 class="mb-0">Education Types</h6>
        <div class="d-flex align-items-center justify-content-center">
            <a href="{{ route('connict.administrator.education.create') }}" class="btn shadow btn__add__education">
                <i class="bi bi-plus"></i>
                Add New
            </a>
        </div>
    </div>
    @include('layouts.connict.administrator.education.partials._education_list')
</div>
@endsection

@if ($errors->storeEducation->any() )
@push('modal-error')
<script>
    $(function () {
        $(`#createEducationModal`).modal('show');
    });

</script>
@endpush
@endif
