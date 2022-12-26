const solutionsCarousel = new Siema({
  selector: '.solutions-carousel',
  loop: true,
  draggable: false,
  perPage: {
    992: 2, // 2 items for viewport wider than 992px
    1200: 3 // 3 items for viewport wider than 1200px
  }
})

document.querySelector('.solutions-carousel-prev').addEventListener('click', () => solutionsCarousel.prev())
document.querySelector('.solutions-carousel-next').addEventListener('click', () => solutionsCarousel.next())
