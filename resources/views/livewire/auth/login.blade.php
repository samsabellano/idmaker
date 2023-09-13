<div>
    @if (session()->has('error'))
    <ul class='form__errors mb-3 d-flex gap-2'>
        <i class="bi bi-exclamation-triangle"></i>
        <li>{{ session('error') }}</li>
    </ul>
    @endif
    <form wire:submit.prevent="submit">
        <div class="form-floating mb-3">
            <input type="text" class=" form-control auth__text__input @error('username') is-invalid @enderror"
                id="floatingInput" placeholder="Enter your username" wire:model="username">
            <label for="floatingInput" class="auth__text__input__label">Username</label>
            @error('username')
            <span class="text-danger custom__field__message">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control auth__text__input @error('password') is-invalid @enderror"
                id="floatingPassword" placeholder="Enteryour password" wire:model="password">
            <label for="floatingPassword" class="auth__text__input__label">Password</label>
            @error('password')
            <span class="text-danger custom__field__message">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <div class="col-12">
                <button class="btn w-100 p-3 auth__button__submit" type="submit">Sign in</button>
            </div>
        </div>
    </form>
</div>
