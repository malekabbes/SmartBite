var bmi = 0;

const calculateBMI = () => {
  var weight = parseFloat(document.getElementById("weight").value);
  var height = parseFloat(document.getElementById("height").value);

  bmi = (weight / ((height / 100) * (height / 100))).toFixed(2);

  var resultDiv = document.getElementById("result");
  resultDiv.innerHTML = "Your BMI is: " + bmi + "<br>";
  resultDiv.style.display = "block";
  resultDiv.style.backgroundColor = "lightgreen";

  if (bmi < 18.5) {
    resultDiv.innerHTML += "You are considered underweight. Eat a bit more!";
  } else if (bmi >= 18.5 && bmi < 24.9) {
    resultDiv.innerHTML +=
      "Congratulations! You are in a healthy weight range.";
  } else {
    resultDiv.innerHTML +=
      "You are considered overweight. Consider consulting with a healthcare professional.";
  }
};

const calculateNutritionalInfo = (bmi) => {
  let info = {
    calories: 0,
    carbs: 0, // in grams
    fats: 0, // in grams
    proteins: 0, // in grams
  };

  if (bmi < 18.5) {
    // Example values, adjust as needed
    info.calories = 2500;
    info.carbs = 300;
    info.fats = 70;
    info.proteins = 90;
  } else if (bmi >= 18.5 && bmi < 24.9) {
    info.calories = 2200;
    info.carbs = 250;
    info.fats = 60;
    info.proteins = 80;
  } else {
    info.calories = 2000;
    info.carbs = 200;
    info.fats = 50;
    info.proteins = 70;
  }

  return info;
};

const generateMenu = () => {
  var weight = parseFloat(document.getElementById("weight").value);
  var height = parseFloat(document.getElementById("height").value);
  var resultDiv = document.getElementById("result");
  var loading = document.getElementById("loader");

  if (bmi === 0) {
    resultDiv.innerHTML = "";
    resultDiv.style.display = "block";
    resultDiv.style.backgroundColor = "red";
    resultDiv.innerHTML += "Calculate your BMI First !";
  } else {
    console.log({ bmi });
    const nutritionInfo = calculateNutritionalInfo(bmi);
    const calories = document.getElementById("calories");
    calories.innerHTML = nutritionInfo.calories;
    const fat = document.getElementById("fat");
    fat.innerHTML = nutritionInfo.fats;
    const carbs = document.getElementById("carbs");
    carbs.innerHTML = nutritionInfo.carbs;
    const proteins = document.getElementById("proteins");
    proteins.innerHTML = nutritionInfo.proteins;
    loading.style.display = "block";

    setTimeout(() => {
      loading.style.display = "none";
      if (bmi < 18.5) {
        // Underweight
        resultDiv.innerHTML = `
                <p>Your BMI is ${bmi}. Here's a suggested menu:</p>
              `;
      } else if (bmi >= 18.5 && bmi <= 24.9) {
        // Normal weight
        resultDiv.innerHTML = `
                <p>Your BMI is ${bmi}. Here's a suggested menu:</p>
                `;
      } else {
        // Overweight
        resultDiv.innerHTML = `
                <p>Your BMI is ${bmi}. Here's a suggested menu:</p>
                `;
      }
    }, 4000);
    const requestData = {
      calories: nutritionInfo.calories,
      carbs: nutritionInfo.carbs,
      fats: nutritionInfo.fats,
      proteins: nutritionInfo.proteins,
    };
    const displayMenus = document.getElementById("result");
    // Prepare data to send in AJAX request
    const data = {
      model: "text-davinci-003",
      prompt: `GIVE ME A 3 menus that contains "calories": ${requestData.calories}, "carbs": ${requestData.carbs}, "fats": ${requestData.fats}, "proteins": ${requestData.proteins}. Give me only the menus names without explanation. Return it as a JSON.`,
      max_tokens: 150,
    };

    // Start the loader
    loading.style.display = "block";
    $.ajax({
      type: "POST",
      url: "generate_menus.php",
      data: JSON.stringify(data),
      contentType: "application/json",
      dataType: "json",
      success: function (response) {
        // Stop the loader
        loading.style.display = "none";
      },
      error: function (error) {
        // Stop the loader in case of an error
        loading.style.display = "none";
      },
    });
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        // Stop the loader
        loading.style.display = "none";

        // Check if the request was successful
        if (xhr.status === 200) {
          // Parse the JSON response
          var response = xhr.responseText;
          console.log({ response });
          document.getElementById("generatedmenus").innerHTML = response;
          return;
        } else {
          console.error("Error: ", xhr.statusText);
        }
      }
    };
    xhr.open("POST", "generate_menus.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    // Send the request with the data
    xhr.send(JSON.stringify(data));
    loading.style.display = "block";
  }
};
