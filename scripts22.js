$(document).ready(function(){
    $("#productType").change(function(){
        let id = $("#productType option:selected").attr("id");

        let formID = "#form-"+id;

        $(".form").hide();
        $(formID).show();
    });

});

var skuInput = document.getElementById("sku");
var nameInput = document.getElementById("name");
var priceInput = document.getElementById("price");

var sizeInput = document.getElementById("size");
var weightInput = document.getElementById("weight");

var heightInput = document.getElementById("height");
var widthInput = document.getElementById("width");
var lengthInput = document.getElementById("length");




skuInput.oninvalid = function(event) {
  event.target.setCustomValidity("Please enter the sku.");
}

nameInput.oninvalid = function(event) {
  event.target.setCustomValidity("Please enter a name.");
}

priceInput.oninvalid = function(event) {
  event.target.setCustomValidity("Please enter a price.");
}



$('#productType').on('change', function(){
  if(this.value === 'Furniture'){
    $('#weight').prop('disabled', true);
    $('#size').prop('disabled', true);
  }
  else if(this.value === 'Book'){
    $('#height').prop('disabled', true);
    $('#width').prop('disabled', true);
    $('#length').prop('disabled', true);

    $('#size').prop('disabled', true);
  }
  else if(this.value === 'DVD'){
    $('#height').prop('disabled', true);
    $('#width').prop('disabled', true);
    $('#length').prop('disabled', true);

    $('#weight').prop('disabled', true);
  }
});







sizeInput.oninvalid = function(event) {
    event.target.setCustomValidity("Please enter the size.");
  }
  
  weightInput.oninvalid = function(event) {
    event.target.setCustomValidity("Please enter the weight.");
  }
  


  heightInput.oninvalid = function(event) {
  event.target.setCustomValidity("Please enter the height.");
}

widthInput.oninvalid = function(event) {
  event.target.setCustomValidity("Please enter a width.");
}

lengthInput.oninvalid = function(event) {
  event.target.setCustomValidity("Please enter a length.");
}





