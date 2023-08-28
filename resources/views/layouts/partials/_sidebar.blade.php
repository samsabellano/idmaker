<div class="sidebar" id="sidebar__toggle">
    <div class="sidebar__user text-center">
        <div class="position-relative">
            <img src="{{ asset('image/sam.jpg') }}" class="rounded-circle sidebar__userimage" alt="">
            <div class="sidebar__badge__bottom">
                <span class="badge user__role__badge">
                </span>
            </div>
        </div>
        <a href="">
            <h6 class="mt-3 sidebar__userfullname">Sam Sabellano</h6>
        </a>
        <p class="sidebar__userdepartment">School Administrator</p>
    </div>
    <nav style="margin-bottom: 90px;">
        <div class="main__navbar mx-4">
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <a href="{{ auth()->user()->role_id ===  App\Models\Role::SUPER_ADMIN ? route('connict.dashboard') : route('school.dashboard') }}"
                        class="btn d-flex btn-block align-items-center w-100 border-0 sidebar__buttons
                        {{ Route::is('school.dashboard') ? 'sidebar__btn__active active' : ''}}">
                        <div class="d-flex align-items-center justify-content-center sidebar__button__icon__container
                            fade__in__sidebar__icon__container">
                            <i class="bi bi-grid-1x2"></i>
                        </div>
                        Dashboard
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ auth()->user()->role_id ===  App\Models\Role::SUPER_ADMIN ? route('connict.transaction.index') : '' }}"
                        class="btn d-flex btn-block align-items-center w-100 border-0 sidebar__buttons
                        {{ Route::is('school.transaction.index') ? 'sidebar__btn__active active' : ''}}">
                        <div class="d-flex align-items-center justify-content-center sidebar__button__icon__container
                            fade__in__sidebar__icon__container">
                            <i class="bi bi-arrow-left-right"></i>
                        </div>
                        Transactions
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('school.create_id.index') }}" class="btn d-flex btn-block align-items-center w-100 border-0 sidebar__buttons
                        {{ Route::is('school.create_id.index') ? 'sidebar__btn__active active' : ''}}">
                        <div class="d-flex align-items-center justify-content-center sidebar__button__icon__container
                            fade__in__sidebar__icon__container">
                            <i class="bi bi-person-bounding-box"></i>
                        </div>
                        Create ID
                    </a>
                </li>
                <li class="mb-1">
                    <a href="" class="btn d-flex btn-block align-items-center w-100 border-0 sidebar__buttons">
                        <div class="d-flex align-items-center justify-content-center sidebar__button__icon__container
                            fade__in__sidebar__icon__container">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        ID Corrections
                    </a>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex btn-block align-items-center w-100 border-0 sidebar__buttons
                        sidebar__btn__collapse" data-bs-toggle="collapse" data-bs-target="#userAccount-collapse"
                        aria-expanded="true">
                        <div class="d-flex align-items-center justify-content-center sidebar__button__icon__container">
                            <i class="bi bi-people"></i>
                        </div>
                        User Accounts
                    </button>
                    <div class="collapse {% if url_name in context_urls_for_tickets %}show{% endif %}"
                        id="userAccount-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small sidebar__collapse__ul">
                            <li>
                                <a href="{% url 'user_admin:admin_new_tickets' %}" class="position-relative link-dark d-flex align-items-center text-decoration-none rounded
                                justify-content-between sidebar__collapse__btnlink
                                {% if url_name == 'admin_new_tickets' %}sidebar__collapse__btnlink__active{% endif %}">
                                    <div class="d-flex align-items-center">
                                        <div class="sidebar__active__dot position-absolute rounded-circle"></div>
                                        <span class="sidebar__btn__link__name ">School Staff</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="position-relative link-dark d-flex align-items-center text-decoration-none rounded
                                    justify-content-between sidebar__collapse__btnlink
                                    {% if url_name == 'open_tickets' %}sidebar__collapse__btnlink__active{% endif %}">
                                    <div class="d-flex align-items-center">
                                        <div class="sidebar__active__dot position-absolute rounded-circle"></div>
                                        <span class="sidebar__btn__link__name ">Super Admin</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <a href="{{ route('connict.administrator.education.index') }}" class="btn d-flex btn-block align-items-center w-100 border-0 sidebar__buttons
                        {{ Route::is('connict.administrator.education.*') ? 'sidebar__btn__active active' : ''}}">
                        <div class="d-flex align-items-center justify-content-center sidebar__button__icon__container
                            fade__in__sidebar__icon__container">
                            <i class="bi bi-person-gear"></i>
                        </div>
                        Administrator
                    </a>
                </li>
                <li class="mb-1">
                    <a href="" class="btn d-flex btn-block align-items-center w-100 border-0 sidebar__buttons">
                        <div class="d-flex align-items-center justify-content-center sidebar__button__icon__container
                            fade__in__sidebar__icon__container">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        Staff Log
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
