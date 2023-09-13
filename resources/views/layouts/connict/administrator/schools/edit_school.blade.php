@extends('layouts.connict.administrator.main', ['title' => 'Administrator - Manage Education'])

@section('breadcrumbs-page-name')
<li class="breadcrumb-item page__name" aria-current="page">
    <a href="{{ route('connict.administrator.school.index') }}" class="text-dark">
        School
    </a>
</li>
<li class="breadcrumb-item page__name active" aria-current="page">Edit</li>
@endsection

@section('admin-main-content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-9 mt-3">
        <div class="card border-0 shadow-sm position-relative custom__card edit__card">
            <h6 class="card__title">Edit School</h6>
            <form action="{{ route('connict.administrator.school.update', $school) }}" method="POST"
                enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="{{ Storage::url($school->logo) }}" class="my-4 edit__school__logo"
                                alt="{{ $school->name }}">
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="@error('name') is-invalid @enderror form-control
                                custom__text__input" name="name" value="{{ old('name', $school->name)  }}">
                                <label class="custom__text__input__label">
                                    School name
                                </label>
                                @error('name')
                                <span class="text-danger custom__field__message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <textarea
                                    class="@error('address') is-invalid @enderror form-control custom__text__input"
                                    name="address"
                                    style="height: 100px;">{{ old('address', $school->address) }}</textarea>
                                <label class="custom__text__input__label">
                                    Address
                                </label>
                                @error('address')
                                <span class="text-danger custom__field__message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="@error('contact_number') is-invalid @enderror form-control
                                custom__text__input" name="contact_number"
                                    value="{{ old('contact_number', $school->contact_number) }}">
                                <label class="custom__text__input__label">
                                    Contact number
                                </label>
                                @error('contact_number')
                                <span class="text-danger custom__field__message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="input-group">
                                <label class="input-group-text border-0" for="logo"
                                    style="font-size: 13px;">Logo</label>
                                <input type="file" name="logo" class="form-control border-0 custom__text__input @error('logo') is-invalid
                                    @enderror" style="font-size: 13px;" id="logo"
                                    value="{{ old('logo', $school->logo) }}">
                            </div>
                            @error('logo')
                            <span class="text-danger custom__field__message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer gap-3 justify-content-start mt-3">
                        <a href="{{ route('connict.administrator.school.index') }}" type="button"
                            class="form__button form__btn__cancel">Cancel</a>
                        <button type="submit" class="shadow form__button form__btn__submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
