@extends('index', ['title' => 'Transactions - Web ID Maker'])

@section('page-header')
<div class="w-100 d-flex align-items-center justify-content-between">
    <h5 class="page__header__title">Administrator</h5>
    {{-- <a href="" class="btn btn-info d-inline-block">New Transaction</a> --}}
</div>
@endsection

@section('page-main-content')
@include('layouts.connict.administrator.education.partials.modal.create_education_modal')
<div class="row administrator">
    <div class="col-12">
        @include('layouts.connict.administrator.partials._administrator_tab')
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12 mb-4 d-flex align-items-center justify-content-between">
                <h6 class="mb-0">Education Types</h6>
                <div class="d-flex align-items-center justify-content-center">
                    <button class="btn shadow btn__add__education" data-bs-toggle="modal"
                        data-bs-target="#createEducationModal">
                        <i class="bi bi-plus"></i>
                        Add New
                    </button>
                </div>
            </div>
            @include('layouts.connict.administrator.education.partials._education_list')
        </div>
    </div>
</div>
@endsection

@if ($errors->updateEducation->any() || session()->has('updateError') )
{{-- Show edit modal based on the selected record/data --}}
<input type="hidden" id="education_id" value="{{ session('updateError') }}">
@push('modal-error')
<script>
    const education_id = document.getElementById('education_id');
    $(function () {
        $(`#updateEducation${education_id.value}`).modal('show');
    });

</script>
@endpush
@endif
