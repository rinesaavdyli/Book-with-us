
/**Shrink header on scroll */
window.onscroll = function () { scrollShkrink() };

function scrollShkrink() {
  if (document.body.scroll > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById('scroll-fixed').style.width = '100%';
    document.getElementById('scroll-fixed').style.position = 'fixed';
    document.getElementById('scroll-fixed').style.background = 'rgba(124, 3, 3, 0.897)';
    document.getElementById('logo').style.marginTop = '3px';
    document.getElementById('search').style.marginTop = '-13px';
  }
  else {
    document.getElementById('scroll-fixed').style.margin = 'auto';
    document.getElementById('scroll-fixed').style.position = 'relative';
    document.getElementById('scroll').style.margin = 'auto';
    document.getElementById('scroll').style.position = 'relative';
    document.getElementById('logo').style.marginTop = '20px';
    document.getElementById('search').style.marginTop = '10px';
  }
}

/**Slider */
var slideIndex = 1;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  slides[slideIndex - 1].style.display = 'block';
  setTimeout(showSlides, 2000);
}
/**End of Slider */



/*=== Login/Register ====*/
document.getElementById('submit').addEventListener('click',function(event){
    event.preventDefault();
    myFunction();
})

function myFunction(){
    console.log('test');
}

function changeForm(param){
      
    var divList=document.getElementsByClassName('forms');
    if(param==0){
      divList[0].classList.add('form-style');
      divList[0].classList.remove('hidden');

      divList[1].classList.remove('form-style');
      divList[1].classList.add('hidden');
    }
    else if(param==1){
      divList[1].classList.add('form-style');
      divList[1].classList.remove('hidden');

      divList[0].classList.remove('form-style');
      divList[0].classList.add('hidden');

    }
  }
  
  function validate (number){

    var emaili=document.getElementById("email").value;
    var inputList=document.getElementsByClassName("input");
    var emal = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


    // if(number==0){
    //     if (inputList[0].value=="") {
    //         alert("Please fill out your username!");
    //     }
    //     else if (inputList[1].value=="") {
    //         alert("Please fill out your Password!");
    //     }else{
    //         alert("Login Succesfull");
    //     }
    // }
    //  else if(number==1){
    //     if (emaili==''  ){
    //       alert("Email can not be blank!");
    //     }
    //     else if(!emal.test(emaili)){
    //     alert("Email is invalid!");
    //     }
    //     else if(inputList[4].value==''){
    //         alert("Please fill your username!");
    //     }
    //     else if(inputList[5].value==""){
    //       alert("Please fill your Password! ");
    //     }
    //     else if(inputList[5].value.length<6){
    //         alert("Fill your password with more than 6 characters!");
    //     }
    //     // else if(inputList[6].value==""){
    //     //     alert("Please fill Confirm Password! ");
    //     // }
    //     // else if(inputList[5].value!=inputList[6].value){
    //     //     alert("Password didn't match!");
    //     // }
    //     else{
    //       //alert("Register successful!!");
    //       return true;
    //     }
    // }
}



/* Validimi i ContactUs */

function contact(){
    // var emaili=document.getElementById("email").value;
    // var email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    // var fields=document.getElementsByClassName("field");
    //   if(fields[0].value==''){
    //       alert("Please fill your name!");
    //   }
      
    //   else if(fields[2].value==''){
    //       alert("Fill your email!");
    //   }
    //   else if(!email.test(emaili)){
    //       alert("Please enter valid email! ");
    //   }
    //   else if(fields[1].value==''){
    //     alert("Please fill your Subject! ");
    //   }
    //   else if(fields[3].value==''){
    //       alert("Please fill the text area!");
    //   }
    //   else{
    //     alert("Form is subbmited Successfully...You will be hearing from us really soon!");
    //   }
  }
  
function ResponsiveNavbar() {
  var x = document.getElementById("navbar");
  if (x.className === "flex-container") {
    x.className += " responsive";
  } else {
    x.className = "flex-container";
  }
}
