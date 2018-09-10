$(document).ready( function () {
    $('.datatable').DataTable();
} );

function myFunction(id) {
    var conf = confirm("Da li želite da obrišete stavku?");
    if(conf == true){
        window.location.replace('/delete-article/'+id);
    }

}

$(function() {
    $('#addArticle').click(function() {
        var $clone = $('#articles div .wrapper').clone();
        $clone.find('input').val('');
        $clone.find('input').attr({"max":''});
        $clone.appendTo($('#articles'));
    });

    $('#print').click(function() {
        $("#main").show();
        window.print();
    });
});
function checkMax(elem){
    if (elem.value > parseInt(elem.max)) {
        alert('Max value is '+ elem.max);
        elem.value = elem.max; // emptying the input box
    }
}

$(document).on('change', '.wrapper select', function() {
    $(this).siblings("input.quantity").attr({"max":quantity[$(this).val()]});
});