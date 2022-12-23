const celia = alert;
const IndexAlert = alert;
const ErrorAlert = "!!!! ALERT welcome ERROR !!!!";


if (celia == alert || IndexAlert == alert) {
    alert("Bienvenue sur Celia-css.");
} else if (celia == alert && IndexAlert == alert) {
    alert("Bienvenue sur Celia-css.");
} else if (celia != alert || IndexAlert != alert) {
    console.log(ErrorAlert);
} else if (celia != alert && IndexAlert != alert) {
    console.log(ErrorAlert);
} else {
    alert("Bienvenue sur Celia-css.")
    console.log(ErrorAlert.toUpperCase());
}