import {useState, useEffect} from 'react';


const BlackJack1 = () => {

      const [message, setMessage] = useState('');
      

      const [arrDeck, setArrDeck] = useState([]);


      const [cards, setCards] = useState([]);
      const [dealerCards, setDealerCards] = useState([`./cards/BACK.png`]);

    const [stayClicked, setStayClicked] = useState(false);
    const [canHit, setCanHit] = useState(true);
  

      
  const shuffle = () => {


    let deck = [];
   
      const values = ["A", "2", "3", "4", "5",
      "6", "7", "8", "9", "10", "J", "Q", "K"];
  
      const types = ["C", "D", "H", "S"];
  
     
  
      for(let i =0; i<types.length; i++){
          for(let j =0; j<values.length; j++){
            
       
           deck.push(values[j]+'-'+types[i]);
          }
  
    }
  

    const Shuffled = [...deck];
 

  for (let i =0; i< Shuffled.length; i++){
    let j = Math.floor(Math.random()* Shuffled.length);

    let temp = Shuffled[i];
    Shuffled[i] = Shuffled[j];
    Shuffled[j]= temp;
  }
  deck = Shuffled;
  setArrDeck(Shuffled);


};


 const getValue = (card)=> {
        let data = card.split('-');
       
        let value = data[0];

        if(isNaN(value)){
            if(value === 'A'){
                return 11;
            }
            return 10;
        }
        return parseInt(value);
    }

    const checkAce = (card) => {
  
        if(card[0] ===  'A'){
            return 1;
        }
        return 0;
    }


    const reduceAce = (playerSum, playerAceCount) =>{
        if(playerSum > 21 && playerAceCount >0 ){
          playerSum -=10;
          playerAceCount -=1;
        }

        return playerSum;
    }







 let yourSum = 0;
 let yourAceCount =0;
   
       const value2 = cards.map(path => {
         const part2 = path.split('/');
         const card2 = part2[part2.length -1].replace('.png', '');
         return card2;
         
       });
        
       
        for(let i=0; i<value2.length; i++){
 
         let valT = [];
         let valTACE =[];
     
         valT.push(getValue(value2[i]));
         valTACE.push(checkAce(value2[i]));
 
         let yours = valT.reduce((sum, current)=> sum + current,0);
         let yourAce = valTACE.reduce((sum, current)=> sum + current, 0);
 
        yourSum +=yours;
         yourAceCount += yourAce;
       
 
         if(value2[0] !== undefined && value2[1]!==undefined && value2[0].startsWith('A') && value2[1].startsWith('A')){
        
            yourSum=21;
        }

        }
        
       
   
        let yourFIN = reduceAce(yourSum, yourAceCount);
        yourSum = yourFIN;
        
 
       
 
        //calculating dealer SUm
 


       
   let dealerSum =0;
   let dealerAceCount =0;
 
 
   const validCards = dealerCards.filter(cardPath => !cardPath.includes('BACK.png'));
     const values = validCards.map(path => {
       const part = path.split('/');
       const cards = part[part.length -1].replace('.png', '');
       return cards;
       
     });
     console.log(values);
     for(let i=0; i<values.length; i++){
     let valTD = [];
     let valTDdeal = [];
    
       valTD.push(getValue(values[i]));
       valTDdeal.push(checkAce(values[i]));
     
       
 
        let dealers = valTD.reduce((sum, current)=> sum + current,0);
        let dealerAce = valTDdeal.reduce((sum, current)=> sum + current, 0);
        
      
       dealerSum+=  dealers;
       dealerAceCount +=dealerAce;
       if(values[0] !== undefined && values[1]!==undefined &&   values[0].startsWith('A') && values[1].startsWith('A')){
            
        dealerSum =21;
    }

 
   }
 
   let dealerFIN = reduceAce(dealerSum, dealerAceCount);
    dealerSum = dealerFIN;
 
      
 
 




    const Hit = ()=> {
      if(!canHit){
        return;
    }
  
     const yourDeal = arrDeck.pop();
      const  newYourCards = `./cards/${yourDeal}.png`;
       setCards([...cards, newYourCards]);
 
       
       if(reduceAce(yourSum, yourAceCount)> 21){
        setCanHit(false);
        return;
       }
     
    }



    const Stay = ()=> {
      setStayClicked(true);
   
     setCanHit(false);
      const hidden = arrDeck.pop();
      const newDealerCards = `./cards/${hidden}.png`;
       dealerCards[0]= newDealerCards;
        
    
     
   
    
  }




  useEffect(()=>{
   
   console.log(reduceAce('1 '+ dealerSum, dealerAceCount));
    if(stayClicked && reduceAce(dealerSum, dealerAceCount)<yourSum && yourSum <=21 ){
        const doLoops = () => {
       
            if(reduceAce(dealerSum, dealerAceCount)  >19 ||reduceAce(dealerSum, dealerAceCount)> yourSum ){
                console.log('2 '+ reduceAce(dealerSum, dealerAceCount));
                return;
            }else if(reduceAce(dealerSum, dealerAceCount)>= 17 || reduceAce(dealerSum, dealerAceCount)>yourSum ){
                let hiddenDeal = arrDeck.pop();
                let  newDealerCards2 = `./cards/${hiddenDeal}.png`;
                dealerCards.push(newDealerCards2);
                console.log('3 '+reduceAce(dealerSum, dealerAceCount));
                return;
          
        }else if(reduceAce(dealerSum, dealerAceCount)  <15 || reduceAce(dealerSum, dealerAceCount) < yourSum ){
                let hiddenDeal1 = arrDeck.pop();
                    let  newDealerCards1 = `./cards/${hiddenDeal1}.png`;
                    dealerCards.push(newDealerCards1);
                    return;
             
      
           
        }
        }
    doLoops(); 
   }
       
 
  }, [arrDeck, dealerCards, dealerSum, yourSum, stayClicked, dealerAceCount, yourAceCount]);
           
   
 



    const restart = ()=> {
       window.location.href = window.location.pathname;
      
     
    }

    useEffect(()=> {
   
     
        shuffle();

   
    }, []);

 



    // two timers for updating the initial cards for both sides randomly
    const timer =  setTimeout(()=> {
    
        for(let i =0; i<2; i++){
          let deals = arrDeck.pop();
          let arrDea = [];
          
        arrDea.push(deals);
        

          if(arrDea[i] !== undefined){
           
            const newDealerCards = `./cards/${arrDea[i]}.png`;
            setDealerCards([...dealerCards, newDealerCards]);
           
          }
          
        }

     }, 100);
     if(dealerCards.length >1 ){
      clearTimeout(timer);
      
     
    }
    
  

    
    const timer2 = setTimeout(()=> {
      let yourDeal = arrDeck.pop();
      let arrYour = [];
      arrYour.push(yourDeal);
      for(let i =0; i<2; i++){
        if(arrYour[i] !== undefined){
          
          const newYourCards = `./cards/${arrYour[i]}.png`;
          setCards([...cards, newYourCards]);
         
        }
      }

    }, 100);
    if(cards.length >1 ){
      clearTimeout(timer2);
      
    }





    useEffect(() => {
      

      let finMessage = '';
      if(stayClicked){
        if(values[0] !== undefined && values[1]!==undefined &&  values[0].startsWith('A') && values[1].startsWith('A')){
            
            finMessage ='You lost';
        }else if(value2[0] !== undefined && value2[1]!==undefined &&  value2[0].startsWith('A') && value2[1].startsWith('A')){
            
            finMessage ='You won';
        }
        else if (yourSum > 21) {
            finMessage ='You lost';
         } else if (dealerSum === 21) {
           finMessage ='You lost';
         } else if (dealerSum > 21) {
           finMessage ='You won';
         }
          else if (yourSum === dealerSum) {
           finMessage ='Tie';
         }else if(dealerSum > yourSum ){
          
           finMessage ='You lost';
         }
         else if (yourSum > dealerSum) {
            
           finMessage ='You won';
         } 
         setMessage(finMessage);
      }
      
    }, [yourSum, dealerSum, stayClicked, values, value2]);
    
     
      
       

   
     
  




    return ( 
        <div className="shuffle">
          <button onClick={()=>restart()}>restart</button><br/>
          
       
         
            <div className="dealer">
             <h3 className="dealerName">Dealer: {dealerSum}</h3>

             {dealerCards.map((dealCard, index)=> (
             <img key={index} src={require(`${dealCard}`)} alt="dealerCards" />
           
         )) }
            
            </div>
           



            <div className="player">
             <h3 className="playerName">Player: {yourSum} </h3>

         {cards.map((card, index)=> (
             <img key={index} src={require(`${card}`)} alt="card number 3" />
           
         ))}
     
         </div>

         <button onClick={Hit}>Hit</button><br/><br/>
       
         <button  onClick={ () =>Stay()}>Stay</button>
         <p>{message}</p><br/>
      
        
        </div>
     );
}
 
export default BlackJack1;

  
