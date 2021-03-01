const dotenv = require('dotenv')
const dotenvExpand = require('dotenv-expand')
const camelcaseKeys = require('camelcase-keys')
const pkg = require('./package.json')

const env = dotenv.config()
dotenvExpand(env)

module.exports = camelcaseKeys({ ...pkg, ...env })
