const form = document.querySelector(".login form"),
    continueBtn = form.querySelector(".button input"),
    errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefalut(); //prevent form from submitting
}

continueBtn.onclick = () => {
    //let's start ajax
    let xhr = new XMLHttpRequest(); //CREATING XML OBJECT
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    console.log(data);
                    if (data == "success") {
                        header(Location = "users.php");

                    } else {
                        errorText.textContent = data;
                        errorText.style.display = "block";

                    }
                }
            }


        }
        //sending form data through ajax to php 
    let formData = new FormData(form); //creating new formdata object
    xhr.send(formData); //sending form data to php
}