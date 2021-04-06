export default function (opts = {}) {
  return {
    browse (id) {
      document.getElementById(id).click()
    }
  }
}
