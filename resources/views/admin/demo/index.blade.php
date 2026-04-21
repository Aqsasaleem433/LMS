@extends('admin.layout.master')

<h2>Demo Requests</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

{{-- <table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    @foreach($requests as $req)
    <tr>
        <td>{{ $req->name }}</td>
        <td>{{ $req->email }}</td>
        <td>{{ $req->message }}</td>
        <td>{{ $req->status }}</td>
        <td>
            <a href="{{ route('admin.demo.approve', $req->id) }}">Approve</a> |
            <a href="{{ route('admin.demo.reject', $req->id) }}">Reject</a>
        </td>
    </tr>
    @endforeach
</table> --}}