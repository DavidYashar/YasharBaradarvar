import {useState, useEffect} from 'react';
import BooksShow from './BooksShow';
import {Link} from 'react-router-dom';
// import { useHistory } from "react-router-dom";
import FurnitureShow from './FurnitureShow';
import DVDshow from './DVDshow';
import axios from 'axios';
import './ProductList.css';

const ProductList = () => {
    const [files, setFiles] = useState([]);
    const [result, setResult] = useState('');
    const [ids, setIds] = useState([]);
    const [SKUs, setSKUs] = useState([]);
    // const refresh = useHistory();
    
    const handleSelected = (id, type) => {
     
     if(ids.includes(id)){
      setIds(ids.filter(i => i !== id));
      setSKUs(SKUs.filter(t => t.sku !== id));
    
     }else{
      setIds([...ids, id])
      setSKUs([...SKUs, {sku: id, type: type}]);
    
     }
    };
   
    
      
    const handleDelete = async () => {
      try {
        const response = await axios.post('http://localhost:8000/PHP/delete.php', SKUs);
        setResult(response.data);
        console.log(response.data);


        setTimeout(() => {
          window.location.href = '/';
        }, 1000);


      } catch (error) {
        console.error(error);
      }
    };


    useEffect(() => {
       
        fetch('http://localhost:8000/PHP/index.php', {
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          }
        })
        .then(res => {
          if (!res.ok) {
            throw new Error('Network response was not ok');
          }
          return res.json();
        })
        .then(
          (result) => {
            setFiles(result);
            console.log(result);
          }
        )
        .catch(error => {
          console.error('Fetch error:', error);
        });
      }, []);


    return ( 
      <div className="ProductList">
        <h3 className="list-header">Product List</h3>
       

        <form action="http://localhost:8000/PHP/delete.php" method="post"  >

       
        <ul>
        {files.map((file) => (
          <li key={file.sku}>
      
          <input id="delete-id" 
          className='delete-checkbox'
          name="delete_id[]" 
           type='checkbox' 
           value={file.sku}
           checked={ids.includes(file.sku)}
           onChange={()=> handleSelected(file.sku, file.type)}
           /> 


          {file.type === 'Furniture' &&
           <FurnitureShow 
           SKU={file.sku}
           name={file.name}
           price={file.price}
           height={file.height}
           length={file.length}
           width={file.width}
           />}
          {file.type === 'book' && 
          
          <BooksShow
          SKU={file.sku}
          name={file.name}
          price={file.price}
          weight={file.weight}
          />}
        
        {file.type === 'DVD' && 
        <DVDshow 
        SKU={file.sku}
        name={file.name}
        price={file.price}
        size={file.size}
        />}
           
          </li>
        ))}
      </ul>

      
      </form>

      <Link className='add'  to="/ProductAdd">ADD</Link>
      <button id='delete-product-btn' type="submit" name="delete-All" onClick={() =>handleDelete()}>MASS DELETE</button>
      
      <h4>{result}</h4>
     
      </div>
     );
}
 
export default ProductList;