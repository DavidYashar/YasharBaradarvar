import Footer from './Footer.js';
import './Contact.css';
import {Link} from 'react-router-dom';
const Contact = () => {
    return ( 
        <div className="contact">
        <div className='ContactInfo'>
             <h2>How to reach us?</h2><br></br>
             <p>You can reach out to us using the social media 
                Links that are provided on the footer.<br></br>
                <Link className='homeButton' to={'/Home'}>Ruturn to main page </Link>
             </p>
        </div>

        <Footer top={1000}/>
        </div>
     );
}
 
export default Contact;