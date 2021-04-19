import 'regenerator-runtime/runtime'
import '@ryangjchandler/spruce'
import 'alpinejs'

import menuStore from './store/menu'
import themeStore from './store/theme'
import toastStore from './store/toast'

window.Spruce.store('menu', menuStore())
window.Spruce.store('theme', themeStore())
window.Spruce.store('toast', toastStore())
