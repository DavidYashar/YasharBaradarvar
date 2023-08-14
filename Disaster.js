import './Disaster.css';
import Chart from './photos/chart.png';
import Footer from './Footer.js';
const Disaster = () => {
    return ( 
        <div className="disaster">

            <div className="video-container">
   <iframe width="900" height="600" src="https://www.youtube.com/embed/tfbFW4TMOGA"
    title="Devastating Hawaii wildfires leave 6 dead: Maui officials" 
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
     allowfullscreen></iframe>
  </div>



  <div className='info-home'>
    <h4>How did the Maui blazes start and what we know about the damage to Lahaina</h4>
    <p>Aug 10 (Reuters) - Wildfires on Hawaii's Maui island and Big Island have killed dozens of people,
         forced thousands of residents and tourists to evacuate, and devastated the historic resort
         city of Lahaina. Here are some key questions and answers about the disaster.

HOW DID THE FIRES START?
The causes of the fires, which started on Tuesday night, have not yet been determined.
 However, the National Weather Service had issued warnings for the Hawaiian Islands for high winds and dry weather 
 - conditions ripe for wildfires - which it canceled late Wednesday.
 Nearly 85% of U.S. wildfires are caused by humans, according to the U.S. Forest Service. 
 Natural causes include lightning and volcanic activity.
  The Hawaiian Islands have six active volcanoes, including one on Maui.

Record-setting heat this summer has contributed to unusually 
severe wildfires in Europe and western Canada. Scientists say climate change,
driven by fossil fuel use, has led to more frequent and more powerful extreme weather events.<br></br>
(source: reuters.com/world/)
 </p>
  </div>

  <div className='wild-location'>
    <img src={Chart}  alt='chart'/>
   <p id='par'>
   Fires have also burned around Kihei, a coastal city in South Maui, and destroyed parts of Kula,
    a residential area in the mountainous center of the island, as well as scorching parts of the Big Island.

Some 271 structures were destroyed or damaged, the Honolulu Star-Advertiser said, citing official reports 
from the U.S. Civil Air Patrol and Maui Fire Department.

Hawaii is an archipelago about 2,000 miles (3,200 km) west of the U.S. mainland.
 It is made up of eight main islands, including Hawaii, known as the Big Island.
  The island of Maui sits to the east of the island of Hawaii.
   </p>

  </div>


  <Footer top={2000}/>
        </div>
     );
}
 
export default Disaster;