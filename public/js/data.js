    let table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          type:"get",
          ajax:datatable_url,
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'date_time', name: 'date_time'},
              {data: 'price', name: 'price'},
              {data: 'hit_combo', name: 'hit_combo'},
              {data: 'price_went_up', name: 'price_went_up'},
              {data: 'tweet', name: 'tweet'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
    });

    $('.b-m-dtp-datetime').bootstrapMaterialDatePicker({
        weekStart: 1,
        format : 'DD MMMM YYYY - HH:mm',
        shortTime: true,
        nowButton : true,
        minDate : new Date()
      });
    
    $('#save_form').on('submit', function(event) {
      event.preventDefault();
      /* Act on the event */
      var formData= $(this).serialize();
     $.ajax({
         headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
           type:'post',
           url: store_data,
           data:formData,
            success: function(res, textStatus, xhr) {
             if(xhr.status == 200)
             {
              $('.data-table').DataTable().ajax.reload();
              $('#save_form').trigger("reset");
               toastr.success(
                'Data Added!', 
                'Success', 
                {timeOut: 5000})
             }else{
               toastr.error(
                'Something Went Wrong', 
                'Error', 
                {timeOut: 5000})
             }
           },
           error:function(error){
             toastr.error(
                'Something Went Wrong', 
                'Error', 
                {timeOut: 5000})
           }
       });
    });

    $('.update_data').on('submit', function(event) {
      event.preventDefault();
      /* Act on the event */
      let id =  $('#data_id').val();
      var formData= $(this).serialize();
     $.ajax({
         headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
           type:'put',
           url:  'data/'+id,
           data:formData,
            success: function(res, textStatus, xhr) {
             if(xhr.status == 200)
             {
              $('.data-table').DataTable().ajax.reload();
              $('.update_data').trigger("reset");
               $("#edit-data").modal("hide");
               toastr.success(
                'Data Updated!', 
                'Success', 
                {timeOut: 5000})
             }else{
               $("#edit-data").modal("hide");
               toastr.error(
                'Something Went Wrong', 
                'Error', 
                {timeOut: 5000})
             }
           },
           error:function(error){
             $("#edit-data").modal("hide");
             toastr.error(
                'Something Went Wrong', 
                'Error', 
                {timeOut: 5000})
           }
       });
    });

    $(document).on('click','.edit' ,function(event){
      let id = $(this).data('id');
      let url = id;

      $('.date_time').val($(this).data('date'));
      $('#data_id').val(id);
      $('.price').val($(this).data('price'));
      $('.hit_combo').val($(this).data('hit'));
      $('.tweet').val($(this).data('tweet'));
      $('.price_went_up').val($(this).data('price_went_up'));
      $('#edit-data').modal('show'); 
    });
   
   $(document).on('click','.delete' ,function(event) {
    event.preventDefault();
      var id = $(this).data('id');
      var conf = confirm("Are you Sure you want to delete");
      if(conf){
          $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
                type:'delete',
                url: "data/" + id,
                success:function(res) {
                  if(res.code == 200)
                  {
                    $('.data-table').DataTable().ajax.reload();
                   toastr.success(
                    'Data Deleted!', 
                    'Success', 
                    {timeOut: 5000})
                  }else{
                      toastr.error(
                         'Something Went Wrong', 
                         'Error', 
                         {timeOut: 5000})
                    }
                },
                error:function(error){
                 toastr.error(
                    'Something Went Wrong', 
                    'Error', 
                    {timeOut: 5000})
                }
            });
      }
   });