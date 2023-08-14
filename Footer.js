import './Footer.css';

import gmail from './photos/gmail-logo.png';
import instagram from './photos/instagram-logo.png';
import facebook from './photos/facebook-logo.png';
import call from './photos/call-logo.png';
import twitter from './photos/twitter.png';
const Footer = ({top}) => {

     const footerStyle= {
        top: `${top}px`
     }
    return ( 
     
        <div className="footer"  style={footerStyle}>
             <p>&copy; {new Date().getFullYear()} Maui Disaster Relief Fund Inc. All rights reserved.</p>
             <ul id='social'>
               <li className='logo'><a href='mailto:mauidisasterrelieffund@gmail.com?'><img src={gmail} alt='gmail' width={'10px'} height={'10px'}/></a> </li>
               <li className='logo'><a href='https://twitter.com/FundMaui60445' rel="noreferrer" target='_blank'><img src={twitter} alt='twitter' width={'10px'} height={'10px'}/></a> </li>
               <li className='logo'><a href='https://www.facebook.com/profile.php?id=61550215527821&sk=about' rel="noreferrer" target='_blank'><img src={facebook} alt='facebook' /> </a></li>
               <li className='logo' ><img src={instagram} alt='instagram' /> </li>
               <li className='logo'><img src={call} alt='call'/> </li>
               
             </ul>
        </div>
     );
}
 
export default Footer;