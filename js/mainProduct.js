$(document).ready(function(){
    productDetail();

    function productDetail(){
        var keyword=window.location.search.substring(1);
        $.ajax({
            url:"action.php",
            method:"POST",
            data: {productDetail:1,keyword:keyword},
            success:function(data){
                $("#get_Detail").html(data);
            }
        })
    }

    
})