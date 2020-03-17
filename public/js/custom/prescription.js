$(document).ready(function () {
    var farmerId;
    var selectedSigns = {};
    var clinicalSigns = {};
    var selectedDiagnosis = {};
    var tentativeDiagnosis = {};
    var selectedAdvice = {};
    var advices = {};

    var selectedNecropsies = {};
    var necropsies = {};

    var selectedMedichines = {};
    var medichines = {};




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


                        var html = '<div class="text-light font-weight-bold  text-left h5 text-capitalize ">Name  : ' + farmer.name + '</div>';
                        html += '<div class="text-light font-weight-small text-left h5 text-capitalize "> Village : ' + farmer.village_name + '</div>';

                        $("#farmerProfile").html(html)
                        html = '';

                        if (farmer.cattle > 0)
                            html += '<div class="col-3  "> Cattle : ' + farmer.cattle + '</div>';
                        if (farmer.goat > 0)
                            html += '<div class="col-3  "> Goat : ' + farmer.goat + '</div>';
                        if (farmer.buffalo > 0)
                            html += '<div class="col-3  "> Buffalo : ' + farmer.buffalo + '</div>';
                        if (farmer.sheep > 0)
                            html += '<div class="col-3  "> Sheep : ' + farmer.sheep + '</div>';
                        if (farmer.poultry > 0)
                            html += '<div class="col-3  "> Poultry : ' + farmer.poultry + '</div>';
                        if (farmer.chicken > 0)
                            html += '<div class="col-3  "> Chicken : ' + farmer.chicken + '</div>';
                        if (farmer.duck > 0)
                            html += '<div class="col-3  "> Duck : ' + farmer.duck + '</div>';
                        if (farmer.pigeon > 0)
                            html += '<div class="col-3  "> Pigeon : ' + farmer.pigeon + '</div>';
                        if (farmer.turkey > 0)
                            html += '<div class="col-3  "> Turkey : ' + farmer.turkey + '</div>';
                        if (farmer.other > 0)
                            html += '<div class="col-3  "> Other : ' + farmer.other + '</div>';

                        $("#farmerProperty").html(html)

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
        console.log("dshfjksahfjksahfdjkasdhjk dsfjkhjskda fjksdhfjsdh fjsdhfjsdhfsd ")


    };


    clinicalSign();



    $("#PrescriptionClinicalSigns").change(function () {
        var id = $("#PrescriptionClinicalSigns").val();
        console.log(id);
        selectedSigns[id] = clinicalSigns[id];


        var html = "";
        jQuery.each(selectedSigns, function (id) {
            html += '<tr> <td class="text-dark" >' + selectedSigns[id] + ' </td> <td  class=" text-right ">  <button class="btn btn-sm btn-danger text-left" id="deSelectSigns"   clinicalSignId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>'
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
            html += '<tr> <td class="text-dark" >' + selectedSigns[id] + ' </td> <td  class=" text-right " >  <button class="btn btn-sm btn-danger" id="deSelectSigns"   clinicalSignId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>'
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






    function tentativeDiagnosisFunction() {
        var html = '';

        var link = $("#indexLink").val().trim() + '/tentative-diagnosis-all-api';
        $.get(link, function (diagnosis) {
            jQuery.each(diagnosis, function (i) {
                console.log(i);
                tentativeDiagnosis[diagnosis[i].id] = diagnosis[i].name;
                html += ' <option value=' + diagnosis[i].id + '> ' + diagnosis[i].name + '</option>';

            });

            console.log(html);

            $("#PrescriptiontentativeDiagnosis").chosen("destroy");
            $("#PrescriptiontentativeDiagnosis").html(html);
            $("#PrescriptiontentativeDiagnosis").chosen();

        });

    };


    tentativeDiagnosisFunction();



    $("#PrescriptiontentativeDiagnosis").change(function () {
        var id = $("#PrescriptiontentativeDiagnosis").val();
        console.log(id);
        selectedDiagnosis[id] = tentativeDiagnosis[id];


        var html = "";
        jQuery.each(selectedDiagnosis, function (id) {
            html += '<tr> <td class="text-dark" >' + selectedDiagnosis[id] + ' </td> <td c class=" text-right " >  <button class="btn btn-sm btn-danger " id="deSelectDiagnosis"   tentativeDiagnosisId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>'
        });
        $("#selectedDiagnosisTable").html(html);

    });
    $("body").on("click", "#deSelectDiagnosis", function () {
        console.log("clicked");
        $("#selectedDiagnosisTable").html("");

        var tentativeDiagnosisId = $(this).attr('tentativeDiagnosisId');

        console.log("Clicked On " + tentativeDiagnosisId);
        delete (selectedDiagnosis[tentativeDiagnosisId]);
        var html = "";
        jQuery.each(selectedDiagnosis, function (id) {
            html += '<tr> <td class="" >' + selectedDiagnosis[id] + ' </td> <td  class=" text-right ">  <button class="btn btn-sm btn-danger" id="deSelectDiagnosis"   tentativeDiagnosisId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>'
        });
        $("#selectedDiagnosisTable").html(html);

    });



    $(document).on('click', "#createtentativeDiagnosis", function () {

        var options = {
            'backdrop': 'static'
        };

        $('#tentativeDiagnosis-create-modal').modal(options)


    });

    // on modal hide
    $('#tentativeDiagnosis-create-modal').on('hide.bs.modal', function () {
        $("#tentativeDiagnosis-create-modal-form").trigger("reset");
        tentativeDiagnosisFunction();

    });


    $(document).on('click', "#tentativeDiagnosis-create-modal-submit-button", function () {

        var form = $('#tentativeDiagnosis-create-modal-form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                //    alert(data); // show response from the php script.
            }
        });

        $("#tentativeDiagnosis-create-modal-form").trigger("reset");

    });














    /////////////////////////////////////////////////////////////////////






    function AdvicesFunction() {
        var html = '';

        var link = $("#indexLink").val().trim() + '/advice-all-api';
        $.get(link, function (advice) {
            jQuery.each(advice, function (i) {
                console.log(i);
                advices[advice[i].id] = advice[i].name;
                html += ' <option value=' + advice[i].id + '> ' + advice[i].name + '</option>';

            });

            console.log(html);

            $("#PrescriptionAdvice").chosen("destroy");
            $("#PrescriptionAdvice").html(html);
            $("#PrescriptionAdvice").chosen();

        });

    };


    AdvicesFunction();



    $("#PrescriptionAdvice").change(function () {
        var id = $("#PrescriptionAdvice").val();
        console.log(id);
        selectedAdvice[id] = advices[id];


        var html = "";
        jQuery.each(selectedAdvice, function (id) {
            html += '<tr> <td class="text-dark" >' + selectedAdvice[id] + ' </td> <td  class=" text-right " >  <button class="btn btn-sm btn-danger text-left" id="deSelectAdvice"   adviceId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>'
        });
        $("#selectedAdviceTable").html(html);

    });
    $("body").on("click", "#deSelectAdvice", function () {
        console.log("clicked");
        $("#selectedAdviceTable").html("");

        var adviceId = $(this).attr('adviceId');

        console.log("Clicked On " + adviceId);
        delete (selectedAdvice[adviceId]);
        var html = "";
        jQuery.each(selectedAdvice, function (id) {
            html += '<tr> <td class="text-dark" >' + selectedAdvice[id] + ' </td> <td  class=" text-right " >  <button class="btn btn-sm btn-danger" id="deSelectAdvice"   adviceId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>'
        });
        $("#selectedAdviceTable").html(html);

    });



    $(document).on('click', "#createAdvice", function () {

        var options = {
            'backdrop': 'static'
        };

        $('#advice-create-modal').modal(options)


    });

    // on modal hide
    $('#advice-create-modal').on('hide.bs.modal', function () {
        $("#advice-create-modal-form").trigger("reset");
        AdvicesFunction();

    });


    $(document).on('click', "#advice-create-modal-submit-button", function () {

        var form = $('#advice-create-modal-form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                //    alert(data); // show response from the php script.
            }
        });

        $("#advice-create-modal-form").trigger("reset");

    });














    /////////////////////////////////////////////////////////////////////






    function NecropsyFunction() {
        var html = '';

        var link = $("#indexLink").val().trim() + '/necropsy-all-api';
        $.get(link, function (necropsy) {
            jQuery.each(necropsy, function (i) {
                console.log(i);
                necropsies[necropsy[i].id] = necropsy[i].name;
                html += ' <option value=' + necropsy[i].id + '> ' + necropsy[i].name + '</option>';

            });

            console.log(html);

            $("#PrescriptionNecropsy").chosen("destroy");
            $("#PrescriptionNecropsy").html(html);
            $("#PrescriptionNecropsy").chosen();

        });

    };


    NecropsyFunction();



    $("#PrescriptionNecropsy").change(function () {
        var id = $("#PrescriptionNecropsy").val();
        console.log(id);
        selectedNecropsies[id] = necropsies[id];


        var html = "";
        jQuery.each(selectedNecropsies, function (id) {
            html += '<tr> <td class="text-dark" >' + selectedNecropsies[id] + ' </td> <td  class=" text-right " >  <button class="btn btn-sm btn-danger text-left" id="deSelectedNecropsy"   necropsyId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>'
        });
        $("#selectedNecropsyTable").html(html);

    });
    $("body").on("click", "#deSelectedNecropsy", function () {
        console.log("clicked");
        $("#selectedNecropsyTable").html("");

        var necropsyId = $(this).attr('necropsyId');

        console.log("Clicked On " + necropsyId);
        delete (selectedNecropsies[necropsyId]);
        var html = "";
        jQuery.each(selectedNecropsies, function (id) {
            html += '<tr> <td class="text-dark" >' + selectedNecropsies[id] + ' </td> <td  class=" text-right " >  <button class="btn btn-sm btn-danger" id="deSelectedNecropsy"   necropsyId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>'
        });
        $("#selectedNecropsyTable").html(html);

    });



    $(document).on('click', "#createNecropsy", function () {

        var options = {
            'backdrop': 'static'
        };

        $('#necropsy-create-modal').modal(options)


    });

    // on modal hide
    $('#necropsy-create-modal').on('hide.bs.modal', function () {
        $("#necropsy-create-modal-form").trigger("reset");
        NecropsyFunction();

    });


    $(document).on('click', "#necropsy-create-modal-submit-button", function () {

        var form = $('#necropsy-create-modal-form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                // alert(data); // show response from the php script.
            }
        });

        $("#necropsy-create-modal-form").trigger("reset");

    });








    /////////////////////////////////////////////////////////////////////






    function RxMedichineFunction() {
        var html = '';

        var link = $("#indexLink").val().trim() + '/medichine-all-api';
        $.get(link, function (medichine) {
            jQuery.each(medichine, function (i) {
                console.log(i);
                medichines[medichine[i].id] = {
                    id: medichine[i].id,
                    name: medichine[i].name,
                    description: medichine[i].description,
                }

                html += ' <option value=' + medichine[i].id + '> ' + medichine[i].name + '</option>';

            });


            $("#rxMedichine").chosen("destroy");
            $("#rxMedichine").html(html);
            $("#rxMedichine").chosen();

        });

    };


    RxMedichineFunction();

    $("#rxMedichine").change(function () {

        var id = $("#rxMedichine").val();
        $("#rxMedichineSig").val(medichines[id].description);

    });

    $(document).on('click', "#submitRxMedichine", function () {

        var id = $("#rxMedichine").val();
        medichines[id].description = $("#rxMedichineSig").val();
        selectedMedichines[id] = {
            id: medichines[id].id,
            name: medichines[id].name,
            description: medichines[id].description,
        }


        var html = "";
        jQuery.each(selectedMedichines, function (id) {
            html += '<tr> <td class="text-dark" >' + selectedMedichines[id].name + ' </td>';
            html += '<td class="text-dark" >' + selectedMedichines[id].description + ' </td>';
            html += ' <td  class=" text-right " >  <button class="btn btn-sm btn-danger text-left" id="deSelectRxMedichine"   medichineId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>';
        });
        $("#selectedRxMedichine").html(html);

    });
    $("body").on("click", "#deSelectRxMedichine", function () {
        console.log("clicked");
        $("#selectedRxMedichine").html("");

        var medichineId = $(this).attr('medichineId');

        console.log("Clicked On " + medichineId);
        delete (selectedMedichines[medichineId]);
        var html = "";
        jQuery.each(selectedMedichines, function (id) {
            html += '<tr> <td class="text-dark" >' + selectedMedichines[id].name + ' </td>';
            html += '<td class="text-dark" >' + selectedMedichines[id].description + ' </td>';
            html += ' <td  class=" text-right " >  <button class="btn btn-sm btn-danger text-left" id="deSelectRxMedichine"   medichineId=' + id + '   > <i class="fa fa-trash" aria-hidden="false"> </i> </button></td> </tr>';
        });
        $("#selectedRxMedichine").html(html);

    });



    $(document).on('click', "#createrxMedichine", function () {

        var options = {
            'backdrop': 'static'
        };

        $('#rxMedichine-create-modal').modal(options)


    });

    // on modal hide
    $('#rxMedichine-create-modal').on('hide.bs.modal', function () {
        $("#rxMedichine-create-modal-form").trigger("reset");
        RxMedichineFunction();

    });


    $(document).on('click', "#rxMedichine-create-modal-submit-button", function () {

        var form = $('#rxMedichine-create-modal-form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                // alert(data); // show response from the php script.
            }
        });

        $("#rxMedichine-create-modal-form").trigger("reset");

    });













});
