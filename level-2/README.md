# Task

Entry level task is based on HTML, CSS (SCSS), Bootstrap 4 boilerplate.

HTML code is located in `index.html`, which dynamically fetch Bootstrap 4 dependencies from a CDN. Image assets are located in `images` directory. Any changes to CSS should be placed within `assets/custom.scss` and custom JS code within `assets/custom.js`. Furthermore, if you want to place somewhere SCSS variables, use file `variables/variables.scss`. 

**Requirements**

* The component is expected to be pixel perfect implementation of the [prototype](https://xd.adobe.com/spec/9981f5d9-8668-4cc6-526f-53b0e436b63e-efb0/). 
* The component should be optimized for all sized devices starting at 320px width. 
* The component should be placed in standard sized container.
* Button should have bootstrap tooltip with random description

**Testing**

Testing procedure for this specific task covers latest version of Chrome with following screen widths: 1280px, 768px, 640px, 320px. You can get extra points for pointing out solutions that won't work in IE11 with suggestions of how to resolve them – no actual work is required to fix issues though.

## Workflow

1. Install all required dependencies - `npm install`
2. Start main gulp task - `gulp` - it will compile SCSS automatically after each change