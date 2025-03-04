<h2>Usage</h2>
<ol>
    <li>composer i</li>
    <li>php artisan migrate</li>
    <li>php artisan db:seed</li>
</ol>
<h2>Auth routes</h2>
<h4>Accept: application/json</h4>
<h4>Example login credentials: </br> </br>
    email - admin@example.com  </br>
    password - 12345678 (string)
</h4>
<ol>
    <li>http://127.0.0.1:8000/api/login</li>
    <li>http://127.0.0.1:8000/api/register</li>
</ol>
<h4>returns: Bearer token</h4>

<h3>Product endpoints</h3>
<ol>
    <li>GET http://127.0.0.1:8000/api/products/ - returns all products</li>
    <li>PUT http://127.0.0.1:8000/api/products/{id} - updates product</li>
    <li>POST http://127.0.0.1:8000/api/products - creates product</li>
    <li>DELETE http://127.0.0.1:8000/api/products/{id} - deletes product</li>
</ol>
<h4>Products filtering with query parameters e.g http://127.0.0.1:8000/api/products?category=test&name=product1&min_price=300 or you can use any other available columns</h4>
