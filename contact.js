let myform=document.querySelector('#myform');
let bouton=document.querySelector('#bouton');


myform.addEventListener('submit',function(event){
    event.preventDefault();
    let nom=document.querySelector('#name');
    let nom_err1=document.querySelector('.err1');
    if(nom.value==''){
        
        nom_err1.innerHTML='This field is required.';
        nom_err1.style.color='red';
        myform.style.height="35rem";
    }
   

    let email=document.querySelector('#email');
    let nom_err2=document.querySelector('.err2');

    if(email.value==''){
        nom_err2.innerHTML='This field is required.';
        nom_err2.style.color='red';
        myform.style.height="36rem";
    }

    let subject=document.querySelector('#subject');
    let nom_err3=document.querySelector('.err3');

    if(subject.value==''){
        nom_err3.innerHTML='This field is required.';
        nom_err3.style.color='red';
        myform.style.height="36rem";
    }


 

});