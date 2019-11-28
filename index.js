if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
document.getElementsByClassName("product-count")[0].innerText = sessionStorage.length
function ready()
{

	var addToCartButtons = document.getElementsByClassName('add-to-cart-link')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
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
    jsondata.push(json_obj);
    console.log(jsondata)
    JSON.stringify(jsondata);
    sessionStorage.setItem('name', JSON.stringify(jsondata))
    
}


