$(document).ready(function(){


    $(document).on('click', "#doctor-edit-item", function() {



        $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

        var options = {
          'backdrop': 'static'
        };
        $('#doctor-edit-modal').modal(options)
      });

      // on modal show
      $('#doctor-edit-modal').on('show.bs.modal', function() {
        var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
        var row = el.closest(".data-row");

        // get the data
        var id = el.data('item-id');
        var name = row.children(".name").text();
        var officeName = row.children(".office").text();
        var designation = row.children(".designation").text();
        var bn_designation = row.children(".bn_designation").text();


        var action= $("#indexLink").val()+'/doctors/'+id;
        $("#doctor-edit-form").attr('action',action);

        // fill the data in the input fields
        $("#doctor-modal-input-id").val(id);
        $("#doctor-modal-input-name").val(name);
        $("#doctor-modal-input-designation").val(designation);
        $("#doctor-modal-input-bn_designation").val(bn_designation);
       
 


          var officehtml = '';

          $.get($("#office_list_api").val().trim(), function (offices, status) {


            offices.forEach(function (office, item) {
                  //   alert(viewCategoryId+'   '+i.name);
                  if (officeName == office.name) {
                    officehtml += '   <option  selected="selected"  value="  ' + office.id + ' ">  ' + office.name + '    </option>';
                  } else {
                    officehtml += '   <option value="  ' + office.id + ' "> ' + office.name + '</option>';
                  }

              });


              $("#doctor-modal-input-office_id").html(officehtml);
          });



      });

      // on modal hide
      $('#doctor-edit-modal').on('hide.bs.modal', function() {
        $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        $("#edit-form").trigger("reset");
      });

  }) ;
