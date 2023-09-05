@if (!$schools->isEmpty())
@foreach ($schools as $school)
<div class="col-md-4">
    <div class="card border-0 shadow-sm position-relative school__card">
        <div class="d-flex align-items-center justify-content-between gap-3">
            <div class="card__icon__container" style="background: url('')">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPso_I1XNqppAuN4lDrtglwUumrspvb00IC8EBwrHDRsJKBotujDrTXPKgKYOLQ1Hz2No&usqp=CAU"
                    class="school__logo" alt="{{ $school->name }}">
            </div>
            <small class="d-flex align-items-center justify-content-center gap-1 card__badge" style="font-size: 13px;">
                <i class="bi bi-check-circle-fill"></i>
                OLSIS
            </small>
        </div>
        <div class="mt-3 school__details">
            <h6 class="school__name">University of Mindanao</h6>
            <div class="d-flex flex-column gap-2">
                <div class="d-flex gap-2 school__address">
                    <i class="bi bi-geo-alt"></i>
                    Bolton St, Poblacion District, Davao City, 8000 Davao del Sur
                </div>
                <div class="d-flex gap-2 school__address">
                    <i class="bi bi-telephone"></i>
                    +639345678876
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
