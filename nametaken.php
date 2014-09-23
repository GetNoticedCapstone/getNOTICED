<?php include 'dependency.php'; ?>
<?php

$nameRequest = new UserSignUpModel();
$nameRequest->setWebsiteURL(filter_input(INPUT_POST, 'websiteURL'));

$checkWebsite = array( "taken" => 'Sorry. This URL is already taken.', "website" => $nameRequest->getWebsiteURL() );
$_SESSION["ValidURL"] = false;

$users = new UserSignUp();

if ( !$users->websiteTaken($nameRequest) )
{
    $checkWebsite["taken"] = 'This URL is available!';
    $_SESSION["ValidURL"] = true;
}
else if ( $nameRequest->getWebsiteURL() === "" )
{
    $checkWebsite["taken"] = '';
    $_SESSION["ValidURL"] = false;
}
echo json_encode($checkWebsite);