$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example thead th').each( function () {
        var title = $(this).text();
        if (title == "Status" || title == "Created at") {
            $(this).html( '<input type="text" placeholder="'+title+'" />' );
        }
    } );

    // DataTable
    var table = $('#example').DataTable({
        "oLanguage": {
            "sLengthMenu": "Display _MENU_ records",
        }
    });

    // Apply the search
    table.columns().every( function () {
        var that = this;

        $( 'input', this.header() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
});