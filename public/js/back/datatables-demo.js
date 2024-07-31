// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable( {
        language: {
          url: '/js/back/fr.json'
        }
    } );
} );

