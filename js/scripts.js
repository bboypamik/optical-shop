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
        var $clone = $('#articles div .wrapper');
        $clone.clone().appendTo($('#articles'));
    });

    $( "#articles div .wrapper select").change(function() {
        $(this).siblings("input.quantity").attr({"max":quantity[$(this).val()]});
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

var $divClone = $("div#source").clone();
//The next line changes the ID and innerHTML
$divClone.attr("id", "newID")
$divClone.html("<span style='color: Red;'>New div's new innerHTML, with new ID=newID</span>");
$("div#destination").append($divClone);