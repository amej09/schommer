function price_filter(price){
    if(price==1){
        price="0-50";
    }else if(price==2){
        price="50-100";

    }else if (price==3){
        price="100-200";

    }else{
        price="200";

    }
    document.getElementById('form').elements['priceRange'].value = price;
     
    document.getElementById('form').submit();
}
 
function submit(){
     document.getElementById('form').submit();
}