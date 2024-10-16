import './bootstrap';

$(function(){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name = "csrf-token"]').attr('content')
        }
    });
    var table = $('.data-table').DataTable({
        serverSide:true,
        processing:true,
        ajax:studentUrl,
        columns:[
            {data:'DT_RowIndex', name:'DT_RowIndex'},
            {data:'name', name:'name'},
            {data:'email', name:'email'},
            {data:'action', name:'action'},
        ]
    })
    console.log('DataTable Initialized');

})