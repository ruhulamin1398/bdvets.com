$(document).ready(function () {
  

    $(".office_upazilla").change(function () {




        var link = $("#office_list_api").val() + "?upzilla_id=" + $('.office_upazilla').val();
        console.log(link);

        $.get(link, function (offices, status) {
           console.log(offices);
           var html = '';
           var htmlReadOnly = '';
            var temp = 1;
            jQuery.each(offices, function (i) {
             
                html += '<tr>'
                html += ' <td > ' + temp ++ + '</td>';
                html += ' <td class="name" > ' + offices[i].name + '</td>';
                html += ' <td class="phone" > ' + offices[i].phone + '</td>';
                html += ' <td > <button type="button" class="btn btn-success" id="edit-product-button" > <a href='+  $("#indexLink").val()+'/offices/'+offices[i].id+'/edit'+   '> <i class="fa fa-edit text-light" aria-hidden="false"> </i> </a></button>   </td>';
                html += '</tr>';
             
                htmlReadOnly += '<tr>'
                htmlReadOnly += ' <td > ' + temp ++ + '</td>';
                htmlReadOnly += ' <td class="name" > ' + offices[i].name + '</td>';
                htmlReadOnly += ' <td class="phone" > ' + offices[i].phone + '</td>';
                htmlReadOnly += '</tr>';




            });
            


            console.log(html);

            
            $("#upazila_office_table_data").html(html);
            $("#upazila_office_table_data_readonly").html(htmlReadOnly);
            $("#officeTable").DataTable(); 
          


        });


    });










});