<?php 
/*
Weather Underground Placefile Generator
By: Andrew Glenn
With help from: N.T.

License: GPL

(Takes Weather Data from weather stations on Weather Underground
and puts it into a placefile for GRLevelX Products)

Date: 2010/07/07
Version: 2.8

Changelog:
2.8: Added ability to specify threshold in URL variable. (Per user request).
2.6b Adding additional features per user requests. Beta.
2.4: Added inches in "inhg" to the mix, per user request.
2.2: Cleaned up the form with CSS, made it pretty.
2.0: (Re)added functionality to have Station ID instead of City as text label.
1.8: Added functionality to change font face -- default of "Courier New". Also created form to streamline URL creation.
1.6: Added functionality to turn off City Label next to icon.
1.4: Added functionality for multiple weather stations in one URL (with help from N.T.)
1.2: Adjusted formatting for ease-of-use
1.0: Intial Release
*/
=['sid'];
=['cl'];
=['nwl'];
=['ff'];
=['sl'];
if (empty(["wid"])){
echo"
<html>
<head>
<style type=\"text/css\">
body { margin:0; padding:0; font-size:76%;}
form#two textarea.sid{text-transform:uppercase;}
form#two {background:#4f718a; width:470px; padding:10px; border:1px solid #eee; margin:5px auto; font-size:1em; font-family:verdana, arial, helvetica, sans-serif;}
form#two p {font-size:.9em; color:#fff; text-align:left; padding:15px 5px 5px 0; margin:0;}
form#two fieldset#current p {padding:4px; margin:0;}
form#two fieldset {width:450px; display:block; border:1px dotted #fff; padding:5px 5px 5px 10px; font-family:verdana, sans-serif; margin-bottom:0.5em; line-height:1.5em; font-size:1em; }
form#two fieldset:hover {border:1px solid #fff;}
form#two fieldset#opt:hover {border:1px solid #b80b38;}
form#two legend {font-size:1.1em; font-weight:bold; border-bottom:2px solid #fff; margin-bottom:15px; padding:6px; background:none; color:#fff;}
* html form#two legend { padding:0 0 30px 0; margin:5px 0 0 0; border:none;}
form#two label {clear:left; display:block; float:left; width:100px; text-align:left; padding-right:10px; color:#fff; margin-bottom:0.5em;}
form#two input {border:1px solid #414d59; padding-left:0.5em; margin-bottom:0.6em; width:280px; background:#c5d3e0;}
form#two input:hover { background:#b80b38; border:1px solid #fff; color:#fff;}
form#two input:focus {background:#fff; border:1px solid #b80b38; color:#b80b38;}
form#two fieldset#medical input, form#two fieldset#current input {width:45px;}
form#two select {margin:0 0 1em 0.5em;}
form#two textarea {width:410px; height:15em; border:1px solid #fff; padding:0.5em; overflow:auto; background:#c5d3e0;}
form#two textarea:hover { background:#b80b38; border:1px solid #fff; color:#fff;}
form#two textarea:focus {background:#fff; border:1px solid #b80b38; color:#b80b38;}
form#two option {background:#fff; color:#b80b38;}
form#two optgroup {background:#fff; color:#000; font-style:normal;}
form#two optgroup option {background:#fff; color:#b80b38;}
form#two #button1, form#two #button2 {color:#fff; padding-right:0.5em; cursor:pointer; width:205px; margin-left:8px; background:#b80b38; border:1px solid; border-color:#f11f54 #5f051c #5f051c #f11f54;}
form#two #button1:hover, form#two #button2:hover {color:#fff; background:#414d59; border:1px solid; border-color:#4f718a #003 #003 #4f718a; }
</style>
</head>
";
// Really bad way of shortening the URL, I know. But it works.
if (!empty(['sid'])){
if (!empty()){ = "wid=";}
if (!empty()){
 = "&citylabel=";
if (!empty()){ = "&slabel=";}}
if (!empty()){ = "&nwsmode=";}
if (!empty() and  != ""){ = "&font=";}
echo"
<form id = \"two\"> 
<fieldset id=\"URL\">
    <legend>YOUR URL</legend>
    <p>Your url is...<br><br>
<SCRIPT LANGUAGE=\"JavaScript\">
document.write(location.href + '?');
</SCRIPT>
<br><br>
Please COPY and PASTE that URL into GRx
</p>
  </fieldset>
  </form>";
} else {
echo"
<SCRIPT LANGUAGE=\"JavaScript\">
document.write('<form id=\"two\" action=\"' + location.href +'\" method=\"post\">');
</SCRIPT>
  <fieldset id=\"basics\">
<legend>The Basics</legend>
<label for=\"stationid\">Station ID's : </label> 
<input name=\"sid\" id=\"lastname\" type=\"text\" class=\"sid\" tabindex=\"1\" />
<p>Station ID's are to be entered <i>sepearated by commas</i>. Example: KMIBRONS2,KMIBATTL5<BR><BR>
To Find Station ID's...<br>1)Go to <a href=\"http://www.wunderground.com/\">Weather Underground's 
Website</a><br>2)Enter your ZIP Code.<br>3)Go <i>all</i> the way to the bottom to the \"Weather Stations\" section.<br>4) Select the Weather Station you want.<br>5) When the data comes up, you'll see \"<i>HISTORY FOR (Station ID)</i>\". If entering manually, Station ID's must be in UPPERCASE.</p>
  </fieldset>
  <fieldset id=\"nws\">
<legend>NWS / Meterologist / Weather Buff Friendy Options</legend>
<label for=\"nwlabel\">NWS Mode On </label>
<input name=\"nwl\" id=\"nwl\" type=\"radio\" value=\"on\" tabindex=\"20\" />
<br />
<label for=\"nwlabel\">NWS Mode Off</label>
<input name=\"nwl\" id=\"nwl\" type=\"radio\" checked  value=\"\" tabindex=\"21\" />
  </fieldset>
  <fieldset id=\"additional\">
<legend>Additional Settings</legend>
<br />
    <label for=\"clabel\">Text Labels On </label>
<input name=\"cl\" id=\"cl\" type=\"radio\" value=\"on\" tabindex=\"20\" />
<label for=\"clabel\">Text Labels Off</label> 
<input name=\"cl\" id=\"cl\" type=\"radio\" checked value=\"\" tabindex=\"21\" />
<p>If Text Lables are selected <b>ON</b>, please select an option below. Otherwise, skip this step</p>
<br />
<label for=\"slabel\">City Name </label> 
<input name=\"sl\" id=\"sl\" type=\"radio\" value=\"\" tabindex=\"22\" />
<br />
<label for=\"slabel\">Station ID</label> 
<input name=\"sl\" checked id=\"sl\" type=\"radio\" value=\"station\" tabindex=\"23\"  />
<p>If you'd like to change the <i>font</i>, please enter your Font Face below.<br><i>(Default to <b>Courier New</b>)</i></p><br>
<label for=\"ff\">Font Face : </label> 
<input name=\"ff\" id=\"ff\" type=\"text\" tabindex=\"1\" /><br><br>
  </fieldset>
  <p>
  <input id=\"button1\" type=\"submit\" value=\"Send\" /> 
  <input id=\"button2\" type=\"reset\" />
  </p>
  </form>
  
  <form id=\"two\">
    <fieldset id=\"faq\">
<legend>F.A.Q</legend>
<p>This area is designed to give a nice explaination of what each option does.</p>
</fieldset>
<fieldset id=\"nwsfaq\">
<legend>NWS / Meterologist / Weather Buff Friendy Options</legend>
<label for=\"nwlabel\">NWS Mode On </label><br>
<p><i>This option turns on \"NWS Mode\" for the placefile. See <a href=\"/img/wu/nwson.pn
<br /><br>
<label for=\"nwlabel\">NWS Mode Off</label><br>
<p><i>This option obviously turns off \"NWS Mode\" for the placefile. See <a href=\"/img/wunderground_screenshot.jpg\">a screenshot</a> of NWS mode turned off <u>with no other options</u></i>
</fieldset>
<fieldset id=\"additional\">
<legend>Additional Settings</legend>
<br />
<label for=\"clabel\">Text Labels On </label><br>
<p><i>This option turns on the Text Labels for the placefile. See <a href=\"/img/wu/labelon.png\">a screenshot</a> of Text mode turned on <u>with no other options</u></i><br><br>
See <a href=\"/img/wu/labelon_nws.png\">a screenshot</a> of Text mode turned on <u>with NWS Mode enabled</u></i><br><br>
<label for=\"clabel\">Text Labels Off</label><br>
<p><i>This option turns off the Text Labels for the placefile. See <a href=\"/img/wunderground_screenshot.jpg\">a screenshot</a> of Text mode turned off <u>with no other options</u></i><br><br>
See <a href=\"/img/wu/labeloff_nws.png\">a screenshot</a> of Text mode turned off <u>with NWS Mode enabled</u></i><br><br>
</fieldset>
  </p></form>";
} echo "

</html>";
} else {
// tell the browser that this is a text file
header('Content-type: text/plain');
// xml parsing function I found on the net
function value_in(, ,  = true) {
    if ( == false) {
        return false;
    }
     = preg_match('#<'..'(?:\s+[^>]+)?>(.*?)'.
            '</'..'>#s', , );
    if ( != false) {
        if () {
            return [1];  //ignore the enclosing tags
        } else {
            return [0];  //return the full pattern match
        }
    }
    // No match found: return false.
    return false;
}
=['font'];
if (empty()){
 = "Courier New";
}
=['thold'];
if (empty()){
 = "999";
}
// Start the Placefile
echo "
;Weather Underground Placefile
;By: Andrew Glenn
;Version: 2.6 beta
;2009/03/30 0319UTC
Refresh: 1
Threshold: ;
Title: WX Underground
Font: 1, 11, 0, \"\"
IconFile: 1, 16, 16, 9, 9, \"http://www.andrewglenn.net/img/grx_icon.png\"
\n";

// getting the variables

// weather underground station ID
=split(",", ["wid"]);
// Get the city label data from the form
=["citylabel"];
// ... and the NWS form
=["nwsmode"];
// ... and the station label
=["slabel"];
foreach( as ) {
// grabbing the data
 = file_get_contents("http://api.wunderground.com/weatherstation/WXCurrentObXML.asp?ID=");
// location
 = value_in('full', );
//city
 = value_in('city', );
//gps lat
 = value_in('latitude', );
//gps long
 = value_in('longitude', );
//last observation time
 = value_in('observation_time', );
//tempature
 = value_in('temp_f', );
//humidity
 = value_in('relative_humidity', );
//dewpoint
 = value_in('dewpoint_f', );
//wind direction
 = value_in('wind_dir', );
//wind MPH
 = value_in('wind_mph', );
//wind gust MPH
 = value_in('wind_gust_mph', );
//wind chill
 = value_in('windchill_f', );
//heat index
 = value_in('heat_index_f', );
// barometirc pressure (milibars)
 = value_in('pressure_mb', );
// barometric pressure (inches)
 = value_in('pressure_in', );
// Check to see if the user wants the city label displayed.
if ( == "on"){
if ( != "station"){
="Text: 15, 10, 1, \"\"";
} else {
="Text: 15, 10, 1, \"\"";
}
}
// Check to see if the user wants the data right on the screen (like the metar stuffs)

if ( == "on"){
// cleaning up the number format for each variable...
 = number_format();
 = number_format();
 = number_format();
 = number_format();
// some conditional stuff. :)
="  Text:  -17, 13, 1, \"  \"
  Text:  0, -19, 1, \" G\"
  Text: 25, 13, 1, \"  \"";

if ( == "on"){
        if ( != "station"){
                ="Text: 0, -35, 1, \"\"";
                } else {
="Text: 0, -35, 1, \"\"";
}}}
// Dump the data
if ( != ""){
echo "Object: ,
Icon: 0, 0, 000, 1, 1, \"\n\n\nTemp:  F | Dewpoint:  F\nWind Chill:  F | Heat Index:  F\nWind:  @  MPH | Gust:  MPH  \nHumidity: % | Pressure: /\"


End:\n";
} else {
echo "; The station  currently has no data available. Please try back later.\n\n";
}}}
?>
