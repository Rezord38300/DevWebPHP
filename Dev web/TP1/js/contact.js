const m = document.getElementById("message_complet")
const email = document.getElementById("email")
const nom = document.getElementById("surname name")
const subject = document.getElementById("subject")
const content = document.getElementById("content")
const button = document.getElementById("submit")

// document.getElementById("messsage_complet").style.display = 'none';
function mafonction(){
    if(email.value === "") {
        m.style.display = "none"
    } 
    if(email.value != "") {
        m.style.display = "block"
    }
    console.log("test")
    if(email.value === "" && nom.value === "" && subject.value === "" && content.value === ""){
        button.disabled = true
    }
    else{
        button.disabled = false
    }
}

setInterval(mafonction, 1000)