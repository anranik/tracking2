<div align="right">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">Create</button>
</div>

<div wire:ignore.self id="createModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" id="exampleFormControlInput1" class="form-control"  placeholder="Enter Name" wire:model="name" />
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Username</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter UserName" wire:model="username" />
                        @error('username')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Mobile</label>
                        <input type="text" id="exampleFormControlInput3" class="form-control" placeholder="Enter Mobile" wire:model="mobile" />
                        @error('mobile')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Password</label>
                        <input type="password" id="exampleFormControlInput4" class="form-control" placeholder="Enter Password" wire:model="password" />
                        @error('password')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
