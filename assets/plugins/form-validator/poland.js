/** File generated by Grunt -- do not modify
 *  JQUERY-FORM-VALIDATOR
 *
 *  @version 2.3.79
 *  @website http://formvalidator.net/
 *  @author Victor Jonsson, http://victorjonsson.se
 *  @license MIT
 */
!function(a,b){"function"==typeof define&&define.amd?define(["jquery"],function(a){return b(a)}):"object"==typeof module&&module.exports?module.exports=b(require("jquery")):b(a.jQuery)}(this,function(a){!function(a){a.formUtils.registerLoadedModule("poland"),a.formUtils.addValidator({name:"plpesel",validatorFunction:function(a){var b=[1,3,7,9,1,3,7,9,1,3],c=0,d=0;if(/\d{11}/.test(a)&&11===a.length){for(var e=0;e<10;e++)c+=a[e]*b[e];if(c%10!==0&&(d=10-c%10),parseInt(a.charAt(10))===d)return!0}return!1},errorMessage:"",errorMessageKey:"badPlPesel"}),a.formUtils.addValidator({name:"plnip",validatorFunction:function(a){var b=[6,5,7,2,3,4,5,6,7],c=0;if(/\d{10}/.test(a)&&10===a.length){for(var d=0;d<9;d++)c+=a[d]*b[d];if(parseInt(a.charAt(9))===c%11)return!0}return!1},errorMessage:"",errorMessageKey:"badPlNip"}),a.formUtils.addValidator({name:"plregon",validatorFunction:function(a){var b=[8,9,2,3,4,5,6,7],c=[2,4,8,5,0,9,7,3,6,1,2,4,8],d=0,e=0;if(/(\d{14}|\d{9})/.test(a)&&(9===a.length||14===a.length)){for(var f=0;f<8;f++)d+=a[f]*b[f];if(d%11!==10&&(e=d%11),parseInt(a.charAt(8))===e){if(14!==a.length)return!0;for(d=0,f=0;f<13;f++)d+=a[f]*c[f];if(d%11!==10&&(e=d%11),parseInt(a.charAt(13))===e)return!0}}return!1},errorMessage:"",errorMessageKey:"badPlRegon"})}(a)});