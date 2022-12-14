const headerNav = document.querySelector('header nav')
const sectionToObserve = document.querySelector('.observable')

const observableOptions = {
  rootMargin: '-64px 0px 0px 0px'
}

const sectionObserver = new IntersectionObserver((entries, sectionObserver) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      headerNav.classList.add('bg-transparent')
      headerNav.classList.remove('bg-white', 'shadow-md')
      headerNav.querySelector('.bar').classList.remove('text-ssbajio-gray-dark-1')
      headerNav.querySelector('.bar').classList.add('text-white')
    } else {
      headerNav.classList.remove('bg-transparent')
      headerNav.classList.add('bg-white', 'shadow-md')
      headerNav.querySelector('.bar').classList.remove('text-white')
      headerNav.querySelector('.bar').classList.add('text-ssbajio-gray-dark-1')
    }
  })
}, observableOptions)

sectionObserver.observe(sectionToObserve)
