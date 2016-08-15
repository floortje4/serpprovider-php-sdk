# serpprovider-php-sdk
SerpProvider PHP SDK. PHP SDK for [SerpProvider](http://www.serpprovider.com) <br />
Get SERP results with php <br />
Full documentation [here](http://www.serpprovider.com/serp-api)  <br />
 <br />
<h3>Quickstart</h3>
Edit api.php and add your API key for SerpProvider
 
<h3>USAGE:</h3> <br />
<?php <br />
include('api.php'); <br />
echo SerpProvider::query('google','nl','nl','desktop','test');
