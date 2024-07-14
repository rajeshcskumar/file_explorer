<div>
    <x-common.toast />
    <div class="px-2 flex justify-center flex-col items-center">
        <input type="text" class="input input-bordered w-96 rounded-2xl mb-4" placeholder="Search..."
        wire:model.live='search' />
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2">
            @if (count($files) > 0)
                @foreach ($files as $item)
                    <div class="card card-compact bg-base-100 w-96 shadow-xl">
                        <a href="{{ route('show.file', ['id' => $item->id]) }}" wire:navigate>
                            <figure><img src="{{ asset('storage/' . $item->image) }}" alt="your_img"
                                    class="h-52 object-cover w-full" />
                            </figure>
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">{{ $item->title }}!</h2>
                            <p>{{ $item->created_at->format('d-m-Y h:m:s a') }}</p>

                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Files Found</p>
            @endif
        </div>
    </div>
</div>
