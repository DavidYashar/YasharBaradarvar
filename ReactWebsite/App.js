import {BrowserRouter as Router, Route,Routes} from 'react-router-dom';
// import Footer from './Footer.js';
import './Footer.css';
import './App.css';

import './Donate.css';
import Donate from './Donate.js';
import NavBar from './NavBar.js';
import Mission from './Mission.js';
import Home from './Home.js';
import Disaster from './Disaster.js';
import Contact from './Contact.js';
// import Photo1 from './photos/maui1.jpg';
// import Photo2 from './photos/maui2.jpg';
// import Photo3 from './photos/maui3.jpg';


function App() {


  return (
    <div className="App">

      
     <Router>
      <NavBar/>
      <Routes>
        <Route exact path='/' Component={Home}/>
        <Route exact path='/Home' Component={Home}/>
      <Route path='/Mission' Component={Mission}/>
        <Route path='/Donate' Component={Donate} />
        <Route path='/Disaster' Component={Disaster}/>
        <Route path='/Contact' Component={Contact}/>
      </Routes>
     </Router>
   
    </div>
  );
}

export default App;
