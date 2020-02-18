@extends('layout.master')
@section('content')
    <h1>List</h1>
    @if(Session::has('alert'))
        <div class="alert-success">{{ Session::get('alert') }}</div>
    @endif
    <div class="row" style="margin-left: 10px; margin-bottom: 20px;">
        <a href="{{ route('contact.create') }}" type="button" class="btn btn-success">Create</a>
        <form class="form-inline my-2 my-lg-0" method="post" action="{{route('contact.search')}}"   >
            @csrf
            <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Avatar</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($contacts as $key => $contact)
        <tr>
            <th scope="row">{{ ++$key }}</th>
            <td>{{ $contact->fisrtName }}</td>
            <td>{{ $contact->lastName }}</td>
            <td><img src="{{asset('storage/'.$contact->avatar)}}" alt="No image"
                style="width: 200px"></td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->address }}</td>
            <td><a href="{{ route("contact.delete", $contact->id) }}" type="button" class="btn btn-danger"
                onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
            @empty
            <tr>
                <td colspan="7" style="text-align: center">No data to display!</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    @endsection
