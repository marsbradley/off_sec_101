---
layout: slide
title:  "Presentation 6 | Memory Exploitation"
transition: slide
---

<section>

<img width="300px" src="{{site.baseurl}}/assets/images/code_academy.png">

<img width="300px" src="{{site.baseurl}}/assets/images/kali.png">

<h2>Offensive Security 101</h2>

<p><i>Memory Exploitation</i></p>

</section>

<section data-markdown>

### This stuff is HUUUURD!! Don't be discouraged!

</section>

<section data-markdown>

### Let's go back in Computer Science history...

</section>

<section data-markdown>

### Memory Safety

- Yes: Java
- No: C/C++

</section>

<section data-markdown>

### Code vs. Data
- On a certain level, there is essentially no difference

</section>

<section data-markdown>

### The Stack
- An abstraction that every modern computer system is based off of
- Instructions and data are added to the top of the stack to be stored...
- ...and popped off in order to be used in some operation

</section>

<section>
<h3>Generic Stack</h3>
<img width="800px" src="{{site.baseurl}}/assets/images/stack.png">
</section>

<section>
<h3>Specific Stack</h3>
<img width="680px" src="{{site.baseurl}}/assets/images/call_stack.png">
</section>

<section data-markdown>

## Vector 1: Overflows

</section>

<section>

<h3>Overflow vulnerable code</h3>

<pre><code small style="font-size: 20px;" data-noescape class="C"><span class="fragment">int main(int argc, char *argv[]) {</span>

<span class="fragment">	char  buffer[10]; // buffer of size 10</span>
<span class="fragment">	scanf("%s", &buffer); // read into buffer</span>

<span class="fragment">	return 0;
}</span> 
</code></pre> 

<span class="fragment"><h3>Attack string</h3>

<pre><code small style="font-size: 20px;" data-noescape class="C">input = AAAAAAAAAAAAAAA // really anything longer than 10!
</code></pre></span>
</section>

<section data-markdown>

#### Generally easy to cause a crash (seg. fault), harder to do something "useful"

</section>

<section data-markdown>

## Vector 2: Format String 

</section>

<section>

<h3>Format string vulnerable code</h3>

<pre><code small style="font-size: 20px;" data-noescape class="C"><span class="fragment" data-fragment-index="1">int main(int argc, char *argv[]) {</span>

<span class="fragment" data-fragment-index="2">	char buffer [100]; // buffer of size 100</span>
<span class="fragment" data-fragment-index="3">	scanf("%99s", &buffer); // note the format specifier 
				// PREVENTS overflow attacks</span>
<span class="fragment" data-fragment-index="4">	printf(“Data input: %s \n”, strlen(buf),  buf); // however 
			// still vulnerable to format string...</span> 
<span class="fragment" data-fragment-index="5">	return 0;
}</span>
</code></pre> 

<span class="fragment" data-fragment-index="6"><h3>Attack string</h3>

<pre><code small style="font-size: 20px;" data-noescape class="C">input = Bob %x %x // notice the format specifiers
</code></pre></span>

<span class="fragment" data-fragment-index="7"><h3>Line 4</h3>

<pre><code small style="font-size: 20px;" data-noescape class="C">printf(“Data input: Bob <span class="fragment highlight-green" data-fragment-index="8">%x</span> <span class="fragment highlight-red" data-fragment-index="9">%x</span> \n”, <span class="fragment highlight-green" data-fragment-index="8">strlen(buffer)</span>, <span class="fragment highlight-red" data-fragment-index="9">buffer</span>);
</code></pre></span>
</section>

<section>

<h3>Java "Example"</h3>

<pre><code small style="font-size: 20px;" data-noescape class="Java"><span class="fragment">	...
	Scanner scanner = new Scanner(System.in);</span>
	<span class="fragment">String name = scanner.nextLine();</span>
	<span class="fragment">System.out.println("Haha, %s you can't read my number!!", 
		name, secretNumber); // Obviously a toy example...
	...</span>
</code></pre> 

<span class="fragment"><h3>Attack string</h3>

<pre><code small style="font-size: 20px;" data-noescape class="C">input = Bob %d
</code></pre></span>
</section>

<section data-markdown>

## Vector 3: Use After Free

</section>

<section>

<h3>Use After Free vulnerable code</h3>

<pre><code small style="font-size: 20px;" data-noescape class="C"><span class="fragment" data-fragment-index="1">char* ptr = (char*) malloc (SIZE); // allocate some memory</span>

<span class="fragment" data-fragment-index="2">if (error) { // error condition
	<span class="fragment" data-fragment-index="3">abort = 1; // set abort flag</span>
	<span class="fragment" data-fragment-index="4">free(<span class="fragment highlight-red" data-fragment-index="9">ptr</span>); // clean up memory</span>
}</span> <span class="fragment" data-fragment-index="5">else {
	... // normal execution...
}</span>

<span class="fragment" data-fragment-index="10"><--- attack happens here</span>

<span class="fragment" data-fragment-index="6">if (abort) { // if we should abort...
	<span class="fragment" data-fragment-index="7">logError("Operation aborted before commit", <span class="fragment highlight-red" data-fragment-index="9">ptr</span>); // log error</span>
	<span class="fragment" data-fragment-index="8">return -1; // return bad status</span>
}</span></code></pre>

</section>

<section data-markdown>

## Vector 4: ROP (Return Oriented Programming)

</section>

<section data-markdown>

### Step 1: 
- Take control of a program's call-stack

</section>

<section data-markdown>

- Stack Buffer-overflow
- Heap Overflow
- Privilege Escalation
- Use After Free

</section>

<section data-markdown>

### Step 2: 
- String together existing groups of instructions (known as **gadgets**) to perform desired functionality

</section>

<section>
<h3>Gadgets</h3>
<img width="680px" src="{{site.baseurl}}/assets/images/gadgets.png">
</section>

<section data-markdown>

### Step 3: 
- Profit $$$

</section>

<section data-markdown>

## Fin

</section>

