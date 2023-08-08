import {useState} from 'react';
const Books = () => {
   const [weight, setWeight] = useState('');
    const handleChangeW = (e) => {
        setWeight(e.target.value);
       
      };
    return ( 
          
            <div id='Book' className="book">
            <label htmlFor='weight'>weight(KG)
               <input type="number" name="weight" id="weight" min={1} max={20}
               value={weight} onChange={(event)=> handleChangeW(event)}/>
            </label>
            </div>
         
     
     );
}
 
export default Books;