function App(){
    const [displayTime, setDisplay] = React.useState(3);
    const [breakTime, setBreakTime] = React.useState(5);
    const [sessionTime, setSessionTime]=React.useState(5);
    const [timerOn, setTimerOn]= React.useState(false);
    const [onBreak, setOnBreak]= React.useState(false);
    const [breakAudio, setBreakAudio]= React.useState(new Audio('https://raw.githubusercontent.com/freeCodeCamp/cdn/master/build/testable-projects-fcc/audio/BeepSound.wav'));
    //function for formating the time
    const formatTime  =(time) => {
    const minutes = Math.floor(time/60);
    const seconds = time% 60;
  return(
    (minutes<10? '0'+ minutes: minutes)+ ':'+
    (seconds < 10? '0'+ seconds: seconds)
  );
    }

    //function for changing the break time
    const changeTime = (amount, type)=> {
        if(type=='break'){
            if(breakTime<= 60&& amount <0){
                return;
            }
            setBreakTime((prev)=> prev + amount);
        }else{
            if(sessionTime<= 60&& amount <0){
                return;
            }
            setSessionTime((prev)=> prev + amount);
            if(!timerOn){
                setDisplay(sessionTime+ amount);
            }
        }
    };

    // function for break Audio
const breakSound = ()=> {
    breakAudio.currentTime = 0;
    breakAudio.play();
}
    //to control and reset the time
const controlTime = ()=> {
let seconds = 1000;
let date = new Date().getTime();
let nextDate = new Date().getTime()+ seconds;
let onBreakVariable = onBreak;
if(!timerOn){
    let interval = setInterval(()=> {
         date = new Date().getTime();
       
        if(date> nextDate){
            setDisplay(prev=> {
                if(prev <= 0&& !onBreakVariable){
                  breakSound();
                  onBreakVariable = true;
                  setOnBreak(true);
                  return breakTime;
                }else if(prev <= 0 && onBreakVariable){
                    breakSound();
                    onBreakVariable = false;
                    setOnBreak(false);
                    return sessionTime;
                }
                return prev -1;
            });
            nextDate += seconds;
        }
    }, 30);
    localStorage.clear();
    localStorage.setItem('interval-id', interval);

}
if(timerOn){
   clearInterval(localStorage.getItem('interval-id')); 
}
setTimerOn(!timerOn);
}
const resetTime = ()=> {
    setBreakTime(5*60);
    setSessionTime(25*60);
    setDisplay(25*60);
}


    //return
    return (
        <div className='center-align'>
            <h2>5 + 25 Clock</h2>
            <div className='dual-container'>
            <Length
             title={'break Length'}
             formatTime={formatTime}
             changeTime={changeTime}
             type={'break'}
             time={breakTime}
            />

            <Length
             title={'session Length'}
             formatTime={formatTime}
             changeTime={changeTime}
             type={'session'}
             time={sessionTime}
            />
            </div>
            <h3>{onBreak ? 'break':'session'}</h3>
            <h1>{formatTime(displayTime)}</h1>
            <button className="waves-effect waves-light btn-small" onClick={controlTime}>
            {timerOn ? (<i className='material-icons'>pause-circle</i>)
            : (<i className='material-icons'>play-circle</i>)
        }
            </button>
            <button className='waves-effect waves-light btn-small' onClick={resetTime}>
                <i className='material-icons'>autorenew</i>
                </button>
            </div>
    )
   
};



function Length({title, formatTime, changeTime, type, time }){
    return (
        <div>
            <h3>{title}</h3>
        <div className='time-sets'>
            
            <button className='btn-small  cyan accent-3 lighten-2'
            onClick={()=> changeTime(-60, type)}
            >
                <i className='material-icons'>arrow_downward</i>
            </button>
            <h3>{formatTime(time)}</h3>
            <button className='btn-small  cyan accent-3 lighten-2'
            onClick={()=> changeTime(60, type)}
            >
                <i className='material-icons'>arrow_upward</i>
            </button>

            
            </div>
        </div>
    )
}
ReactDOM.render(<App/>, document.getElementById('root'));
