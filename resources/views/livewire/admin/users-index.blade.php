<div>
    <div class="card">
{{--        Ingrese nombre de usuario o email para buscar--}}
        {{$search}}

        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <input wire:model="search" class="form-control" placeholder="Ingrese nombre de usuario o email para buscar">
{{--                    input con button para buscar--}}
{{--                    <input type="text" class="form-control" wire:model="search">--}}
{{--                    <button class="btn btn-primary" wire:click="search">Buscar</button>--}}
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
{{--        <div class="card-footer">--}}
{{--            {{ $users->links() }}--}}
{{--        </div>--}}

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="?page=3">3</a></li>

                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
