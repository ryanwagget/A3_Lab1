(function () {
  // start with retrieving the elements from the page, and then adding event handling. then write the logic. refer to the seasons example / homework

  //Variables
   var theModel = document.querySelector('.modelName');
   var thePrice = document.querySelector('.priceInfo');
   var theDesc = document.querySelector('.modelDetails');
   var cars = document.querySelectorAll('.data-ref')
//hjgeh

   //Functions
   function changeElements()
   {
     let objectIndex = carData[this.id];
      //appliedClass = this.id;

      theModel.firstChild.nodeValue = objectIndex.model;
    	theDesc.firstChild.nodeValue = objectIndex.description;
      thePrice.firstChild.nodeValue = objectIndex.price;

      cars.forEach(function(element, index){
        element.classList.add('nonActive');
      })
      this.classList.remove('nonActive');
   }



   //Listeners
   cars.forEach(function(element, index){
     element.addEventListener('click', changeElements, false);
   });

})();
