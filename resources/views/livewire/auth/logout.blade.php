<div>
    <!-- Open the modal using ID.showModal() method -->
    <dialog id="logoutModal" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Are You Sure ?</h3>
            <p class="py-1">This Action will logged you out from system</p>
            <div class="modal-action">
                <form method="dialog">
                    <button class="btn btn-error btn-sm" wire:click='logout'>Yes Logout</button>
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn btn-sm">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</div>
