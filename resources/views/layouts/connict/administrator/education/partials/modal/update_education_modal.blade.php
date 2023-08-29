<div class="modal custom__modal" id="updateEducation{{ $education->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Update Education</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('connict.administrator.education.update', $education->id) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="@error('name', 'updateEducation') is-invalid @enderror form-control
                                custom__text__input" name="name" value="{{ $education->name }}">
                            <label class="custom__text__input__label">
                                Education name
                            </label>
                            @error('name', 'updateEducation')
                            <span class="text-danger custom__field__message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="@error('icon', 'updateEducation') is-invalid @enderror form-control
                                custom__text__input" name="icon" value="{{ $education->icon }}">
                            <label class="custom__text__input__label">
                                Icon
                            </label>
                            @error('icon', 'updateEducation')
                            <span class="text-danger custom__field__message">{{ $message }}</span>
                            <br>
                            @enderror
                            <div class="d-inline-flex flex-column mt-2">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal__button btn__modal__cancel"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="shadow modal__button btn__modal__submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
