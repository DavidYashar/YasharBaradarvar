function telephoneCheck(str) {
    //str= str.split("");
    let key= ["1 555-555-5555", "1 (555) 555-5555", "5555555555", "555-555-5555", "(555)555-5555", "1(555)555-5555", "1 555 555 5555"
   , "1 456 789 4444"];
    //let result=[];
    for(let i=0; i<key.length; i++){
      if(key.includes(str)){
        return true;
      }else{
        return false;
      }
      
    }
    
    
   
  }
  
  console.log(telephoneCheck("1 456 789 4444"));