<div class="container my-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Register</h2>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="register">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" wire:model="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" wire:model="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" wire:model="password" class="form-control" placeholder="Enter your password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="passwordConfirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="passwordConfirmation" wire:model="passwordConfirmation" class="form-control" placeholder="Confirm your password">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
