import {useState} from 'react';
import $ from "jquery";
import './Books';
import DVD from './DVD';
import Furniture from './Furniture';
import Books from './Books';
import {Link} from 'react-router-dom';

import './ProductAdd.css';
const ProductAdd = () => {

    const [SKU, setSKU] = useState(" ");
    const [name, setName] = useState(" ");
    const [result, setResult] = useState(" ");
    const [price, setPrice] = useState(" ");
    // const [size, setSize] = useState(" ");
    const [type , setType] = useState("");
  
    const handleSelectedProduct= (event)=> {
     setType(event.target.value)
     console.log(type);
    }


    const handleChange = (e) => {
      setSKU(e.target.value);
      // setName(e.target.value);
    };
  
    const handleChange1 = (e) => {
      // setSKU(e.target.value);
      setName(e.target.value);
    };
  
    const handleChange2 = (e) => {
      // setSKU(e.target.value);
      setPrice(e.target.value);
    };
  

  
    const handleSubmit = (e) => {
      e.preventDefault();
  
      const form = $(e.target);
      console.log(form);
      console.log(typeof form);
      $.ajax({
        type: "POST",
        url: form.attr("action"),
        
        data: form.serialize(),
        success(data){
          setResult(data);

          if (data.includes('successfully.')){
            setTimeout(() => {
              window.location.href = '/';
            }, 1000)}
        },
      });
      
    };



    return ( 
        <div className="ProductAdd">
<form id='product_form' action="http://localhost:8000/PHP/insert.php"
       method="post" onSubmit={(event)=> handleSubmit(event)}>

      <div className="form">
     <label htmlFor='SKU'>SKU: </label>
     <input type='text' id="SKU" value={SKU} name='SKU' maxLength={20} minLength={6} required
     onChange={(event)=> handleChange(event)}/>
     <br></br>

     <label htmlFor='name'>Name: </label>
     <input type='text' id="name" value={name} name='name' maxLength={30} required
     onChange={(event)=> handleChange1(event)}/>
     <br></br>

     <label htmlFor='price'>price: </label>
     <input type='number' id="price" value={price} name='price' min={3} max={300} required
         onChange={(event)=> handleChange2(event)}/>
     <br></br>
     

     <div className="typeSwitcher">
     <label htmlFor='typeSelector'>typeSwitcher
     <select id='productType' name='type' value={type} onChange={handleSelectedProduct}>
      <option value=""> typeSwitcher</option>
      <option name="book" value="book">Book</option>
      <option name="DVD" value="DVD">DVD</option>
      <option name="Furniture" value="Furniture">Furniture</option>
     </select>
     </label>
     </div>

     </div>
     
     {type === 'book' && (
      <Books id='Book'/>
     )}
     {type === 'Furniture' && (
      <Furniture id='Furniture' />
     )}

     {type === 'DVD' && (
      <DVD id='DVD'/>
     )}


     <button className='save' type="submit">SAVE</button>
     <button className='cancel' type="button"> <Link className='cancel' to="/">CANCEL </Link></button>
      </form>
      <h1 id='resultAdd'>{result}</h1><br></br>
      
        </div>
     );
}
 
export default ProductAdd;