<div class="card border-0 shadow-sm position-relative custom__card create__card">
    <h6 class="card__title">New School</h6>
    <form wire:submit.prevent="store">
        <div class="card-body">
            <div class="row">
                <div wire:loading wire:target="logo">
                    <div class="d-flex align-items-center mb-2 gap-2">
                        <div class="spinner-border text-info" style="height: 20px; width: 20px;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <small>Uploading...</small>
                    </div>
                </div>
                @if ($logo)
                <div class="col-12">
                    <img src="{{ $logo->temporaryUrl() }}" class="my-4 edit__school__logo">
                </div>
                @endif
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="@error('name') is-invalid @enderror form-control
                            custom__text__input" wire:model="name">
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
                        <input type="text" class="@error('address') is-invalid @enderror form-control
                            custom__text__input" wire:model="address">
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
                            custom__text__input" wire:model="contact_number">
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
                        <label class="input-group-text border-0" for="upload_{{ $imageUpload }}"
                            style="font-size: 13px;">Logo</label>
                        <input type="file" class="form-control border-0 custom__text__input" style="font-size: 13px;"
                            wire:model="logo" id="upload_{{ $imageUpload }}">
                    </div>
                    @error('logo')
                    <span class="text-danger mt-1 custom__field__message">{{ $message }}</span>
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
