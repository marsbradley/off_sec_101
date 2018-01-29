---
layout: slide
title:  "Presentation 3 | Cryptography"
transition: slide
---

<section>

<img width="300px" src="{{site.baseurl}}/assets/images/code_academy.png">

<img width="300px" src="{{site.baseurl}}/assets/images/kali.png">

<h2>Offensive Security 101</h2>

<p><i>Cryptography</i></p>

</section>

<section data-markdown>

## Cryptography

</section>

<section data-markdown>

### Conf - Integ - Auth
- Modern cryptography is used to tackle all three of these concepts

</section>

<section data-markdown>

## What is Crypto?

</section>

<section>
<img width="350px" src="{{site.baseurl}}/assets/images/not_bitcoin.png">
</section>

<section data-markdown>

### Types
- Symmetric-key
- Asymmetric-key (Public-key)

</section>

<section data-markdown>

## Symmetric-key Cryptography

</section>

<section>
<span style="filter: invert(80%);">
<img width="150px" src="{{site.baseurl}}/assets/images/file.png">
<span class="fragment">
<img width="100px" style="margin-top: -55px; margin-left: -10px; position: absolute;" src="{{site.baseurl}}/assets/images/locked.png">
<img width="150px" src="{{site.baseurl}}/assets/images/arrow.png">
<b style="margin-top: 170px; margin-left: -150px; position: absolute; color: black; font-size: 70px;">key</b>
</span>
<img class="fragment" width="150px" src="{{site.baseurl}}/assets/images/encrypted_file.png">
<span class="fragment">
<img width="100px" style="margin-top: -55px; margin-left: -10px; position: absolute;" src="{{site.baseurl}}/assets/images/unlocked.png">
<img width="150px" src="{{site.baseurl}}/assets/images/arrow.png">
<b style="margin-top: 170px; margin-left: -165px; position: absolute; color: black; font-size: 70px;">f(key)</b>
</span>
<img class="fragment" width="150px" src="{{site.baseurl}}/assets/images/file.png">
</span>
</section>


<section style="font-family: monospace">
<span style="filter: invert(80%);">
<span class="fragment" data-fragment-index="1"><b style="color: black; font-size: 70px; letter-spacing: 15px;">HEY THERE</b></span>
<br>
<span class="fragment" data-fragment-index="2" >
	<img width="50px" style="position: absolute; margin-left: -274px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-left: -216px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-left: -159px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-left: -46px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-left: 12px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-left: 68px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-left: 125px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-left: 182px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<b style="position: absolute; color: black; font-size: 50px; margin-left: 250px; margin-top: 10px">+13</b>
</span>
<br>
<span style="position: absolute; margin-top: 25px; margin-left: -269px;" class="fragment" data-fragment-index="3"><b style="color: black; font-size: 70px; letter-spacing: 15px;">U<span data-fragment-index="6" class="fragment highlight-blue">R</span>L GU<span data-fragment-index="6" class="fragment highlight-blue">R</span>E<span data-fragment-index="6" class="fragment highlight-blue">R</span></b></span>
<br>
<span class="fragment" data-fragment-index="4" >
	<img width="50px" style="position: absolute; margin-top: 70px; margin-left: -274px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-top: 70px; margin-left: -216px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-top: 70px; margin-left: -159px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-top: 70px; margin-left: -46px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-top: 70px; margin-left: 12px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-top: 70px; margin-left: 68px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-top: 70px; margin-left: 125px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<img width="50px" style="position: absolute; margin-top: 70px; margin-left: 182px;" src="{{site.baseurl}}/assets/images/down_arrow.png">
	<b style="position: absolute; color: black; font-size: 50px; margin-left: 250px; margin-top: 60px">±13</b>
</span>
<br>
<span style="position: absolute; margin-top: 80px; margin-left: -269px;" class="fragment" data-fragment-index="5"><b style="color: black; font-size: 70px; letter-spacing: 15px;">HEY THERE</b></span>
</span>
</section>


<section style="font-family: monospace">
<span style="filter: invert(80%);">
<span class="fragment"><b style="color: black; font-size: 70px; letter-spacing: 15px;">HEY THERE</b></span>
<br>
<span style="margin-left:-20px" class="fragment"><b style="color: black; font-size: 30px; word-spacing: 5px;">+1 -5 +3  &nbsp;  +2 -7 +4 +4 -6</b>
</span>
<br>
<span style="position: absolute; margin-top: 25px; margin-left: -269px;" class="fragment"><b style="color: black; font-size: 70px; letter-spacing: 15px;">I<span class="fragment highlight-blue">Z</span>B VA<span class="fragment highlight-green">I</span>V<span class="fragment highlight-red">Y</span></b></span>
<br>
<span style="position: absolute; margin-top: 70px; margin-left: -265px;" class="fragment"><b style="color: black; font-size: 30px; word-spacing: 5px;">-1 +5 -3 &nbsp; -2 +7 -4 -4 +6</b></span>
<br>
<span style="position: absolute; margin-top: 80px; margin-left: -269px;" class="fragment"><b style="color: black; font-size: 70px; letter-spacing: 15px;">HEY THERE</b></span>
</span>
</section>


<section style="font-family: monospace">
<span style="filter: invert(80%);">
<span class="fragment"><b style="color: black; font-size: 70px; letter-spacing: 15px;">10011011</b></span>
<br>
<span class="fragment"><b style="margin-left: -65px; line-height: 0px; color: grey; font-size: 70px; letter-spacing: 15px;">⊕00101110</b></span>
<br>
<span class="fragment"><b style="color: red; font-size: 70px; letter-spacing: 15px;">1<span class="fragment">0</span><span class="fragment">1</span><span class="fragment">1</span><span class="fragment">0</span><span class="fragment">101</span></b></span>
<br>
<span class="fragment"><b style="margin-left: -65px; line-height: 0px; color: grey; font-size: 70px; letter-spacing: 15px;">⊕00101110</b></span>
<br>
<span class="fragment"><b style="margin-left: -25px;
color: black; font-size: 70px; letter-spacing: 15px;">10011011</b></span>
</span>
</section>

<section data-transition="slide-in fade-out">
<span style="filter: invert(80%);">
<img style="padding-bottom: 250px" width="1000px" src="{{site.baseurl}}/assets/images/cipher_1.png">
</span>
</section>

<section data-transition="fade-in fade-out">
<span style="filter: invert(80%);">
<img width="1000px" src="{{site.baseurl}}/assets/images/cipher_2.png">
</span>
</section>

<section data-transition="fade-in fade-out">
<span style="filter: invert(80%);">
<img width="1000px" src="{{site.baseurl}}/assets/images/cipher_3.png">
</span>
</section>

<section data-transition="fade-in fade-out">
<span style="filter: invert(80%);">
<img width="1000px" src="{{site.baseurl}}/assets/images/cipher_4.png">
</span>
</section>

<section data-transition="fade-in slide-out">
<span style="filter: invert(80%);">
<img width="1000px" src="{{site.baseurl}}/assets/images/cipher_5.png">
</span>
</section>

<section>
<span style="filter: invert(80%);">
<img width="1000px" src="{{site.baseurl}}/assets/images/stream_cipher.png">
</span>
</section>


<section data-markdown>

### Examples
- ROT13
- XOR
- AES

</section>

<section data-markdown>

### Advantages
- Usually strong
- Conceptually simple

</section>

<section data-markdown>

### Disadvantages
- Secure channel required for initial key exchange
- Not goods for authentication
- Key re-use an issue

</section>

<section data-markdown>

## Asymmetric-key Cryptography (Public-key)

</section>

<section data-markdown>

### Examples
- RSA
- PGP
- TLS

</section>

<section data-markdown>

### Advantages
- No secure channel required to set up
- Can be used for authentication

</section>

<section data-markdown>

### Disadvantages
- Usually less secure than symmetric algorithms for a similar key length
- Conceptually more difficult
- Potentially more room for mistakes

</section>

<section data-markdown>

## Fin

</section>

