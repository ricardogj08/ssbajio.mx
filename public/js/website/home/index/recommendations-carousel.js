const recommendationsCarousel = new Siema({
  selector: '.recommendations-carousel',
  loop: true,
  draggable: false,
  duration: 200,
  perPage: {
    768: 2, // 2 items for viewport wider than 992px
    1200: 3, // 3 items for viewport wider than 1200px
    1400: 4 // 4 items for viewport wider than 1400px
  }
})

// listen for keydown event
setInterval(() => recommendationsCarousel.next(), 2000)
