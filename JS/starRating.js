class StarRating extends HTMLElement {

    get value() {

        return this.getAttribute('value') || 0;

    }//end of getter

    set value(val) {

        this.setAttribute('value', val);
        this.highlight(this.value - 1);

    }//end of setter

    get number() {

        return this.getAttribute('number') || 4;
    }

    set number(val) {

        this.setAttribute('number', val);

        this.stars = [];

        while (this.firstChild) {

            this.removeChild(this.firstChild);
        }

        for (let i = 0; i < this.number; i++) {

            let s = document.createElement('div');
            s.className = 'star';
            this.appendChild(s);
            this.stars.push(s);
        
       
        }//end for

        this.value = this.value;
    }

    highlight(index) {

        this.stars.forEach((star, i) => {

            star.classList.toggle('full', i <= index);

        });
    }//end
    constructor() {

        super();

        this.number = this.number;

        this.addEventListener('mousemove', e => {

            let box = this.getBoundingClientRect(),

            starIndex = Math.floor((e.pageX - box.left) / box.width * this.stars.length);

            this.highlight(starIndex);

        });//end event listener

        this.addEventListener('mouseout', () =>{

            this.value = this.value;

        });//end event listener

        this.addEventListener('click', e => {

            let box = this.getBoundingClientRect(),

                starIndex = Math.floor((e.pageX - box.left) / box.width * this.stars.length);

            this.value = starIndex + 1;

            let rateEvent = new Event('rate');

            this.dispatchEvent(rateEvent);

        });//end event listener

    }//end constructor
}//end class

customElements.define('x-star-rating', StarRating);


