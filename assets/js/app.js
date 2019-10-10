/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');


// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
const $ = require('jquery');
require('bootstrap');

console.log('hello Webpack Encore! Edit me in assets/js/app.js');

var myMap = document.querySelector ("#map")
var paths = map.querySelectorAll ('.frenchMap a')
var links = map.querySelectorAll ('.listeRegions a')



if (NodeList.prototype.forEach === undefined) {
    NodeList.prototype.forEach = function (callback) {
        [].forEach.call (this, callback)
    }
}

paths.forEach(function(path) {
    path.addEventListener('mouseenter', function (e) {
        var id = this.id.replace ("FR-", "")
        document.querySelector ('#id').classList.add('is-active')
    })
});
