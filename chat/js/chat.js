const form = document.querySelector(".typing-area"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button"),
    chatBox = document.querySelector(".chat-box");
form.onsubmit = (e) => {
    e.preventDefault(); //prevent form from submitting
};
sendBtn.onclick = () => {
    //let's start ajax
    let xhr = new XMLHttpRequest(); //CREATING XML OBJECT
    xhr.open("post", "php/insert-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            let data = xhr.response;
            if (xhr.status === 200) {
                inputField.value = ""; //once message inserted into database leave the blank
                scrollToBottom();
            }
        } else {
            console.log(xhr);
        }
    };
    //sending form data through ajax to php
    let formData = new FormData(form); //creating new formdata object
    xhr.send(formData); //sending form data to php

    chatBox.onmouseenter = () => {
        chatBox.classList.add("active");
    }
    chatBox.onmouseleave = () => {
        chatBox.classList.remove("active");
    }
};



//making chat dynamic with inserted messages from database
setInterval(() => {
    //let's start ajax
    let xhr = new XMLHttpRequest(); //CREATING XML OBJECT
    xhr.open("post", "php/get-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                if (!chatBox.classList.contains("ACTIVE")) {
                    scrollToBottom();
                }
            }
        }
    };
    //sending form data through ajax to php
    let formData = new FormData(form); //creating new formdata object
    xhr.send(formData); //sending form data to php;
}, 500); // this function will run frequently after 500ms

//scroll

function scrollToBottom() {
    chatBox.scrollToBottom = chatBox.scrollHeight;
}