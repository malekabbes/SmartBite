<?php


function callOpenAI_API($data, $apiKey) {
    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/completions");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer " . $apiKey // Use the API key
    ]);

    // Execute cURL session and capture the response
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }

    // Close cURL session
    curl_close($ch);

    // Return response
    $responseArray = json_decode($response, true);
    // Extract the text field from the first choice
    $text = $responseArray['choices'][0]['text'];
    $menuData = json_decode(trim($text), true);
    $menuNames = array_values($menuData);
    echo '
   <br /><br />
    <div class="heading_container heading_center generated_heading">
        <h2>
          Generated Menus that match your stats
        </h2>
      </div>
    <section class="large-food-cards">
    <div class="food-cards-cont flex">
    ';

// Dynamically create a food card for each menu
foreach ($menuNames as $menuName) {
     echo '<div class="food-card-item" style="background-image:url(https://malekabbes.fra1.cdn.digitaloceanspaces.com/sc/IEGLl3s.png)">
          <div class="content">
            <div class="sub-title">Special Dish</div>
            <div class="title">' . htmlspecialchars($menuName) . '</div>
            <div class="cta-button pointer">Shop Now</div>
          </div>
        </div>';
}

// HTML structure after the menus
echo '  </div>
  </section>';
    
    
}



?>
