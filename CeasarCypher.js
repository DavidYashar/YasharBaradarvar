//This is 13ROT. each character in alphabet comes back 13 steps

function rot13(str) { 
    return str.replace(/[A-Z]/g, S => String.fromCharCode((S.charCodeAt(0)%26)+65));
  }

  
  console.log(rot13("SERR CVMMN!"));

 