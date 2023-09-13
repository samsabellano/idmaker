@if (!$schools->isEmpty())
@foreach ($schools as $school)
<div class="col-lg-6 col-xxl-4">
    <div class="card border-0 shadow-sm position-relative school__card">
        <div class="d-flex align-items-center justify-content-between gap-3">
            <img src="{{ Storage::url($school->logo) }}" class="school__logo" alt="{{ $school->name }}">
            <small class="d-flex align-items-center justify-content-center gap-1 card__badge" style="font-size: 13px;">
                <i class="bi bi-check-circle-fill"></i>
                OLSIS
            </small>
        </div>
        <div class="mt-3 school__details">
            <a href="">
                <h6 class="school__name">{{ $school->name }}</h6>
            </a>
            <div class="d-flex flex-column gap-2">
                <div class="d-flex gap-2 school__address">
                    <i class="bi bi-geo-alt"></i>
                    {{ $school->address }}
                </div>
                <div class="d-flex justify-content-between gap-2">
                    <div class="d-flex gap-2 school__address">
                        <i class="bi bi-telephone"></i>
                        {{ $school->contact_number }}
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <a href="{{ route('connict.administrator.school.edit', $school) }}"
                            class="btn btn-sm p-0 school__btn__action"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('connict.administrator.school.destroy', $school) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm p-0 school__btn__action" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
