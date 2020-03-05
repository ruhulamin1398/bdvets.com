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
                html += ' <td > ' + temp ++ + '</td>';
                html += ' <td class="name" > ' + villages[i].name + '</td>';
                html += ' <td class="bn_name" > ' + villages[i].bn_name + '</td>';
                html += ' <td class="url" > ' + villages[i].url + '</td>';
                // html += ' <td >  <button type="button" class="btn btn-success" id="edit-village-button" data-village-id='+villages[i].id+'> <i class="fa fa-edit" aria-hidden="false"> </i></button></td>';
                html += '</>';
            });
            

            console.log(html);
            $("#villageTableData").html(html);
            $("#villageTable").DataTable(); 
          


        });


    });



    $(document).on('click', "#edit-village-button", function() {


        $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
    
        var options = {
          'backdrop': 'static'
        };
        $('#village-edit-modal').modal(options)
      });
    
      // on modal show
      $('#village-edit-modal').on('show.bs.modal', function() {
        var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
        var row = el.closest(".data-row");
    
        // get the data
        var id = el.data('data-village-id');
        var name = row.children(".name").text().trim();
        var bn_name = row.children(".bn_name").text().trim();
        var url = row.children(".url").text().trim();
    console.log(name);
        // fill the data in the input fields
        $("#modal-village-id").val(id);
        $("#modal-village-name").val(name);
        $("#modal-village-bn_name").val(bn_name);
        $("#modal-village-url").val(url);
    
      });
    
      // on modal hide
      $('#edit-modal').on('hide.bs.modal', function() {
        $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        $("village-edit-modal").trigger("reset");
      });
      



});