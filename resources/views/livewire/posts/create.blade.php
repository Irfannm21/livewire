<div>
    @if (flash()->message)
    <div class="alert alert-{{flash()->class}}">
        {{ flash()->message  }}
    </div>

    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">New Post</h5>
            <form wire:submit="save">
                <div class="mb-4">
                    <label for="" class="form-label">Title</label>
                    <input type="text" wire:model="title" class="form-control">
                    @error('title')
                        <small class="text-danger d-block mt-1">{{ $message }}</samll>
                        @enderror
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Body</label>
                    <textarea wire:model="body" id="" cols="30" rows="10"class="form-control"></textarea>
                    @error('body')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <button class="btn btn-primary d-block">Submit</button>
                </div>

            </form>
        </div>
    </div>

</div>
