<div>
    <form wire:submit="login">
    <div class="card">
        <h5 class="card-header">Login</h5>
        <div class="card-body">
          <h5 class="card-title">Enter your email and password to login</h5>
          <div class="mb-4">
            <label for="email" w class="form-label">Email address</label>
            <input type="email" wire:model="form.email" class="form-control" id="email" placeholder="name@example.com">
            @error('form.email')
                <span class="text-danger mt-1 d-block">
                    {{ $message }}
                </span>
            @enderror
          </div>
          <div class="mb-4
          ">
            <label for="password" class="form-label">Password</label>
            <input type="password" wire:model="form.password" class="form-control" id="password" />
            @error('form.password')
                <span class="text-danger mt-1 d-block">
                    {{ $message }}
                </span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </div>
    </form>
</div>
