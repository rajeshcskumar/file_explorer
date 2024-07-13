<div class="navbar bg-base-100">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl"> <img src="{{ asset('images/logo_192.png') }}" class="w-8 h-8" alt=""> My
            Files</a>
    </div>
    <div class="flex-none">
        <button class="btn btn-warning btn-sm mr-3" onclick="AddFileModal.showModal()">Add File</button>
        <x-common.theme-switch />
        <div class="dropdown dropdown-end ml-3">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS Navbar component"
                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li>
                    <a class="justify-between">
                        Profile
                    </a>
                </li>
                <li><a href="#" onclick="logoutModal.showModal()">Logout</a></li>
            </ul>
        </div>
    </div>

    <livewire:auth.logout lazy />
    <livewire:files.add-file lazy />
</div>
