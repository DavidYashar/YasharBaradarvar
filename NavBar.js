import {Link, useLocation} from 'react-router-dom';
import {useState, useEffect} from 'react';
import './NavBar.css';


const NavBar = () => {
   const [prevScroll, setPrevScroll] = useState(0);
   const [visible, setVisible] = useState(true);
   const location = useLocation();

   useEffect(()=> {
    const handleScroll = ()=> {
      const currentScroll = window.scrollY;
      const isVisible = prevScroll > currentScroll || currentScroll <10;

      setPrevScroll(currentScroll);
      setVisible(isVisible);
    };

    window.addEventListener('scroll', handleScroll);
    return () => {
    window.removeEventListener('scroll', handleScroll);
    };

   }, [prevScroll]);


    return ( 
       <div className={`navbar ${visible ? 'visible' : 'hidden'}` }>
      

        <div className='main-title'>
              <h2>MAUI NEEDS YOUR HELP</h2>
              <h1>Donate now through Maui Disaster Relief Fund</h1>
            </div>

         
        <Link className={location.pathname === '/Disaster' ? 'active link' : 'link'} to='/Disaster'> The Disaster</Link>
        <Link className={location.pathname === '/Mission' ? 'active link' : 'link'} to='/Mission'>Our Non-Profit Mission</Link><br></br>
      <Link className={location.pathname === '/Donate' ? 'active link' : 'link'}  id='donate' to='/Donate'>Donations</Link>
      <Link className={location.pathname === '/Contact' ? 'active link' : 'link'}  to='/Contact'>Contact us</Link>
      
       </div>
     );
}
 
export default NavBar;