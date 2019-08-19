# Task

Entry level task is based on HTML + TWIG, CSS (SCSS), Bootstrap 4 boilerplate.

HTML code is located in `views/pages/index.html`, which dynamically fetch Bootstrap 4 dependencies from a CDN. Image assets are located in `assets/images` directory. Any changes to CSS should be placed within `assets/scss/custom.scss` and custom JS code within `assets/js/custom.js`. Furthermore, if you want to place somewhere SCSS variables, use file `assets/variables/variables.scss`. 

### Prerequisites

1. Node.js `10.16.0` is installed locally. [Details](https://nodejs.org/en/).
2. PHP `^7.1` is installed locally, PHP built-in server is enabled. [Details](https://www.php.net/manual/en/features.commandline.webserver.php).


**Requirements**

* The component is expected to be pixel perfect implementation of the [prototype](https://xd.adobe.com/spec/9981f5d9-8668-4cc6-526f-53b0e436b63e-efb0/). 
* The component should be optimized for all sized devices starting at 320px width. 
* The component should be placed in standard sized container.
* Bootstrap modal should be displayed after click on the button.

**Testing**

Testing procedure for this specific task covers latest version of Chrome with following screen widths: 1280px, 768px, 640px, 320px. You can get extra points for pointing out solutions that won't work in IE11 with suggestions of how to resolve them – no actual work is required to fix issues though.

## Workflow

1. Install all required dependencies - `npm install`
2. Start gulp task - `gulp serve` - to spin up a PHP server and a local environment for development purposes.