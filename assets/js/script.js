// Get the input fields and the calculate button
const weightInput = document.getElementById("weightInput");
const heightInput = document.getElementById("heightInput");
const calculateBtn = document.getElementById("calculateBtn");
const resultInput = document.getElementById("result");

// Add an event listener to the calculate button
calculateBtn.addEventListener("click", function () {
  // Get the weight and height values from the input fields
  const weight = parseFloat(weightInput.value);
  const height = parseFloat(heightInput.value) / 100; // Convert height from cm to m

  // Calculate the BMI
  const bmi = weight / (height * height);

  // Display the result
  resultInput.value = bmi.toFixed(2); // Round to 2 decimal places
});
