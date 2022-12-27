function validateData() {
    var username = document.getElementById("username")
    var password = document.getElementById("password")

    if(username.value.length < 5) alert("Username must be 5 characters or more")
    else if(password.value.length < 8) alert("Password length must be 8 characters or more")
    else alert("Data submitted successfully")
}