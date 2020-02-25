// Get Forms
const mainForm = document.forms["mainForm"];

function verify() {
  const hasErrors = [];

  // Here lies all the regex used for this form
  const isAlpha = /^[\wÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'’\s-]+$/i;
  const isDate = /(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d/g;
  const isDangerous = /[<>&]/g;
  const isEmail = /[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/g;
  const isPostal = /^\d{2}\s?\d{3}$/g;

  // Gets all the error elements in order to show the elements
  const addressError = document.getElementById("addressError");
  const cguError = document.getElementById("cguError");
  const cityError = document.getElementById("cityError");
  const dateError = document.getElementById("dateError");
  const emailError = document.getElementById("emailError");
  const firstNameError = document.getElementById("firstNameError");
  const genderError = document.getElementById("genderError");
  const nameError = document.getElementById("nameError");
  const postalError = document.getElementById("postalError");
  const questionError = document.getElementById("questionError");

  // Gets all the forms element values
  const address = document.getElementById("address").value;
  const cgu = document.getElementById("cgu").checked;
  const city = document.getElementById("city").value;
  const date = document.getElementById("date").value;
  const email = document.getElementById("email").value;
  const firstName = document.getElementById("firstName").value;
  const gender1 = document.getElementById("gender1").checked;
  const gender2 = document.getElementById("gender2").checked;
  const name = document.getElementById("name").value;
  const postal = document.getElementById("postal").value;
  const question = document.getElementById("question").value;

  // Checks is name is valid and if it's not empty
  if (isAlpha.test(name) === false && name !== "") {
    nameError.textContent = "Le nom n'est pas valide.";
    nameError.style.display = "inline";
    hasErrors[0] = true;
  } else if (name === "") {
    nameError.textContent = "Le nom est requis.";
    nameError.style.display = "inline";
    hasErrors[0] = true;
  } else {
    nameError.style.display = "none";
    hasErrors[0] = false;
  }

  // Checks if firstName is valid and if it's not empty
  if (isAlpha.test(firstName) === false && firstName !== "") {
    firstNameError.textContent = "Le prénom n'est pas valide.";
    firstNameError.style.display = "inline";
    hasErrors[1] = true;
  } else if (firstName === "") {
    firstNameError.textContent = "Le prénom est requis.";
    firstNameError.style.display = "inline";
    hasErrors[1] = true;
  } else {
    firstNameError.style.display = "none";
    hasErrors[1] = false;
  }

  // Checks if postal is valid and if it's not empty
  if (isPostal.test(postal) === false && postal !== "") {
    postalError.textContent = "Le code postal n'est pas valide.";
    postalError.style.display = "inline";
    hasErrors[2] = true;
  } else {
    postalError.style.display = "none";
    hasErrors[2] = false;
  }

  // Checks if the email is valid and if it's not empty
  if (isEmail.test(email) === false && email !== "") {
    emailError.textContent = "L'email n'est pas valide.";
    emailError.style.display = "inline";
    hasErrors[3] = true;
  } else if (email === "") {
    emailError.textContent = "L'email est requis.";
    emailError.style.display = "inline";
    hasErrors[3] = true;
  } else {
    emailError.style.display = "none";
    hasErrors[3] = false;
  }

  // Checks if the radio buttons aren't checked
  if (![gender1, gender2].includes(true)) {
    genderError.textContent = "Un genre est requis.";
    genderError.style.display = "inline";
    hasErrors[4] = true;
  } else {
    genderError.style.display = "none";
    hasErrors[4] = false;
  }

  // Checks if the date is valid and not empty
  if (isDate.test(date) === false && date !== "") {
    dateError.textContent = "La date est invalide.";
    dateError.style.display = "inline";
    hasErrors[5] = true;
  } else if (date === "") {
    dateError.textContent = "La date est requise.";
    dateError.style.display = "inline";
    hasErrors[5] = true;
  } else {
    dateError.style.display = "none";
    hasErrors[5] = false;
  }

  // Checks if address is valid
  if (isAlpha.test(address) === false && address !== "") {
    addressError.textContent = "L'adresse n'est pas valide.";
    addressError.style.display = "inline";
    hasErrors[6] = true;
  } else {
    addressError.style.display = "none";
    hasErrors[6] = false;
  }

  // Checks if city is valid and not empty
  if (isAlpha.test(city) === false && city !== "") {
    cityError.textContent = "La ville n'est pas valide.";
    cityError.style.display = "inline";
    hasErrors[7] = true;
  } else {
    cityError.style.display = "none";
    hasErrors[7] = false;
  }

  // Checks if question is empty
  if (question === "") {
    questionError.textContent = "La question est requise.";
    questionError.style.display = "inline";
    hasErrors[8] = true;
  } else if (isDangerous.test(question)) {
    questionError.textContent = "[&;<;>] ne sont pas acceptés.";
    questionError.style.display = "inline";
    hasErrors[8] = true;
  } else {
    questionError.style.display = "none";
    hasErrors[8] = false;
  }

  // Checks if the cgu aren't accepted
  if (!cgu) {
    cguError.textContent =
      "Vous devez accepter le traitement de ce formulaire.";
    cguError.style.display = "inline";
    hasErrors[9] = true;
  } else {
    cguError.style.display = "none";
    hasErrors[9] = false;
  }

  return hasErrors;
}

mainForm.addEventListener("submit", function(e) {
  // Prevents the user from submitting the form
  e.preventDefault();

  // We verify the user input
  const hasErrors = verify();

  // If the form is valid we then submit it
  if (!hasErrors.includes(true)) {
    mainForm.submit();
  }
});
