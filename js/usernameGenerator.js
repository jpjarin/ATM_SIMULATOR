function randomUsername(length) {
    var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOP1234567890";
    var uname = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        uname += chars.charAt(i);
    }
    return uname;
}

function generate() {
    myform.username.value = randomUsername(myform.length.value);
}