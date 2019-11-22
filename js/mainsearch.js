$(document).ready(function(){
    cat();
    brand();
    search();
    productsell();
    productnew();
    function cat(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{category:1},
            success:function(data){
                $("#get_category").html(data);
            }
        })
    }

    function brand(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{brand:1},
            success:function(data){
                $("#get_brand").html(data);
            }
        })
    }

    function search(){
        var keyword=window.location.search.substring(1);
        if(keyword!=""){
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{search:1, keyword:keyword},
                success:function(data){
                    $("#get_product").html(data);
                }
            })
        }
    }

    function productsell(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{productsell:1},
            success:function(data){
                $("#get_productsell").html(data);
            }
        })
    }

    function productnew(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{productnew:1},
            success:function(data){
                $("#get_productnew").html(data);
            }
        })
    }

    $("body").delegate(".category","click",function(event){
        event.preventDefault();
        var cid=$(this).attr('cid');
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{get_selected_Category:1, cat_id:cid},
            success:function(data){
                $("#get_product").html(data);
            }
        })
    })

    $("body").delegate(".brand","click",function(event){
        event.preventDefault();
        var bid=$(this).attr('bid');
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{get_selected_Brand:1, brand_id:bid},
            success:function(data){
                $("#get_product").html(data);
            }
        })
    })

    $("#search_btn").click(function(){
        var keyword=$("#txtsearch").val();
        if(keyword!=""){
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{search:1, keyword:keyword},
                success:function(data){
                    $("#get_product").html(data);
                }
            })
        }
    })

    var input = document.getElementById("txtsearch");
    input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("search_btn").click();
    }
    });

})