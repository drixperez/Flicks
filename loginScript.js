document.write("COLD")

function retreiveLoginParams()
{
    var twoDArray = [
        ["yuh", "yuh"],
        ["", ""]
    ]
    var emailInput = document.getElementById("email").value;
    var passwordInput = document.getElementById("password").value;
    console.log("email inputted is", emailInput);
    console.log("password inputted it", passwordInput);
    if (emailInput === "Big ghilou"){
        window.alert("Correct username")
    }
    else{
        window.alert("INcorrect username")
    }
}