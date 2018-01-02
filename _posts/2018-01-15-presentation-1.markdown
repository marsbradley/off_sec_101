---
layout: slide
title:  "Presentation 1 | Forensics"
description: You have to look in the right places to find stuff
transition: slide
---

<section>

<img width="300px" src="{{site.baseurl}}/assets/images/code_academy.png">

<img width="300px" src="{{site.baseurl}}/assets/images/kali.png">

<h2>Offensive Security 101</h2>

<p><i>Forensics</i></p>

</section>

<section>

<h3>Course Structure</h3>
<p>
The course is divided into two segments per class:
<ul>
<li class="fragment">Presentation to introduce new concepts</li>
<li class="fragment">Exercises to practice these concepts</li>
</ul>
<br>
<br>
<span class="fragment">Exercise is <b>necessary</b> to improve this kind of skill!</span>
</p>

</section>

<section>

<h3>What this course is</h3>
<p>
The course is designed to provide the following:
<ul>
<li class="fragment">Introduction to Computer Security</li>
<li class="fragment">Broad overview of a variety of topics</li>
<li class="fragment">Chance to put learned concepts into practice</li>
</ul>
</p>

</section>

<section>

<h3>What this course is not</h3>

<img class="fragment" width="600px" src="{{ site.baseurl }}/assets/images/google.png">

</section>

<section>

<img width="400px" src="{{site.baseurl}}/assets/images/white_hat.png">

<img width="400px" src="{{site.baseurl}}/assets/images/black_hat.png">

</section>

<section data-markdown>

### Disclaimer

_DO NOT attack machines that do not belong to you._

_This class is for educational purposes only!_

</section>

<section data-markdown>

### Hacking vs. Offensive Security

- Hacking is a __TOOL__ in a Security Professional's arsenal
- It is a means of __FINDING__ and __UNDERSTANDING__ vulnerabilities

</section>

<section data-markdown>

### Key Concept: Confidentiality

_"My data can't be read by a malicious party, only by the intended recipient"_

</section>

<section data-markdown>

### Key Concept: Integrity

_"My data will be received by the intended recipient, without alteration by a malicious party"_

</section>

<section data-markdown>

### Key Concept: Availability

_"A malicious party cannot prevent me or those with permissions from accessing my data"_

</section>

<section data-markdown data-transition="slide-in fade-out">

## What is Kali Linux?

</section>

<section data-transition="fade-in slide-out">

<h2>What is <span style="color:#353535;">Kali</span> Linux?</h2>

</section>

<section data-markdown>

## Top 3 Linux Commands

</section>

<section>

<h2>strings</h2>
<ul>
<li class="fragment">Finds and prints strings embedded in a binary file</li>
<li class="fragment">Best for smaller binary files, when unsure what you're looking for</li>
<li class="fragment">E.g. "<code>strings /bin/cat</code>"</li>
</ul>
</section>

<section> 
<h2>grep</h2>
<ul>
<li class="fragment">Searches a file for lines matching a given regular expression</li>
<li class="fragment">Best for searching large files, when you know approximately what you might be looking for</li>
<li class="fragment">E.g. "<code>grep root /etc/passwd</code>"</li>
</ul>
</section>

<section> 
<h2>file</h2>
<ul>
<li class="fragment">Determines the file-type of a given file</li>
<li class="fragment">Useful when a particular file might be unfamiliar, to figure out its purpose</li>
<li class="fragment">E.g. "<code>file /usr/share/.../background.svg</code>"</li>
</ul>
</section>

<section data-markdown>

### Practice, practice, practice...

</section>

<section data-markdown>

## Fin

</section>

