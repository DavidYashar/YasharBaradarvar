const FurnitureShow = ({SKU, name, price , height, length, width}) => {
    return ( 
        <div className="FurnitureShow">
            {SKU}<br></br>
            {name}<br></br>
            {price} $<br></br>
         Dimension: {height} X {length} X {width} 
        </div>
     );
}
 
export default FurnitureShow;