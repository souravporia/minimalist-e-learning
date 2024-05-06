<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /*
! tailwindcss v3.0.24 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
*/

html {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-size: 1em;
  /* 2 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  line-height: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input:-ms-input-placeholder, textarea:-ms-input-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/*
Ensure the default browser behavior of the `hidden` attribute.
*/

[hidden] {
  display: none;
}

*, ::before, ::after {
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

.absolute {
  position: absolute;
}

.relative {
  position: relative;
}

.right-0 {
  right: 0px;
}

.bottom-0 {
  bottom: 0px;
}

.top-0 {
  top: 0px;
}

.left-0 {
  left: 0px;
}

.z-20 {
  z-index: 20;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.-mx-4 {
  margin-left: -1rem;
  margin-right: -1rem;
}

.-mx-2 {
  margin-left: -0.5rem;
  margin-right: -0.5rem;
}

.my-10 {
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}

.mr-6 {
  margin-right: 1.5rem;
}

.mb-6 {
  margin-bottom: 1.5rem;
}

.-mb-64 {
  margin-bottom: -16rem;
}

.-mr-48 {
  margin-right: -12rem;
}

.-mr-40 {
  margin-right: -10rem;
}

.mt-32 {
  margin-top: 8rem;
}

.-ml-10 {
  margin-left: -2.5rem;
}

.-mt-10 {
  margin-top: -2.5rem;
}

.-ml-32 {
  margin-left: -8rem;
}

.mt-12 {
  margin-top: 3rem;
}

.mb-10 {
  margin-bottom: 2.5rem;
}

.mb-4 {
  margin-bottom: 1rem;
}

.mr-4 {
  margin-right: 1rem;
}

.mb-1 {
  margin-bottom: 0.25rem;
}

.mb-12 {
  margin-bottom: 3rem;
}

.mb-2 {
  margin-bottom: 0.5rem;
}

.ml-auto {
  margin-left: auto;
}

.mr-2 {
  margin-right: 0.5rem;
}

.mt-10 {
  margin-top: 2.5rem;
}

.block {
  display: block;
}

.inline-block {
  display: inline-block;
}

.flex {
  display: flex;
}

.hidden {
  display: none;
}

.h-40 {
  height: 10rem;
}

.h-5 {
  height: 1.25rem;
}

.h-20 {
  height: 5rem;
}

.h-10 {
  height: 2.5rem;
}

.h-2 {
  height: 0.5rem;
}

.h-32 {
  height: 8rem;
}

.h-4 {
  height: 1rem;
}

.h-8 {
  height: 2rem;
}

.h-24 {
  height: 6rem;
}

.h-6 {
  height: 1.5rem;
}

.min-h-screen {
  min-height: 100vh;
}

.w-full {
  width: 100%;
}

.w-40 {
  width: 10rem;
}

.w-5 {
  width: 1.25rem;
}

.w-20 {
  width: 5rem;
}

.w-32 {
  width: 8rem;
}

.w-10 {
  width: 2.5rem;
}

.w-2\/3 {
  width: 66.666667%;
}

.w-1\/4 {
  width: 25%;
}

.w-64 {
  width: 16rem;
}

.w-1\/2 {
  width: 50%;
}

.w-8 {
  width: 2rem;
}

.w-16 {
  width: 4rem;
}

.w-1\/3 {
  width: 33.333333%;
}

.w-12 {
  width: 3rem;
}

.w-6 {
  width: 1.5rem;
}

.w-4 {
  width: 1rem;
}

.w-24 {
  width: 6rem;
}

.max-w-4xl {
  max-width: 56rem;
}

.flex-1 {
  flex: 1 1 0%;
}

.grow {
  flex-grow: 1;
}

.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.flex-col {
  flex-direction: column;
}

.flex-wrap {
  flex-wrap: wrap;
}

.items-center {
  align-items: center;
}

.justify-end {
  justify-content: flex-end;
}

.justify-between {
  justify-content: space-between;
}

.overflow-hidden {
  overflow: hidden;
}

.rounded-lg {
  border-radius: 0.5rem;
}

.rounded-full {
  border-radius: 9999px;
}

.rounded-t-lg {
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}

.rounded-bl-lg {
  border-bottom-left-radius: 0.5rem;
}

.border-b {
  border-bottom-width: 1px;
}

.border-gray-100 {
  --tw-border-opacity: 1;
  border-color: rgb(243 244 246 / var(--tw-border-opacity));
}

.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-gray-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.bg-blue-800 {
  --tw-bg-opacity: 1;
  background-color: rgb(30 64 175 / var(--tw-bg-opacity));
}

.bg-yellow-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(234 179 8 / var(--tw-bg-opacity));
}

.bg-blue-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
}

.bg-gray-300 {
  --tw-bg-opacity: 1;
  background-color: rgb(209 213 219 / var(--tw-bg-opacity));
}

.bg-green-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(22 163 74 / var(--tw-bg-opacity));
}

.bg-blue-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(37 99 235 / var(--tw-bg-opacity));
}

.bg-orange-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(251 146 60 / var(--tw-bg-opacity));
}

.bg-gray-100 {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.bg-green-400 {
  --tw-bg-opacity: 1;
  background-color: rgb(74 222 128 / var(--tw-bg-opacity));
}

.bg-orange-600 {
  --tw-bg-opacity: 1;
  background-color: rgb(234 88 12 / var(--tw-bg-opacity));
}

.fill-current {
  fill: currentColor;
}

.p-6 {
  padding: 1.5rem;
}

.p-2 {
  padding: 0.5rem;
}

.p-4 {
  padding: 1rem;
}

.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}

.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.py-16 {
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.py-6 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.px-8 {
  padding-left: 2rem;
  padding-right: 2rem;
}

.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.pt-2 {
  padding-top: 0.5rem;
}

.text-center {
  text-align: center;
}

.text-right {
  text-align: right;
}

.font-sans {
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.font-bold {
  font-weight: 700;
}

.leading-tight {
  line-height: 1.25;
}

.text-gray-800 {
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.text-gray-600 {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

.text-gray-500 {
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.text-gray-700 {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.text-blue-500 {
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow {
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.filter {
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.hover\:bg-gray-100:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.hover\:text-gray-600:hover {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

@media (min-width: 640px) {
  .sm\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }
}

@media (min-width: 768px) {
  .md\:mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .md\:block {
    display: block;
  }

  .md\:flex {
    display: flex;
  }

  .md\:hidden {
    display: none;
  }

  .md\:max-w-6xl {
    max-width: 72rem;
  }

  .md\:max-w-2xl {
    max-width: 42rem;
  }

  .md\:items-center {
    align-items: center;
  }

  .md\:justify-between {
    justify-content: space-between;
  }

  .md\:overflow-hidden {
    overflow: hidden;
  }

  .md\:py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .md\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .md\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }
}

  </style>
</head>
<body>
    <div class="font-sans bg-white flex flex-col min-h-screen w-full">
        <div>
        <div class="bg-gray-200 px-4 py-4">
          <div
            class="w-full md:max-w-6xl md:mx-auto md:flex md:items-center md:justify-between"
          >
            <div>
              <a href="#" class="inline-block py-2 text-gray-800 text-2xl font-bold"
                >ProSolver</a
              >
            </div>       
            <div class="hidden md:block">
              <a
                href="<?= base_url('auth/login'); ?>"
                class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6"
                >Login</a
              >
              <a
                href="<?= base_url('auth/register'); ?>"
                class="inline-block py-2 px-4 text-gray-700 bg-white hover:bg-gray-100 rounded-lg"
                >Sign Up</a
              >
            </div>
          </div>
        </div>
        
        <div class="bg-gray-200 md:overflow-hidden">
          <div class="px-4 py-16">
            <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
              <h1
                class="font-bold text-gray-700 text-xl sm:text-2xl md:text-5xl leading-tight mb-6"
              >
                An attempt to enhance E - Learning using web technologies
              </h1>
        
              <p class="text-gray-600 md:text-xl md:px-18">
              Hack - O - Vation CGEC 2022 By "405 Found"
              </p>
        
              <div
                class="hidden md:block h-40 w-40 rounded-full bg-blue-800 absolute right-0 bottom-0 -mb-64 -mr-48"
              ></div>
        
              <div
                class="hidden md:block h-5 w-5 rounded-full bg-yellow-500 absolute top-0 right-0 -mr-40 mt-32"
              ></div>
            </div>
          </div>
        
          <svg
            class="fill-current bg-gray-200 text-white hidden md:block"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320"
          >
            <path
              fill-opacity="1"
              d="M0,64L120,85.3C240,107,480,149,720,149.3C960,149,1200,107,1320,85.3L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"
            ></path>
          </svg>
        </div>
        
        <div
          class="max-w-4xl mx-auto bg-white shadow-lg relative z-20 hidden md:block"
          style="margin-top: -320px; border-radius: 20px;"
        >
          <div
            class="h-20 w-20 rounded-full bg-yellow-500 absolute top-0 left-0 -ml-10 -mt-10"
            style="z-index: -1;"
          ></div>
        
          <div
            class="h-5 w-5 rounded-full bg-blue-500 absolute top-0 left-0 -ml-32 mt-12"
            style="z-index: -1;"
          ></div>
        
          <div class="h-10 bg-white rounded-t-lg border-b border-gray-100"></div>
          <div class="flex" style="height: 550px;">
            <div class="w-32 bg-gray-200 p-6 overflow-hidden rounded-bl-lg">
              <div class="text-center mb-10">
                <div class="w-10 h-10 rounded-full bg-blue-800 mb-4 mx-auto"></div>
                <div class="h-2 rounded-full bg-blue-800"></div>
              </div>
        
              <div class="text-center mb-10">
                <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                <div class="h-2 rounded-full bg-gray-300"></div>
              </div>
        
              <div class="text-center mb-10">
                <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                <div class="h-2 rounded-full bg-gray-300"></div>
              </div>
        
              <div class="text-center">
                <div class="w-10 h-10 rounded-full bg-gray-300 mb-4 mx-auto"></div>
                <div class="h-2 rounded-full bg-gray-300"></div>
              </div>
            </div>
            <div class="flex-1 py-6 px-8">
              <div class="flex flex-wrap -mx-4">
                <div class="w-2/3 px-4">
                  <div class="flex flex-wrap -mx-4 mb-10">
                    <div class="w-1/4 px-4">
                      <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                        <div
                          class="w-10 h-10 rounded-full bg-green-600 mb-4 mx-auto"
                        ></div>
                        <div class="h-2 rounded-full bg-gray-200"></div>
                      </div>
                    </div>
                    <div class="w-1/4 px-4">
                      <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                        <div
                          class="w-10 h-10 rounded-full bg-blue-600 mb-4 mx-auto"
                        ></div>
                        <div class="h-2 rounded-full bg-gray-200"></div>
                      </div>
                    </div>
                    <div class="w-1/4 px-4">
                      <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                        <div
                          class="w-10 h-10 rounded-full bg-orange-400 mb-4 mx-auto"
                        ></div>
                        <div class="h-2 rounded-full bg-gray-200"></div>
                      </div>
                    </div>
                    <div class="w-1/4 px-4">
                      <div class="text-center mb-10 bg-white shadow rounded-lg p-6">
                        <div
                          class="w-10 h-10 rounded-full bg-blue-800 mb-4 mx-auto"
                        ></div>
                        <div class="h-2 rounded-full bg-gray-200"></div>
                      </div>
                    </div>
                  </div>
        
                  <div class="h-32 percentage mb-10 pt-2">
                    <div class="h-4 bg-gray-200 w-64 mb-4 block"></div>
                    <div class="h-4 bg-gray-200 w-32 mb-4 block"></div>
                    <div class="h-4 bg-gray-200 w-40 mb-4 block"></div>
                    <div class="h-4 bg-gray-200 w-20 mb-4 block"></div>
                  </div>
        
                  <div class="w-full flex flex-wrap mb-6">
                    <div class="w-1/2">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                        <div>
                          <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-1/2">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                        <div>
                          <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <div class="w-full flex flex-wrap">
                    <div class="w-1/2">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                        <div>
                          <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-1/2">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-200 mr-4"></div>
                        <div>
                          <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-1/3 px-4">
                  <div class="rounded-lg shadow-lg p-6">
                    <div class="block w-12 h-2 rounded-full bg-gray-200 mb-6"></div>
        
                    <svg
                      height="150"
                      width="150"
                      viewBox="0 0 20 20"
                      class="mx-auto mb-12"
                    >
                      <circle r="10" cx="10" cy="10" fill="#4299e1" />
                      <circle
                        r="5"
                        cx="10"
                        cy="10"
                        fill="transparent"
                        stroke="#2b6cb0"
                        stroke-width="10"
                        stroke-dasharray="11 31.4"
                        transform="rotate(-90) translate(-20)"
                      />
                    </svg>
        
                    <div class="flex flex-wrap -mx-2 mb-10">
                      <div class="w-1/3 px-2">
                        <div class="block h-2 rounded-full bg-gray-200"></div>
                      </div>
                      <div class="w-1/3 px-2">
                        <div class="block h-2 rounded-full bg-gray-200"></div>
                      </div>
                      <div class="w-1/3 px-2">
                        <div class="block h-2 rounded-full bg-gray-200"></div>
                      </div>
                    </div>
                  </div>
        
                  <div class="flex justify-between my-10">
                    <div>
                      <div class="h-2 w-10 bg-gray-300 rounded-full mb-2"></div>
                      <div class="h-2 w-16 bg-gray-300 rounded-full mb-2"></div>
                      <div class="h-2 w-8 bg-gray-300 rounded-full"></div>
                    </div>
                    <div>
                      <div
                        class="ml-auto h-2 w-5 bg-gray-300 rounded-full mb-2"
                      ></div>
                      <div
                        class="ml-auto h-2 w-6 bg-gray-300 rounded-full mb-2"
                      ></div>
                      <div class="ml-auto h-2 w-8 bg-gray-300 rounded-full"></div>
                    </div>
                  </div>
        
                  <div class="text-right flex justify-end">
                    <div class="rounded-lg h-8 w-20 px-4 bg-gray-200 mr-2"></div>
                    <div class="rounded-lg h-8 w-20 px-4 bg-green-400"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="px-4 md:hidden">
          <div
            class="-mt-10 max-w-4xl mx-auto bg-white shadow-lg relative z-20"
            style="border-radius: 20px;"
          >
            <div class="h-10 bg-white rounded-t-lg border-b border-gray-100"></div>
            <div class="flex" style="height: 340px;">
              <div class="w-16 bg-gray-200 px-2 py-6 overflow-hidden rounded-bl-lg">
                <div class="text-center mb-6">
                  <div class="w-4 h-4 rounded-full bg-blue-800 mb-2 mx-auto"></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-blue-800"></div>
                </div>
                <div class="text-center mb-6">
                  <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                </div>
                <div class="text-center mb-6">
                  <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                </div>
                <div class="text-center">
                  <div class="w-4 h-4 rounded-full bg-gray-300 mb-2 mx-auto"></div>
                  <div class="h-2 w-8 mx-auto rounded-full bg-gray-300"></div>
                </div>
              </div>
              <div class="flex-1 py-6 px-4">
                <div class="flex flex-wrap -mx-2">
                  <div class="w-1/3 px-2">
                    <div
                      class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3"
                    >
                      <div
                        class="w-4 h-4 rounded-full bg-green-600 mb-2 mx-auto"
                      ></div>
                      <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                    </div>
                  </div>
                  <div class="w-1/3 px-2">
                    <div
                      class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3"
                    >
                      <div
                        class="w-4 h-4 rounded-full bg-blue-600 mb-2 mx-auto"
                      ></div>
                      <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                    </div>
                  </div>
                  <div class="w-1/3 px-2">
                    <div
                      class="text-center mb-6 bg-white shadow rounded-lg px-2 py-3"
                    >
                      <div
                        class="w-4 h-4 rounded-full bg-orange-600 mb-2 mx-auto"
                      ></div>
                      <div class="h-2 w-8 mx-auto rounded-full bg-gray-200"></div>
                    </div>
                  </div>
                </div>
        
                <div class="flex flex-wrap -mx-2 mb-6">
                  <div class="w-1/2 px-2">
                    <div class="shadow h-24 p-2 rounded-lg">
                      <div class="h-20 percentage pt-2">
                        <div class="h-2 bg-gray-200 w-24 mb-2 block"></div>
                        <div class="h-2 bg-gray-200 w-12 mb-2 block"></div>
                        <div class="h-2 bg-gray-200 w-20 mb-2 block"></div>
                        <div class="h-2 bg-gray-200 w-8 mb-2 block"></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-1/2 px-2">
                    <div class="rounded-lg shadow px-2 py-2">
                      <div
                        class="block w-8 h-2 rounded-full bg-gray-200 mb-2"
                      ></div>
        
                      <div class="mb-2">
                        <svg
                          height="50"
                          width="50"
                          viewBox="0 0 20 20"
                          class="mx-auto"
                        >
                          <circle r="10" cx="10" cy="10" fill="#ddd" />
                          <circle
                            r="5"
                            cx="10"
                            cy="10"
                            fill="transparent"
                            stroke="#eee"
                            stroke-width="10"
                            stroke-dasharray="11 31.4"
                            transform="rotate(-90) translate(-20)"
                          />
                        </svg>
                      </div>
        
                      <div class="flex flex-wrap -mx-2">
                        <div class="w-1/3 px-2">
                          <div class="block h-2 rounded-full bg-gray-200"></div>
                        </div>
                        <div class="w-1/3 px-2">
                          <div class="block h-2 rounded-full bg-gray-200"></div>
                        </div>
                        <div class="w-1/3 px-2">
                          <div class="block h-2 rounded-full bg-gray-200"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="w-full flex flex-wrap mb-2">
                  <div class="w-1/2">
                    <div class="flex items-center">
                      <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                      <div>
                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-1/2">
                    <div class="flex items-center">
                      <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                      <div>
                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="w-full flex flex-wrap mb-6">
                  <div class="w-1/2">
                    <div class="flex items-center">
                      <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                      <div>
                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-1/2">
                    <div class="flex items-center">
                      <div class="h-4 w-4 rounded-full bg-gray-200 mr-4"></div>
                      <div>
                        <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                        <div class="h-2 w-6 bg-gray-100 rounded-full"></div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="text-right flex justify-end">
                  <div class="rounded-lg h-6 w-16 px-4 bg-gray-200 mr-2"></div>
                  <div class="rounded-lg h-6 w-16 px-4 bg-green-400"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
</body>
</html>