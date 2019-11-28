if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready()
{

	var addToCartButtons = document.getElementsByClassName('add_to_cart_button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
    var addToCartLinks = document.getElementsByClassName('add-to-cart-link')
    for (var i = 0; i < addToCartLinks.length; i++) {
        var button = addToCartLinks[i]
        button.addEventListener('click', addToCartClicked)
    }

}

function addToCartClicked(event) {
    event.preventDefault();
    if(sessionStorage.getItem('name')){
        jsondata =JSON.parse(sessionStorage.getItem('name'));
   }else{
        jsondata = [];
   }
    var button = event.target;
    var data = button.getAttribute("data-item") ;// chuỗi json 
    let quantity_input = Number(document.querySelectorAll(".input-text")[0].value) ;
    
    var json_obj =JSON.parse(data);
    for (var i = 0 ; i < jsondata.length ; i++)
    {
        if (json_obj.name == jsondata[i].name)
        {
            alert("Sản phẩm bạn chọn đã tồn tại trong giỏ hàng !!!")
            return;
        }
    }
    json_obj.quantity = quantity_input;
    jsondata.push(json_obj);
    console.log(jsondata)
    JSON.stringify(jsondata);
    
    sessionStorage.setItem('name', JSON.stringify(jsondata))
}


$(document).ready(function() {
    $("#h2search").hide();
    $('#h2search').on("click", "p", function() {
        $name = $(this).text();
    })
    $(document).click(function(){
        let id = $(this).attr("id");
        if(id !== "ipSearch"  ) {
            $("#h2search").hide();
        }
    })
    $('#ipSearch').keyup(function(e) {
        if ($('#ipSearch').val() == "") {
            $("#h2search").html('');
            $("#h2search").hide();
        } else {
            $("#h2search").show();
            $.ajax({
                url: "search.php",
                method: "get",
                type: "json",
                data: {
                    name: $(this).val()
                },
                success: function(data) {
            
                    let list = JSON.parse(data);

                    if (list != "") {
                        
                        $('#h2search').html("");
                        list.forEach(function(value) {
                            $('#h2search').append(`<a href="single-product.php?id=${value.id}">${value.name}</a>`);

                        })
                    }else{
                        $('#h2search').html("");
                        $('#h2search').append(`  Không tìm thấy `);
                    }

                }

            });
        }

    })
    
    // đánh giá sao
    $(".rating-wrap-post .fa.fa-star").hover(function () {
            let a = $(this).attr("data-item");
            $(".fa.fa-star").each(function() {  
               
                $(this).css("color","yellow");
                if(  $(this).attr("data-item") > a )  $(this).css("color","white");  
            
            })
            
        }, function () {
           
          
        }
    );

 
      
   



});
