oc-jivosite-plugin
============

Jivosite plugin for October CMS.

You can use default code on all pages or you can specify unique tag for specific pages.

## Instructions

1. Install the plugin via the October CMS backend.
2. Add your site configuration details to the Jivosite Plugin configuration page. (Under the 'Misc' section of the System Settings page in the Backend).
3. Add the Jivosite Component to your master layout.
4. Add {% component 'jivoSite'%} to the closing </head> tag of the default layout
6. Save the file.

You can also add the component to the file manually and/or override ```jivosite_id``` from your settings.  For Example:

    [jivoSite]
    jivosite_id = "******"
	==
	<html>
	<head>
		<title>{{ this.page.title }}</title>
		<meta name="author" content="October CMS">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	{% styles %}
    	<link href="{{ [
    	    'assets/css/theme.css'
    	]|theme }}" rel="stylesheet">

    	{% component 'jivoSite' %}
	</head>
	<body>

 		<!-- Header -->
 		<header>
 			<h1>Header</h1>
 			<hr />
 		</header>

 		<!-- Content -->
        <section id="layout-content">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id="layout-footer">
            {% partial "footer" %}
        </footer>

        <!-- Scripts -->
        <script src="{{ [
            'assets/js/jquery.js',
            'assets/js/app.js'
        ]|theme }}"></script>
        {% framework extras %}
        {% scripts %}
        
	</body>
	</html>
	
	
	
License
-------

MIT

Author Information
------------------

Eduard Amirshaev
