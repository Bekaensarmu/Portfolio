

let fullName = {
    firstName: 'Dikcheni',
    lastName: 'Ensarmun'
}


alert(fullName.firstName);

let personDetails = {
    fullName: {
        firstName: 'Dikcheni',
        lastName: 'Ensarmun'
    },
    alertMessage: function(message) {
         alert(message);
    }
} 

personDetails.alertMessage('Hello World!');

let submitButton = document.querySelector('#submit-button');
   console.log(submitButton);

   function clickListener(event){
   console.log('Button clicked');
}


  
function clickListener(event){
    event.preventDefault();
    console.log('Button clicked');
}




   