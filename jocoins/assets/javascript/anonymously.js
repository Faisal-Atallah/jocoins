$(function() {
    enable_cb();
    $("#anonymous").click(enable_cb);
});

function enable_cb() {
    if (this.checked) {
        $("input.anonymous").removeAttr("disabled");
    } else {
        $("input.anonymous").attr("disabled", true);
    }
}


$('#anonymous').change(function(){
    if($(this).is(':checked'))
        $('#fname,#lname').prop('disabled','disabled')
})