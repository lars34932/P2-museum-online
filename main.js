// kijken of pagina geladen is
window.addEventListener("load", () => {

    // var gemaakt hoever gescrolled is
    let lastKnownScrollPosition = 0;

    const header=document.querySelector("#header");

    const headerHeight=header.clientHeight ;

    
    console.log(header, headerHeight);

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