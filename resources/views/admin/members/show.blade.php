<x-app-layout title="{{ __('admin/menus.Members') }}">
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Show user
        </h2>
    </x-slot>


<div class="container mt-5">
   
    <form action="{{route('members.update', $member->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <label>User Name</label>
                <input type="text" name="emp_username" class="form-control" placeholder="ayan123" value="{{$member->emp_username}}" readonly>
                <br>
            </div>
            <div class="col-6">
                <label>Date Of Birth</label>
                <input type="text" name="emp_birthday" class="form-control" placeholder="ayan123" value="{{$member->emp_birthday}}" readonly>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label>First Name</label>
                <input type="text" name="emp_firstname" class="form-control" placeholder="ayan123" value="{{$member->emp_firstname}}" readonly>
                <br>
            </div>
            <div class="col-6">
                <label>Last Name</label>
                <input type="text" name="emp_lastname" class="form-control" placeholder="ayan123" value="{{$member->emp_lastname}}" readonly>
                <br>
            </div>
        </div>
        <label>Email</label>
        <input type="text" name="emp_email" class="form-control" placeholder="ayan123" value="{{$member->emp_email}}" readonly>
        <br>

        <div class="row">
            <div class="col-6">
                <label>Mobile</label>
                <input type="text" name="emp_phone" class="form-control" placeholder="ayan123" value="{{$member->emp_phone}}" readonly>
                <br>
            </div>
            <div class="col-6">
                <label>Address</label>
                <input type="text" name="emp_address" class="form-control" placeholder="ayan123" value="{{$member->emp_address}}" readonly>
                <br>
            </div>
        </div>

        <label>Gender</label>
        <input type="text" name="emp_gender" class="form-control" placeholder="ayan123" value="{{$member->emp_gender}}" readonly>
        <br>


    </form>

</div>
</x-app-layout>