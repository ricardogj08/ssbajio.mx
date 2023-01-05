const headerNav = document.querySelector('nav')
const sectionToObserve = document.querySelector('.observable')

const observableOptions = {
  rooMargin: '-200px 0 0 0'
}

const sectionObserver = new IntersectionObserver((entries, sectionObserver) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      console.log('Agregar el color')
      headerNav.classList.add('bg-red-400')
    } else {
      console.log('Quitar el color')
      headerNav.classList.remove('bg-red-400')
    }
  })
}, observableOptions)

sectionObserver.observe(sectionToObserve)
