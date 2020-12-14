class HideElements{
    constructor(Id,Class){
      this.Id = Id;
      this.Class = Class;
    }

    hideElement(){
        //alert(this.Id + '' + this.Class );
        const Elements = document.querySelector(this.Class); //Many elements with class
        const Element = document.getElementById(this.Id); //single element by id

        if (this.Class!='')
        {
            //alert(this.Class)
          for (let e = 0; e < Elements.length; e++)
          {
              Elements[e].style.visibility = 'hidden';
          }
        }

        if (this.Id!='')
        {
            //alert(this.Id)
            Element.style.visibility = 'hidden';
        }

        //console.log(Elements);
    }
}

//var activeCarouselElements = new HideElements('','.active');
//activeCarouselElements.hideElement();