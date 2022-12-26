const sectorsCarousel = new Siema({
  selector: '.sectors-carousel',
  loop: true,
  draggable: false,
  perPage: {
    992: 2, // 2 items for viewport wider than 992px
    1200: 3, // 3 items for viewport wider than 1200px
    1400: 4 // 4 items for viewport wider than 1400px
  }
})
document.querySelector('.sectors-carousel-prev').addEventListener('click', () => sectorsCarousel.prev())
document.querySelector('.sectors-carousel-next').addEventListener('click', () => sectorsCarousel.next())
