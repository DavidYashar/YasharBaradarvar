
// import NavBar from "./NavBar";
import {BrowserRouter as Router, Route, Routes} from 'react-router-dom';
import ProductAdd from  "./ProductAdd.js";

import ProductList from "./ProductList.js";
import './App.css';





function App() {


  return (

<div className="App">
  
<Router>
  
    
    <Routes>
    <Route path='/' Component={ProductList}/>
   <Route  path='/ProductAdd' Component={ProductAdd}/>
   
   </Routes>
   
      
      
   </Router>
   </div>
  
  );
}

export default App;


