const KHName = document.getElementById("fullnameKhmer");
const EGName = document.getElementById("fullnameEnglish");
const Phone = document.getElementById("phone");
const MoneyRiel = document.getElementById("moneyRiel");
const MoneyDolar = document.getElementById("moneyDolar");
const Location = document.getElementById("location");
const BtnLC = document.getElementById("create-location");
const Command = document.getElementById("command");
const TxtSuccess = document.getElementById("text-success");
const TxtFail = document.getElementById("text-not-success");

// element error
const KHError = document.getElementById("KHError");
const EGError = document.getElementById("EGError");
const PHError = document.getElementById("PHError");
const MRError = document.getElementById("MRError");
const LCError = document.getElementById("LCError");

// button submit
const buttons = document.querySelectorAll(".sub-validate");

// check if when start program if location is null disable button create
document.addEventListener("DOMContentLoaded", () => {
  if (Location.value === "" || Location.value === null) {
    BtnLC.disabled = true;
    BtnLC.classList.add("cursor-not-allowed");
  } else {
    BtnLC.disabled = false;
    BtnLC.classList.remove("cursor-not-allowed");
  }

  updateSubmitButtonState();
});

// Add input event listeners for real-time validation
KHName.addEventListener("input", validateKhmerName);
EGName.addEventListener("input", validateEnglishName);
Phone.addEventListener("input", validatePhoneNumber);
MoneyRiel.addEventListener("input", validateMoney);
Location.addEventListener("input", validateLocation);

// ======================>Start Function handle to all input <======================

// Function to handle class changes when value is null
function IfValueNull(inputElement) {
  inputElement.classList.remove(
    "border",
    "ring-red-300",
    "border-red-500",
    "text-red-900",
    "focus:ring-red-500",
    "focus:border-red-500",
    "dark:text-red-500",
    "dark:placeholder-red-500",
    "focus:ring-red-600",
    "outline-red-300"
  );
  inputElement.classList.add(
    "text-gray-900",
    "border-0",
    "ring-gray-300",
    "placeholder:text-gray-400",
    "focus:ring-2",
    "focus:ring-inset",
    "focus:ring-indigo-600",
    "sm:text-sm",
    "sm:leading-6"
  );
}

// Function to handle class changes when value is not correct with validation
function handleIsValidation(inputElement) {
  inputElement.classList.remove(
    "text-gray-900",
    "border-0",
    "ring-gray-300",
    "placeholder:text-gray-400",
    "focus:ring-indigo-600",
    "sm:text-sm",
    "sm:leading-6",
    "outline-red-300"
  );
  inputElement.classList.add(
    "w-full",
    "border",
    "ring-red-300",
    "border-red-500",
    "text-red-900",
    "focus:ring-red-500",
    "focus:border-red-500",
    "dark:text-red-500",
    "dark:placeholder-red-500",
    "outline-red-300"
  );
}

// Function handle class when not error
function handleIFNotError(inputElement) {
  inputElement.classList.add(
    "w-full",
    "text-gray-900",
    "ring-gray-300",
    "placeholder:text-gray-400",
    "focus:ring-indigo-600",
    "sm:text-sm",
    "sm:leading-6"
  );
  inputElement.classList.remove(
    "ring-red-300",
    "border-red-500",
    "text-red-900",
    "focus:ring-red-500",
    "focus:border-red-500",
    "dark:text-red-500",
    "dark:placeholder-red-500",
    "outline-red-300"
  );
}

// Function handle statues button
function updateSubmitButtonState() {
  if (KHName.value === "" || Location.value === "" || MoneyRiel.value === "") {
    buttons.forEach(function (button) {
      button.classList.remove("bg-indigo-600");
      button.classList.add(
        "cursor-not-allowed",
        "bg-indigo-500",
        "transition-all"
      );
      button.disabled = true;
    });
  } else {
    buttons.forEach(function (button) {
      button.classList.add("bg-indigo-600", "transition-all");
      button.classList.remove("cursor-not-allowed", "bg-indigo-500");
      button.disabled = false;
    });
  }

  if (Location.value === "") {
    BtnLC.classList.remove("bg-indigo-600");
    BtnLC.classList.add("bg-indigo-500", "transition-all");
  } else {
    BtnLC.classList.remove("bg-indigo-500");
    BtnLC.classList.add("transition-all", "bg-indigo-600");
  }
}

// ======================>End Function handle to all input <======================

// =====================> Start Validation all input <=====================

// validation on name khmer
function validateKhmerName() {
  const value = KHName.value.trim();
  const khmerRegex = /^[\u1780-\u17FF\s]+$/;

  if (value === "") {
    IfValueNull(KHName);
    KHError.classList.add("hidden");
  } else if (!khmerRegex.test(value)) {
    handleIsValidation(KHName);
    KHError.classList.remove("hidden");
  } else {
    handleIFNotError(KHName);
    KHError.classList.add("hidden");
    updateSubmitButtonState();
  }
}

// validation on name english
function validateEnglishName() {
  const value = EGName.value.trim();
  const englishRegex = /^[a-zA-Z\s]+$/; // Regular expression for English characters

  if (value === "") {
    IfValueNull(EGName);
    EGError.classList.add("hidden");
  } else if (!englishRegex.test(value)) {
    handleIsValidation(EGName);
    EGError.classList.remove("hidden");
  } else {
    handleIFNotError(EGName);
    EGError.classList.add("hidden");
  }
}

// validation on phone number
function validatePhoneNumber() {
  const value = Phone.value.trim();
  const phoneRegex = /^\d+$/; // Only allow numeric values

  if (value === "") {
    IfValueNull(Phone);
    PHError.classList.add("hidden");
  } else if (value.length > 10 || !phoneRegex.test(value)) {
    handleIsValidation(Phone);
    PHError.classList.remove("hidden");
  } else {
    handleIFNotError(Phone);
    PHError.classList.add("hidden");
  }
}

// validation on Money
function validateMoney() {
  const value = MoneyRiel.value.trim();
  const moneyRegex = /^\d+$/; // Only allow numeric values

  if (value === "") {
    IfValueNull(MoneyRiel);
    MRError.classList.add("hidden");
  } else if (!moneyRegex.test(value)) {
    handleIsValidation(MoneyRiel);
    MRError.classList.remove("hidden");
  } else {
    handleIFNotError(MoneyRiel);
    MRError.classList.add("hidden");
    updateSubmitButtonState();
  }
}

// validation on Location
function validateLocation() {
  const value = Location.value.trim();
  const textOnlyRegex = /^[\u1780-\u17FF\s]+$/;

  if (value === "") {
    IfValueNull(Location);
    LCError.classList.add("hidden");
    BtnLC.disabled = true;
    BtnLC.classList.remove("bg-indigo-600");
    BtnLC.classList.add(
      "cursor-not-allowed",
      "transition-all",
      "bg-indigo-500"
    );
    updateSubmitButtonState();
  } else if (!textOnlyRegex.test(value)) {
    handleIsValidation(Location);
    LCError.classList.remove("hidden");
    BtnLC.disabled = true;
    BtnLC.classList.remove("bg-indigo-600");
    BtnLC.classList.add(
      "cursor-not-allowed",
      "transition-all",
      "bg-indigo-500"
    );
  } else {
    handleIFNotError(Location);
    LCError.classList.add("hidden");
    BtnLC.disabled = false;
    BtnLC.classList.remove("cursor-not-allowed");
    updateSubmitButtonState();
  }
}

// =====================> End Validation all input <=====================

// =====================> Start Check if all input is valid <=====================

buttons.forEach(function (button) {
  button.addEventListener("click", function (event) {
    // Prevent the form from submitting initially
    event.preventDefault();

    // Check which button was clicked
    const isSubmitBoy = event.target.name === "submit_boy";

    // If there are no errors, submit the form
    if (
      KHError.classList.contains("hidden") &&
      LCError.classList.contains("hidden") &&
      EGError.classList.contains("hidden") &&
      PHError.classList.contains("hidden") &&
      MRError.classList.contains("hidden")
    ) {
      // Create an object with the data to be sent
      const formData = {
        submit_boy: isSubmitBoy,
        nameKhmer: KHName.value.trim(),
        nameEnglish: EGName.value.trim(),
        phone: Phone.value.trim(),
        moneyRiel: MoneyRiel.value.trim(),
        moneyDolar: MoneyDolar.value.trim(),
        location: Location.value.trim(),
        command: Command.value.trim(),
      };

      // Send an AJAX request to the server
      const xhr = new XMLHttpRequest();
      xhr.open(
        "POST",
        isSubmitBoy
          ? "../components/php/createboy.php"
          : "../components/php/creategirl.php",
        true
      );
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
          if (xhr.status === 200) {
            if (xhr.responseText === "បញ្ជូនទិន្នន័យដោយជោគជ័យ!!") {
              showSuccessAlert();
              TxtSuccess.innerHTML = xhr.responseText;
            } else if (xhr.responseText === "ទិន្នន័យនេះមានរួចហើយ។") {
              showNotSuccessAlert();
              TxtFail.innerHTML = xhr.responseText;
            } else {
              showNotSuccessAlert();
              TxtFail.innerHTML = xhr.responseText;
            }
          } else {
            showNotSuccessAlert();
            TxtFail.innerHTML = xhr.responseText;
          }
        }
      };

      // Convert formData to URL-encoded format
      const urlEncodedData = Object.keys(formData)
        .map(
          (key) =>
            encodeURIComponent(key) + "=" + encodeURIComponent(formData[key])
        )
        .join("&");

      xhr.send(urlEncodedData);
    } else {
      showNotSuccessAlert();
      TxtFail.innerHTML = "កំហុសក្នុងការដាក់ស្នើ!!";
    }
  });
});

// =====================> End Check if all input is valid <=====================
