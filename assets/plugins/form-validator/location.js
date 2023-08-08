/** File generated by Grunt -- do not modify
 *  JQUERY-FORM-VALIDATOR
 *
 *  @version 2.3.79
 *  @website http://formvalidator.net/
 *  @author Victor Jonsson, http://victorjonsson.se
 *  @license MIT
 */
!function(a,b){"function"==typeof define&&define.amd?define(["jquery"],function(a){return b(a)}):"object"==typeof module&&module.exports?module.exports=b(require("jquery")):b(a.jQuery)}(this,function(a){!function(a){a.formUtils.registerLoadedModule("location"),a.formUtils.addValidator({name:"country",validatorFunction:function(b){return a.inArray(b.toLowerCase(),this.countries)>-1},countries:["afghanistan","albania","algeria","american samoa","andorra","angola","anguilla","antarctica","antigua and barbuda","argentina","armenia","aruba","australia","austria","azerbaijan","bahamas","bahrain","bangladesh","barbados","belarus","belgium","belize","benin","bermuda","bhutan","bolivia","bonaire","bosnia and herzegovina","botswana","bouvet island","brazil","british indian ocean territory","brunei darussalam","bulgaria","burkina faso","burundi","cabo verde","cambodia","cameroon","canada","cayman islands","central african republic","chad","chile","china","christmas island","cocos islands","colombia","comoros","democratic republic of the congo","congo","cook islands","costa rica","côte d'ivoire","croatia","cuba","curaçao","cyprus","czechia","denmark","djibouti","dominica","dominican republic","ecuador","egypt","el salvador","equatorial guinea","eritrea","estonia","ethiopia","falkland islands","faroe islands","fiji","finland","france","french guiana","french polynesia","french southern territories","gabon","gambia","georgia","germany","ghana","gibraltar","greece","greenland","grenada","guadeloupe","guam","guatemala","guernsey","guinea","guinea-bissau","guyana","haiti","heard island and mcdonald islands","honduras","hong kong","hungary","iceland","india","indonesia","iran","iraq","ireland","isle of man","israel","italy","jamaica","japan","jersey","jordan","kazakhstan","kenya","kiribati","north korea","south korea","kuwait","kyrgyzstan","laos","latvia","lebanon","lesotho","liberia","libya","liechtenstein","lithuania","luxembourg","macao","macedonia","madagascar","malawi","malaysia","maldives","mali","malta","marshall islands","martinique","mauritania","mauritius","mayotte","mexico","micronesia","moldova","monaco","mongolia","montenegro","montserrat","morocco","mozambique","myanmar","namibia","nauru","nepal","netherlands","new caledonia","new zealand","nicaragua","niger","nigeria","niue","norfolk island","northern mariana islands","norway","oman","pakistan","palau","palestine","panama","papua new guinea","paraguay","peru","philippines","pitcairn","poland","portugal","puerto rico","qatar","réunion","romania","russia","rwanda","saint barthélemy","saint helena","ascension and tristan da cunha","Ascension and tristan da cunha","saint kitts and nevis","saint lucia","saint martin","saint pierre and miquelon","saint vincent and the grenadines","samoa","san marino","sao tome and principe","saudi arabia","senegal","serbia","seychelles","sierra leone","singapore","sint maarten","slovakia","slovenia","solomon islands","somalia","south africa","south georgia and the south sandwich islands","south sudan","spain","sri lanka","sudan","suriname","svalbard and jan mayen","swaziland","sweden","switzerland","syria","taiwan","tajikistan","tanzania","thailand","timor-leste","togo","tokelau","tonga","trinidad and tobago","tunisia","turkey","turkmenistan","turks and caicos islands","tuvalu","uganda","ukraine","united arab emirates","united kingdom","united states minor outlying islands","united states","uruguay","uzbekistan","vanuatu","venezuela","vatican city","vietnam","virgin islands (british)","virgin islands (us)","wallis and futuna","western sahara","yemen","zambia","zimbabwe","åland islands"],errorMessage:"",errorMessageKey:"badCustomVal"}),a.formUtils.addValidator({name:"federatestate",validatorFunction:function(b){return a.inArray(b.toLowerCase(),this.states)>-1},states:["alabama","alaska","arizona","arkansas","california","colorado","connecticut","delaware","florida","georgia","hawaii","idaho","illinois","indiana","iowa","kansas","kentucky","louisiana","maine","maryland","district of columbia","massachusetts","michigan","minnesota","mississippi","missouri","montana","nebraska","nevada","new hampshire","new jersey","new mexico","new york","north carolina","north dakota","ohio","oklahoma","oregon","pennsylvania","rhode island","south carolina","south dakota","tennessee","texas","utah","vermont","virginia","washington","west virginia","wisconsin","wyoming"],errorMessage:"",errorMessageKey:"badCustomVal"}),a.formUtils.addValidator({name:"longlat",validatorFunction:function(a){var b=/^[-+]?([1-8]?\d(\.\d+)?|90(\.0+)?),\s*[-+]?(180(\.0+)?|((1[0-7]\d)|([1-9]?\d))(\.\d+)?)$/;return b.test(a)},errorMessage:"",errorMessageKey:"badCustomVal"});var b=function(b){var c=[];return a.each(b,function(a,b){c.push(b.substr(0,1).toUpperCase()+b.substr(1,b.length))}),c.sort(),c};a.fn.suggestCountry=function(c){var d=b(a.formUtils.validators.validate_country.countries),e=a.inArray(d,"Usa");return d[e]="USA",a.formUtils.suggest(this,d,c)},a.fn.suggestState=function(c){var d=b(a.formUtils.validators.validate_federatestate.states);return a.formUtils.suggest(this,d,c)}}(a)});