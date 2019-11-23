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

}
var jsondata = [];
function addToCartClicked(event) {
    event.preventDefault();
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
    jsondata.push(json_obj);
    console.log(jsondata)
    JSON.stringify(jsondata);
    
    sessionStorage.setItem('name', JSON.stringify(jsondata))
}



