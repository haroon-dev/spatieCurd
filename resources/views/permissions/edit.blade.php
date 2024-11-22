@extends("layouts.app")

@section("content")
<div class="container">
<h1>Edit Permissions</h1>
<form action="{{ route("permissions.update", $permission->id) }}" method="Post">
    @csrf
    @method("PUT")
    <div class="form-group mb-3">
      <label for="exampleInputCreatePermission">Create Permission</label>
      <input type="text" name="name" value="{{ $permission->name }}" class="form-control" id="exampleInputCreatePermission" placeholder="Create Permission">
    </div>
    <button type="submit" class="btn btn-success">Update Permission</button>
</form>
</div>
@endsection
