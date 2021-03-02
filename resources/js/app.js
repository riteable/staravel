import 'alpinejs'

window.mainMenuToggle = function () {
  return {
    isActive: false,
    toggle () {
      this.isActive = !this.isActive
    }
  }
}
