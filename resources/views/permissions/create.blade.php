@extends("layouts.app")

@section("content")
<div class="container">
<h1>Create Permissions</h1>
<form action="{{ route("permissions.store") }}" method="Post">
    @csrf
    <div class="form-group mb-3">
      <label for="exampleInputCreatePermission">Create Permission</label>
      <input type="text" name="name" class="form-control" id="exampleInputCreatePermission" placeholder="Create Permission">
    </div>
    <button type="submit" class="btn btn-primary">Create Permission</button>
</form>
</div>
@endsection
