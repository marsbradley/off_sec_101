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

## Mitigating Reflective XSS

- For the common user:
- Common sense.
- Don't click random, suspicious links in emails, social media, forums.
- For the website owner:
- 

</section>

<section data-markdown>

## Stored XSS



</section>

<section data-markdown>

## Mitigating Stored XSS



</section>

<section data-markdown>

## Example

https://www.theguardian.com/technology/2014/jun/11/twitter-tweetdeck-xss-flaw-users-vulnerable

</section>

<section data-markdown>

## Fin

</section>
