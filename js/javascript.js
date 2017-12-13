/*alert("javascript loaded");*/

var currentDate = new Date();

$(document).ready(function () {
    /*alert("ready function loaded");*/
    document.getElementById("date").innerHTML = "Copyright &copy; Aubrey J Cook " + currentDate.getFullYear();
});
