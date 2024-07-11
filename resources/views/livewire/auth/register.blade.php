<div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
        <div>
            <img src="{{asset('images/files.svg')}}" class="w-full object-contain" alt="auth_image">
        </div>
        <div class="h-screen flex justify-center items-center">
            <form class="w-[500px]" wire:submit="register">
                <div>
                    <h1 class="text-2xl font-bold">Register</h1>
                    <p>Welcome to file explorer</p>
                </div>
                <div class="mb-2">
                    <label for="name">Name</label>
                    <input type="text" class="input input-bordered w-full" id="name" wire:model="name" placeholder="Enter Name" />
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="email">Email</label>
                    <input type="email" class="input input-bordered w-full" id="email" wire:model="email" placeholder="Enter Email" />
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="password" class="input input-bordered w-full" id="password" wire:model="password" placeholder="Enter Password" />
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="password">Confirm Password</label>
                    <input type="password" class="input input-bordered w-full" id="password" wire:model="password_confirmation" placeholder="Enter Password" />
                    @error('password_confirmation')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <button class="btn btn-warning w-full">Submit</button>
                </div>
                <p class="text-center"> -- OR -- </p>
                <p class="text-center">Already have an account ? <a class="text-warning font-bold" href="{{route('login')}}" wire:navigate>Login</a></p>
            </form>
        </div>
    </div>
</div>
