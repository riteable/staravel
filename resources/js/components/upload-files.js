export default function () {
  return {
    remove (file, files) {
      for (let i = 0; i < files.length; i++) {
        if (files[i].name === file.name) {
          files.splice(i, 1)
          break
        }
      }
    }
  }
}
