/**
 * Created by Emily on 3/30/2016.
 */

//function changeRead()
//{
//    if (document.getElementById("readButton").value==="Read more...")
//        document.getElementById("readButton").value="Read less...";
//    else
//        document.getElementById("readButton").value="Read more...";
//}

$("#button1").hide();
$("#button2").click(function(){
    if ( this.value === 'Read Less...' ) {
        // if it's open close it
        open = false;
        this.value = 'Read More...';
        $("#button1").hide();
    }
    else {
        // if it's close open it
        open = true;
        this.value = 'Read Less...';
        $(this).siblings("[value='Read Less...']").click(); //to collapse the open divs
        $("#button1").show();
    }
});