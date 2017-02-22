
function changeBorderColor (input) {
    if ( document.getElementById(input).value != "") {
        document.getElementById(input).style.border = "solid 1px #e54e68";
    } else {
        document.getElementById(input).style.border = "solid 1px #d0d0d0"
    }
}