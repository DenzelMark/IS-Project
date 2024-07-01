const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault();//preventing form from submitting
}

continueBtn.onclick = ()=>{
    //lets start ajax
    let xhr = new XMLHttpRequest();// creating a new XMLHttpRequest object
    xhr.open("POST", "php/signup.php", true); 
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          console.log(data);
        }
      }
    }
    //we have to send the data through ajax to php
    let formData = new FormData(form);//creating new formData object
    xhr.send(formData);//sending the form data to php
}