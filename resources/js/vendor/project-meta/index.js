const { resolve } = require('path')
const dotenv = require('dotenv')
const dotenvExpand = require('dotenv-expand')
const camelcaseKeys = require('camelcase-keys')
const sassExtract = require('sass-extract')

module.exports = (options = {}) => {
  const defaults = {
    package: process.cwd() + '/package.json',
    env: process.cwd() + '/.env',
    sass: false
  }
  const settings = { ...defaults, ...options }

  let pkg = {}
  let env = {}
  let sass = {}
  const output = {}

  if (settings.package) {
    pkg = require(resolve(settings.package))
    output.package = camelcaseKeys(pkg)
  }

  if (settings.env) {
    env = dotenv.config({ path: resolve(settings.env) })
    dotenvExpand(env)
    output.env = camelcaseKeys(env.parsed)
  }

  if (settings.sass) {
    sass = sassExtract.renderSync({
      file: resolve(settings.sass)
    })
    output.sass = camelcaseKeys(sass.vars.global)
  }

  return output
}
