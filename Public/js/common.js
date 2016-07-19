$(function(){

    var shop_select;
    var city_list = $("div.city-list");
    var sub_shop = $("#submit-shop");
    //店铺选择
    city_list.click(function(){
        shop_select = $(this).find(".shop-name").html();
        console.log(shop_select);
    });
    //提交店铺
    function submitShop(){
        console.log(1);
    }

    sub_shop.on('click',submitShop());

});