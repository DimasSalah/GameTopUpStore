@extends('layouts.admin')
@section('title', 'View Users')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        View Users
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->getId() }}</td>
                    <td>{{ $user->getName() }}</td>
                    <td>{{ $user->getEmail() }}</td>
                    <td>{{ $user->getRole() }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.user.edit', ['id'=> $user->getId()])}}">
                            <i class="bi-pencil"></i>
                        </a>
                    </td>
                    <td><form action="{{ route('admin.user.delete', $user->getId())}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection