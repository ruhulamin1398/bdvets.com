$(document).ready(function () {

    $("#addVillageUnionId").change(function () {

        $("#setUnion").val($("#addVillageUnionId").val());


        var link = $("#village_list_api").val() + "?union_id=" + $('#addVillageUnionId').val();
        console.log(link);

        $.get(link, function (villages, status) {
            console.log(villages);
            var html = '';
            var temp = 1;
            jQuery.each(villages, function (i) {
                console.log(villages[i].name);
                html += '<tr>'
                html += ' <td > ' + temp++ + '</td>';
                html += ' <td class="name" > ' + villages[i].name + '</td>';
                html += ' <td class="bn_name" > ' + villages[i].bn_name + '</td>';
                // html += ' <td >  <button type="button" class="btn btn-danger"  > <a href="'+$("#village_delete").val()+'?id='+ villages[i].id +'"> <i class="fa fa-trash text-light" aria-hidden="false"> </i></a></button></td>';
                html += ' <td >  <button type="button" class="btn btn-success" id="edit-village-button" data-item-id= '+ villages[i].id +' data-item-name=' + villages[i].name +' data-item-bn_name= ' + villages[i].bn_name + ' data-item-url=' + villages[i].url + '> <i class="fa fa-edit" aria-hidden="false"> </i></button> </td>';
            

                html += '</tr>';
            });


            // console.log(html);

            $("#villageTableData").html(html);
            $("#villageTable").DataTable();



        });


    });



    $(document).on('click', "#edit-village-button", function () {
       

        $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

        var options = {
            'backdrop': 'static'
        };
        $('#village-edit-modal').modal(options)
    });

    // on modal show
    $('#village-edit-modal').on('show.bs.modal', function () {
        var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
        // get the data
        var id = el.attr('data-item-id');
        var name = el.attr('data-item-name');
        var bn_name = el.attr('data-item-bn_name');
        var url = el.attr('data-item-url');
        console.log(id);
        // fill the data in the input fields
        $("#modal-village-id").val(id);
        $("#modal-village-name").val(name);
        $("#modal-village-bn_name").val(bn_name);
        $("#modal-village-url").val(url);

    });

    // on modal hide
    $('#edit-modal').on('hide.bs.modal', function () {
        $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        $("village-edit-modal").trigger("reset");
    });




});
