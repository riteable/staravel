import '@ryangjchandler/spruce'
import 'alpinejs'

window.Spruce.store('menu', {
  isActive: false,
  toggle () {
    this.isActive = !this.isActive
  }
})
