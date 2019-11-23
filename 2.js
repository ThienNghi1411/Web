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

function addToCartClicked(event) {
    event.preventDefault();
    var jsondata = [];
    if(sessionStorage.getItem('name')){
         jsondata =JSON.parse(sessionStorage.getItem('name'));
    }else{
         jsondata = [];
    }
    var button = event.target;


    var data = button.getAttribute("data-item") ;// chuỗi json 
    let index = 1 ;
    var json_obj =JSON.parse(data);
    // for (var i = 0 ; i < jsondata.length ; i++)
    // {
    //     if (json_obj.name == jsondata[i].name)
    //     {
    //         index = 0 ;
    //         json_obj.quantity = json_obj.quantity +1;
    //         console.log(jsondata)
    //         JSON.stringify(jsondata);
    //         sessionStorage.setItem('name', JSON.stringify(jsondata))
    //         return;
    //     }
    // }

    let item = jsondata.find((item) => item.id === json_obj.id );
    
    
    if(item){
        item.quantity =item.quantity+1;
    }else{
        json_obj.quantity=1;
        jsondata.push(json_obj);
       
    }

    
    console.log(jsondata)
    JSON.stringify(jsondata);
    
    sessionStorage.setItem('name', JSON.stringify(jsondata))
}



