@extends('layouts.admin.app')

    <x-data-table-files></x-data-table-files>

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
      <span class="text-muted font-weight-light">Admin /</span> Form Two Data
    </h4>
    <!-- DataTable within card -->
    <div class="card">
      <h6 class="card-header">
        Form Two Data
      </h6>

      <x-flash-message></x-flash-message>

      <div class="card-datatable table-responsive">
        <table class="datatables-demo table table-striped table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>They are</th>
              <th>They are a</th>
              <th>they are in</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @isset($data)
                @if (count($data) > 0)
                    @foreach ($data as $formTwo)
                        <tr class="odd gradeX">
                            <td>{{$formTwo->id}}</td>
                            <td>{{$formTwo->they_are ?? ''}}</td>
                            <td>{{$formTwo->they_are_a ?? ''}}</td>
                            <td>{{$formTwo->they_are_in ?? ''}}</td>
                            <td class="center">
                                <a href="#" 
                                class="btn btn-success btn-sm" 
                                data-toggle="modal" 
                                data-target="#dataModal"

                                data-they_are="{{$formTwo->they_are ?? ''}}"
                                data-they_are_a="{{$formTwo->they_are_a ?? ''}}"
                                data-they_are_in="{{$formTwo->they_are_in ?? ''}}"
                                data-they_are_by="{{$formTwo->they_are_by ?? ''}}"
                                data-they_are_interested="{{$formTwo->they_are_interested ?? ''}}"
                                data-they_love="{{$formTwo->they_love ?? ''}}"
                                data-they_have_to_offer="{{$formTwo->they_have_to_offer ?? ''}}"
                                data-they_have_own="{{$formTwo->they_have_own ?? ''}}"
                                data-they_are_looking_for="{{$formTwo->they_are_looking_for ?? ''}}"

                                >
                                <i class="fa fa-eye"></i>
                              </a>
                                <form action="{{ route('admin.form-twos.destroy',$formTwo->id) }}" class="d-flex" method="post" onsubmit="return confirmDelete()">
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
                    <p>No formTwo data found.</p>
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
                  <li>They are : <strong class="they_are"></strong></li>
                  <li>They are a/an: <strong class="they_are_a"></strong></li>
                  <li>They are in/on: <strong class="they_are_in"></strong></li>
                  <li>They are from: <strong class="they_are_by"></strong></li>
                  <li>They are interested in: <strong class="they_are_interested"></strong></li>
                  <li>They love: <strong class="they_love"></strong></li>
                  <li>They have to offer, give, or share: <strong class="they_have_to_offer"></strong></li>
                  <li>They have, own, or possess: <strong class="they_have_own"></strong></li>
                  <li>They are looking for (to obtain or reach): <strong class="they_are_looking_for"></strong></li> 
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
    var they_are = button.data('they_are') 
    var they_are_a = button.data('they_are_a') 
    var they_are_in = button.data('they_are_in') 
    var they_are_by = button.data('they_are_by') 
    var they_are_interested = button.data('they_are_interested') 
    var they_love = button.data('they_love') 
    var they_have_to_offer = button.data('they_have_to_offer') 
    var they_have_own = button.data('they_have_own') 
    var they_are_looking_for = button.data('they_are_looking_for') 

    var modal = $(this)
    modal.find('.they_are').text(they_are)
    modal.find('.they_are_a').text(they_are_a)
    modal.find('.they_are_in').text(they_are_in)
    modal.find('.they_are_by').text(they_are_by)
    modal.find('.they_are_interested').text(they_are_interested)
    modal.find('.they_love').text(they_love)
    modal.find('.they_have_to_offer').text(they_have_to_offer)
    modal.find('.they_have_own').text(they_have_own)
    modal.find('.they_are_looking_for').text(they_are_looking_for)
})
</script>
@endsection
