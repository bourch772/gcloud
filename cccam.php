<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery.mobile-1.4.5.min.css">
<script src="jquery-1.11.3.min.js"></script>
<script src="jquery.mobile-1.4.5.min.js"></script>
<style type="text/css">
#demo-borders .ui-collapsible-heading .ui-btn { border-top-width: 1px !important; }


    html, body {
    height: 100%;
}
#page1 {
    height: 100%;
    width: 100%;
    display: table;
}
.ui-content {
    display: table-cell;
    height: 100%;
    vertical-align: middle;
}
  .ui-collapsible-inset .ui-collapsible-heading .ui-btn , form{
  text-align: center;
}

  </style>


</head>
<body style="text-align: center;">

<div data-role="page" data-control-title="Home" id="page1">
    <div role="main" class="ui-content">
         <fieldset data-role="collapsible">
	         <legend>tweet</legend>
	  
	         <label for="textinput-f">write your tweet</label>
	         <input type="text" name="textinput-f" id="textinput-f" placeholder="Text input" value="">
	     </fieldset>


	  
	  
<fieldset data-role="collapsible">       
<legend>hashtags</legend>       
<ul data-role="listview">       
<li>

<div data-role="collapsible" data-mini="true">
<h4>Heading</h4>
   <ul data-role="listview">
         <fieldset data-role="controlgroup" data-type="horizontal">
            <input type="checkbox" name="checkbox-h-2" id="checkbox-h-2">
       <label for="checkbox-h-2">One</label>
         </fieldset>
   </ul>
</div>

</li>
</ul>
 </fieldset>
<button class="ui-btn ui-shadow">share</button>
<button class="ui-btn ui-shadow">quit</button>
    </div>
</div>

  </body>
</html>