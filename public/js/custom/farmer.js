$(document).ready(function(){

    $("#village_id").change(function(){
        var link = $("#village_farmer_list_api").val()+"?village_id="+$("#village_id").val();
        $.get(link,function(farmers){
            var html="";
            var id =0;
            
            jQuery.each(farmers,function(i){
                html+="<tr>";
                html+= '<td>'+  id++  +'</td>';
                html+= '<td>'+ farmers[i].name+'</td>';
                html+="</tr>";

            })
            $("#farmerTableData").html(html);
            $('#farmerTable').DataTable();
        });

    });

});