@extends('index', ['title' => 'Dashboard - Web ID Maker'])

@section('page-header')
<div class="w-100 d-flex align-items-center justify-content-between">
    <h5 class="page__header__title">Welcome back, Sam!</h5>
</div>
@endsection

@section('page-main-content')
<div class="col-xl-12 box-col-12 des-xl-100 content__container dashboard">
    <div class="row">
        <div class="col-xxl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card custom__card hover__card">
                <div class="card-body text-center">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-start flex-column">
                            <p class="card__label">Pictured</p>
                            <h3 class="card__count">140</h3>
                        </div>
                        <div class="card__icon__container card__icon__container__pictured">
                            <i class="bi bi-images"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card custom__card hover__card">
                <div class="card-body text-center">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-start flex-column">
                            <p class="card__label">Printing</p>
                            <h3 class="card__count">140</h3>
                        </div>
                        <div class="card__icon__container card__icon__container__printing">
                            <i class="bi bi-printer"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card custom__card hover__card">
                <div class="card-body text-center">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-start flex-column">
                            <p class="card__label">Delivered</p>
                            <h3 class="card__count">300</h3>
                        </div>
                        <div class="card__icon__container card__icon__container__delivered">
                            <i class="bi bi-truck"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card custom__card hover__card">
                <div class="card-body text-center">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-start flex-column">
                            <p class="card__label">Received</p>
                            <h3 class="card__count">900+</h3>
                        </div>
                        <div class="card__icon__container card__icon__container__received">
                            <i class="bi bi-box-seam"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
