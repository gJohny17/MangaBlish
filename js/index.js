 // Data Table Filtering in Search and Numbers
 $(document).ready(function() {
    var dataTable = $('#filtertable').DataTable({
        responsive: true,
        "pageLength":10,
        columnDefs:[
            {type:'date-dd-mm-yyyy',aTargets:[3]}
        ],                
        "bLengthChange":false,        
    });
    $("#filterbox").keyup(function(){
        dataTable.search(this.value).draw();
    });
} );
