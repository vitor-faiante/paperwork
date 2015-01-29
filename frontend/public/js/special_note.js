//console.log("Hello");
window.specialNoteEventListener = function() {
    //setTimeout(function() { //
    console.log(1);
    console.log($("a#file_click_handler"));
    $("a#file_click_handler").click(function(event) {
        event.preventDefault();
        $('.dropdown-toggle').first().dropdown('toggle');
        return false;
    });
    $("a#search_handler").click(function(event) {
        event.preventDefault();
        $('[ng-model="search"]').focus();
        return false;
    });
    console.log("hello");
    if($("a#file_click_handler").length > 0) {
        alert(1);
    }else{
        alert(2);
    }
    //}, 5000); // Test code
};
//if(typeof specialNoteEventListener === "undefined") {
//    alert("error");
//}else{
//    alert("Error");
//}