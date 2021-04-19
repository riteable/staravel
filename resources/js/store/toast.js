export default function () {
  return {
    text: '',
    isActive: false,
    type: null,
    options: {
      isDismissable: true,
      timeout: 5000
    },
    show (text, type = null, options = {}) {
      this.isActive = true
      this.text = text
      this.type = type
      this.options = { ...this.options, ...options }

      if (this.options.timeout) {
        setTimeout(() => this.hide(), this.options.timeout)
      }
    },
    hide () {
      this.isActive = false
    }
  }
}
