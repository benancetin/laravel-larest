# Larest
Larest is a rest api built on laravel that you can create orders and list them by using tokens. (Oauth2)

## Usage
### How to login?
"Post" to "/api/login"

![Alt text](https://github.com/benancetin/laravel-larest/blob/master/info/ss-login.png?raw=true "Login example")

### How to order?
"Post" to "/api/products"

![Alt text](https://github.com/benancetin/laravel-larest/blob/master/info/ss-makeorder.png?raw=true "Order example")

### How to update order?
"Post" to "api/products/$id" with "?_method=PUT"

![Alt text](https://github.com/benancetin/laravel-larest/blob/master/info/ss-updateorder.png?raw=true "Order example")

### How to see order details?
"Get" to "/api/products/$id"

![Alt text](https://github.com/benancetin/laravel-larest/blob/master/info/ss-showorder.png?raw=true "Order example")

### How to list all orders?
"Get" to "/api/products"

![Alt text](https://github.com/benancetin/laravel-larest/blob/master/info/ss-listorder.png?raw=true "Order example")


## Bonus (Optional)
### Adding user
If you would like to add users by api;
"Post" to "/api/register"

![Alt text](https://github.com/benancetin/laravel-larest/blob/master/info/ss-adduser.png?raw=true "Order example")

### Deleting Products
If you want to delete product;
"Delete" to "api/products/$id"

![Alt text](https://github.com/benancetin/laravel-larest/blob/master/info/ss-delete.png?raw=true "Order example")

### ToDo
[] Unit test was on the way, but could not finish it on time, can be added.
