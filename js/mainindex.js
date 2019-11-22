$(document).ready(function(){
    $("#search_index_btn").click(function(){
        location.assign("search.php?"+escape(document.getElementById("txtsearch_index").value));
    })
        
    
    var input1 = document.getElementById("txtsearch_index");
    input1.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("search_index_btn").click();
    }
    });

    
})