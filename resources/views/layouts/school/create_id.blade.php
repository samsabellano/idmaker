@extends('layouts.school.index', ['title' => 'Create ID - Web ID Maker'])

@section('page-main-content')
<div class="row create__id mb-5 mt-4">
    <div class="col-12 mb-5">
        @include('layouts.school.education_level.college.forms.college_id_creation_form_modal')
        <div class="mb-4 text-center">
            <h5 class="page__header__title">By Education Level</h5>
            <small>Please select the type of user for ID creation.</small>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom__card hover__card">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center gap-3">
                            <div class="card__icon__container card__icon__container__printing">
                                <i class="fa-solid fa-child"></i>
                            </div>
                            <div class="d-flex align-items-start flex-column">
                                <p class="card__label mb-0">Grade School</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom__card hover__card">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center gap-3">
                            <div class="card__icon__container card__icon__container__printing">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="d-flex align-items-start flex-column">
                                <p class="card__label mb-0">High School</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom__card hover__card">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center gap-3">
                            <div class="card__icon__container card__icon__container__printing">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="d-flex align-items-start flex-column">
                                <p class="card__label mb-0">Senior High</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom__card hover__card" data-bs-toggle="modal" data-bs-target="#createStudentId">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center gap-3">
                            <div class="card__icon__container card__icon__container__printing">
                                <i class="fa-solid fa-user-graduate"></i>
                            </div>
                            <div class="d-flex align-items-start flex-column">
                                <p class="card__label mb-0">College</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        {{-- @include('layouts.school.student.forms.create_student_id_modal_form') --}}
        <div class="mb-4 text-center">
            <h5 class="page__header__title">Staffs or Employee</h5>
            <small>Please select the type of user for ID creation.</small>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="card custom__card hover__card">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center gap-3">
                            <div class="card__icon__container card__icon__container__printing">
                                <i class="fa-solid fa-user-shield"></i>
                            </div>
                            <div class="d-flex align-items-start flex-column">
                                <p class="card__label mb-0">School Staff or Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="card custom__card hover__card">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center gap-3">
                            <div class="card__icon__container card__icon__container__printing">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="d-flex align-items-start flex-column">
                                <p class="card__label mb-0">Other Employee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="card custom__card hover__card">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center gap-3">
                            <div class="card__icon__container card__icon__container__printing">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="d-flex align-items-start flex-column">
                                <p class="card__label mb-0">For Myself</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@if ($errors->storeCollegeId->any())
@push('modal-error')
<script>
    $(function () {
        $('#createStudentId').modal('show');
    });

</script>
@endpush
@endif
