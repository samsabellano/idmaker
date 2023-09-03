@extends('layouts.connict.administrator.main', ['title' => 'Administrator - Manage Education'])

@section('breadcrumbs-page-name')
<li class="breadcrumb-item page__name" aria-current="page">
    <a href="{{ route('connict.administrator.education.index') }}" class="text-dark">
        Education
    </a>
</li>
<li class="breadcrumb-item page__name active" aria-current="page">Edit</li>
@endsection

@section('admin-main-content')
<div class="row justify-content-center">
    <div class="col-md-7 mt-3">
        <div class="card border-0 shadow-sm position-relative custom__card">
            <h6 class="card__title">Edit Education</h6>
            <form action="{{ route('connict.administrator.education.update', $education->id) }}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="@error('name') is-invalid @enderror form-control
                                custom__text__input" name="name" value="{{ $education->name }}">
                            <label class="custom__text__input__label">
                                Education name
                            </label>
                            @error('name')
                            <span class="text-danger custom__field__message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="@error('icon') is-invalid @enderror form-control
                                custom__text__input" name="icon" value="{{ $education->icon }}">
                            <label class="custom__text__input__label">
                                Icon
                            </label>
                            @error('icon')
                            <span class="text-danger custom__field__message">{{ $message }}</span>
                            <br>
                            @enderror
                            <div class="d-inline-flex flex-column my-2">
                                <small class="mb-1" style="font-weight: 600; font-size: 13px;">Find Icon</small>
                                <a href="https://icons.getbootstrap.com/" class="d-inline-flex gap-1"
                                    style="font-size: 12px; color: #1A1E33; font-weight: 500;" target="_blank">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-bootstrap-fill"></i>
                                        Bootstrap
                                    </div>
                                    <i class="bi bi-box-arrow-up-right" style="font-size: 9px; margin-top: 2px;"></i>
                                </a>
                                <a href="https://fontawesome.com/search?o=r&m=free&s=regular%2Csolid"
                                    class="d-inline-flex gap-1"
                                    style="font-size: 12px; color: #1A1E33; font-weight: 500;" target="_blank">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-font-awesome"></i>
                                        Font Awesome
                                    </div>
                                    <i class="bi bi-box-arrow-up-right" style="font-size: 9px; margin-top: 2px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer gap-3 justify-content-start">
                        <a href="{{ route('connict.administrator.education.index') }}" type="button"
                            class="form__button form__btn__cancel">Cancel</a>
                        <button type="submit" class="shadow form__button form__btn__submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
