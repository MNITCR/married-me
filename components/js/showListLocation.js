document.getElementById("location").addEventListener("input", function () {
  var input = this.value.toUpperCase(); // Convert input to uppercase for case-insensitive matching
  var list = document.getElementById("listLocation");

  // Make an AJAX request to fetch data from showlocation.php
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "../components/php/showlocation.php", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);
      updateLocationList(response, input);
    }
  };
  xhr.send();
});

function updateLocationList(data, input) {
  var list = document.getElementById("listLocation");
  var items = list.getElementsByTagName("li");
  var html = "";

  // Loop through the data and create HTML for matching items
  var found = false;
  for (var i = 0; i < data.length; i++) {
    var itemText = data[i].village.toUpperCase();
    var index = itemText.indexOf(input);
    if (index > -1) {
      var highlightedText =
        data[i].village.substring(0, index) +
        "<b class='text-gray-300'>" +
        data[i].village.substring(index, index + input.length) +
        "</b>" +
        data[i].village.substring(index + input.length);

      html +=
        '<li class="cursor-pointer list-none p-2 dark:hover:bg-gray-700 overflow-hidden rounded" style="white-space: nowrap;font-family: Khmer OS Battambang;font-size: 14px;">' +
        highlightedText +
        "</li>";
      found = true;
    }
  }

  // Update the list HTML
  list.innerHTML = html;

  // Show/hide the list based on whether there are matching items
  list.style.display = input && found ? "" : "none";

  // Display "Not found" message if no matching items are found
  if (!found) {
    list.innerHTML =
      '<li class="not-found list-none p-2 text-red-600 dark:hover:bg-red-200 overflow-hidden rounded transition ease-in-out duration-300" style="white-space: nowrap;font-size: 14px;">' +
      "មិនមានទិន្នន័យទេ" +
      "</li>";
    list.style.display = "";
  }
}

// Add click event listener to each list item
document
  .getElementById("listLocation")
  .addEventListener("click", function (event) {
    if (
      event.target.tagName === "LI" &&
      !event.target.classList.contains("not-found")
    ) {
      document.getElementById("location").value = event.target.innerText.trim();
      document.getElementById("listLocation").style.display = "none";
    }
  });
