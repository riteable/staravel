import '@ryangjchandler/spruce'
import 'alpinejs'

import cookie from 'js-cookie'

window.Spruce.store('menu', {
  isActive: false,
  toggle () {
    this.isActive = !this.isActive
  }
})

window.Spruce.store('theme', {
  cookie: 'preferred-theme',
  current: null,
  alt: null,
  el () {
    return document.getElementById('stylesheet-theme')
  },
  init () {
    const preference = cookie.get(this.cookie)
    const el = this.el()

    this.current = el.getAttribute('href')
    this.alt = el.dataset.alt

    if (preference && preference !== this.current) {
      this.toggle()
    }
  },
  toggle () {
    const current = this.current
    const alt = this.alt

    this.current = alt
    this.alt = current

    const el = this.el()

    el.setAttribute('href', this.current)
    el.dataset.alt = this.alt

    cookie.set(this.cookie, this.current)
  }
})
