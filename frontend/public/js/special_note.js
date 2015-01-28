console.log("Hello");
window.specialNoteEventListener = function() {
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
};
if(typeof specialNoteEventListener === "undefined") {
    alert("error");
}else{
    alert("Error");
}