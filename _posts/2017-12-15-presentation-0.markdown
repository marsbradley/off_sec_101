---
layout: slide
title:  "Taster Presentation | An Intro to Computer Security"
transition: slide
---

<section>

<img  width="300px" src="{{site.baseurl}}/assets/images/code_academy.png">

<img width="300px" src="{{site.baseurl}}/assets/images/kali.png">

<h2> Offensive Security 101</h2>

<p><i>The 5 minute elevator pitch...</i></p>

</section>

<section data-markdown>

## What is Offensive Security?

</section>

<section data-markdown>

### Key Concept: Confidentiality

_"My data can't be read by a malicious party, only by the intended recipient"_

</section>

<section data-markdown>

### Buffer Overflow

_"THE classic exploit; often breaks confidentiality in basic C programs."_

</section>

<section>

<h3>'Simple' C Code</h3>

<pre><code small style="font-size: 20px;" data-noescape class="C"><span class="fragment">char entered_password[20]; // array of characters (a string)
int authenticated = 0; // 0 false, 1 true</span>

<span class="fragment">printf("Enter the password: "); // provide a prompt</span>
<span class="fragment">gets(entered_password); // read in user input</span>

<span class="fragment">// check if password matches:
if (strcmp(entered_password, "supersecurepassword") == 0) {
    printf ("Correct Password \n");
    authenticated = 1;
}</span> <span class="fragment">else {
    printf ("Incorrect Password \n");
}</span>

<span class="fragment">if (authenticated) {
    printf ("You've been authenticated! \n");
}</span>
</code></pre> 
</section>

<section data-markdown>

## Demo

</section>

<section data-markdown>

## What happened?

</section>

<section>

<h3> What's in memory? </h3>

<br>
<pre><code large style="font-size: 31px;" data-noescape class="nohighlight">char pass[20] = [  -- 20  wide --  ]
user input    = YESTHISPASSWORDISWAY<mark>TOOSTRONG</mark>
</code></pre> 
<br>
<p align='left'>The characters highlighted in <mark>yellow</mark> overflow the end of the <code>entered_password</code> buffer, and overwrite the <code>authenticated</code> flag, due to how memory is laid out in a computer.</p>
</section>

<section>

<h3> Offensive Security: The Goal </h3>
<p align='left'>
<br>
In essence; to discover unexpected, unintended and potentially dangerous program behaviour.  
<br>
<br>
If you want to learn how do this yourself, please attend the upcoming course!
</p>
</section>

<section data-markdown>

## Fin

</section>

