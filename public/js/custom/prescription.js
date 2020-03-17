$(document).ready(function () {
    var farmerId;
    var selectedSigns={};


    function clinicalSign() {
        var html = '<option value="">Select Clinical Signs</option>';
        var link = $("#indexLink").val().trim() + '/clinical-sign-all-api';
        $.get(link, function (signs) {
            jQuery.each(signs, function (i) {
                html += ' <option value="' + signs[i].id + '"> ' + signs[i].name + '</option>';

            });
            console.log(html);    
            $("#PrescriptionClinicalSigns").html(html);
            $("#PrescriptionClinicalSigns").chosen();

        });
    };
    clinicalSign();

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





});
