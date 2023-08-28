<div class="modal" id="createStudentId" tabindex="-1" aria-labelledby="createStudentIdLabel" aria-hidden="true"
    data-bs-focus="false">
    <form class="form-floating" action="{{ route('school.create_id.college') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @include('layouts.partials.modals._photo_modal')
        @include('layouts.partials.modals._signature_modal')
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Student ID Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal-id-form"></button>
                </div>
                <div class="modal-body mt-4">
                    <div class="row">
                        <div class="col-xxl-8 col-md-8">
                            <div class="d-flex flex-column mb-3">
                                <div class="row">
                                    <h6 class="form__section__label">Personal Information {{ session()->has('error') }}
                                    </h6>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="@error('first_name', 'storeCollegeId') is-invalid @enderror form-control
                                                custom__text__input" name="first_name" id="firstName">
                                            <label for="firstName" class="custom__text__input__label">
                                                First Name
                                            </label>
                                            @error('first_name', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="@error('middle_name', 'storeCollegeId') is-invalid @enderror
                                                form-control custom__text__input" name="middle_name" id="middleName">
                                            <label for="middleName" class="custom__text__input__label">
                                                Middle Name
                                            </label>
                                            @error('middle_name', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="@error('last_name', 'storeCollegeId') is-invalid @enderror
                                                form-control custom__text__input" name="last_name" id="lastName">
                                            <label for="lastName" class="custom__text__input__label">
                                                Last Name
                                            </label>
                                            @error('last_name', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3">
                                            <select
                                                class="@error('suffix', 'storeCollegeId') is-invalid @enderror form-select custom__text__input custom__select"
                                                id="suffix" name="suffix" aria-label="Floating label select">
                                                <option selected></option>
                                                @foreach ($suffixes as $suffix)
                                                <option value="{{ $suffix->name }}">
                                                    {{ $suffix->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <label for="floatingSelect" class="custom__text__input__label">
                                                Suffix <em>(Jr, Sr, etc.)</em>
                                            </label>
                                            @error('suffix', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="datetime-local" class="@error('birth_date', 'storeCollegeId') is-invalid @enderror form-control
                                                custom__text__input" name="birth_date" id="birthDate">
                                            <label for="" class="custom__text__input__label">
                                                Birth Date
                                            </label>
                                            @error('birth_date', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <div class="row">
                                    <h6>School Information</h6>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="@error('college', 'storeCollegeId') is-invalid @enderror
                                                form-control custom__text__input" name="college" id="college">
                                            <label for=""
                                                class="custom__text__input__label">College/Department/School</label>
                                            @error('college', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="@error('section', 'storeCollegeId') is-invalid @enderror
                                                form-control custom__text__input" name="course" id="course">
                                            <label for="" class="custom__text__input__label">Course</label>
                                            @error('course', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="@error('student_id_number', 'storeCollegeId') is-invalid @enderror
                                                form-control custom__text__input" name="school_id"
                                                id="studentIdNumber">
                                            <label for="" class="custom__text__input__label">
                                                School ID
                                            </label>
                                            @error('student_id_number', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <select class="form-select custom__text__input custom__select
                                                        @error('school_year', 'storeCollegeId') is-invalid @enderror"
                                                    id="schoolYear" aria-label="Floating label select"
                                                    name="school_year">
                                                    <option selected></option>
                                                    @foreach ($schoolYears as $year)
                                                    <option value="{{ $year->school_year }}">
                                                        {{ $year->school_year }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelect" class="custom__text__input__label">
                                                    School Year
                                                </label>
                                                @error('school_year', 'storeCollegeId')
                                                <span class="text-danger custom__field__message">{{ $message }}</span>
                                                @enderror
                                                <span class="text-danger mt-2" id="invalid-start-year"
                                                    style="font-size: 0.78rem; line-height: 1.2;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="row">
                                    <h6>Guardian's Information</h6>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="@error('guardian_full_name', 'storeCollegeId') is-invalid @enderror form-control
                                                custom__text__input" name="guardian_full_name" id="guardianFullName">
                                            <label for="" class="custom__text__input__label">
                                                Complete Name
                                            </label>
                                            @error('guardian_full_name', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="@error('guardian_contact_number', 'storeCollegeId') is-invalid @enderror form-control
                                                custom__text__input" name="guardian_contact_number"
                                                id="guardianContactNumber" minlength="11" maxlength="11">
                                            <label for="" class="custom__text__input__label">
                                                Contact Number
                                            </label>
                                            @error('guardian_contact_number', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="@error('guardian_complete_address', 'storeCollegeId') is-invalid @enderror form-control
                                                custom__text__input" name="guardian_complete_address"
                                                id="guardianCompleteAddress">
                                            <label for="" class="custom__text__input__label">
                                                Complete Address
                                            </label>
                                            @error('guardian_complete_address', 'storeCollegeId')
                                            <span class="text-danger custom__field__message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-4">
                            <div class="row">
                                <h6>ID Preview</h6>
                                <ul class="nav nav-pills d-flex mb-3" id="pills-tab" role="tablist">
                                    <div class="row w-100 mx-1">
                                        <div class="col-lg-6 col-sm-6">
                                            <button class="nav-link w-100 active" id="pills-id-front-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-id-front" type="button"
                                                role="tab" aria-controls="pills-id-front"
                                                aria-selected="true">Front</button>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <button class="nav-link w-100" id="pills-id-back-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-id-back" type="button" role="tab"
                                                aria-controls="pills-id-back" aria-selected="false">Back</button>
                                        </div>
                                    </div>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-id-front" role="tabpanel"
                                        aria-labelledby="pills-id-front-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card p-0 mx-auto student__id__card__template" id="IDFront">
                                                    <div class="card-body p-0 d-flex flex-column">
                                                        <div
                                                            class="d-flex align-items-center student__id__card__header gap-2">
                                                            <img src="{{ asset('image/um_logo.png') }}" alt=""
                                                                class="id__school__logo">
                                                            <div class="d-flex flex-column gap-1">
                                                                <h6 class="mb-0 id__school__name">
                                                                    The University of Mindanao
                                                                </h6>
                                                                <p class="mb-0 id__school__address">
                                                                    Bolton St, Poblacion District, Davao City
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-around align-items-center student__id__qr__and__picture">
                                                            <div class="student__id__qrcode d-flex flex-column">
                                                                <h5 class="student__id text-center mb-0"
                                                                    id="previewStudentIdNumber">
                                                                </h5>
                                                                <img src="{{ asset('image/qr.png') }}" alt=""
                                                                    class="id__qrcode">
                                                            </div>
                                                            <div class="student__id__picture d-flex align-items-center
                                                                justify-content-center" id="student-id-picture">
                                                                <img src="{{ asset('image/samuel.png') }}" alt=""
                                                                    class="id__picture" id="id-template-picture">
                                                            </div>
                                                        </div>
                                                        <div class="student__id__information">
                                                            <h6 class="id__full__name mb-1">
                                                                <span id="previewFirstName"></span>
                                                                <span id="previewMiddleName"></span>
                                                                <span id="previewLastName"></span>
                                                                <span id="previewSuffix"></span>
                                                            </h6>
                                                            <div class="px-3">
                                                                <p class="mb-2 id__user__type">Student</p>
                                                                <h6 class="id__college__name" id="previewCollege"></h6>
                                                                <small class="fw-bold" id="previewSchoolYear"></small>
                                                                <div class="my-4">
                                                                    <h6 class="id__address" id="previewCourse"></h6>
                                                                    <p class="mb-0 id__course__label">Course</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-id-back" role="tabpanel"
                                        aria-labelledby="pills-id-back-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card p-0 mx-auto student__id__card__template" id="IDBack">
                                                    <div class="card-body p-0">
                                                        <div class="student__id__card__back">
                                                            <div
                                                                class="id__back__birthdate position-relative d-flex justify-content-between gap-2 align-items-center mt-3">
                                                                <p class="id__back__field__label mt-auto">Birth
                                                                    Date:
                                                                </p>
                                                                <h6 class="id__back__birthdate__field id__back__field"
                                                                    id="previewBirthDate">
                                                                </h6>
                                                                <div class="d-flex position-absolute"
                                                                    style="right: 0; top: -3px; font-size: 11px;">
                                                                    <small>MM</small>
                                                                    <span>-</span>
                                                                    <small>DD</small>
                                                                    <span>-</span>
                                                                    <small>YYYY</small>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="id__back__birthdate d-flex justify-content-between gap-2 align-items-center mt-3">
                                                                <p class="id__back__field__label mt-auto">Signature:</p>
                                                                <div
                                                                    class="id__back__field pb-0 d-flex justify-content-between">
                                                                    <img height="50" width="auto"
                                                                        id="id-template-signature">
                                                                    <div class="signature__icon__container d-flex align-items-center justify-content-center p-2 shadow-sm mt-auto mb-1"
                                                                        id="btn-write-signature">
                                                                        <i class="fa-solid fa-pen"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="guardian__info mt-4 text-center">
                                                                <h6 class="guardian__info__header mb-1">
                                                                    In Case of Emergency
                                                                </h6>
                                                                <small style="font-size: 0.8rem;">Please contact</small>
                                                                <div class="mt-3">
                                                                    <p class="guardian__name"
                                                                        id="previewGuardianFullName">
                                                                        Guardian's full name
                                                                    </p>
                                                                    <p class="guardian__address"
                                                                        id="previewGuardianCompleteAddress">
                                                                        Guardian's complete address
                                                                    </p>
                                                                    <p class="guardian__contact"
                                                                        id="previewGuardianContactNumber">
                                                                        Guardian's contact number
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="student__id__note mt-3">
                                                                <p class="mb-0">
                                                                    Sed ut perspiciatis unde omnis iste natus error sit
                                                                    voluptatem accusantium doloremque laudantium, totam
                                                                    rem aperiam, eaque ipsa quae ab illo inventore
                                                                    veritatis et quasi architecto beatae vitae dicta
                                                                    sunt explicabo.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn shadow btn__form__submit" id="btnSaveIdRecord">Submit and
                        Save</button>
                    <button type="button" class="btn shadow d-flex gap-2 align-items-center btn__take__photo"
                        id="btn-take-a-photo">
                        <i class="fa-solid fa-camera"></i>
                        Take a Photo
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
