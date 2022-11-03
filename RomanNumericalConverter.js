function convertToRoman(num) {
var digits = String(+num).split("");

let key=["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM",
     "","X","XX","XXX","XL","L","LX","LXX","LXXX","XC",
     "","I","II","III","IV","V","VI","VII","VIII","IX"];

     let roman_num= "";
     let i = 3;
     while(i--)
     roman_num= (key[+digits.pop()+ (i*10)]||"")+ roman_num;
     return Array(+digits.join("")+1).join("M")+roman_num;
// var digits = String(+num).split("");

// let key = ["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM",
//      "","X","XX","XXX","XL","L","LX","LXX","LXXX","XC",
//      "","I","II","III","IV","V","VI","VII","VIII","IX"];

//      roman_num= "";
//      let i = 3;
//      while(i--)
//      roman_num= (key[+digits.pop()+ (i*10)||""])+ roman_num;
//      return Array(+digits.join("") + 1).join("M") + roman_num;
}
   console.log(convertToRoman(222));


//    Roman numerals	Arabic numerals
// M	1000
// CM	900
// D	500
// CD	400
// C	100
// XC	90
// L	50
// XL	40
// X	10
// IX	9
// V	5
// IV	4
// I	1