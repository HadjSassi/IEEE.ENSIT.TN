let myform=document.querySelector('#myform1');
let bouton=document.querySelector('#bouton1');


myform.addEventListener('submit',function(event){
    event.preventDefault();
    let nom=document.querySelector('#Fname');
    let nom_err1=document.querySelector('.err1');
    if(nom.value==''){
        
        nom_err1.innerHTML='This field is required.';
        nom_err1.style.color='red';
        myform.style.height="35rem";
    }
   

    


 

});