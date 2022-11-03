function checkCashRegister(price, cash, cid){
    var change = cash - price;
    let totalCash = 0;
    let cidReverse = [...cid].reverse();

    let temp= [];
    let cashValue = {
        "PENNY": 0.01, 
        "NICKEL": 0.05, 
        "DIME": 0.1, 
        "QUARTER": 0.25, 
        "ONE": 1, 
        "FIVE": 5, 
        "TEN": 10, 
        "TWENTY": 20, 
        "ONE HUNDRED": 100
    }
    let changeDue = {
        status: '',
        change: []
    }
    cid.forEach(element => {
        totalCash+=element[1];
        
    });
    totalCash= parseFloat(totalCash.toFixed(2))

    function cashUnit(unit, index) {
        let unitTotal = cidReverse[index][1];
        let amount = Math.floor(change/cashValue[unit]) * cashValue[unit];

        if(unitTotal > 0) {
            if (unitTotal >= amount) {
                change -= amount;
                change = parseFloat(change.toFixed(2));
                return amount;
            }
            else{
                change-=unitTotal;
                change = parseFloat(change.toFixed(2));
                return unitTotal;
            }
        }
        else {
            return 0;
        }
    }
    
   function getChange() {
    let changeOwed = cash - price;
    for(let [index, value] of cidReverse.entries()) {
        let changeGotten = cashUnit(value[0], index);
        if(changeGotten > 0) {
            temp.push([value[0], changeGotten]);
        }
        if(change===0){break;}
    }
    if (totalCash < changeOwed || change !== 0) {
        changeDue.status = "INSUFFICIENT_FUNDS";
    }
    else if( totalCash == changeOwed) {
        changeDue.status = "CLOSED";
        changeDue.change = [...cid];

    }
    else {
        changeDue.status = "OPEN";
        changeDue.change = [...temp];
    }
   }
   getChange();
   return changeDue;
}

console.log(checkCashRegister(3.26, 100, [["PENNY", 1.01], ["NICKEL", 2.05], ["DIME", 3.1],
  ["QUARTER", 4.25], ["ONE", 90], ["FIVE", 55], ["TEN", 20], ["TWENTY", 60], ["ONE HUNDRED", 100]]));