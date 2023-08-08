import {useState} from 'react';
const DVD = () => {
    const [size, setSize] = useState('');

    const handleChangeS = (e) => {
        setSize(e.target.value);
       
      };
    return ( 
       
            <div id='DVD' className="dvd">
            <label htmlFor='size'>size(MB)
              <input id="size" type="number" name="size" min={20} max={2000}
              value={size} onChange={(event)=> handleChangeS(event)}  placeholder="enter the size"/>
              </label>
              </div>
            
       
     );
}
 
export default DVD;