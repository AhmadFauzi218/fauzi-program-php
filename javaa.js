function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("G ada");
        return false;
    }
}
