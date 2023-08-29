@if (!$educations->isEmpty())
@foreach ($educations as $education)
@include('layouts.connict.administrator.education.partials.modal.update_education_modal')
<div class="col-md-4">
    <div class="card border-0 shadow-sm position-relative education__card">
        <div class="d-flex align-items-center gap-3">
            <div class="card__icon__container card__icon__container__printing">
                {!! $education->icon !!}
            </div>
            <div class="d-flex w-100 align-items-center justify-content-between">
                <h6 class="mb-0 education__name">{{ $education->name }}</h6>
                <div
                    class="d-flex align-items-center justify-content-end gap-2 position-absolute btn__action__container">
                    <button type="button" class="btn btn-sm p-0 education__btn__action" data-bs-toggle="modal"
                        data-bs-target="#updateEducation{{ $education->id }}">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <button type="button" class="btn btn-sm p-0 education__btn__action" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
