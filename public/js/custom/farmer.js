$(document).ready(function(){

    $("#village_id").change(function(){
        var link = $("#village_farmer_list_api").val()+"?village_id="+$("#village_id").val();
        $.get(link,function(farmers){
            var html="";
            var id =1;
            
            jQuery.each(farmers,function(i){
                html+="<tr>";
                html+= '<td>'+  id++  +'</td>';
                html+= '<td>'+ farmers[i].name+'</td>';
                html+= '<td>'+ farmers[i].phone+'</td>';
                html+= '<td>'+ farmers[i].email+'</td>';
                html+= '<td>'
                 
                
                +' <button type="button" class="btn btn-success " id="edit-product-button" > <a href='+  $("#farmerShow").val()+ id+   ' > <i class="fa fa-eye text-light" aria-hidden="false"> </i> </a></button>'
                +' <button type="button" class="btn btn-success" id="edit-product-button" > <a href='+  $("#indexLink").val()+'/farmers/'+id+'/edit'+   '> <i class="fa fa-edit text-light" aria-hidden="false"> </i> </a></button>'


        
                
                +  '</td>';
                html+="</tr>";

            })
            $("#farmerTableData").html(html);
            $('#farmerTable').DataTable();
        });

    });

});