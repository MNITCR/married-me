document
  .getElementById("create-location")
  .addEventListener("click", function () {
    var locationName = document.getElementById("location").value;

    // Check if the locationName is not empty
    if (locationName.trim() === "") {
      showAndHideMessage("resultF", "សូមបញ្ចូលឈ្មោះទីតាំង។");
      return;
    }

    // Send an AJAX request to create_location.php
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../components/php/createLocation.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Display the result in the 'result' div
        // Parse the JSON response
        var response = JSON.parse(xhr.responseText);

        // Check if the response indicates success
        if (response.success) {
          showAndHideMessage("resultS", response.message);
        } else {
          showAndHideMessage("resultF", response.message);
        }
      }
    };
    xhr.send("location=" + encodeURIComponent(locationName));
  });

function showAndHideMessage(elementId, message) {
  // Display the message
  document.getElementById(elementId).innerHTML = message;

  // Hide the message after 2 seconds (2000 milliseconds)
  setTimeout(function () {
    document.getElementById(elementId).innerHTML = "";
  }, 2000);
}
