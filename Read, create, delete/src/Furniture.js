import {useState} from 'react';
const Furniture = () => {
  const [height, setHeight] = useState('');
  const [width, setWidth] = useState('');
  const [length, setLength] = useState('');

  const handleChangeH = (e) => {
    setHeight(e.target.value);
   
  };
  const handleChangeW = (e) => {
    setWidth(e.target.value);
   
  };
  const handleChangeL = (e) => {
    setLength(e.target.value);
   
  };

    return ( 
       
           <div id='Furniture' className="furniture">
            <label htmlFor='height'>height(CM)
              <input name="height" type="number" id="height" min={20} max={180}
              value={height} onChange={(event)=> handleChangeH(event)} placeholder="enter the height" />
            </label>

            <label htmlFor='width'>width(CM)
              <input name="width"  type="number" id="width" min={20} max={180}
              value={width} onChange={(event)=> handleChangeW(event)}   placeholder="enter the width"/>
              </label>


            <label htmlFor='length'>length(CM)
              <input name="length" type="number"  id="length" min={20} max={180}
              value={length} onChange={(event)=> handleChangeL(event)}   placeholder="enter the length"/>
              </label>
              </div>
      
     );
}
 
export default Furniture;