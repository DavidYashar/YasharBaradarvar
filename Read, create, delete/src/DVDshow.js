const DVDshow = ({SKU, name, price, size}) => {
    return ( 
        <div className="DVDshow">
            {SKU}<br></br>
            {name}<br></br>
            {price} $<br></br>
            SIZE: {size}
        </div>
     );
}
 
export default DVDshow;