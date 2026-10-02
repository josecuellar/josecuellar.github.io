---
title: SAMM
icon: fas fa-project-diagram
order: 2
---

<style>
.samm-hero {
  margin-bottom: 2.8rem;
}

.samm-lead {
  font-size: 1.12rem;
  line-height: 1.75;
  color: var(--text-muted-color);
  max-width: 780px;
}

.samm-flow {
  margin: 2.5rem 0 3rem;
  padding: 1.8rem;
  border: 1px solid var(--main-border-color);
  border-radius: 12px;
  text-align: center;
}

.samm-flow-source {
  display: inline-block;
  padding: .55rem .9rem;
  margin: .25rem;
  border: 1px solid var(--main-border-color);
  border-radius: 8px;
  font-weight: 600;
}

.samm-flow-arrow {
  margin: 1rem 0;
  font-size: 1.3rem;
  color: var(--text-muted-color);
}

.samm-flow-result {
  font-weight: 700;
  font-size: 1.05rem;
}

.samm-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 1rem;
  margin: 1.5rem 0 3rem;
}

.samm-card {
  padding: 1.4rem;
  border: 1px solid var(--main-border-color);
  border-radius: 12px;
}

.samm-card-number {
  display: block;
  margin-bottom: .45rem;
  font-size: .8rem;
  font-weight: 700;
  color: var(--text-muted-color);
}

.samm-card h3 {
  margin-top: 0;
}

.samm-card p {
  color: var(--text-muted-color);
}

.samm-card a {
  font-weight: 600;
}

.samm-community {
  margin: 3rem 0;
}

.samm-reading li {
  margin-bottom: .7rem;
}

@media (max-width: 768px) {
  .samm-grid {
    grid-template-columns: 1fr;
  }
}
</style>

{% assign samm_intro = site.posts | where_exp: "post", "post.title contains 'Situational Awareness Management Model'" | first %}
{% assign situational_map = site.posts | where_exp: "post", "post.title contains 'Situational Map'" | first %}
{% assign situational_process = site.posts | where_exp: "post", "post.title contains 'Situational Process'" | first %}
{% assign attention = site.posts | where_exp: "post", "post.title contains 'Attention Is All You Need'" | first %}

<div class="samm-hero">

# Situational Awareness Management Model

**A human-centered management model for understanding people, systems and situations in technical organizations.**

<p class="samm-lead">
SAMM helps technical leaders understand what is happening around them before deciding how to act. It brings together people, systems, context and observation to build a richer situational picture and support better-informed interventions.
</p>

{% if samm_intro %}
[Start with SAMM →]({{ samm_intro.url | relative_url }})
{% endif %}

</div>

<div class="samm-flow">

<span class="samm-flow-source">PEOPLE</span>
<span class="samm-flow-source">SYSTEMS</span>
<span class="samm-flow-source">SITUATIONS</span>

<div class="samm-flow-arrow">↓</div>

<div class="samm-flow-result">
SITUATIONAL AWARENESS
<br>
↓
<br>
INFORMED INTERVENTION
</div>

</div>

## Explore SAMM

<div class="samm-grid">

<div class="samm-card">

<span class="samm-card-number">01 — FOUNDATIONS</span>

### Understand the model

Start with the principles behind SAMM and why situational awareness matters in technical leadership.

{% if samm_intro %}
[Explore the foundations →]({{ samm_intro.url | relative_url }})
{% endif %}

</div>

<div class="samm-card">

<span class="samm-card-number">02 — PEOPLE & ACTORS</span>

### Understand the people

Explore actors, capabilities, relationships, perception and the human context surrounding a technical system.

{% assign people_post = site.posts | where_exp: "post", "post.title contains 'Representing people'" | first %}
{% if people_post %}
[Explore People & Actors →]({{ people_post.url | relative_url }})
{% else %}
[Explore SAMM articles →]({{ '/categories/samm/' | relative_url }})
{% endif %}

</div>

<div class="samm-card">

<span class="samm-card-number">03 — SITUATIONAL AWARENESS</span>

### Understand the situation

Move from isolated observations to a broader understanding of context, signals, perception and change.

{% if situational_map %}
[Explore the Situational Map →]({{ situational_map.url | relative_url }})
{% endif %}

</div>

<div class="samm-card">

<span class="samm-card-number">04 — PRACTICES</span>

### Put SAMM into practice

Apply the model through Actor Mapping, Situational Pulse, Tech Spaces, 1:1s and other recurring practices.

{% assign practices_post = site.posts | where_exp: "post", "post.title contains 'Common SAMM Practices'" | first %}
{% if practices_post %}
[Explore SAMM Practices →]({{ practices_post.url | relative_url }})
{% else %}
[Explore SAMM articles →]({{ '/categories/samm/' | relative_url }})
{% endif %}

</div>

</div>

## How SAMM thinks about situations

SAMM is not intended to prescribe a fixed response. It provides a way to continuously **observe, interpret and understand** a changing technical and human system before intervening.

{% if situational_process %}
[Read: The Situational Process →]({{ situational_process.url | relative_url }})
{% endif %}

{% if attention %}
[Read: Attention Is All You Need →]({{ attention.url | relative_url }})
{% endif %}

---

## Start here

If this is your first time exploring SAMM, I recommend following the model in this order:

<ol class="samm-reading">
{% if samm_intro %}
<li><a href="{{ samm_intro.url | relative_url }}"><strong>Situational Awareness Management Model</strong></a> — the starting point.</li>
{% endif %}

{% if situational_map %}
<li><a href="{{ situational_map.url | relative_url }}"><strong>The Situational Map</strong></a> — representing the system and its context.</li>
{% endif %}

{% if situational_process %}
<li><a href="{{ situational_process.url | relative_url }}"><strong>The Situational Process</strong></a> — moving from observation towards intervention.</li>
{% endif %}

{% if attention %}
<li><a href="{{ attention.url | relative_url }}"><strong>Attention Is All You Need</strong></a> — perception, attention and situational awareness.</li>
{% endif %}
</ol>

---

<div class="samm-community">

## Join the SAMM Community

New insights on technical leadership, software engineering, and SAMM community news — straight to your inbox.

<script async data-uid="78cb7db9af" src="https://leadingdepth-com.kit.com/78cb7db9af/index.js"></script>

</div>

---

## Latest from SAMM

{% assign samm_posts = site.categories.SAMM | default: site.categories.samm %}

{% for post in samm_posts limit: 6 %}
### [{{ post.title }}]({{ post.url | relative_url }})

{{ post.excerpt | strip_html | truncatewords: 24 }}

{% endfor %}