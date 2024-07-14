<div>
    <button class="btn btn-error btn-sm" onclick="deleteModal_{{ $id }}.showModal()">Delete</button>
    <dialog id="deleteModal_{{ $id }}" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Are You Sure ?</h3>
            <p class="py-1">This Action will delete your file and you cant recover it.</p>
            <div class="modal-action">
                <form method="dialog">
                    <button class="btn btn-error btn-sm" wire:click='delete'>Yes delete it!</button>
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn btn-sm">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</div>
