// kijken of pagina geladen is
window.addEventListener("load", () => {

    // var gemaakt hoever gescrolled is
    let lastKnownScrollPosition = 0;

    const header=document.querySelector("#header");

    const headerHeight=header.clientHeight ;

    // kijken of er gescrolled word
    document.addEventListener("scroll", () => {

        // var aanpassen naar scroll punt
        lastKnownScrollPosition = window.scrollY;

        if (headerHeight <= lastKnownScrollPosition){
            header.classList.add("header--fixed");
        }

        else{
            header.classList.remove("header--fixed");
        }

            console.log(lastKnownScrollPosition);
      });


  });




    //   JAVASCRIPT VOOR FOTO SWIPER
      const swiper = new Swiper('.foto-slider', {
      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

      });

      });
  });

