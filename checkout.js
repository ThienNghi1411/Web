if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready()
{
    var nameItem = JSON.parse(sessionStorage.getItem('name')) ;
    nameItem.forEach(function(value) {
        addItemToOrder(value.name, value.price);
    })
    updateTotal();
}

function addItemToOrder(title, price) 
{
    var cartRow = document.createElement('TR')
    cartRow.classList.add('cart_item')
    var cartItems = document.getElementById('giohang')

    var cartRowContents = `
    <td class="product-name">
    ${title} <strong class="product-quantity">× 1</strong> </td>
    <td class="product-total">
    <span class="amount">${price}</span> </td> `

    cartRow.innerHTML = cartRowContents;
    cartItems.appendChild(cartRow);

}

function updateTotal()
{
    var priceElement = document.getElementsByClassName('amount')
    var LastTotal = 0;
    for (var i = 0; i < priceElement.length; i++)
    {
        var price = parseFloat(priceElement[i].innerText);
        console.log(price)

        LastTotal = LastTotal + price;
        
    }
    document.getElementsByClassName('Orderamount')[0].innerText = LastTotal + " vnd"
    document.getElementsByClassName('Totalamount')[0].innerText = LastTotal + " vnd"
}