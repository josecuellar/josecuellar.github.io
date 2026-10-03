---
title: SAMM
icon: fas fa-project-diagram
order: 5
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
.dynamic-title {
  display: none;
}

</style>

{% assign samm_intro = site.posts | where_exp: "post", "post.title contains 'Situational Awareness Management Model'" | last %}
{% assign people_post = site.posts | where_exp: "post", "post.title contains 'Representing people'" | first %}
{% assign situational_map = site.posts | where_exp: "post", "post.title contains 'Situational Map'" | first %}
{% assign situational_process = site.posts | where_exp: "post", "post.title contains 'Situational Process'" | first %}
{% assign attention = site.posts | where_exp: "post", "post.title contains 'Attention Is All You Need'" | first %}
{% assign practices_post = site.posts | where_exp: "post", "post.title contains 'Common SAMM Practices'" | first %}

<div class="samm-hero">
<h1>Situational Awareness Management Model</h1>

<br>

<p class="lead">
  SAMM emerged from years of experiencing software teams from different perspectives —
  <strong>as a backend engineer working within the system and as a technical leader responsible for guiding it.</strong>
  Across different organisations, leadership styles, personalities and ways of working, one observation became increasingly clear:
  <strong>the same people, processes and technology can require very different leadership depending on the situation the system is experiencing.</strong>
</p>

<p>
  Experience provides patterns and possible responses, but effective leadership requires understanding
  <strong>what the system needs at a particular moment</strong> — its context, its people, their motivation,
  and the conditions influencing how they work and evolve.
  This is where the
  <a href="https://leadingdepth.com/learning-experience-situational-awareness-journey-begins/">
    Situational Awareness journey begins
  </a>.
</p>

<p>
  SAMM starts from the relationship between <strong>People, Process and Technology</strong> — the
  <a href="https://leadingdepth.com/golden-triangle-of-human-system/">
    Golden Triangle of Human Systems
  </a>.
  These dimensions continuously influence one another, while people experience their combined effects
  through motivation, challenge, learning, relationships and the way they perform their work.
</p>

<p>
  SAMM does not replace existing methodologies, redefine processes or technologies, or attempt to change people.
  It introduces an additional layer of <strong>organisational situational awareness</strong>: observing how the
  system and its current conditions affect people and their motivation, understanding how those conditions evolve
  over time, and using that awareness to create the environment in which the system can achieve
  <strong>its best sustainable performance at each moment.</strong>
</p>

<blockquote>
  <strong>Observe the system. Understand the situation. Lead with context.</strong>
</blockquote>

</div>
<div class="samm-hero-image">
    <img src="/wp-content/uploads/samm_intro.png" />
</div>
<div class="samm-grid">

  <div class="samm-card">
    <span class="samm-card-number">01 — PEOPLE</span>
    <p>
    SAMM understands teams as <strong>living human systems that continuously learn, adapt and evolve</strong>.
    Explore their <a href="https://leadingdepth.com/complexity-at-the-heart-of-human-systems/">underlying complexity</a>,
    <a href="https://leadingdepth.com/understanding-human-systems-attributes-of-system-actors/">observable human attributes</a>,
    <a href="https://leadingdepth.com/understanding-human-systems-technical-and-evolutionary-system-capabilities/">Technical and Evolutionary Capabilities</a>,
    and <a href="https://leadingdepth.com/the-energy-behind-every-human-system/">motivation as the energy that fuels productivity</a> and drives the system forward.
    </p>
  </div>


  <div class="samm-card">
    <span class="samm-card-number">02 — PROCESS</span>
    <p>
      SAMM <a href="https://leadingdepth.com/the-situational-map/">observes the situation experienced by the human system</a>
      and how its processes and context are affecting people.
      Through <a href="https://leadingdepth.com/the-situational-process/">continuous observation and learning</a>,
      the <a href="https://leadingdepth.com/attention-is-all-you-need-from-situation-to-intervention/">Intervention Roadmap</a>
      provides <strong>recommended processes and areas of attention according to the situation, enabling a more contextual and adaptive intervention</strong>.
    </p>
  </div>


  <div class="samm-card">
    <span class="samm-card-number">03 — TECHNOLOGY</span>
    <p>
      Technical debt is not an isolated technical problem with a universal solution.
      <a href="https://leadingdepth.com/no-silver-bullet-for-technical-debt/">SAMM observes technical debt within the situation of the human system</a>,
      considering its impact on <strong>people, motivation, knowledge, delivery and the system’s ability to evolve</strong>,
      so that technical decisions and interventions can be adapted to the context rather than applying the same response in every situation.
    </p>
  </div>


  <div class="samm-card">
    <span class="samm-card-number">04 — TAKE FIRST STEP</span>
    <p>
      SAMM becomes actionable through <a href="https://leadingdepth.com/common-samm-practices/">a set of practices integrated into everyday leadership</a>,
      making the human system, its capabilities, motivation and current situation progressively observable.
      Practices such as <strong>Onboarding, 1:1s, Tech Space and Situational Pulse</strong> help contrast perceptions, build Situational Memory
      and turn situational awareness into <strong>shared understanding and context-aware action</strong>.
    </p>
  </div>

</div>

<div class="samm-community">

  <h2>Join the SAMM Community</h2>

  <p class="samm-community-intro">
New insights on technical leadership, software engineering, and SAMM community news — straight to your inbox. Join the conversation and share your experience.
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