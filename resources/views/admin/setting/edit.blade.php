@extends('layouts.admin.app')

@section('content')
<h4 class="font-weight-bold py-3 mb-4">
    Website settings
  </h4>

  <x-error-message></x-error-message>
  <x-flash-message></x-flash-message>

<form action="{{route('admin.setting.update', $setting)}}" method="POST" enctype="multipart/form-data" > 

    @csrf
    @method('PUT')

  <div class="card overflow-hidden">
    <div class="row no-gutters row-bordered row-border-light">
      <div class="col-md-3 pt-0">
        <div class="list-group list-group-flush account-settings-links">
          <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
        </div>
      </div>
      <div class="col-md-9">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="account-general">

            <div class="card-body media align-items-center">
              @if ($setting->website_name == '')
                <img src="{{asset('public/images/no-image.png')}}" id="logo-image" alt="" class="d-block ui-w-80">
              @else
                <img src="{{asset('public/images/logo/'. $setting->logo)}}" id="logo-image" alt="" class="d-block ui-w-80">
              @endif
              <div class="media-body ml-4">
                <label class="btn btn-outline-primary">
                  Upload main logo
                  <input type="file" name="logo" onchange="changeImage(this);" class="account-settings-fileinput">
                </label> &nbsp;
                {{-- <button type="button" class="btn btn-default md-btn-flat">Reset</button> --}}

                <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 2MB</div>
              </div>
            </div>

            <hr class="border-light m-0">


            <hr class="border-light m-0">

            <div class="card-body">


              <div class="form-group">
                <label class="form-label">Website Name</label>
                <input type="text" name="website_name" value="{{$setting->website_name}}" class="form-control mb-1" value="nmaxwell">
              </div>

              <div class="form-group">
                <label class="form-label">Website Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="5">{{$setting->description}}</textarea>
              </div>

              <div class="form-group">
                <label class="form-label">E-mail</label>
                <input type="email"  name="email" value="{{$setting->email}}" class="form-control mb-1">
              </div>


              <div class="form-group">
                <label class="form-label">Footer Text</label>
                <input type="text"  name="footer_text" value="{{$setting->footer_text}}" class="form-control mb-1">
              </div>

            </div>

          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="text-right mt-3">
    <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
    {{-- <button type="button" class="btn btn-default">Cancel</button> --}}
  </div>

  </form>
@endsection

@section('js')
<script>
  function changeImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#logo-image')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
  }
  function changeImageWhite(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#logo-image-white')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
  }
  function changeServiceImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#service_banner_bg')
                .attr('src', e.target.result)
                .width(100)
                .height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
  }
</script>
      <script src="{{asset('public/admin-template/assets/js/pages_account-settings.js')}}"></script>
@endsection