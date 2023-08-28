@extends('index', ['title' => 'Transactions - Web ID Maker'])


@section('page-header')
<div class="w-100 d-flex align-items-center justify-content-between">
    <h5 class="page__header__title">Transactions</h5>
    {{-- <a href="" class="btn btn-info d-inline-block">New Transaction</a> --}}
</div>
@endsection

@section('page-main-content')
<div class="row transactions">
    <div class="col-12">
        @if (!$transactions->isEmpty())
        <div class="card custom__card p-0">
            <div class="card-header border-0 d-flex align-items-center justify-content-between">
                <h6 class="mb-0">Transaction Records</h6>
                <small>{{ count($transactions) }}</small>
            </div>
            <div class="card-body px-0 py-0">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs opacity-7">
                                    <h6 class="custom__table__header"></h6>
                                </th>
                                <th class="text-uppercase text-secondary text-xxs opacity-7">
                                    <h6 class="custom__table__header">Student Name</h6>
                                </th>
                                <th class="text-uppercase text-secondary text-xxs opacity-7">
                                    <h6 class="custom__table__header">User Type</h6>
                                </th>
                                <th class="text-uppercase text-secondary text-xxs opacity-7">
                                    <h6 class="custom__table__header">Edu. Level</h6>
                                </th>
                                <th class="text-uppercase text-secondary text-xxs opacity-7">
                                    <h6 class="custom__table__header">School ID</h6>
                                </th>
                                <th class="text-uppercase text-secondary text-xxs opacity-7">
                                    <h6 class="custom__table__header">School Year</h6>
                                </th>
                                <th class="text-uppercase text-secondary text-xxs opacity-7">
                                    <h6 class="custom__table__header">Date Created</h6>
                                </th>
                                <th class="text-uppercase text-secondary text-xxs opacity-7">
                                    <h6 class="custom__table__header">Status</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td class="d-flex align-items-center justify-content-center py-3">
                                    <div class="btn-group dropend">
                                        <button type="button"
                                            class="d-flex align-items-center justify-content-center list__dropdown__menu"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </button>
                                        <ul class="dropdown-menu shadow">
                                            <li>
                                                <a class="btn dropdown-item dropdown__menu__items d-flex align-items-center py-2"
                                                    href="#">
                                                    <i class="fa-solid fa-pen"></i>
                                                    <span class="mx-2"></span>
                                                    <span class="dropdown__menu__label__action">Edit Record</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn dropdown-item dropdown__menu__items d-flex align-items-center py-2"
                                                    href="{{ route('school.transaction.delete_transaction_record', $transaction->id) }}">
                                                    <i class="fa-solid fa-user-xmark"></i>
                                                    <span class="mx-2"></span>
                                                    <span class="dropdown__menu__label__action">Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center p-3">
                                        <div class="my-auto">
                                            <div class="mb-0 tb__data">
                                                {{ $transaction->record->idRecordsGetFullName() }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center p-3">
                                        <div class="my-auto">
                                            <div class="mb-0 tb__data">
                                                @switch($transaction->record->user_type_id)
                                                @case(2)
                                                Scool Admin
                                                @break
                                                @case(3)
                                                Scool Admin
                                                @break
                                                @case(4)
                                                Student
                                                @break
                                                @endswitch
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center p-3">
                                        <div class="my-auto">
                                            <div class="mb-0 tb__data">
                                                {{ $transaction->record->education_level ?? 'None' }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center p-3">
                                        <div class="my-auto">
                                            <div class="mb-0 tb__data">{{ $transaction->record->school_id }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center p-3">
                                        <div class="my-auto">
                                            <div class="mb-0 tb__data">{{ $transaction->record->idSchoolYear() }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center p-3">
                                        <div class="my-auto">
                                            <div class="mb-0 tb__data">{{ $transaction->created_at->format("M. d, Y")}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center p-3">
                                        <div class="my-auto">
                                            <div class="mb-0 tb__data">{{ $transaction->status->description ?? 'None' }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
