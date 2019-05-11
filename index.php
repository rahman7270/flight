<!DOCTYPE html>
<html>
<head>
	<title>Auto Search</title>
	<link rel="stylesheet" type="text/css" href="js/EasyAutocomplete/easy-autocomplete.css">
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="js/EasyAutocomplete/jquery.easy-autocomplete.js"></script>
</head>
<body>
<h1>Auto Searching</h1>
country : <input id="countries"/><br>
hero : <input id="sheroes"/>

<script type="text/javascript">
var options = {

  url: "resources/countries.json",

  getValue: "name",

  list: {	
    match: {
      enabled: true
    }
  },

  theme: "square"
};

$("#countries").easyAutocomplete(options);	
var options = {

  url: "resources/sheroes.json",

  getValue: "name",

  cssClasses: "sheroes",

  template: {
    type: "iconRight",
    fields: {
      iconSrc: "icon"
    }
  },

  list: {
    showAnimation: {
      type: "slide"
    },
    hideAnimation: {
      type: "slide"
    }
  }

};

$("#sheroes").easyAutocomplete(options);

</script>
</body>
</html>