# Web2.0 & RIA lab

Warning
---
Logic for question 1 and 4 is wrong and doesn't truly reflect periodic refresh, please refer: https://github.com/doodhwala/web2.0/tree/master/lab/lab%203.
Will be updated in the near future.

Program List for Web 2.0 & RIA Laboratory
---
	1) A Website provides for buying sports goods. The user can buy watches - Rado and Rolex or racquettes - Yonex or Wilson.
	The products are limited edition and hence there is a <div> at the top of the page which displays
	the total number of items available for each product. Since multiple users can access the website and buy products,
	this information must be frequently refreshed. Demonstrate the functionality by employing the periodic refresh pattern.
	Also implement and demonstrate the exponential back-off pattern for failure.

	2) Create an HTML page that has a form with 4 text fields. 
	The fields are USN, NAME, DEPT and GPA.Only the "USN" field is editable.
	The "NAME", "DEPT" and "GPA" fields are NOT editable. They are READ-ONLY. The student can enter a valid USN in the USN field.
	As soon as the student exits the "USN" field, an AJAX call is made to a server script.
	The server returns the NAME, DEPT and GPA values corresponding to the USN entered. If the USN entered is invalid,
	the server returns "INVALID USN". This string is then appended (next to the USN field) on the screen.
	If proper values are returned for NAME, DEPT and GPA, the values are populated into the respective text fields.
	(Remember these are read-only and hence only the server can populate these using Javascript.
	The server side script can be trivial and return hard-coded values). Implement the functionality using hidden iframes.
	Demonstrate the unique advantage of this technique.

	3) A book-search web page served by localhost is rich in content and GUI.
	It has multiple images to display, a search form for the front-end user to search for a book,
	a set of links which might interest the user and also general information on how to use the site.
	Use Multi-stage download pattern to demonstrate good user experience with this page.
	On entering an ISBN in the search box and searching for it, return the matching book from the server.
	The server maintains book information in a database.

	4) A Website provides for Engg seat Counseling. The user can opt colleges - PESIT and RVCE and courses - CSE or ECE.
	The number of seats are limited and hence there is a <div> at the top of the page which displays
	the total number of seats available for each course/college. Since multiple users can access the website and opt for courses,
	this information must be frequently refreshed. Demonstrate the functionality by employing the periodic refresh pattern.
	Implement a simple fallback pattern for this using exponential back-off method.

	5) Implement a photo slideshow using JQuery libraries. There must be atleast 3 photos in the album.
	When the first photo is displayed, only a "next" link is available. When the second photo is displayed,
	there is a "next" and "previous" link. When the last photo is displayed, we only have a "previous" link.
	Provide animations for displaying the photos. That is, the photos should enter the screen in an animated manner
	(enter from top-left or top-right or expand from center etc).

	6) Implement a Javascript/AJAX program to fetch RSS feeds from a well-known RSS feed site.
	Provide a scrolling display of latest news on your page. You can use xparser.js if you like.

	7) Implement an RSS-based search feature. Have a text box and a button in your page for the same.
	Show the results in a separate <div> which has the results as hyperlinks, which the user can click.

	8) Use the Reverse AJAX technique to build a web-based chat application. The application is two-way browser-based.
	That is, we have a window in which one user types his messages.
	From other other side, the second user also updates a browser window. Show the chat windows side-by-side and demo it.

	9) By implementing a single server side PHP script, demonstrate the working of a RESTful Web Service.
	The service must essentially provide the CREATE, READ and UPDATE operations.
	For each operation, the server returns data in json format. Also implement a PHP script which acts as client to this service.
	You need to show URL mapping using Apache’s configuration file.

	10) Demonstrate the early and late send Submission Throttle AJAX pattern. Simulate Google’s Suggest feature for the late-send.

Todo
---
	Exponential backoff
	Database
	xparser.js