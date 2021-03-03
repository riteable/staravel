import cookie from 'js-cookie'

export default {
  options: {
    id: null,
    cookie: 'theme',
    light: null,
    dark: null
  },
  current: null,
  el () {
    if (!this.options.id) {
      throw new Error('ID not specified.')
    }

    return document.getElementById(this.options.id)
  },
  init (options = {}) {
    this.options = { ...this.options, ...options }

    const el = this.el()

    this.current = el.getAttribute('href')
  },
  toggle () {
    const el = this.el()

    this.current = this.current === this.options.light
      ? this.options.dark
      : this.options.light

    el.setAttribute('href', this.current)
    cookie.set(this.options.cookie, this.current)
  }
}
