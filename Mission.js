import './Mission.css';
import {Link} from 'react-router-dom';
import Footer from './Footer.js';
import Licence from './photos/licence.jpg';
const Mission = () => {
    return ( 
        <div className="mission">
            <div className="ourMission">
            <h2>Our mission</h2><br></br>
            <p>The catastrofit disaster in Maui hurt all of emotionally.
                THe horrible grief and the detrimental extent of the helish blaze
                that made the heart of all us scattered. 

                Immediately after observing this event, we decided to run a 
                Non-profit campaign for the survivors.

                With the help of people like you, we aim to rebuild a new Maui from the ashes.
               <strong> Be with us.</strong><br></br><br></br>
               <Link id='donate' to={'/Donate'}>DONATE Now</Link>
            </p>
            </div>

         <img  className='licence' src={Licence} alt='licence of non-profit organization from Nevada'/>
          <Footer top={2000}/>
        </div>
     );
}
 
export default Mission;