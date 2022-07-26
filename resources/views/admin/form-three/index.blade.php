@extends('layouts.admin.app')

    <x-data-table-files></x-data-table-files>

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
      <span class="text-muted font-weight-light">Admin /</span> Form Three Data
    </h4>
    <!-- DataTable within card -->
    <div class="card">
      <h6 class="card-header">
        Form Three Data
      </h6>

      <x-flash-message></x-flash-message>

      <div class="card-datatable table-responsive">
        <table class="datatables-demo table table-striped table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tag Type</th>
              <th>It is a</th>
              <th>It is</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @isset($data)
                @if (count($data) > 0)
                    @foreach ($data as $formThree)
                        <tr class="odd gradeX">
                            <td>{{$formThree->id}}</td>
                            <td>{{$formThree->tag_type ?? ''}}</td>
                            <td>{{$formThree->it_is_a ?? ''}}</td>
                            <td>{{$formThree->it_is ?? ''}}</td>
                            <td class="center">
                                <a href="#" 
                                class="btn btn-success btn-sm" 
                                data-toggle="modal" 
                                data-target="#dataModal"

                                data-it_is_a="{{$formThree->it_is_a ?? ''}}"
                                data-it_is="{{$formThree->it_is ?? ''}}"
                                data-it_is_in="{{$formThree->it_is_in ?? ''}}"
                                data-it_is_by="{{$formThree->it_is_by ?? ''}}"
                                data-it_has="{{$formThree->it_has ?? ''}}"
                                data-it_is_for="{{$formThree->it_is_for ?? ''}}"
                                data-it_needs="{{$formThree->it_needs ?? ''}}"
                                data-it_is_about="{{$formThree->it_is_about ?? ''}}"
                                data-you_can_contact="{{$formThree->you_can_contact ?? ''}}"
                                data-you_can_contact_at="{{$formThree->you_can_contact_at ?? ''}}"
                                >
                                <i class="fa fa-eye"></i>
                              </a>
                                <form action="{{ route('admin.form-threes.destroy',$formThree->id) }}" class="d-flex" method="post" onsubmit="return confirmDelete()">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                  </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p>No formThree data found.</p>
                @endif
            @endisset
          </tbody>
        </table>
      </div>
    </div>

    <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="dataModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="dataModalLabel">Form Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body"> 

                <ul>
                  <li>It is a/an: <strong class="it_is_a"></strong></li>
                  <li>It is: <strong class="it_is"></strong></li>
                  <li>It is in/on: <strong class="it_is_in"></strong></li>
                  <li>It is by/from:  <strong class="it_is_by"></strong></li>
                  <li>It has/contains: <strong class="it_has"></strong></li>
                  <li>It offers, gives, or provides:  <strong class="it_is_for"></strong></li>
                  <li>It needs or requires: <strong class="it_needs"></strong></li>
                  <li>It is about (for content): <strong class="it_is_about"></strong></li>
                  <li>You can contact it at: <strong class="you_can_contact"></strong></li> 
                  <li>Date and Times(s) to contact it: <strong class="you_can_contact_at"></strong></li> 
                </ul>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
@endsection
@section('custom-js')
<script>
  $(document).ready(function() {
    $('.datatables-demo').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );

$('#dataModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var it_is_a = button.data('it_is_a') 
    var it_is = button.data('it_is') 
    var it_is_in = button.data('it_is_in') 
    var it_is_by = button.data('it_is_by') 
    var it_has = button.data('it_has') 
    var it_is_for = button.data('it_is_for') 
    var it_needs = button.data('it_needs') 
    var it_is_about = button.data('it_is_about') 
    var you_can_contact = button.data('you_can_contact') 
    var you_can_contact_at = button.data('you_can_contact_at') 

    var modal = $(this)
    modal.find('.it_is_a').text(it_is_a)
    modal.find('.it_is').text(it_is)
    modal.find('.it_is_in').text(it_is_in)
    modal.find('.it_is_by').text(it_is_by)
    modal.find('.it_has').text(it_has)
    modal.find('.it_is_for').text(it_is_for)
    modal.find('.it_needs').text(it_needs)
    modal.find('.it_is_about').text(it_is_about)
    modal.find('.you_can_contact').text(you_can_contact)
    modal.find('.you_can_contact_at').text(you_can_contact_at)
})
</script>
@endsection
