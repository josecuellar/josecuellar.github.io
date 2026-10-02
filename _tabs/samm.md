---
title: Situational Awareness Management Model
icon: fas fa-project-diagram
order: 2
---

<style>
  .samm-hero {
    margin: 0 0 2.5rem;
  }

  .samm-hero h1 {
    margin-bottom: .6rem;
  }

  .samm-tagline {
    font-size: 1.15rem;
    font-weight: 600;
    line-height: 1.55;
    margin-bottom: 1rem;
  }

  .samm-lead {
    font-size: 1.05rem;
    line-height: 1.75;
    color: var(--text-muted-color);
    max-width: 800px;
  }

  .samm-primary-link {
    display: inline-block;
    margin-top: .5rem;
    font-weight: 600;
  }

  .samm-flow {
    margin: 2.5rem 0 3rem;
    padding: 1.8rem 1rem;
    border: 1px solid var(--main-border-color);
    border-radius: 12px;
    text-align: center;
  }

  .samm-flow-sources {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: .6rem;
  }

  .samm-flow-source {
    padding: .55rem 1rem;
    border: 1px solid var(--main-border-color);
    border-radius: 8px;
    font-size: .85rem;
    font-weight: 700;
    letter-spacing: .03em;
  }

  .samm-flow-arrow {
    margin: .9rem 0;
    font-size: 1.3rem;
    color: var(--text-muted-color);
  }

  .samm-awareness {
    display: inline-block;
    padding: .7rem 1.3rem;
    border-radius: 8px;
    font-weight: 700;
  }

  .samm-intervention {
    font-size: .85rem;
    font-weight: 700;
    letter-spacing: .03em;
  }

  .samm-section-title {
    margin-top: 3rem;
    margin-bottom: 1.3rem;
  }

  .samm-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 1rem;
    margin-bottom: 3rem;
  }

  .samm-card {
    display: flex;
    flex-direction: column;
    padding: 1.4rem;
    border: 1px solid var(--main-border-color);
    border-radius: 12px;
  }

  .samm-card-number {
    margin-bottom: .55rem;
    color: var(--text-muted-color);
    font-size: .78rem;
    font-weight: 700;
    letter-spacing: .04em;
  }

  .samm-card h3 {
    margin: 0 0 .7rem;
    font-size: 1.25rem;
  }

  .samm-card p {
    flex-grow: 1;
    color: var(--text-muted-color);
    line-height: 1.6;
  }

  .samm-card a {
    font-weight: 600;
    text-decoration: none;
  }

  .samm-thinking {
    margin: 1.5rem 0 3rem;
    padding-left: 1.2rem;
    border-left: 3px solid var(--main-border-color);
  }

  .samm-thinking p {
    line-height: 1.7;
  }

  .samm-reading {
    padding-left: 1.3rem;
  }

  .samm-reading li {
    margin-bottom: .85rem;
    padding-left: .25rem;
  }

  .samm-community {
    margin: 3rem 0;
    padding: 1.5rem;
    border: 1px solid var(--main-border-color);
    border-radius: 12px;
  }

  .samm-community h2 {
    margin-top: 0;
  }

  .samm-community-intro {
    color: var(--text-muted-color);
    margin-bottom: 1rem;
  }

  .samm-latest {
    margin-top: 3rem;
  }

  .samm-post {
    margin-bottom: 1.5rem;
  }

  .samm-post h3 {
    margin-bottom: .3rem;
    font-size: 1.15rem;
  }

  .samm-post p {
    color: var(--text-muted-color);
  }

  @media (max-width: 768px) {
    .samm-grid {
      grid-template-columns: 1fr;
    }

    .samm-flow {
      padding: 1.3rem .8rem;
    }
  }
  .samm-hero-image {
  margin: 2rem 0 3.5rem;
}

.samm-hero-image img {
  width: 100%;
  display: block;
  border-radius: 14px;
  border: 1px solid var(--main-border-color);
}
</style>

{% assign samm_intro = site.posts | where_exp: "post", "post.title contains 'Situational Awareness Management Model'" | last %}
{% assign people_post = site.posts | where_exp: "post", "post.title contains 'Representing people'" | first %}
{% assign situational_map = site.posts | where_exp: "post", "post.title contains 'Situational Map'" | first %}
{% assign situational_process = site.posts | where_exp: "post", "post.title contains 'Situational Process'" | first %}
{% assign attention = site.posts | where_exp: "post", "post.title contains 'Attention Is All You Need'" | first %}
{% assign practices_post = site.posts | where_exp: "post", "post.title contains 'Common SAMM Practices'" | first %}


<div class="samm-hero">

  <p class="samm-tagline">
     > A human-centered management model born from experience, built to understand before acting.
  </p>

  <p class="samm-lead">
        SAMM reflects a way of leading shaped by years of working with people, teams and complex technical systems: observe before judging, understand before intervening, and adapt leadership to the reality of each situation.
        It brings together people, relationships, capabilities, systems and context to build a living picture of what is really happening — not to prescribe how leaders should act, but to give them the situational awareness to know when to act, how to act, and when not to act at all.
  </p>

  {% if samm_intro %}
    <a class="samm-primary-link" href="{{ samm_intro.url | relative_url }}">
      Start with SAMM →
    </a>
  {% endif %}

</div>

<div class="samm-hero-image">
    <img src="/wp-content/uploads/samm_intro.png" />
</div>

<div class="samm-grid">

  <div class="samm-card">
    <span class="samm-card-number">01 — FOUNDATIONS</span>
    <h3>Understand the model</h3>
    <p>
      Start with the principles behind SAMM and why situational awareness matters
      in technical leadership.
    </p>

    {% if samm_intro %}
      <a href="{{ samm_intro.url | relative_url }}">Explore the foundations →</a>
    {% endif %}
  </div>


  <div class="samm-card">
    <span class="samm-card-number">02 — PEOPLE &amp; ACTORS</span>
    <h3>Understand the people</h3>
    <p>
      Explore actors, capabilities, relationships, perception and the human
      context surrounding a technical system.
    </p>

    {% if people_post %}
      <a href="{{ people_post.url | relative_url }}">Explore People &amp; Actors →</a>
    {% endif %}
  </div>


  <div class="samm-card">
    <span class="samm-card-number">03 — SITUATIONAL AWARENESS</span>
    <h3>Understand the situation</h3>
    <p>
      Move from isolated observations to a broader understanding of context,
      signals, perception and change.
    </p>

    {% if situational_map %}
      <a href="{{ situational_map.url | relative_url }}">Explore the Situational Map →</a>
    {% endif %}
  </div>


  <div class="samm-card">
    <span class="samm-card-number">04 — PRACTICES</span>
    <h3>Put SAMM into practice</h3>
    <p>
      Apply the model through Actor Mapping, Situational Pulse, Tech Spaces,
      1:1s and other recurring practices.
    </p>

    {% if practices_post %}
      <a href="{{ practices_post.url | relative_url }}">Explore SAMM Practices →</a>
    {% endif %}
  </div>

</div>


<h2 class="samm-section-title">How SAMM thinks about situations</h2>

<div class="samm-thinking">

  <p>
    SAMM is not intended to prescribe a fixed response. It provides a way to
    continuously <strong>observe, interpret and understand</strong> a changing
    technical and human system before intervening.
  </p>

  {% if situational_process %}
    <p>
      <a href="{{ situational_process.url | relative_url }}">
        Read: The Situational Process →
      </a>
    </p>
  {% endif %}

  {% if attention %}
    <p>
      <a href="{{ attention.url | relative_url }}">
        Read: Attention Is All You Need →
      </a>
    </p>
  {% endif %}

</div>


<h2 class="samm-section-title">Start here</h2>

<p>
  If this is your first time exploring SAMM, follow the model through these
  core articles:
</p>

<ol class="samm-reading">

  {% if samm_intro %}
    <li>
      <a href="{{ samm_intro.url | relative_url }}">
        <strong>Situational Awareness Management Model</strong>
      </a>
      — an introduction to the model and its purpose.
    </li>
  {% endif %}

  {% if people_post %}
    <li>
      <a href="{{ people_post.url | relative_url }}">
        <strong>Representing People Within Situations</strong>
      </a>
      — bringing the human dimension into the situational picture.
    </li>
  {% endif %}

  {% if situational_map %}
    <li>
      <a href="{{ situational_map.url | relative_url }}">
        <strong>The Situational Map</strong>
      </a>
      — representing the system and its context.
    </li>
  {% endif %}

  {% if situational_process %}
    <li>
      <a href="{{ situational_process.url | relative_url }}">
        <strong>The Situational Process</strong>
      </a>
      — moving from observation towards intervention.
    </li>
  {% endif %}

  {% if attention %}
    <li>
      <a href="{{ attention.url | relative_url }}">
        <strong>Attention Is All You Need</strong>
      </a>
      — exploring attention, perception and situational awareness.
    </li>
  {% endif %}

  {% if practices_post %}
    <li>
      <a href="{{ practices_post.url | relative_url }}">
        <strong>Common SAMM Practices</strong>
      </a>
      — bringing the model into everyday technical leadership.
    </li>
  {% endif %}

</ol>


<div class="samm-community">

  <h2>Join the SAMM Community</h2>

  <p class="samm-community-intro">
    New insights on technical leadership, software engineering, and SAMM
    community news — straight to your inbox.
  </p>

  <script
    async
    data-uid="78cb7db9af"
    src="https://leadingdepth-com.kit.com/78cb7db9af/index.js">
  </script>

</div>


<div class="samm-latest">

  <h2>Latest from SAMM</h2>

  {% assign samm_posts = site.posts | where_exp: "post", "post.categories contains 'Situational Awareness Management Model'" %}

  {% if samm_posts.size > 0 %}

    {% for post in samm_posts limit: 6 %}
      <article class="samm-post">
        <h3>
          <a href="{{ post.url | relative_url }}">
            {{ post.title }}
          </a>
        </h3>

        <p>
          {{ post.excerpt | strip_html | truncatewords: 28 }}
        </p>
      </article>
    {% endfor %}

  {% else %}

    <p>
      Explore the latest articles and developments around the Situational
      Awareness Management Model.
    </p>

  {% endif %}

</div>