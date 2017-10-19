
     
     
$("input[name|='tend']" ).change(function() {
    $("#purban").toggle();
    $("#prural").toggle();
    
});

$("input[name|='tpessoa']" ).change(function() {
    $('#tcpf').toggle(0,function() {
    if ($(this).is(':visible'))
        $(this).css('display','table-row');
});
    $("#tcnpj").toggle(0,function() {
    if ($(this).is(':visible'))
        $(this).css('display','table-row');
    });
});



$("#avc1").click(function (e) {
    e.preventDefault();

    var url = $('#accinfo').attr('action');
    var data = $('#accinfo').serialize();

    $.ajax({
        type: 'ajax',
        method: 'post',
        url: url,
        data: data,
        async: false,
        dataType: 'json',
        success: function () {
            alert('dados adicionados com sucesso');
            $('#myTabs a[href="#busin"]').tab('show');
            $('#nav1').toggleClass('done');
            $('#nav2').toggleClass('active');
        },
        error: function () {
            alert('Could not add data');
        }
    });


});

$( "#avc2" ).click(function(e) {
    e.preventDefault();
    
    var url = $('#businfo').attr('action');
    var data = $('#businfo').serialize();

    $.ajax({
        type: 'ajax',
        method: 'post',
        url: url,
        data: data,
        async: false,
        dataType: 'json',
        success: function () {
            alert('dados atualizados');
            $('#myTabs a[href="#ativ"]').tab('show');
            $('#nav2').css('background-color', '#bada55').toggleClass('done');
            $('#nav3').toggleClass('active');
        },
        error: function () {
            alert('Could not add data');
        }
    });
    
    
    
});

$( "#cmp" ).change(function(){
    $('#intc').fadeToggle();    
});
$( "#vnd" ).change(function(){
    $('#ints').fadeToggle();    
});
