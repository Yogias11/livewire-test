<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    {{-- @include('livewire.create') --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3>All Data</h3>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCars">
                            Add
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-strip">
                            <thead>
                                <tr>
                                    <th>Make</th>
                                    <th>Model</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $c)
                                <tr>
                                    <td>{{ $c->make }}</td>
                                    <td>{{ $c->model }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div wire:ignore.self class="modal fade" id="addCars" tabindex="-1" aria-labelledby="CarsModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Add Cars</h5>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Make</label>
                                <input type="text" name="make" id="make" class="form-control" wire:model="make">
                            </div>
                            <div class="form-group">
                                <label for="">Model</label>
                                <input type="text" name="model" id="model" class="form-control" wire:model="model">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
