let myform = document.querySelector('.myform1'); // Changed from '#myform1' to '.myform1' to select by class
let bouton = document.querySelector('#bouton1');

myform.addEventListener('submit', function (event) {
    event.preventDefault();
    let nom = document.querySelector('#Fname');
    let email = document.querySelector('#email');
    let date = document.querySelector('#date');
    let Pnumber = document.querySelector('#Pnumber');
    let nom_err1 = document.querySelector('.err1');
    let email_err2 = document.querySelector('.err2');
    let date_err3 = document.querySelector('.err3');
    let Pnumber_err4 = document.querySelector('.err4');

    let errorFlag = false; // Initialize an error flag to check if any field is empty

    if (nom.value === '') {
        nom_err1.innerHTML = 'This field is required.<br>';
        nom_err1.style.color = 'red';
        errorFlag = true; // Set error flag to true if the field is empty
    } else {
        nom_err1.innerHTML = ''; // Clear the error message if the field is filled
    }

    if (email.value === '') {
        email_err2.innerHTML = 'This field is required.<br>';
        email_err2.style.color = 'red';
        errorFlag = true; // Set error flag to true if the field is empty
    } else {
        email_err2.innerHTML = ''; // Clear the error message if the field is filled
    }

    if (date.value === '') {
        date_err3.innerHTML = 'This field is required.<br>';
        date_err3.style.color = 'red';
        errorFlag = true; // Set error flag to true if the field is empty
    } else {
        date_err3.innerHTML = ''; // Clear the error message if the field is filled
    }

    if (Pnumber.value === '') {
        Pnumber_err4.innerHTML = 'This field is required.<br>';
        Pnumber_err4.style.color = 'red';
        errorFlag = true; // Set error flag to true if the field is empty
    } else {
        Pnumber_err4.innerHTML = ''; // Clear the error message if the field is filled
    }

    if (!errorFlag) {
        myform.submit(); // If there are no errors, submit the form
    }
});
