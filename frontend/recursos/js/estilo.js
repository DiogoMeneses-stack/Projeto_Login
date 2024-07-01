const form = document.getElementById("form");
const email = document.getElementByClass("email")
const password = document.getElementByClass("password")
const passwordConfirmation = document.getElementById("password-confirmation");

function errorInput(input, message){
    const formItem = input.parentElement;
    const textMessage = formItem.querySelector("a")
  
    textMessage.innerText = message;
  
    formItem.className = "form-content error"
  
  }