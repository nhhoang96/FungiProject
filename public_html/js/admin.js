/**
 * Created by Emily on 3/25/2016.
 */

function admin() {
    //document.getElementById("newAdmin").show();
    //alert("why is this not working?");
    $("#newAdmin").show();
    $("#deleteAdmin").show();
    $("#newShape").hide();
    $("#updateShape").hide();
    $("#deleteShape").hide();
    $("#newSpecies").hide();
    $("#updateSpecies").hide();
    $("#deleteSpecies").hide();
    //$("editAdmin").show()
    //$("editShape").hide()
    //$("editSpecies").hide()
}
function test() {
    //alert("species");
    $("#newAdmin").hide();
    $("#deleteAdmin").hide();
    $("#newShape").show();
    $("#updateShape").show();
    $("#deleteShape").show();
    $("#newSpecies").hide();
    $("#updateSpecies").hide();
    $("#deleteSpecies").hide();
    //$("editAdmin").hide()
    //$("editShape").show()
    //$("editSpecies").hide()
}

function species() {
    //alert("species");
    $("#newAdmin").hide();
    $("#deleteAdmin").hide();
    $("#newShape").hide();
    $("#updateShape").hide();
    $("#deleteShape").hide();
    $("#newSpecies").show();
    $("#updateSpecies").show();
    $("#deleteSpecies").show();
    //$("editAdmin").hide()
    //$("editShape").hide()
    //$("editSpecies").show()
}
