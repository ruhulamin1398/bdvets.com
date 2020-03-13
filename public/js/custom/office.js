$(document).ready(function () {
  

    $(".office_upazilla").change(function () {




        var link = $("#office_list_api").val() + "?upzilla_id=" + $('.office_upazilla').val();
        console.log(link);

        $.get(link, function (offices, status) {
           console.log(offices);
            var html = '';
            var temp = 1;
            jQuery.each(offices, function (i) {
             
                html += '<tr>'
                html += ' <td > ' + temp ++ + '</td>';
                html += ' <td class="name" > ' + offices[i].name + '</td>';
                html += ' <td class="phone" > ' + offices[i].phone + '</td>';
                html += ' <td >  <button type="button" class="btn btn-success" id="edit-office-button" data-office-id='+offices[i].id+'> <i class="fa fa-edit" aria-hidden="false"> </i></button></td>';
                 html += '</tr>';
            });
            

            console.log(html);
            $("#upazila_office_table_data").html(html);
         //   $("#upazila_office_table_data").DataTable(); 
          


        });


    });



    $(document).on('click', "#edit-office-button", function() {


        $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
    
        var options = {
          'backdrop': 'static'
        };
        $('#office-edit-modal').modal(options)
      });
    
      // on modal show
      $('#office-edit-modal').on('show.bs.modal', function() {
        var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
        var row = el.closest(".data-row");
        
        // get the data
        var id = el.data('data-office-id');
        var name = row.children(".name").text().trim();
        var bn_name = row.children(".bn_name").text().trim();
        var email = row.children(".email").text().trim();
        var phone = row.children(".phone").text().trim();
        var address = row.children(".address").text().trim();
        var bn_address = row.children(".bn_address").text().trim();
        
    console.log(name);
        // fill the data in the input fields
        $("#modal-office-id").val(id);
        $("#modal-office-name").val(name);
        $("#modal-office-bn_name").val(bn_name);
        $("#modal-office-email").val(email);
        $("#modal-office-phone").val(phone);
        $("#modal-office-address").val(address);
        $("#modal-office-bn_address").val(bn_address);
       
    
      });
    
      // on modal hide
      $('#edit-modal').on('hide.bs.modal', function() {
        $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        $("office-edit-modal").trigger("reset");
      });
      

















});