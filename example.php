<?php

// include api first
include('api.php');

// simple example, query google.com in englist for the keyword test
echo SerpProvider::query('google','en','us','desktop','test');

// advanced example, query google.com in englist for the keyword test, limit to 10 results, then return all urls matching wikipedia
echo SerpProvider::query('google','en','us','desktop','test',['limit'=>10,'match'=>'wikipedia.com']);
