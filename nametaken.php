<?php include 'dependency.php'; ?>
<?php

$nameRequest = new UserSignUpModel(filter_input_array(INPUT_POST));
        
$checkWebsite = array( "taken" => 'Available', "website" => $nameRequest->getWebsiteURL() );

$users = new Users();

if ( $users->websiteTaken($websiteRequest) )
{
    $checkWebsite["taken"] = 'Unavailable';
}

echo json_encode($checkWebsite);
