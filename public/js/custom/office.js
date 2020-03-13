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
            $("#officeTable").DataTable(); 
          


        });


    });










});