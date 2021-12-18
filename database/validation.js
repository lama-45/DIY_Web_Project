//	Mandatory fields validation
function validateForm() {
    if (document.getElementById('fName').value == "") {
        alert("First Name must be filled out");
        return false;
    } else if (document.getElementById("lName").value == "") {
        alert("Last Name must be filled out");
        return false;
    } else if (document.getElementById("Country").value == "") {
        alert("Country must be filled out");
        return false;
    } else if (document.getElementById("city").value == "") {
        alert("City must be filled out");
        return false;
    } else if (document.getElementById("street1").value == "") {
        alert("Street Address must be filled out");
        return false;
    } else if (document.getElementById("email").value == "") {
        alert("Email must be filled out");
        return false;
    } else if (document.getElementById("phone").value == "") {
        alert("Phone must be filled out");
        return false;
    } else if (document.getElementById('yes').checked == false && document.getElementById('no').checked == false) {

        alert("You have to choose Would You Recommend us or not!");
        return false;
    } else if (document.getElementById('Checkbox1').checked == false && document.getElementById('Checkbox2').checked == false && document.getElementById('Checkbox3').checked == false) {

        alert("You have to choose at least one of what You Like About The Website!");
        return false;
    } else if (document.getElementById("textarea").value.trim().length < 1) {
        alert("Please provide your Feedback...");
        return false;
    }

    // check for invalid data
    else if (!/^[a-zA-Z]*$/g.test(document.getElementById("fName").value)) {
        alert('Invalid characters First Name must Contain letters only! ');

        return false;
    } else if (!/^[a-zA-Z]*$/g.test(document.getElementById("lName").value)) {
        alert('Invalid characters Last Name must Contain letters only! ');
        return false;
    } else if (!/^[a-zA-Z]*$/g.test(document.getElementById("Country").value.replace(/\s/g, ''))) {
        alert('Invalid characters Country must Contain letters only! ');
        return false;
    } else if (!/^[a-zA-Z]*$/g.test(document.getElementById("city").value.replace(/\s/g, ''))) {
        alert('Invalid characters City must Contain letters only! ');
        return false;
    } else if (document.getElementById("email").value.match(/^[^ ]+@[^ ]+\.[a-z]{2,3}$/) == null) {
        alert('Email must be correct!');
        return false;
    } else if (document.getElementById("phone").value.length != 10) {
        alert("Phone must be 10 numbers");
        return false;
    } else if (isNaN(document.getElementById("phone").value)) {
        alert("Phone Number Must Contain Numeric values only");
        return false;
    }

}