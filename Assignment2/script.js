$(document).ready(function () {

    $("#regForm").submit(function (e) {

        let name = $("#name").val().trim();
        let email = $("#email").val().trim();
        let phone = $("#phone").val().trim();
        let course = $("#course").val();

        let error = "";

        if (name === "") error += "Name is required.<br>";
        if (email === "") error += "Email is required.<br>";
        if (phone === "") error += "Phone number is required.<br>";
        if (course === "") error += "Please select a course.<br>";

        if (error !== "") {
            e.preventDefault();
            $("#errorBox").html(error);
        }
    });
});
