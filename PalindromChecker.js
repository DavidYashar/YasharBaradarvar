//A palindrome is a word or sentence that's
// spelled the same way both forward and backward,
// ignoring punctuation, case, and spacing.

function palindrome(str) {
  var newStr = '';
  var one='';
  for(let i=0; i<str.length; i++){
    if(str[i].toLowerCase() != str[i].toUpperCase()|| str[i]>=0){
      newStr+=str[i];
    }
  }
  for(let i=newStr.length-1;i>=0; i-- ){
   one+=newStr[i];
  }
  one= one.replace(/\s/g, '').toLowerCase();
  newStr= newStr.replace(/\s/g, '').toLowerCase();
console.log(one);
console.log(newStr);
  if(JSON.stringify(one)==JSON.stringify(newStr)){
    return true;
  }else{
    return false;
  }
   
  }
  
  console.log(palindrome("1 eye for of 1 eye."));