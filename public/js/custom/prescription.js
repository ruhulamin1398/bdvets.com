$(document).ready(function () {
    var farmerId;
    var selectedSigns = {};
    var clinicalSigns = {};





    ///////////////////////////////////////////////////////////

    $("#farmerPhoneField").change(function () {
        var phone = $("#farmerPhoneField").val().trim();

        if (phone.length != 11) {
            var html = ' <div class="text-danger">Wrong Number</div>';
            $("#farmerProfile").html(html)
        }
        else {
            var link = $("#indexLink").val().trim() + '/farmer-chack-api?phone=' + phone;
            console.log(link);
            $.get(link, function (id) {
                if (id == 0) {

                    var html = '<div class="text-danger">Farmer Not Found</div>';
                    html += ' <button  class="btn btn-success"> <a target="_blank" href="">Add</a> </button>';
                    $("#farmerProfile").html(html)

                }
                else {

                    var link = $("#indexLink").val().trim() + '/farmer-profile-api/' + id;
                    $.get(link, function (farmer) {

                        var html = '<div class="text-success font-weight-bold">' + farmer.name + '</div>';
                        html += '<div class="text-success font-weight-small"> Village: ' + farmer.village_name + '</div>';
                        $("#farmerProfile").html(html)

                    });

                }

            });


        }


    });
    ////////////////////////////////////////////////////////////////////


    function clinicalSign() {
        var html = '';

        var link = $("#indexLink").val().trim() + '/clinical-sign-all-api';
        $.get(link, function (signs) {
            jQuery.each(signs, function (i) {
                console.log(i);
                clinicalSigns[signs[i].id] = signs[i].name;
                html += ' <option value=' + signs[i].id + '> ' + signs[i].name + '</option>';

            });

            console.log(html);

            $("#PrescriptionClinicalSigns").chosen("destroy");
            $("#PrescriptionClinicalSigns").html(html);
            $("#PrescriptionClinicalSigns").chosen();

        });

    };


    clinicalSign();



    $("#PrescriptionClinicalSigns").change(function () {
        var id = $("#PrescriptionClinicalSigns").val();
        console.log(id);
        selectedSigns[id] = clinicalSigns[id];


        var html = "";
        jQuery.each(selectedSigns, function (id) {
            html += '<tr> <td class="text-dark" >' + selectedSigns[id] + ' </td> <td>  <button class="btn btn-sm btn-danger" id="deSelectSigns"   clinicalSignId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>'
        });
        $("#selectedSignsTable").html(html);

    });
    $("body").on("click", "#deSelectSigns", function () {
        console.log("clicked");
        $("#selectedSignsTable").html("");

        var clinicalSignId = $(this).attr('clinicalSignId');

        console.log("Clicked On " + clinicalSignId);
        delete (selectedSigns[clinicalSignId]);
        var html = "";
        jQuery.each(selectedSigns, function (id) {
            html += '<tr> <td class="text-dark" >' + selectedSigns[id] + ' </td> <td>  <button class="btn btn-sm btn-danger" id="deSelectSigns"   clinicalSignId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>'
        });
        $("#selectedSignsTable").html(html);

    });



    $(document).on('click', "#createClinicalSign", function () {

        var options = {
            'backdrop': 'static'
        };
        $('#clinicalSign-create-modal').modal(options)
    });

    // on modal hide
    $('#clinicalSign-create-modal').on('hide.bs.modal', function () {
        $("#clinicalSign-create-modal-form").trigger("reset");
        clinicalSign();

    });


    $(document).on('click', "#clinicalSign-create-modal-submit-button", function () {

        var form = $('#clinicalSign-create-modal-form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                //    alert(data); // show response from the php script.
            }
        });

        $("#clinicalSign-create-modal-form").trigger("reset");

    });

    /////////////////////////////////////////////////////////////////////


});
