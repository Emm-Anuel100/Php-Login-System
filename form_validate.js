
function  validate(){

   //******* Refrences ******//
   let password_value1 = document.querySelector('#password1').value;
   let password_value2 = document.querySelector('#password2').value;

   if (password_value1.length < 8 || password_value2.length < 8) {
      alert("both passwords must be greater than seven characters");
      //******* Prevent submission ******//
      return false;
   }
   else if(password_value1 !== password_value2) {
         alert("both passwords must match");
         return false;
      }
   else{
      //******* Allow submission ******//
      return true;
   }
}
