<?php include 'dependency.php'; ?>
<?php

$nameRequest = new UserSignUpModel();
$nameRequest->setWebsiteURL(filter_input(INPUT_POST, 'websiteURL'));
        
//$checkWebsite = array( "taken" => 'Available', "website" => $nameRequest->getWebsiteURL() );

$users = new UserSignUp();

if ( $users->websiteTaken($websiteRequest) )
{
    $checkWebsite["taken"] = 'Unavailable';
}

echo json_encode($checkWebsite);
