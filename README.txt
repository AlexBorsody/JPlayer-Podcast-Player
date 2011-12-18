jPlayer 2.1.0 Demos
-------------------

Upload these files to a server online or place on a localhost server,
otherwise the Flash will encounter security errors if you attempt
to access the HTML files directly.


Directories:
------------

"js": Contains the jPlayer plugin.
Also contains the add-ons and CirclePlayer JavaScript.
If you rename/move this, set the {swfPath:"new/path"} appropriately.

"skin": Contains the Blue Monday and Pink Flag skins


Related Links:
--------------

For Documentation see:
jPlayer Website: http://www.jplayer.org/

For support requests use:
jPlayer Google Group: https://groups.google.com/forum/#!forum/jplayer

-------------

Line 4 of ajax.js makes an ajax JSONP call to getxml.php file, replace the path as needed

because it is a JSONP call the widget can be embedded and shared accross various websites
without "same origin policy" error.  

JSONP adds a randomly generated callback function after =?

the PHP $_GET['callback'] wraps the returned JSON in this callback function.
