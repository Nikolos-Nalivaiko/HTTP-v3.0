class Overlay {

    constructor(overlay) {
        this.overlay = $(overlay);
        this.openBtn = $(overlay + ' .overlay__open')
        this.closeBtn = $(overlay + ' .overlay__close')

        this.init();
    }

    init() {
        this.openBtn.on('click', () => this.open());
        this.closeBtn.on('click', () => this.close());
    }

    open() {
        this.overlay.fadeIn();
    }

    close() {
        this.overlay.fadeOut();
    }
}

function UploadImage() {
    var selectedFiles = [];
    $('.file').on('change', function (event) {
        var files = event.target.files;

        const processFiles = async (files) => {
            for (const file of files) {
                if (file && file.type.startsWith('image')) {
                    var reader = new FileReader();

                    selectedFiles.push(file);
                    console.log(selectedFiles);

                    reader.onloadstart = function () {
                        var load = `<div class="loader"></div>`;
                        $('.input__images').append(load);
                    };

                    const imageLoaded = new Promise(resolve => {
                        reader.onload = function (e) {
                            resolve(e.target.result);
                            $('.input__images').find('.loader').remove();
                        };
                    });

                    reader.readAsDataURL(file);

                    const imageUrl = await imageLoaded;

                    var image = `<div class="input__image-wrapper">
                    <p class="input__image-icon __icon-close"></p>
                    <img src="${imageUrl}" class="input__image">
                    </div>`;

                    $('.input__images').append(image);


                }
            }
        };

        $('.input__images').on('click', '.input__image-icon', function () {
            var clickedElement = $(this);
            var parentElements = clickedElement.closest('.input__image-wrapper');
            var index = $('.input__images .input__image-wrapper').index(parentElements);

            selectedFiles.splice(index, 1);
            parentElements.fadeOut('slow', function () {
                $(this).remove();
            });
        })

        var fileInput = $('.file')[0];
        var files = fileInput.files;
        processFiles(files);
    })
}

class slider {

    constructor(track, container, prevBtn, nextBtn, item, SlideToShow, SlideToScroll, margin, adaptives, swipeArea) {
        this.track = track;
        this.container = container;
        this.prevBtn = prevBtn;
        this.nextBtn = nextBtn;
        this.item = item;
        this.SlideToShow = SlideToShow;
        this.SlideToScroll = SlideToScroll;
        this.margin = margin;
        this.position = 0;
        this.CountItems = item.length;
        this.counter = this.SlideToShow;
        this.counterSum = this.CountItems;
        this.swipeArea = swipeArea;

        this.adaptiveDiapason(adaptives);
        this.setWidth();
        this.init();
        this.swipe();
        this.updateCounterDisplay();
    }
    
    init() {
        this.nextBtn.on('click', () => this.moveRight());
        this.prevBtn.on('click', () => this.moveLeft());
      }

    setWidth() {
        this.ItemWidth = Math.round((this.container.width() / this.SlideToShow) - (this.margin * (this.SlideToShow - 1)) / this.SlideToShow);

        this.item.each((index, item) => {
            $(item).css({
                minWidth: this.ItemWidth,
                marginRight: this.margin,
            });
        });
    }

    moveRight() {
        this.ItemsLeft = this.CountItems - Math.round((Math.abs(this.position) + (this.SlideToShow * this.ItemWidth) + (this.SlideToScroll * this.margin)) / this.ItemWidth);

        this.movePosition = (this.SlideToScroll * this.ItemWidth) + (this.SlideToScroll * this.margin); 
            
        this.position -= this.ItemsLeft > this.SlideToScroll ? this.movePosition : (this.ItemsLeft * this.ItemWidth) + (this.ItemsLeft * this.margin);
    
        this.counter++;

        if(this.ItemsLeft == 0) {
            this.position = 0;
            this.counter = this.SlideToShow;
        }
    
        this.track.css({
            transform:`translateX(${this.position}px)`
        })
        this.updateCounterDisplay();
    }

    moveLeft() {
        this.ItemsLeft = Math.round(Math.abs(this.position) / this.ItemWidth);
        
        this.movePosition = (this.SlideToScroll * this.ItemWidth) + (this.SlideToScroll * this.margin);
        
        this.position += this.ItemsLeft > this.SlideToScroll ? this.movePosition : (this.ItemsLeft * this.ItemWidth) + (this.ItemsLeft * this.margin);
    
        if(this.ItemsLeft == 1) {
            this.counter = this.SlideToShow;
        } 

        if(this.ItemsLeft > 1) {
            this.counter--;
        }
    
        this.track.css({
            transform:`translateX(${this.position}px)`
        }) 
        this.updateCounterDisplay();   
    }

    swipe() {
        this.swipeArea.on('touchstart', (event) => {
            this.touchStartX = event.originalEvent.touches[0].pageX;
        });

        this.swipeArea.on('touchend', (event) => {
            this.touchEndX = event.originalEvent.changedTouches[0].pageX;
            this.touchSum = this.touchStartX - this.touchEndX;

            let absTouckSum = Math.abs(this.touchSum);
    
            if (this.touchSum > 0 && absTouckSum > 50) {
                this.moveRight();
            } else if (this.touchSum < 0 && absTouckSum > 50) {
                this.moveLeft();
            }
        });
    }

    adaptiveDiapason(adaptives) {

        adaptives.forEach(item => {
            if(window.innerWidth <= item.width) {
                this.SlideToShow = item.count
            } 
        });

    }

    updateCounterDisplay() {
        // $('#car__slider-counter').text(`${this.counter}`);
        $('.car__control-text').html(`<span class="car-info__slider-count--span">${this.counter}</span> / ${this.counterSum}`);
    }
}

function loading() {
    $(document).ready(function() {
        $('.load-page').fadeOut();
    });
}

function openFilter() {
    $('.filter__btn-setting').on('click', function (event) {
        if ($(window).width() < 1190) {
            $('.filter__form--mobile').fadeIn().css("display", "grid");
        } else {
            $('.filter__extra-inputs').fadeIn().css("display", "grid");
        }
    })
}

function openMenu() {
    $('.menu--mobile__block').on('click', '.menu--mobile__item', function() {
        // Знаходимо всі елементи .menu--mobile__subitem в межах поточного блоку
        $('.menu--mobile__subitem').hide();
        var subitems = $(this).siblings('.menu--mobile__subitem');

        // Тут ви можете використовувати змінну subitems для подальшої обробки ваших дій
        // Наприклад, вивести їх у консоль чи зробити інші дії.
        subitems.fadeIn();
    });
}