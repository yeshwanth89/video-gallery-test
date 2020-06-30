module.exports = {
  root: true,
  env: {
    browser: true,
    es6: true,
    node: true
  },
  parserOptions: {
    parser: 'babel-eslint'
  },
  extends: [
    'airbnb-base',
    '@nuxtjs',
    'plugin:vue/recommended'
  ],
  plugins: [],
  // add your custom rules here
  rules: {
    "import/extensions": 0,
    'import/no-extraneous-dependencies': [
      'error',
      {
        devDependencies: [
          '.storybook/**',
          'components/**/**.stories.js',
          'stories/**/**.js'
        ]
      }
    ],
    'brace-style': ["error", "1tbs", { "allowSingleLine": true }],
    'comma-dangle': ['error', {arrays: 'always-multiline', objects: 'always-multiline'}],
    'max-len': ['warn', 100, 2, {ignoreStrings: true, ignoreTemplateLiterals: true}],
    'no-plusplus': ['error', {allowForLoopAfterthoughts: true}],
    'prefer-object-spread': 'error',
    'semi': ['error', 'always'],
    'space-before-function-paren': ['error', {
      'anonymous': 'never',
      'named': 'never',
      'asyncArrow': 'always'
    }],
  }
}
