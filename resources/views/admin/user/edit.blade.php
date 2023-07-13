@extends('layouts.admin')
@section('title', 'View Users')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Edit Users
    </div>
    <div class="card-body">

        
            <div class="mb-3">
                <label>Full Name</label>
                <p class="form-control">{{ $users->name }}</p>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <p class="form-control">{{ $users->email }}</p>
            </div>

            <form action="{{ route('admin.user.update', ['id'=> $users->getId()]) }}" method="POST">
            
                @csrf
                @method('PUT')

            <div class="mb-3">
                <label>Role</label>
                <select name="role" class="form-control">
                    <option value="admin" {{ $users->role == 'admin' ? 'selected':''}} >admin</option>
                    <option value="client"{{ $users->role == 'client' ? 'selected':''}}>client</option>
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn pencet">Update</button>
            </div>

        </form>

    </div>
</div>
@endsection