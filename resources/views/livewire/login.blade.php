<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form wire:submit= >
                <div class="mb-6">
                    <label for="email" id="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" id="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </form>
        </div>
    </div>
</div>
