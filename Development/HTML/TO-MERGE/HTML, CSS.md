# HTML
- `<mark>` to <mark>highlight text.</mark>
- `<a href="/path/to/file" download>Download</a>`
- `.wep` file format to images are more performance compliment and smaller.
- `<input type="text" id="" spellcheck="true">`
- Video Poster: `<video poster="path/to/image">`


# tailwindcss
- **tailwindcss.com** * A utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design, directly in your markup.

## Install
```
 npm install -g tailwindcss
 npx tailwindcss
```

### Plugins
- tailwindcss-debug-screens, Place in `<body class="debug-screens"`

## Create a Configuration File

If you'd like to customize your Tailwind installation, generate a config file for your project using the Tailwind CLI utility included when you install the `tailwindcss` npm package:
```
  npx tailwindcss init
```

```
 // tailwind.config.js
 module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
}
```

## Links

- [**Flexible Styling without the Fuss**](https://pragprog.com/titles/tailwind/modern-css-with-tailwind/) * by Noel Rappin