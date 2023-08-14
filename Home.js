import './Home.css';
import React, { useEffect, useState } from 'react';
import Footer from './Footer.js';
import tele1 from './photos/telegraph1.jpg';
import tele2 from './photos/telegraph2.jpg';
import tele3 from './photos/telegraph3.jpg';
import tele4 from './photos/telegraph4.jpg';
import tele5 from './photos/telegraph5.jpg';
const Home = () => {
  const telegraph = [tele1, tele2, tele3, tele4, tele5];
  const [curTele, setCurTele] = useState(0);

  useEffect(()=> {
    const timer1 = setTimeout(() => {
     
      const newTele = (curTele + 1)% telegraph.length;
      
      setCurTele(newTele);
    }, 5000);

    return () => clearTimeout(timer1);
  
  }, [ curTele, telegraph.length]);

    return ( 
        
        <div className="home">

          
          <div className="telegraph">
           <img  src={telegraph[curTele]} alt='photos' />
           <h3 id='telegraph'>It was just indescribable</h3>
            <p id='telegraph-info'>
            The number of people known to have been killed in a fast-moving
             #fire that tore through a Hawaiian town has  raised dramatically, local officials said.

Fires on Maui's west coast — fuelled by high winds from a hurricane passing to the south
 — broke out on Tuesday and rapidly engulfed the seaside town of #Lahaina.

"As firefighting efforts continue, 17 additional fatalities have been confirmed today 
amid the active Lahaina fire," Maui County announced, raising the death toll from 36.

The quick-moving flames forced many to flee into the ocean to escape, witnesses said.

"I saw a couple people just running, I heard screams out of hell … explosions. 
It felt like we were in hell, it really was," one of the men, who asked not to be named, told KHON2.

"It was just indescribable."
(Photos and caption source: instagram.com/dailytelegraph/)

            </p>
           
           </div>

            {/* <div className='main-title'>
              <h1>MAUI NEEDS YOUR HELP</h1>
              <p>Donate now through Maui Disaster Relief Fund</p>
            </div> */}


            

  <Footer top={1700} />
        </div>
     );
}
 
export default Home;