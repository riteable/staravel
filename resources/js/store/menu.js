export default function () {
  return {
    isActive: false,
    toggle () {
      this.isActive = !this.isActive
    }
  }
}
