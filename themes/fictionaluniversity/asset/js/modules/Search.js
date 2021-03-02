import $ from 'jquery';

class Search{

    constructor(){
        //Initiate the target DOM elements
        this.addSearchHTML();
        this.openButton = $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.searchField = $("#search-term");
        this.resultDiv = $("#search-overlay__results");
        this.isOverlayOpen = false;
        this.isSpinnerVisible = false;
        this.typingTimer;
        this.previousValue;
        this.events();
    }

    events(){
        this.openButton.on('click', this.openOverlay.bind(this));
        this.closeButton.on('click', this.closeOverlay.bind(this));
        $(document).on('keydown', this.keyPressShortCut.bind(this));
        this.searchField.on("keyup", this.searchInput.bind(this));
    }

    //Actions to be perform inside events
    openOverlay(){
        this.searchOverlay.addClass("search-overlay--active");
        $("body").addClass("body-no-scroll");
        this.searchField.val('');
        setTimeout(() => this.searchField.focus(), 301);
        this.isOverlayOpen = true;
    }

    closeOverlay(){
        this.searchOverlay.removeClass("search-overlay--active");
        $("body").removeClass("body-no-scroll");
        this.isOverlayOpen = false;
    }

    searchInput(){

        if(this.previousValue != this.searchField.val()){
            clearTimeout(this.typingTimer);
            if(this.searchField.val()){

                if(!this.isSpinnerVisible){
                    this.resultDiv.html('<div class="spinner-loader"></div>');
                    this.isSpinnerVisible = true;
                }
                
                this.typingTimer = setTimeout(this.getResults.bind(this), 750);
            }
            else{
                this.resultDiv.html('');
                this.isSpinnerVisible = false;
            }

        }
        
        this.previousValue = this.searchField.val();
    }

    keyPressShortCut(e){

        if(e.keyCode == 83 && !this.isOverlayOpen && !$("input, textarea").is(':focus')){
            this.openOverlay();
        }

        if(e.keyCode == 27 && this.isOverlayOpen){
            this.closeOverlay();
        }
    }

    getResults(){
        $.getJSON(universityURL.root_url + '/wp-json/wp/v2/posts?search=' + this.searchField.val(), data => {
            this.resultDiv.html(`<h2 class="search-overlay__section-title">General Information</h2>
                ${data.length ? `<ul class="link-list min-list">` : '<p>No match found</p>'}
                    ${data.map(item => `<li><a href="${item.link}">${item.title.rendered}</a></li>`).join('')}
                ${data.length ? `</ul>` : ''}
            `);
            this.isSpinnerVisible = false;
        });
        
    }

    addSearchHTML(){
        $('body').append(
            `<div class="search-overlay">
            <div class="search-overlay__top">
              <div class="container">
                <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
                  <input type="text" placeholder="What are you looking for?" id="search-term" class="search-term">
                  <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
              </div>
            </div>
    
            <div class="container">
              <div id="search-overlay__results"></div>
            </div>
        </div>`
        );
    }

}

export default Search;