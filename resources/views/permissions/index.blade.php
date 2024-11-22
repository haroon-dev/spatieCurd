@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Permissions</h1>
        <a href="{{ route('permissions.create') }}" class="btn btn-primary float-end">Create</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sr.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
               @foreach($permissions as $permission)
               <tr>
                    <td scope="row">{{ ++$i }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-delete">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
        $('.btn-delete').click(function(event){
            event.preventDefault();
            var form = $(this).parents("form");
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
    </script>
@endsection

