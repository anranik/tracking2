<div>
    @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    @include('livewire.create')

    @include('livewire.update')
    <br />
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($sampledata as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->mobile }}</td>
                <td>{{ $data->usernameq }}</td>
                <td>
                    <button data-toggle="modal" data-target="#updateModal" class="btn btn-primary btn-sm" wire:click="edit({{ $data->id }})">Edit</button>
                    <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>
