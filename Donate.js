import './Donate.css';
import Footer from './Footer.js';
import React, { useEffect, useState } from 'react';
import {Link} from 'react-router-dom';

import Photo1 from './photos/maui1.jpg';

import Photo3 from './photos/maui3.jpg';
import photo4 from './photos/maui6.jpg';

const Donate = () => {
    const photos = [ Photo1, Photo3, photo4];
    const [curPhoto, setCurPhoto] = useState(0);

    useEffect(()=> {
        const timer = setTimeout(() => {
          const newIndex = (curPhoto + 1)% photos.length;
          // const newTele = (curTele + 1)% telegraph.length;
          setCurPhoto(newIndex);
          // setCurTele(newTele);
        }, 5000);
    
        return () => clearTimeout(timer);
      
      }, [curPhoto, photos.length]);


    return ( 
        <div className="donate">

            <div className='info'>
            
            <img id='woman' src={photos[curPhoto]} alt='photos' />
            <div className='woman'>
            <h2>Maui needs you</h2><br></br>
            <p className='article'>Hawaii Wildfires
Destruction From Maui Fires Looks Like <strong> ‘a Bomb Went Off,’</strong> Governor Says<br></br><br></br>

There have been scalating deaths toll reported, but Gov. Josh Green said the toll would continue to rise 
and implored residents to host people who had been displaced from their homes.

              Drier-than-normal conditions have led to an increase in drought levels across Hawaii.
              Statewide moderate drought levels have increased from 6% to 14% since last week.

              Maui County has experienced a significant uptick in severe level drought 
              conditions — from 5% last week to 16% this week.</p><br></br>

              <p>You can donate by clicking the <Link id='linkTo' to={'/'}> <strong>button above</strong></Link></p>
              </div>
              </div>
              
     <Footer top={1900}/>
        </div>
     );
}
 
export default Donate;