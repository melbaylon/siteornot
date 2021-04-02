<?php
// sets error reporting off
// for deployment
error_reporting(0);

$siteNameLength = rand(1,12);

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function requestSite($randomSiteDomainName) {

    // echo $randomSiteDomainName;
    $response = dns_get_record($randomSiteDomainName . '.com');
    return $response;

}



function isSiteOrNot ($response) {

if ($response) {
        return true;
    } else {
        return false;
    }

}

if (isset($POST['tryAgain'])) {
    header('location: index.php');
}


$randomSiteDomainName =  generateRandomString($siteNameLength);
$siteResponse = requestSite($randomSiteDomainName);
$result = isSiteOrNot($siteResponse);

$fullDomain = 'http://' . $randomSiteDomainName . '.com';


include __DIR__.'/views/index.html.php';


// checks the value of
// dns_get_record(<random-domain-name.com>)

// echo '<pre>';
// print_r($siteResponse);
// echo '</pre>';