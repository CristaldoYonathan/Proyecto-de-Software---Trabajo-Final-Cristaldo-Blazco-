<div>
    <div class="card">
{{--        Ingrese nombre de usuario o email para buscar--}}

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <input wire:model="search" class="form-control" placeholder="Ingrese nombre de usuario o email para buscar">
                </div>
                <div>
                    <a href="{{route('admin.users.pdf')}}" class="btn btn-primary" target="_blank" >Generar PDF</a>
                </div>
            </div>
        </div>

{{--        filtrar por roles--}}
        <div class="card-header">
            <div class="row ">
                <div class="col-md-2">
                    <select wire:model="role_id" class="form-control">
                        <option value="" selected>Todos los roles</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
{{--                cambiar numero de paginacion y posicionar el elemento al final --}}

                <span class="ml-5 mr-1 mt-2">Mostrar</span>
                <div class="col-md-1 ">
                    <select wire:model="cant" class="form-control">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                    </select>
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
                        <th>Rol</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-success">{{ $user->roles->pluck('name')->implode(', ') }}</td>
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
