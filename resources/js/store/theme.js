import cookie from 'js-cookie'

export default function () {
  return {
    options: {
      id: null,
      cookie: 'theme',
      expires: 365
    },
    light: null,
    dark: null,
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
      this.light = el.dataset.light
      this.dark = el.dataset.dark
    },
    isLight () {
      return this.current === this.light
    },
    isDark () {
      return this.current === this.dark
    },
    toggle () {
      const el = this.el()
      let theme = null

      if (this.current === this.light) {
        this.current = this.dark
        theme = 'dark'
      } else {
        this.current = this.light
        theme = 'light'
      }

      el.setAttribute('href', this.current)
      cookie.set(this.options.cookie, theme, {
        expires: this.options.expires
      })
    }
  }
}
