# MB Fonts

# Web Fonts

## Font Weights: 100 - 900

```
  .font-hairline  font-weight: 100;
  .font-thin  font-weight: 200;
  .font-light   font-weight: 300;
  .font-normal  font-weight: 400;
  .font-medium  font-weight: 500;
  .font-semibold  font-weight: 600;
  .font-bold  font-weight: 700;
  .font-extrabold   font-weight: 800;
  .font-black   font-weight: 900;
````

## CSS
`@import url('https://rsms.me/inter/inter.css');`
`html { font-family: 'Inter', sans-serif; }`
`@supports (font-variation-settings: normal) {`
`  html { font-family: 'Inter var', sans-serif; }`
`}`

Below is the code to define font families (for normal, bold, bold-italic, italic) typefaces. It is assumed, that there are 4 *.woff files (for mentioned typefaces), placed in fonts subdirectory.
In CSS code:
**The**@font-face** rule should be added to the stylesheet before any styles.**

## LearningUkulele.com Example

### Using the same font-family name keeps things simple and provides a fallback

- [font-face tip](https://www.456bereastreet.com/archive/201012/font-face_tip_define_font-weight_and_font-style_to_keep_your_css_simple/) * By changing the font-weight and font-style declarations of each @font-face rule to match each font’s properties, and using the same font-family name for each rule, we will no longer need to be overly specific in our CSS:
```
@font-face {
	font-family: 'DroidSerif';
	src: url('DroidSerif-Regular-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}
@font-face {
	font-family: 'DroidSerif';
	src: url('DroidSerif-Italic-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: italic;
}
@font-face {
	font-family: 'DroidSerif';
	src: url('DroidSerif-Bold-webfont.ttf') format('truetype');
	font-weight: bold;
	font-style: normal;
}
@font-face {
	font-family: 'DroidSerif';
	src: url('DroidSerif-BoldItalic-webfont.ttf') format('truetype');
	font-weight: bold;
	font-style: italic;
}
```
## In Tailwind
The theme section of your tailwind.config.js file is where you define your project’s color palette, type scale, font stacks, breakpoints, border radius values, and more.

- [Theme Configuration - Tailwind CSS](https://tailwindcss.com/docs/theme/)
