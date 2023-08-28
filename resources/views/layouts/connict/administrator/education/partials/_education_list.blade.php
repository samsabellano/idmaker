@if (!$educations->isEmpty())
@foreach ($educations as $education)
<div class="col-md-4">
    <div class="card border-0 shadow-sm">
        <div class="d-flex align-items-center gap-3">
            <div class="card__icon__container card__icon__container__printing">
                {!! $education->icon !!}
            </div>
            <div class="d-flex align-items-start flex-column">
                <h6 class="mb-0 education__name">{{ $education->name }}</h6>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
