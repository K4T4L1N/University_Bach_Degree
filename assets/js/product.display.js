const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const productData = "[{\"id\": 0,\"image\": \"images/pic01.jpg\",\"name\": \"Name 1\",\"info\": \"Always be valid for the POSTCARD postage rate price printed on it.\",\"price\": 54.12,\"seller_name\": 0},{\"id\": 1,\"image\": \"images/pic02.jpg\",\"name\": \"Name 2\",\"info\": \"Always be valid for the POSTCARD postage rate price printed on it.\",\"price\": 12.00,\"seller_name\": 1},{\"id\": 2,\"image\": \"images/pic03.jpg\",\"name\": \"Name 3\",\"info\": \"Always be valid for the POSTCARD postage rate price printed on it.\",\"price\": 14.32,\"seller_name\":2}]";
const sellerData = "[{\"id\": 0,\"name\":\"Ion Bordea\"}, {\"id\": 1,\"name\":\"Hatmanu Lavinia\"},{\"id\": 2,\"name\":\"Cătalin Pavlovschi\"}]";

var id = urlParams.get('id');

if(id != null) {
    id = parseInt(id);
    var data = JSON.parse(productData);
    var el = data.find(item => item.id == id)

    document.title = "MyStamp: " + el.name;
    document.getElementById("product-image").src = el.image;
    document.getElementById("product-name").innerHTML = el.name;
    document.getElementById("product-info").innerHTML = el.info;
    document.getElementById("product-price").innerHTML = el.price + " lei";
    document.getElementById("product-seller-name").innerHTML = JSON.parse(sellerData).find(item => item.id == el.seller_name).name;
}