<div>
    <div class="h-screen flex justify-center items-center">
        <form class="w-[500px]" wire:submit="login">
            <x-common.alert />
            <div class="my-2 flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold">Login</h1>
                    <p>Welcome back to file explorer</p>
                </div>
                <x-common.theme-switch />
            </div>
            <div class="mb-2">
                <label for="email">Email</label>
                <input type="email" class="input input-bordered w-full" id="email" wire:model="email"
                    placeholder="Enter Email" />
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password">Password</label>
                <input type="password" class="input input-bordered w-full" id="password" wire:model="password"
                    placeholder="Enter Password" />
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <button class="btn btn-warning w-full">Submit</button>
            </div>
            <p class="text-center"> -- OR -- </p>
            <p class="text-center">Don`t have an account ? <a class="text-warning font-bold"
                    href="{{ route('register') }}" wire:navigate>Register</a></p>
        </form>
    </div>
</div>
