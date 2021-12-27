function gosubmit(event){
    let form = document.getElementById("form");
    let name = form.nama.value;
    let email = form.email.value;
    let waktu = form.time.value;
    let tujuan = form.tujuan.value;
    let tiket = form.tiket.value;
    let name_blank = document.getElementById("name_blank");
    let max_character = document.getElementById("max_character");
    let email_blank = document.getElementById("email_blank");
    let invalid_email = document.getElementById("invalid_email");
    let time_blank = document.getElementById("time_blank");
    let tujuan_blank = document.getElementById("tujuan_blank");
    let minmax_ticket = document.getElementById("minmax_ticket");
    
    const regex_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const event_default = event.preventDefault();
    const string = /abcdefghijklmnopqrstuvwxyz/;
    // let sukses = alert("Pemesanan Berhasil!");


    if (name == ""){
        alert("Nama Harus Diisi!")
        name_blank.hidden = false;
        event_default;
    }
    if (name.length >= 30){
        max_character.hidden = false;
        event_default;
    }
    if (email == ""){
        alert("Email Harus Diisi!")
        email_blank.hidden = false;
    }
    if (!(regex_email.test(String(email)))){
        invalid_email.hidden=false;
    }
    if (waktu == ""){
        alert("Jam Harus Diisi!")
        time_blank.hidden = false;
        event_default;
    }
    if (tujuan == ""){
        alert("Tujuan Harus Diisi!")
        tujuan_blank.hidden = false;
        event_default;
    }
    if (tiket == ""){
        alert("Tiket tidak boleh Kosong");
    }
    if (parseInt(tiket) < 0 || parseInt(tiket) > 10){
        minmax_ticket.hidden = false;
        alert("Maksimum 10 Ticket");
    }
   
}