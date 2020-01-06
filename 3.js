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
    UpdateCartHeader()
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
    alert("Sản phẩm bạn chọn đã được thêm vào giỏ hàng!")
    json_obj.quantity = quantity_input;
    jsondata.push(json_obj);
    console.log(jsondata)
    JSON.stringify(jsondata);
    
    sessionStorage.setItem('name', JSON.stringify(jsondata))
    UpdateCartHeader()
}
function UpdateCartHeader()
{
    var nameItem = JSON.parse(sessionStorage.getItem('name')) 
    var x = 0
    var total = 0
    nameItem.forEach(function(value) {
        x=x+parseInt(value.quantity)
        total = total+ (value.price * value.quantity)
    })
    document.getElementsByClassName('product-count')[0].innerText = x
    document.getElementsByClassName('cart-amunt')[0].innerText = total + "  VNĐ"
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
                            $('#h2search').append(`  
                                <div class="thubmnail-recent"">
                                    <img src="${value.image}" class="recent-thumb" alt="">
                                    <h2><a href="single-product.php?id=${value.id}">${value.name}</a></h2>
                                    <div class="product-sidebar-price">
                                        <ins>${value.price}  VND</ins> <del></ins> <del> ${value.price2} VND</del>
                                    </div>
                                </div>`
                            );

                        })
                    }else{
                        $('#h2search').html("");
                        $('#h2search').append(`  Không tìm thấy `);
                    }

                }

            });
        }

    })

    


    $(".rating-wrap-post .fa.fa-star").click(function () {
        let a = $(this).attr("data-item");
        $(".rating-wrap-post .fa.fa-star").removeClass("active_star");
        $(".fa.fa-star").each(function() {  
            if($(this).data("item") <= a ){
                $(this).addClass("active_star");
            }
        })
    });

    var index = 0;
    // đánh giá sao
    $(".rating-wrap-post .fa.fa-star").hover(function () {
            index = $(this).attr("data-item");
            $(".fa.fa-star").each(function() {  
                
                $(".rating-wrap-post .fa.fa-star").addClass("active_hover");  
                if(  $(this).attr("data-item") > index )  $(this).addClass("active_star_black");  
                
            })
            
        }, function () {
            $(".rating-wrap-post .fa.fa-star").removeClass("active_star_black");
            $(".rating-wrap-post .fa.fa-star").removeClass("active_hover");  
        }
    );

     $("#submitreview").click(function  (){
        let id =JSON.parse( $("#btnadd").attr("data-item")).id;
         $.ajax({
             url:"getdatareview.php",
             method:"post",
             type:"json",
             data:{
                 name:$("#ipreviewname").val(),
                 email:$("#ipreviewemail").val(),
                 vote:index,
                 review:$('#txtreview').val(),
                 id_product:id,
             },
             success:function(data){
                
                alert(data);
                // window.location.reload();
                
                
             }
         })
         
         

     })


 
      
   



});
