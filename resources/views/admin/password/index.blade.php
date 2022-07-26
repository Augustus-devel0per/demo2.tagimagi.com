@extends('layouts.admin.app')

@section('content')

  <h4 class="font-weight-bold py-3 mb-4">
    <span class="text-muted font-weight-light">Admin /</span> Password
  </h4>
  <div class="card mb-4">
    <h6 class="card-header">
      Change Password
    </h6>
    <div class="card-body">

      <x-error-message></x-error-message>
      <x-flash-message></x-flash-message>

    <form method="POST" action="{{route('admin.change.password.show')}}" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label class="form-label">Current Password</label>
            <input type="password" required name="current_password" class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label">New Password</label>
            <input type="password" required name="new_password" class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label">New Confirm Password</label>
            <input type="password" required name="new_confirm_password" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update Password</button>

      </form>

    </div>
    
  </div>

@endsection

