---
layout: slide
title:  "Presentation 2 | Recon"
transition: slide
---

<section>
<img width="300px" src="{{site.baseurl}}/assets/images/code_academy.png">
<img width="300px" src="{{site.baseurl}}/assets/images/kali.png">
<h2>Offensive Security 101</h2>
<p><i>Recon</i></p>
</section>

<section>
<h3>Disclaimer</h3>
<p><i>Attacking networks is illegal; could get you arrested...</i></p>
<p class="fragment"><i>...or even worse, fired!</i></p>
</section>

<section data-markdown>

## Recon

</section>

<section>
<h2 style="margin-top:250px">Where to start?</h2>
<img width="1200px" src="{{site.baseurl}}/assets/images/recon.png">
</section>

<section data-markdown>

## Passive vs. Active

</section>

<section data-markdown>

### Passive
- Being as covert as possible
- Using "legitmate" interactions with a system
- E.g. using stolen administrator credentials

</section>

<section data-markdown>

### Active
- Potentially disruptive
- Often using tools crafted for the purpose
- Mostly what we're going to focus on

</section>

<section data-transition="slide-in fade-out">
<img width="600px" src="{{site.baseurl}}/assets/images/layers.png">
</section>

<section data-transition="fade-in slide-out">
<img width="600px" src="{{site.baseurl}}/assets/images/layers_highlighted.png">
</section>

<section>
<h3>Low-level Methods</h3>
<ul>
<li class="fragment">Ping<span class="fragment">: does a device respond to a ping request?</span></li>
<li class="fragment">Port scan<span class="fragment">: does a device have any open ports?</span></li>
<li class="fragment">NSLookup/WHOIS<span class="fragment">: are there any DNS/WHOIS records for a device?</span></li>
</ul>
</section>

<section>
<h3>Ping</h3>
<img width="350px" src="{{site.baseurl}}/assets/images/poking_cat.gif">
</section>

<section>
<h3>Port Scan</h3>
<img width="600px" src="{{site.baseurl}}/assets/images/door_knock.gif">
</section>

<section>
<h3>nmap</h3>
<ul>
<li class="fragment">A very flexible network tool that allows you to scan a network</li>
<li class="fragment">Great for figuring out what IPs/Ports are available on a given network</li>
<li class="fragment">E.g. "<code>nmap -sn 192.168.1.0/24</code>"</li>
</ul>
</section>

<section>
<h3>Anatomy of an IP Address</h3>
<h1><span class="fragment highlight-current-red">107.13.41</span>.
	<span class="fragment highlight-current-red">120</span>
	<span class="fragment highlight-current-red">/24</span></h1>
</section>

<section>
<h3>NSLookup/WHOIS</h3>
<img width="600px" src="{{site.baseurl}}/assets/images/sorting_mail.gif">
</section>

<section>
<h3>nslookup</h3>
<ul>
<li class="fragment">A tool  to perform DNS lookups</li>
<li class="fragment">Useful to figure out if an IP has any DNS records assigned</li>
<li class="fragment">E.g. <code>nslookup 209.191.122.70</code></li>
</ul>
</section>

<section>
<h3>whois</h3>
<ul>
<li class="fragment">Performs WHOIS database lookups</li>
<li class="fragment">Useful to find out who an address legally belongs to</li>
<li class="fragment">E.g. <code>whois google.com</code></li>
</ul>
</section>

<section>
<h3>Fingerprinting</h3>
<ul>
<li class="fragment">Identify a device <span class="fragment">(hardware? <span class="fragment">OS?</span> <span class="fragment">software?</span>)</span></li>
<li class="fragment">Identify any vulnerabilities present</li>
<li class="fragment">Using <span class="fragment">nmap</span><span class="fragment">/HTTP GET</span><span class="fragment">/Telnet...</span></li>
</ul>
</section>

<section data-markdown>

### High-level Methods

- Burpsuite
- DNSdumpster
- Wireshark (Passive Recon)

</section>

<section data-markdown>

### Prevention

- Firewall
- Detection tools
- NAT

</section>

<section data-markdown>

## Fin

</section>

