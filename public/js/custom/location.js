$(document).ready(function () {




    $("#division_id").change(function () {



        var link = $("#district_list_api").val() + "?division_id=" + $('#division_id').val();
        console.log(link);

        $.get(link, function (districts, status) {
            console.log(districts);
            var html = '<option  value="" >Select district </option>';
            jQuery.each(districts, function (i) {
                console.log(districts[i].name);

                html += ' <option value="' + districts[i].id + '"> ' + districts[i].bn_name + '</option>';
            });

            console.log(html);
            $("#district_id").html(html);

            
            $("#addVillageUnionId").html(' <option value="">Select Union </option> ');
            $("#union_id").html(' <option value="">Select Union </option> ');
            $("#upazilla_id").html(' <option value="">Select Upazilla </option> ');
            


        });
        $("#setDivision").val($("#division_id").val());

    });


    $("#district_id").change(function () {



        var link = $("#upazilla_list_api").val() + "?district_id=" + $('#district_id').val();
        console.log(link);

        $.get(link, function (upazills, status) {
            console.log(upazills);
            var html = '<option  value="" >Select Upazilla </option>';
            jQuery.each(upazills, function (i) {
                console.log(upazills[i].name);

                html += ' <option value="' + upazills[i].id + '"> ' + upazills[i].bn_name + '</option>';
            });

            console.log(html);
            $("#upazilla_id").html(html);


            $("#union_id").html(' <option value="">Select Union </option> ');
            $("#addVillageUnionId").html(' <option value="">Select Union </option> ');



        });
        
        $("#setDistrict").val($("#district_id").val());

    });


    $("#upazilla_id").change(function () {



        var link = $("#union_list_api").val() + "?upazilla_id=" + $('#upazilla_id').val();
        console.log(link);

        $.get(link, function (unions, status) {
            console.log(unions);
            var html = '<option  value="" >Select Union </option>';
            jQuery.each(unions, function (i) {
                console.log(unions[i].name);

                html += ' <option value="' + unions[i].id + '"> ' + unions[i].bn_name + '</option>';
            });

            $("#union_id").html(html);
            $("#addVillageUnionId").html(html);
        });
        
        $("#setUpazilla").val($("#upazilla_id").val());

    });




    $("#union_id").change(function () {



        var link = $("#village_list_api").val() + "?union_id=" + $('#union_id').val();
        console.log(link);

        $.get(link, function (villages, status) {
            console.log(villages);
            var html = '<option  value="" >Select Union </option>';
            jQuery.each(villages, function (i) {
                console.log(villages[i].name);

                html += ' <option value="' + villages[i].id + '"> ' + villages[i].bn_name + '</option>';
            });
            $("#village_id").html(html);
        });

        
        $("#setUnion").val($("#union_id").val());

    });
    $("#village_id").change(function () {
        
        $("#setVillage").val($("#village_id").val());
    });
  






});