<div>
    <div class="card">
{{--        Ingrese nombre de usuario o email para buscar--}}

        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <input wire:model="search" class="form-control" placeholder="Ingrese nombre de usuario o email para buscar">
{{--                    input con button para buscar--}}
{{--                    <input type="text" class="form-control" wire:model="search">--}}
{{--                    <button class="btn btn-primary" wire:click="search">Buscar</button>--}}
                </div>
                <div>
                    <a href="{{route('admin.users.pdf')}}" class="btn btn-primary">Generar PDF</a>
                </div>
            </div>
        </div>

        @if($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
{{--        links de paginacion--}}
        <div class="card-footer">
            {{ $users->links() }}
        </div>

        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>

@livewireScripts
