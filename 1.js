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
	
	var getQuantity = document.getElementsByClassName("input-text qty text");
	for (var i = 0 ; i < getQuantity.length ; i++)
	{
		var input = getQuantity[i];
		input.addEventListener('change',UpdateQuantity);
	}
    nameItem.forEach(function(value) {
        addItemToCart(value.name, value.price, value.image,1);

    })
    

}

function addItemToCart(title, price, imageSrc, Quantity) 
{
    var cartRow = document.createElement('TR')
    cartRow.classList.add('cart_item')
    var cartItems = document.getElementById('giohang')
    var cartItemsname=cartItems.getElementsByClassName('product-name')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
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

            <td class="product-price">
                <span class="product-price-item">${price}</span> 
            </td>

            <td class="product-quantity" width=150px>
                <div class="quantity buttons_added">
                    <input type="button" class="minus" value="-" >
                    <input type="number" size="4" class="input-text qty text" title="Qty" value="${Quantity}"  step="1">
                    <input type="button" class="plus" value="+" >
                </div>
            </td>

            <td class="product-subtotal">
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

    document.getElementsByClassName('Order-total-amount')[0].innerText = LastTotal + " vnd"
    document.getElementsByClassName('Subtotal-amount')[0].innerText = LastTotal + " vnd"
    console.log(LastTotal)
}

function UpdateQuantity(event)
{
	var input=event.target;
	if (isNaN(input.value) || input.value <=0)
	{	
		input.value = 1;  // kiem tra input co la so khong, neu la so phai >= 1
	}
	UpdateCart();
}

function removeCartItem(event,i)
{
    var nameItem = JSON.parse(sessionStorage.getItem('name')) ;
    nameItem.splice(i,1)
    sessionStorage.setItem('name', JSON.stringify(nameItem))
	var buttonClicked = event.target
	buttonClicked.parentElement.parentElement.remove()
	UpdateCart();
}


