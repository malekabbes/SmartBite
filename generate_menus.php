<?php
header("Access-Control-Allow-Origin: *");

// Include your API calling functions script if it's separate
include 'GenerateAPI.php'; 

$OPENAI_API_KEY = "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"; // Make sure to keep your API key secret

// Retrieve the posted data
$postData = json_decode(file_get_contents('php://input'), true);

// Call the OpenAI API with the data received from the AJAX request
callOpenAI_API($postData, $OPENAI_API_KEY);

?>
