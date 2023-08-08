const BooksShow = ({SKU, name, price, weight}) => {
    return ( 
        <div className="BooksShow">
             {SKU}<br></br>
            {name}<br></br>
            {price} $<br></br>
        WEIGHT: {weight}
        </div>
     );
}
 
export default BooksShow;