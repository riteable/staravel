import '@ryangjchandler/spruce'
import 'alpinejs'

import menuStore from './store/menu'
import themeStore from './store/theme'
import toast from './components/toast'

window.Spruce.store('menu', menuStore)
window.Spruce.store('theme', themeStore)

window.components = {
  toast
}
