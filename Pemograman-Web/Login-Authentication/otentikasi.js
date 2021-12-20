function otentikasi(){
    let login = document.getElementById("login");
    let username = login.username.value;
    let password = login.password.value;

    if(username == "ahmad2017" && password == "integrity"){
        location.href = "loginsukses.html";
        alert("Login Sukses");
        return false;
    }else{
        alert("Login Gagal");
    }
}