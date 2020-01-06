if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready()
{
	// xoa item trong cart
    var nameItem = JSON.parse(sessionStorage.getItem('name')) ;
	var removecart = document.getElementsByClassName("remove");
	for (var i = 0 ; i < removecart.length ; i++)
	{
		var button = removecart[i];
		button.addEventListener('click',removeCartItem(i));
	}

	// cap nhat lai so luong cua item trong cart
    var Voucher = document.getElementById("Voucher");
    Voucher.addEventListener('click',CheckCoupon)
	var getQuantity = document.getElementsByClassName("input-text qty text");
	for (var i = 0 ; i < getQuantity.length ; i++)
	{
		var input = getQuantity[i];
		input.addEventListener('change',UpdateQuantity);
    }
    //dragdrop
    var Drager = document.getElementsByClassName('attachment-shop_catalog wp-post-image')
    for (var i =  0 ; i < Drager.length ; i++)
    {
        var Dragplace = Drager[i];
        Dragplace.addEventListener('dragstart',dragev)
    }
    var a = document.getElementsByClassName('recent-thumb');
    for (var i =  0 ; i < a.length ; i++)
    {
        var Dragplace = a[i];
        Dragplace.addEventListener('dragstart',dragev)
    }
    var Droper = document.getElementById("giohang1");
    Droper.addEventListener('drop',dropev)
    Droper.addEventListener('dragover',allowDrop)
    if(nameItem != null){
        nameItem.forEach(function(value) {
            addItemToCart(value.name, value.price, value.image,value.quantity);
        })
    }
    UpdateCart()

}
function dragev(event)
{   
   
    var x = event.target
    var data = x.parentElement.getAttribute("data-item")
    event.dataTransfer.setData("text",data)
    
}
function dropev(event)
{
    event.preventDefault();
    var jsondata = [];
    if(sessionStorage.getItem('name')){
         jsondata =JSON.parse(sessionStorage.getItem('name'));
    }else{
         jsondata = [];
    }
    var data = event.dataTransfer.getData("text") // chuỗi json
    var json_obj =JSON.parse(data);
    json_obj.quantity = 1;
    let item = jsondata.find((item) => item.id === json_obj.id );
    if(item){
        alert("Sản phẩm bạn chọn đã có trong giỏ hàng!")
        return;
    }else{
        json_obj.quantity=1;
        addItemToCart(json_obj.name, json_obj.price, json_obj.image,json_obj.quantity);
        jsondata.push(json_obj);
       
    }
    JSON.stringify(jsondata);
    sessionStorage.setItem('name', JSON.stringify(jsondata))
    UpdateCartHeader()
}
function allowDrop(event)
{
    event.preventDefault();
}
var check = false;
function CheckCoupon(event)
{
    event.preventDefault();
    var Voucher = document.getElementById("coupon_code")
    var Coupon = Voucher.value
    if (Coupon == "2THANGNUATETROI" || Coupon =="THIENNGHIDEPTRAI" || Coupon =="KHONGROTMONNAO")
    {
        alert("Chúc mừng mã giảm giá của bạn đã được kích hoạt !!!")
        alert("Đơn hàng của bạn được giảm giá 500000vnd!")    
        check = true;
        UpdateCart();
        UpdateCartHeader();
    }
    else
    {
        alert("Mã giảm giá không hợp lệ! Xin kiểm tra lại")
    }
    
}

function addItemToCart(title, price, imageSrc, Quantity) 
{
    var cartRow = document.createElement('TR')
    cartRow.classList.add('cart_item')
    var cartItems = document.getElementById('giohang')

    var cartRowContents = `
            <td class="product-remove">
                <a title="Remove this item" class="remove" href="#">×</a> 
            </td>

            <td class="product-thumbnail">
                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src=${imageSrc}></a>
            </td>

            <td class="product-name">
                <a href="single-product.html" class="cart-item-title">${title}</a> 
            </td>

            <td class="product-price" >
                <span class="product-price-item">${price}</span> 
            </td>

            <td class="product-quantity" >
                <div class="quantity buttons_added">
                    
                    <input type="number" width=150px size="4" class="input-text qty text" title="Qty" value="${Quantity}"  step="1">
                  
                </div>
            </td>

            <td class="product-subtotal" width=150px>
                <span class="totalamount">${price}</span> 
            </td>`
    cartRow.innerHTML = cartRowContents;
    cartItems.appendChild(cartRow);
    cartRow.getElementsByClassName("remove")[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName("input-text qty text")[0].addEventListener('change', UpdateQuantity)
    UpdateCart();
}
function UpdateCart()
{
    var priceElement = document.getElementsByClassName('product-price-item')
    var quantityElement = document.getElementsByClassName('input-text qty text')
    var LastTotal = 0;
    for (var i = 0; i < priceElement.length; i++)
    {
        var total = 0 ;
        var price = parseFloat(priceElement[i].innerText);
        var quantity = quantityElement[i].value;
        total = price * quantity;
        LastTotal = LastTotal + total;
        document.getElementsByClassName('totalamount')[i].innerText = total + " vnd"
    }

    if (check == true)
    {
        LastTotal = LastTotal - 500000;
        document.getElementsByClassName('Order-total-amount')[0].innerText = LastTotal + " vnd";
        document.getElementsByClassName('Subtotal-amount')[0].innerText = LastTotal + " vnd";
    
        sessionStorage.setItem("total",LastTotal);
        return;
    }
    else
    {
        document.getElementsByClassName('Order-total-amount')[0].innerText = LastTotal + " vnd"
        document.getElementsByClassName('Subtotal-amount')[0].innerText = LastTotal + " vnd"
    }
    sessionStorage.setItem("total",LastTotal);
    UpdateCartHeader()
}

function UpdateQuantity(event)
{
	var input=event.target;
	if (isNaN(input.value) || input.value <=0)
	{	
		input.value = 1;  // kiem tra input co la so khong, neu la so phai >= 1
    }
    var nameItem = JSON.parse(sessionStorage.getItem('name')) ;
    var getname = input.parentElement.parentElement.parentElement
    var title = getname.getElementsByClassName('cart-item-title')[0].innerText
    nameItem.forEach(function(value) {
        if (value.name == title)
        {
            value.quantity = input.value;
            sessionStorage.setItem('name', JSON.stringify(nameItem))
        }
    })
    UpdateCart();
    UpdateCartHeader();
}

function removeCartItem(event,i)
{
    event.preventDefault();
    var nameItem = JSON.parse(sessionStorage.getItem('name')) ;
    nameItem.splice(i,1)
    sessionStorage.setItem('name', JSON.stringify(nameItem))
	var buttonClicked = event.target
	buttonClicked.parentElement.parentElement.remove()
	UpdateCart();
}

function UpdateCartHeader()
{
    var nameItem = JSON.parse(sessionStorage.getItem('name')) ;
    var x = 0
    var total = 0
    if(nameItem != null)
    nameItem.forEach(function(value) {
        x=x+parseInt(value.quantity)
        total = total+ (value.price * value.quantity)
    })
    if(check == true)
    {
        document.getElementsByClassName('product-count')[0].innerText = x
    document.getElementsByClassName('cart-amunt')[0].innerText = total-500000 + "  VNĐ"
    }
    else
    {
        document.getElementsByClassName('product-count')[0].innerText = x
    document.getElementsByClassName('cart-amunt')[0].innerText = total + "  VNĐ"
    }
    
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
                        <div class="thubmnail-recent">
                            <img src="${value.image}" class="recent-thumb" alt="">
                            <h2><a href="single-product.php?id=${value.id}">${value.name}</a></h2>
                            <div class="product-sidebar-price">
                                <ins>${value.price}  VND</ins> <del></ins> <del> ${value.price2} VND</del>
                            </div>
                        </div>`);

                        })
                    }else{
                        $('#h2search').html("");
                        $('#h2search').append(`  Không tìm thấy `);
                    }

                }

            });
        }

    })



});
