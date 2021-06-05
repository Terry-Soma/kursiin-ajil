const form = document.getElementById("burtgel__form"),
    submitBtn = document.getElementById("submit");
form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting 
}
submitBtn.onclick = () => {

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/php/insertBurtgel.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == "success") {

                    location.href = "users.php";

                } else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }

            }
        }
    };

    // sen the form data through ajax to php

    let formData = new FormData(form);
    xhr.send(formData); //form data to php
};