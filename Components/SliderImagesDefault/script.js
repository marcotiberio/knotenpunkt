import $ from 'jquery'
import 'core-js/es/number'
import Swiper, { Navigation, A11y, Autoplay } from 'swiper/swiper.esm'
import 'swiper/swiper-bundle.css'

Swiper.use([Navigation, A11y, Autoplay])

class SliderImagesDefault extends window.HTMLDivElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.props = this.getInitialProps()
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  getInitialProps () {
    let data = {}
    try {
      data = JSON.parse($('script[type="application/json"]', this).text())
    } catch (e) {}
    return data
  }

  resolveElements () {
    this.$slider = $('[data-slider]', this)
    this.$buttonNext = $('[data-slider-button="next"]', this)
    this.$buttonPrev = $('[data-slider-button="prev"]', this)
    this.$showInfo = $('.showInfo', this)
    this.$projectInfo = $('.description', this)
    this.$wrapper = $('.projectInfo-wrapper', this)
  }

  bindFunctions () {
    this.showInfo = this.showInfo.bind(this)
    // this.hideInfo = this.showInfo.bind(this)
  }

  bindEvents () {
    this.$showInfo.on('click', this.showInfo)
    // this.$closeInfo.on('click', this.hideInfo)
  }

  connectedCallback () {
    this.initSlider()
  }

  initSlider () {
    const { options } = this.props
    const config = {
      navigation: {
        nextEl: this.$buttonNext.get(0),
        prevEl: this.$buttonPrev.get(0)
      },
      a11y: options.a11y
    }
    if (options.autoplay && options.autoplaySpeed) {
      config.autoplay = {
        delay: options.autoplaySpeed
      }
    }
    this.slider = new Swiper(this.$slider.get(0), config)
  }

  showInfo (e) {
    this.$projectInfo.toggleClass('description--visible')
    this.$showInfo.toggleClass('description--visible')
    this.$wrapper.toggleClass('description--visible')
    this.$showInfo.text(function (i, v) {
      return v === 'More Information' ? 'Less Information' : 'More Information'
    })
    // this.$closeInfo.toggle()
    // this.$showInfo.toggle()
  }

  // hideInfo (e) {
  //   console.log('search form close')
  //   this.$searchForm.toggleClass('searchForm-show')
  //   this.$buttonClose.toggle()
  //   this.$button.toggle()
  // }
}

window.customElements.define('flynt-slider-images-default', SliderImagesDefault, { extends: 'div' })
