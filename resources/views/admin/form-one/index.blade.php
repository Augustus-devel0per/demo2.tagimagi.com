@extends('layouts.admin.app')

    <x-data-table-files></x-data-table-files>

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
      <span class="text-muted font-weight-light">Admin /</span> Form One Data
    </h4>
    <!-- DataTable within card -->
    <div class="card">
      <h6 class="card-header">
        Form One Data
      </h6>

      <x-flash-message></x-flash-message>

      <div class="card-datatable table-responsive">
        <table class="datatables-demo table table-striped table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tag Type</th>
              <th>You are</th>
              <th>You are a</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @isset($data)
                @if (count($data) > 0)
                    @foreach ($data as $formOne)
                        <tr class="odd gradeX">
                            <td>{{$formOne->id}}</td>
                            <td>{{$formOne->tag_type ?? ''}}</td>
                            <td>{{$formOne->you_are ?? ''}}</td>
                            <td>{{$formOne->you_are_a ?? ''}}</td>
                            <td class="center">
                                <a href="#" 
                                class="btn btn-success btn-sm" 
                                data-toggle="modal" 
                                data-target="#dataModal"

                                data-you_are="{{$formOne->you_are ?? ''}}"
                                data-you_are_a="{{$formOne->you_are_a ?? ''}}"
                                data-you_are_in="{{$formOne->you_are_in ?? ''}}"
                                data-you_are_from="{{$formOne->you_are_from ?? ''}}"
                                data-you_are_interested="{{$formOne->you_are_interested ?? ''}}"
                                data-you_love="{{$formOne->you_love ?? ''}}"
                                data-you_have_to_offer="{{$formOne->you_have_to_offer ?? ''}}"
                                data-you_have_own="{{$formOne->you_have_own ?? ''}}"
                                data-you_are_looking="{{$formOne->you_are_looking ?? ''}}"
                                data-you_can_contact="{{$formOne->you_can_contact ?? ''}}"
                                data-you_can_contact_me_at="{{$formOne->you_can_contact_me_at ?? ''}}"

                                >
                                <i class="fa fa-eye"></i>
                              </a>
                                <form action="{{ route('admin.form-ones.destroy',$formOne->id) }}" class="d-flex" method="post" onsubmit="return confirmDelete()">
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
                    <p>No formOne data found.</p>
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
                  <li>You are : <strong class="you_are"></strong></li>
                  <li>You are a/an: <strong class="you_are_a"></strong></li>
                  <li>You are in/on: <strong class="you_are_in"></strong></li>
                  <li>You are from: <strong class="you_are_from"></strong></li>
                  <li>You are interested in: <strong class="you_are_interested"></strong></li>
                  <li>You love: <strong class="you_love"></strong></li>
                  <li>You have to offer, give, or share: <strong class="you_have_to_offer"></strong></li>
                  <li>You have, own, or possess: <strong class="you_have_own"></strong></li>
                  <li>You are looking for (to obtain or reach): <strong class="you_are_looking"></strong></li> 
                  <li>You can contact it at: <strong class="you_can_contact"></strong></li> 
                  <li>Date and Times(s) to contact it: <strong class="you_can_contact_me_at"></strong></li> 
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
    var you_are = button.data('you_are') 
    var you_are_a = button.data('you_are_a') 
    var you_are_in = button.data('you_are_in') 
    var you_are_from = button.data('you_are_from') 
    var you_are_interested = button.data('you_are_interested') 
    var you_love = button.data('you_love') 
    var you_have_to_offer = button.data('you_have_to_offer') 
    var you_have_own = button.data('you_have_own') 
    var you_are_looking = button.data('you_are_looking') 
    var you_can_contact = button.data('you_can_contact') 
    var you_can_contact_me_at = button.data('you_can_contact_me_at') 

    var modal = $(this)
    modal.find('.you_are').text(you_are)
    modal.find('.you_are_a').text(you_are_a)
    modal.find('.you_are_in').text(you_are_in)
    modal.find('.you_are_from').text(you_are_from)
    modal.find('.you_are_interested').text(you_are_interested)
    modal.find('.you_love').text(you_love)
    modal.find('.you_have_to_offer').text(you_have_to_offer)
    modal.find('.you_have_own').text(you_have_own)
    modal.find('.you_are_looking').text(you_are_looking)
    modal.find('.you_can_contact').text(you_can_contact)
    modal.find('.you_can_contact_me_at').text(you_can_contact_me_at)
})
</script>
@endsection
