$(document).ready(function(){

    $(document).on('click', "#sign-edit-item", function() {



        $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

        var options = {
          'backdrop': 'static'
        };
        $('#sign-edit-modal').modal(options)
      });

      // on modal show
      $('#sign-edit-modal').on('show.bs.modal', function() {
        var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
        var row = el.closest(".data-row");

        // get the data
        var id = el.data('item-id');
        var name = row.children(".name").text();
        var description = row.children(".description").text();


        var action= $("#indexLink").val()+'/clinical-signs/'+id;
        $("#sign-edit-form").attr('action',action);

        // fill the data in the input fields
        $("#modal-input-id").val(id);
        $("#modal-input-name").val(name);
        $("#modal-input-description").val(description);


      });

      // on modal hide
      $('#sign-edit-modal').on('hide.bs.modal', function() {
        $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        $("#sign-edit-form").trigger("reset");
      });

  }) ;
