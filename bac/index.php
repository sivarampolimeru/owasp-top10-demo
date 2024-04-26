<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Broken Access Control</title>
</head>
<body>
	<h2 style="text-align:center"> Broken Access Control</h2>
	<div style="float: right;margin-right: 30px;">
		<button>Problem Demo</button>
		<button>Solution Demo</button>
	</div>
	<div style="padding: 0px 30px;font-size: 18px;">
		<h3>About</h3>
		<p>Broken Access Control is a type of application security vulnerability that enables users to access data and functionalities that they should not have access to. In most cases of Broken Access Control attacks, a malicious user takes advantage of weak or non-implementation of access control in the target application.</p>
		<p>There are many forms of Broken Access Control vulnerability. One instance is a regular user of a web application being able to access the Admin page due to poor access control implementation. This user can now go ahead to perform tasks like deleting all data or accessing sensitive user data such as email addresses of all users.</p>
	</div>
	<div style="padding: 0px 30px;font-size: 18px;">
		<h3>Examples</h3>
		<ul>
			<li>
				<b>URL Manipulation:</b> A simple way to attack a vulnerable website is by manipulating URL parameters to gain unauthorized access to pages and data. For example, in an e-commerce website, the URL for viewing the current user's shopping cart includes the user’s ID in a query parameter, an attacker may alter the value of this ID to view the cart for another user.
			</li>
			<li style="padding-top: 10px;">
				<b>Insecure URL Endpoints:</b> An endpoint here is basically URLs on a website that do not receive HTTP requests directly from the user. Instead, actions like users submitting HTML forms send requests with payload to the endpoint. The frontend code of a website can also send  HTTP requests to an endpoint in order to interact with the backend. An attacker can exploit these endpoints by sending HTTP using different tools. They can use this method to write or read data to or from an insecure endpoint.
			</li>
		</ul>
	</div>
	<div style="padding: 0px 30px;font-size: 18px;">
		<h3>How to Prevent</h3>
		<ul>
			<li>Except for public resources, deny by default.</li>
			<li>Rate limit API and controller access to minimize the harm from automated attack tooling.</li>
			<li>Log access control failures, alert admins when appropriate (e.g., repeated failures).</li>
		</ul>
	</div>
</body>
</html>