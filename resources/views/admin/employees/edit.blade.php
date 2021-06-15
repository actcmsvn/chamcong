<x-app-layout title="{{ __('admin/menus.Members') }}">
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Members
        </h2>
    </x-slot>


<div class="container mt-5">
    
    <form action="{{route('members.update', $member->id)}}" method="POST">
        @csrf
        @method('PUT')     


        <div class="row">
            <div class="col-6">
                <label>User Name</label>
                <input type="text" name="user_name" class="form-control" placeholder="ayan123" value="{{$member->user_name}}">
                <br>
            </div>
            <div class="col-6">
                <label>Date Of Birth</label>
                <input type="text" name="dob" class="form-control" placeholder="" value="{{$member->dob}}">
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{$member->first_name}}">
                <br>
            </div>
            <div class="col-6">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{$member->last_name}}">
                <br>
            </div>
        </div>
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="aaziz9642@gmail.com" value="{{$member->email}}">
        <br>

        <div class="row">
            <div class="col-6">
            <label>Mobile</label>
        <input type="text" name="mobile" class="form-control" placeholder="017******" value="{{$member->mobile}}">
        <br>
            </div>
            <div class="col-6">
            <label>Address</label>
        <input type="text" name="address" class="form-control" placeholder="017******" value="{{$member->address}}">
        <br>
            </div>
        </div>

        <label>Fees</label>
        <input type="text" name="fees" class="form-control" placeholder="017******" value="{{$member->fees}}">
        <br>
        
        <button class="btn btn-info" type="submit">Update</button>

    </form>
</div>
</x-app-layout>