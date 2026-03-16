<?php
$page = 'home';
require_once 'includes/header.php';

$slides = [
  [
    'key'     => 'hero-1',
    'eyebrow' => 'Non-Surgical Solutions &middot; Zero Downtime',
    'title1'  => 'Turn Back Time',
    'title2'  => '<em>with Anti-Aging</em>',
    'title3'  => 'Solutions',
    'sub'     => 'Experience the power of HIFU, bio-stimulation &amp; regenerative therapies that lift, firm, and restore your youthful glow &mdash; naturally and safely.',
    'cta1_text' => 'Book Free Consultation',
    'cta1_href' => '#',
    'cta1_popup'=> true,
    'cta2_text' => 'View Before &amp; After',
    'cta2_href' => '/treatments.php',
    'cta2_icon' => 'fas fa-images',
  ],
  [
    'key'     => 'hero-2',
    'eyebrow' => 'Advanced Skin Care &middot; BGC Philippines',
    'title1'  => 'Reveal Your',
    'title2'  => '<em>Most Radiant</em>',
    'title3'  => 'Skin Ever',
    'sub'     => 'From Carbon Laser and HydraFacial to Pico Laser &mdash; our science-backed face treatments deliver visible brightening, tightening, and glow in every session.',
    'cta1_text' => 'Explore Face Treatments',
    'cta1_href' => '/treatments.php',
    'cta1_popup'=> false,
    'cta2_text' => 'Book Appointment',
    'cta2_href' => '#',
    'cta2_icon' => 'fas fa-calendar-check',
  ],
  [
    'key'     => 'hero-3',
    'eyebrow' => 'Body &amp; Hair Wellness &middot; Certified Professionals',
    'title1'  => 'Sculpt, Restore',
    'title2'  => '<em>&amp; Renew</em>',
    'title3'  => 'Your Body',
    'sub'     => 'Cryotherapy, EMS sculpting, and hair regrowth therapies clinically proven to reshape your body and restore hair density &mdash; zero surgery, zero recovery.',
    'cta1_text' => 'View Body &amp; Hair Treatments',
    'cta1_href' => '/treatments.php',
    'cta1_popup'=> false,
    'cta2_text' => 'Book a Session',
    'cta2_href' => '#',
    'cta2_icon' => 'fas fa-arrow-right',
  ],
  [
    'key'     => 'hero-4',
    'eyebrow' => 'Weekend Promo &middot; 40% Off All Treatments',
    'title1'  => 'Glow More,',
    'title2'  => '<em>Pay Less &mdash;</em>',
    'title3'  => 'Only &#8369;600',
    'sub'     => 'This weekend only: every treatment from &#8369;1,000 down to &#8369;600 with freebies included. Reservations required &mdash; limited slots available daily.',
    'cta1_text' => 'Claim This Offer',
    'cta1_href' => '#',
    'cta1_popup'=> true,
    'cta2_text' => 'See All Services',
    'cta2_href' => '/treatments.php',
    'cta2_icon' => 'fas fa-list',
  ],
];
$cards = [
 [
'cat'=>'face',
'badge'=>'Most Popular',
'badge_class'=>'',
'img'=>'/assets/image/hifu7d.jpeg',
'cat_lbl'=>'Face Care',
'title'=>'Hifu 7D Lift',
'desc'=>'Non-surgical facelift using focused ultrasound energy to tighten and lift skin from 7 depths. Visibly younger-looking results in one session.',
'orig'=>'&#8369;1,000',
'price'=>'&#8369;600',
'price_sfx'=>'/ area'
],
  [
'cat'=>'face',
'badge'=>'New',
'badge_class'=>'gold',
'img'=>'/assets/image/carbon-laser-peel.jpg',
'cat_lbl'=>'Face Care',
'title'=>'Carbon Laser Peel',
'desc'=>'The Hollywood Peel — removes impurities, minimizes pores, and gives your skin an instant luminous glow without any downtime.',
'orig'=>'&#8369;1,000',
'price'=>'&#8369;600',
'price_sfx'=>''
],
  [
'cat'=>'body',
'badge'=>'',
'badge_class'=>'',
'img'=>'/assets/image/Cryotherapy.webp',
'cat_lbl'=>'Body Care',
'title'=>'Cryotherapy',
'desc'=>'Harness targeted cold therapy for slimming, skin tightening, and full-body rejuvenation with zero recovery time.',
'orig'=>'&#8369;1,000',
'price'=>'&#8369;600',
'price_sfx'=>''
],
  [
'cat'=>'face',
'badge'=>'',
'badge_class'=>'',
'img'=>'/assets/image/hydrafacial.jpg',
'cat_lbl'=>'Face Care',
'title'=>'HydraFacial',
'desc'=>'A multi-step facial that simultaneously cleanses, exfoliates, and infuses nourishing hydrating serums for a radiant complexion.',
'orig'=>'&#8369;1,000',
'price'=>'&#8369;600',
'price_sfx'=>''
],
  ['cat'=>'hair','badge'=>'','badge_class'=>'','img_key'=>'treatment-hair-regrowth','cat_lbl'=>'Hair Care','title'=>'Hair Regrowth','desc'=>'Stimulate dormant follicles and promote thick, lustrous hair growth with our clinically-proven hair restoration therapy.','orig'=>'&#8369;1,000','price'=>'&#8369;600','price_sfx'=>''],
  [
'cat'=>'skin',
'badge'=>'Weekend Promo',
'badge_class'=>'',
'img'=>'/assets/image/pico.jpg',
'cat_lbl'=>'Skin Boost',
'title'=>'Pico Laser',
'desc'=>'Ultra-fast laser pulses target pigmentation, acne scars, and uneven tone for a clearer, more even complexion.',
'orig'=>'&#8369;1,000',
'price'=>'&#8369;600',
'price_sfx'=>''
],
];
$programs = [
  [
'img'=>'/assets/image/skinblog.webp',
'icon'=>'fas fa-face-grin-stars',
'title'=>'Face Lifting & Tightening',
'desc'=>'Non-surgical lifting programs using HIFU 7D and Carbon Laser to restore youthful firmness without downtime.',
'link'=>'/treatments.php'
],
  [
'img'=>'/assets/image/bodyblog.webp',
'icon'=>'fas fa-snowflake',
'title'=>'Body Sculpting & Slimming',
'desc'=>'Advanced body contouring using Cryotherapy and EMS to reduce fat, tone muscles, and tighten skin.',
'link'=>'/treatments.php'
],
  [
'img'=>'/assets/image/hair.jpg',
'icon'=>'fas fa-seedling',
'title'=>'Hair Restoration & Growth',
'desc'=>'Clinically proven treatments that stimulate dormant follicles and restore healthy scalp vitality.',
'link'=>'/treatments.php'
],
];
require_once 'blog/_data.php';
$previewPosts = array_slice($allPosts, 0, 3);
?>

<!-- ══ HERO ══ -->
<section class="hero" aria-label="Homepage hero">

  <?php foreach ($slides as $i => $s): ?>
  <div class="hero-slide <?= $i===0?'active':'' ?>" data-slide="<?= $i ?>">
    <div class="hero-slide-bg" style="background-image:url('<?= htmlspecialchars(img($s['key'])) ?>');" aria-hidden="true"></div>
    <div class="hero-overlay" aria-hidden="true"></div>

    <!-- Per-slide content -->
    <div class="hero-slide-content">
      <div class="container" style="width:100%;">
        <div class="hero-layout">

          <!-- LEFT: Text -->
          <div class="hero-text-col">

            <p class="hero-eyebrow">
              <span class="hero-eyebrow-dot" aria-hidden="true"></span>
              <?= $s['eyebrow'] ?>
            </p>

            <h1 class="hero-title">
              <span class="htl"><?= $s['title1'] ?></span>
              <span class="htl hero-title-accent"><?= $s['title2'] ?></span>
              <span class="htl"><?= $s['title3'] ?></span>
            </h1>

            <p class="hero-subtitle"><?= $s['sub'] ?></p>

            <div class="hero-btns">
              <?php if($s['cta1_popup']): ?>
              <a href="<?= $s['cta1_href'] ?>" data-popup="booking" class="btn btn-gold">
                <?= $s['cta1_text'] ?> <i class="fas fa-arrow-right" aria-hidden="true"></i>
              </a>
              <?php else: ?>
              <a href="<?= $s['cta1_href'] ?>" class="btn btn-gold">
                <?= $s['cta1_text'] ?> <i class="fas fa-arrow-right" aria-hidden="true"></i>
              </a>
              <?php endif; ?>
              <a href="<?= $s['cta2_href'] ?>" <?= isset($s['cta2_popup']) && $s['cta2_popup'] ? 'data-popup="booking"' : '' ?> class="hero-btn-ghost">
                <span class="hero-play-icon" aria-hidden="true"><i class="<?= $s['cta2_icon'] ?>"></i></span>
                <?= $s['cta2_text'] ?>
              </a>
            </div>

            <?php if($i === 0): ?>
            <div class="hero-proof">
              <div class="hero-avatars" aria-hidden="true">
                <span class="hero-av" style="background:linear-gradient(135deg,#BF7C2E,#A5614D);">M</span>
                <span class="hero-av" style="background:linear-gradient(135deg,#BF7C2E,#8A6A3A);">G</span>
                <span class="hero-av" style="background:linear-gradient(135deg,#9A7A68,#6B4A37);">R</span>
                <span class="hero-av" style="background:linear-gradient(135deg,#3D2B1F,#6B4A37);">A</span>
                <span class="hero-av hero-av-plus">+</span>
              </div>
              <div>
                <div class="hero-stars" aria-label="5 star rating">
                  <i class="fas fa-star" aria-hidden="true"></i><i class="fas fa-star" aria-hidden="true"></i>
                  <i class="fas fa-star" aria-hidden="true"></i><i class="fas fa-star" aria-hidden="true"></i>
                  <i class="fas fa-star" aria-hidden="true"></i>
                </div>
                <p class="hero-proof-text">Trusted by <strong>500+</strong> clients</p>
              </div>
            </div>
            <?php else: ?>
            <div class="hero-slide-tags">
              <?php
              $slideTags=[
                1=>['HIFU 7D','Carbon Laser','HydraFacial','Pico Laser'],
                2=>['Cryotherapy','EMS Sculpting','Hair Regrowth','Sauna Pod'],
                3=>['&#8369;600 / Session','Limited Slots','Freebies Included','Book in Advance'],
              ];
              foreach($slideTags[$i]??[] as $tag): ?>
              <span class="hero-slide-tag"><i class="fas fa-circle-check" aria-hidden="true"></i><?= $tag ?></span>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>

          </div><!-- /hero-text-col -->

          <!-- RIGHT: Stat cards -->
          <div class="hero-stat-col">
            <?php $hStats=[
              ['num'=>'5.0','lbl'=>'Rating','sub'=>'500+ Google Reviews','icon'=>'fas fa-star'],
              ['num'=>'7+','lbl'=>'Years of Excellence','sub'=>'Certified Professionals','icon'=>'fas fa-award'],
              ['num'=>'','lbl'=>'Non-Invasive','sub'=>'Zero Downtime','icon'=>'fas fa-shield-halved'],
            ];
            foreach($hStats as $hs): ?>
            <div class="hero-stat-card">
              <div class="hero-stat-icon"><i class="<?= $hs['icon'] ?>"></i></div>
              <div>
                <?php if($hs['num']): ?><strong class="hero-stat-num"><?= $hs['num'] ?></strong><?php endif; ?>
                <p class="hero-stat-lbl"><?= $hs['lbl'] ?></p>
                <p class="hero-stat-sub"><?= $hs['sub'] ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

        </div><!-- /hero-layout -->
      </div>
    </div><!-- /hero-slide-content -->

  </div><!-- /hero-slide -->
  <?php endforeach; ?>

  <div class="hero-counter" aria-hidden="true">
    <span id="heroCountCur">01</span><span class="hero-counter-sep">/</span><span>0<?= count($slides) ?></span>
  </div>
  <div class="hero-dots" role="tablist" aria-label="Hero slideshow">
    <?php foreach($slides as $i=>$s): ?>
    <button class="hero-dot <?= $i===0?'active':'' ?>" role="tab" aria-label="Slide <?= $i+1 ?>"></button>
    <?php endforeach; ?>
  </div>

  <!-- Hero Navigation Arrows -->
  <div class="hero-arrows" aria-label="Slider navigation">
    <button class="hero-arrow" id="heroPrev" aria-label="Previous slide">
      <i class="fas fa-chevron-left" aria-hidden="true"></i>
    </button>
    <button class="hero-arrow" id="heroNext" aria-label="Next slide">
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
    </button>
  </div>

  <div class="hero-scroll" aria-hidden="true">
    <div class="hero-scroll-line"></div><span>Scroll</span>
  </div>

</section>

<!-- ══ STATS BAR ══ -->
<div class="stats-bar" role="region" aria-label="Key statistics">
  <div class="container">
    <div class="stats-grid">
      <?php $stats=[['icon'=>'fas fa-users','count'=>500,'suffix'=>'+','label'=>'Happy Clients'],['icon'=>'fas fa-star','count'=>13,'suffix'=>'+','label'=>'Treatments Offered'],['icon'=>'fas fa-heart','count'=>98,'suffix'=>'%','label'=>'Satisfaction Rate'],['icon'=>'fas fa-award','count'=>7,'suffix'=>'+','label'=>'Years in BGC']];
      foreach($stats as $s): ?>
      <div class="stat-item">
        <div class="stat-icon"><i class="<?= $s['icon'] ?>" aria-hidden="true"></i></div>
        <span class="stat-number" data-count="<?= $s['count'] ?>" data-suffix="<?= $s['suffix'] ?>">0<?= $s['suffix'] ?></span>
        <span class="stat-label"><?= $s['label'] ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ══ INTRO STRIP ══ -->
<div class="intro-strip">
  <div class="container">
    <div class="intro-strip-inner">
      <p class="intro-text" data-reveal="left">Where beauty meets science &mdash;<br /><strong>results you can see and feel.</strong></p>
      <div class="intro-divider" aria-hidden="true"></div>
      <div class="intro-feats" data-reveal="right">
        <div class="intro-feat"><i class="fas fa-shield-halved" aria-hidden="true"></i><span>100% Non-invasive &amp; FDA-approved treatments</span></div>
        <div class="intro-feat"><i class="fas fa-certificate" aria-hidden="true"></i><span>Certified wellness professionals on every session</span></div>
        <div class="intro-feat"><i class="fas fa-chart-line" aria-hidden="true"></i><span>Visible results from your very first visit</span></div>
      </div>
    </div>
  </div>
</div>

<!-- ══ TREATMENTS ══ -->
<section class="treatments-section" aria-labelledby="treatments-heading">
  <div class="container">
    <header class="section-header" data-reveal="up">
      <div class="label center">Our Services</div>
      <h2 class="section-title" id="treatments-heading">Choose Your Perfect<br /><span class="italic">Treatment</span></h2>
      <p class="section-sub">Advanced treatments for your face, body and hair &mdash; each tailored to your unique wellness goals.</p>
    </header>
    <div class="filter-tabs" data-reveal="fade">
      <button class="tab-btn active" data-tab="all">All</button>
      <button class="tab-btn" data-tab="face">Face Care</button>
      <button class="tab-btn" data-tab="body">Body Care</button>
      <button class="tab-btn" data-tab="hair">Hair Care</button>
      <button class="tab-btn" data-tab="skin">Skin Boost</button>
    </div>
    <div class="treatments-grid">
      <?php foreach ($cards as $i => $c): ?>
      <article class="treatment-card" data-cat="<?= $c['cat'] ?>" data-reveal="up" data-delay="<?= ($i%3)+1 ?>">
        <div class="tc-img">
          <img src="<?= htmlspecialchars($c['img'] ?? img($c['img_key'])) ?>"
               alt="<?= htmlspecialchars($c['title']) ?> treatment at A.I. Skin Revolution BGC"
               loading="lazy" width="600" height="400" />
          <?php if($c['badge']): ?><span class="tc-badge <?= $c['badge_class'] ?>"><?= $c['badge'] ?></span><?php endif; ?>
        </div>
        <div class="tc-body">
          <p class="tc-cat"><?= $c['cat_lbl'] ?></p>
          <h3 class="tc-title"><?= $c['title'] ?></h3>
          <p class="tc-desc"><?= $c['desc'] ?></p>
          <div class="tc-footer">
            <div>
              <span class="tc-price-orig"><?= $c['orig'] ?></span>
              <span class="tc-price"><?= $c['price'] ?><?php if($c['price_sfx']): ?> <small style="font-size:.7rem;color:var(--muted)"><?= $c['price_sfx'] ?></small><?php endif; ?></span>
            </div>
            <a href="/treatments.php" class="tc-link" aria-label="View <?= htmlspecialchars($c['title']) ?> details">
              <i class="fas fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:56px;" data-reveal="fade">
      <a href="/treatments.php" class="btn btn-outline">View All Treatments <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
</section>

<!-- ══ MARQUEE ══ -->
<div class="marquee-wrap" aria-hidden="true">
  <div class="marquee-track">
    <?php foreach(array_merge(['Hifu 7D','Carbon Laser','Pico Laser','HydraFacial','Cryotherapy','EMS Express','Hair Regrowth','Organic Botox','Anti-Melasma','Acne Clarifying','Collagen Treatment','Sauna Pod'],['Hifu 7D','Carbon Laser','Pico Laser','HydraFacial','Cryotherapy','EMS Express','Hair Regrowth','Organic Botox','Anti-Melasma','Acne Clarifying','Collagen Treatment','Sauna Pod']) as $item): ?>
    <span class="marquee-item"><i class="fas fa-diamond" aria-hidden="true"></i><?= $item ?></span>
    <?php endforeach; ?>
  </div>
</div>

<!-- ══ HOW IT WORKS ══ -->
<section class="process-section" aria-labelledby="process-heading">
  <div class="container">
    <header class="section-header" data-reveal="up">
      <div class="label center">How It Works</div>
      <h2 class="section-title" id="process-heading">Your Journey to<br /><span class="italic">Radiant Skin</span></h2>
      <p class="section-sub">Four simple steps from booking to transformation.</p>
    </header>
    <div class="process-grid">
      <?php $steps=[['n'=>'01','icon'=>'fas fa-calendar-check','title'=>'Book Your Slot','desc'=>'Reserve your appointment online, by phone, or via WhatsApp. Walk-ins are not accepted &mdash; every client gets full dedicated attention.'],['n'=>'02','icon'=>'fas fa-magnifying-glass','title'=>'Skin Consultation','desc'=>'Our certified professionals assess your skin, discuss your goals, and design a custom treatment plan tailored exactly to your needs.'],['n'=>'03','icon'=>'fas fa-wand-magic-sparkles','title'=>'Your Treatment','desc'=>'Relax in our premium clinic while our specialists deliver your chosen treatment using the latest non-invasive technology available.'],['n'=>'04','icon'=>'fas fa-face-smile','title'=>'See the Results','desc'=>'Walk out glowing. We guide you on aftercare and follow-up sessions to maintain and maximize your transformation results.']];
      foreach($steps as $i=>$step): ?>
      <div class="process-step" data-reveal="up" data-delay="<?= $i+1 ?>">
        <div class="process-num"><?= $step['n'] ?></div>
        <div class="process-icon"><i class="<?= $step['icon'] ?>" aria-hidden="true"></i></div>
        <h3 class="process-title"><?= $step['title'] ?></h3>
        <p class="process-desc"><?= $step['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ PERSONALIZED PROGRAMS ══ -->
<section class="skin-types-section" aria-labelledby="programs-heading">
  <div class="container">
    <header class="section-header" data-reveal="up">
      <div class="label center">Personalized Programs</div>
      <h2 class="section-title" id="programs-heading">Treatments Designed<br /><span class="italic">For Your Goals</span></h2>
      <p class="section-sub">Whether you want to brighten, tighten, or restore &mdash; we have a specialized program built for you.</p>
    </header>
    <div class="skin-types-grid">
      <?php foreach($programs as $i=>$p): ?>
      <div class="skin-type-card" data-reveal="up" data-delay="<?= $i+1 ?>">
        <div class="skin-type-bg">
          <img src="<?= htmlspecialchars($p['img']) ?>"
     alt="<?= strip_tags($p['title']) ?> at A.I. Skin Revolution BGC"
     width="600"
     height="800"
     loading="lazy">
        </div>
        <div class="skin-type-overlay" aria-hidden="true"></div>
        <div class="skin-type-content">
          <div class="skin-type-icon"><i class="<?= $p['icon'] ?>" aria-hidden="true"></i></div>
          <h3 class="skin-type-title"><?= $p['title'] ?></h3>
          <p class="skin-type-desc"><?= $p['desc'] ?></p>
          <a href="<?= $p['link'] ?>" class="skin-type-link">Explore Program <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ BEFORE & AFTER ══ -->
<section class="ba-section" aria-labelledby="ba-heading">
  <div class="container">
    <header class="ba-header" data-reveal="up">
      <div class="label center">Real Results</div>
      <h2 class="section-title" id="ba-heading" style="color:var(--white);">The Transformation<br /><span class="italic" style="color:var(--blush);">Speaks for Itself</span></h2>
      <p class="section-sub" style="color:rgba(255,255,255,.5);">Drag the slider to see real, unfiltered before and after results from our clients.</p>
    </header>
    <div class="ba-wrapper">
      <div data-reveal="left">
        <div class="ba-slider-outer" role="img" aria-label="Before and after treatment comparison">
          <div class="ba-before">
  <img src="/assets/image/before-treatment.png"
       alt="Skin before treatment at A.I. Skin Revolution"
       width="600"
       height="800"
       loading="lazy">
</div>

<div class="ba-after">
  <img src="/assets/image/after-treatment.png"
       alt="Skin after treatment at A.I. Skin Revolution"
       width="600"
       height="800"
       loading="lazy">
</div>
          <div class="ba-line" aria-hidden="true"><div class="ba-handle"><i class="fas fa-arrows-left-right"></i></div></div>
          <span class="ba-lbl before" aria-hidden="true">Before</span>
          <span class="ba-lbl after" aria-hidden="true">After</span>
        </div>
      </div>
      <div class="ba-info-body" data-reveal="right">
        <h3 class="ba-info-title">See What Our<br /><em>Treatments</em><br />Can Do For You</h3>
        <p>Our clients experience remarkable transformations. From skin brightening to body sculpting &mdash; real results that last longer than expectations.</p>
        <div class="ba-results">
          <div class="ba-result"><span class="ba-result-num">1</span><span class="ba-result-lbl">Session for visible results</span></div>
          <div class="ba-result"><span class="ba-result-num">98%</span><span class="ba-result-lbl">Client satisfaction</span></div>
          <div class="ba-result"><span class="ba-result-num">0</span><span class="ba-result-lbl">Downtime required</span></div>
          <div class="ba-result"><span class="ba-result-num">500+</span><span class="ba-result-lbl">Lives transformed</span></div>
        </div>
        <a href="#" data-popup="booking" class="btn btn-primary">Book Your Session <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ══ PROMO ══ -->
<section class="promo-section" aria-labelledby="promo-heading">
  <div class="promo-pattern" aria-hidden="true"></div>
  <div class="container">
    <div class="promo-inner">
      <div data-reveal="left">
        <div class="promo-eyebrow"><i class="fas fa-tag" aria-hidden="true"></i>Weekend Promo &mdash; 40% Off</div>
        <div class="promo-big-price" aria-label="Price 600 Philippine pesos"><sup>&#8369;</sup>600</div>
        <h2 class="promo-headline" id="promo-heading">With Freebies Included</h2>
        <p class="promo-note">Discounted rate &mdash; regular price &#8369;1,000 per treatment</p>
        <a href="#" data-popup="booking" class="btn btn-white">Claim This Offer <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
        <p class="promo-disclaimer"><i class="fas fa-circle-info" aria-hidden="true"></i>Non-refundable &middot; One-time use per customer &middot; Reservations required</p>
      </div>
      <div class="promo-card" data-reveal="right">
        <p class="promo-card-title">Included Treatments</p>
        <div class="promo-list">
          <?php foreach(['Hair Regrowth','Hifu 7D','Carbon Laser','Pico Laser','Organic Botox','Anti-Melasma','Hydrafacial','Eyebag Treatment','Acne Clarifying','EMS Express','Cryotherapy','+ Many More'] as $item): ?>
          <div class="promo-item"><i class="fas fa-check-circle" aria-hidden="true"></i><?= $item ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ WHY US ══ -->
<section class="why-section" aria-labelledby="why-heading">
  <div class="container">
    <header class="section-header" data-reveal="up">
      <div class="label center">Why Us</div>
      <h2 class="section-title" id="why-heading">The A.I. Skin<br /><span class="italic">Difference</span></h2>
      <p class="section-sub">We combine cutting-edge technology with personalized care to deliver results you can see and feel.</p>
    </header>
    <div class="why-grid">
      <?php $whys=[['icon'=>'fas fa-shield-halved','title'=>'Safety First','desc'=>'All treatments are non-invasive and conducted by certified professionals using only FDA-approved technologies.'],['icon'=>'fas fa-wand-magic-sparkles','title'=>'Personalized Care','desc'=>'Custom treatment plans tailored to your unique skin type, body goals, and personal wellness journey.'],['icon'=>'fas fa-chart-bar','title'=>'Visible Results','desc'=>'Committed to delivering real, measurable results that you can see and feel after every single session.'],['icon'=>'fas fa-trophy','title'=>'7+ Years of Trust','desc'=>'Over 500 happy clients and 7 years of expertise in BGC have earned us a reputation for excellence.']];
      foreach($whys as $i=>$w): ?>
      <div class="why-card" data-reveal="up" data-delay="<?= $i+1 ?>">
        <div class="why-icon"><i class="<?= $w['icon'] ?>" aria-hidden="true"></i></div>
        <h3 class="why-title"><?= $w['title'] ?></h3>
        <p class="why-desc"><?= $w['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ BRAND TRUST STRIP ══ -->
<div class="brand-strip" data-reveal="fade">
  <div class="container">
    <div class="brand-strip-inner">
      <?php foreach([['fas fa-user-doctor','Certified Professionals'],['fas fa-microscope','Medical-Grade Technology'],['fas fa-leaf','FDA-Approved Products'],['fas fa-clock','Same-Day Results'],['fas fa-heart-pulse','Non-Invasive Methods'],['fas fa-medal','7+ Years Excellence']] as $t): ?>
      <div class="brand-item"><i class="<?= $t[0] ?>" aria-hidden="true"></i><span><?= $t[1] ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ══ FEATURED TREATMENT ══ -->
<section class="featured-section" aria-labelledby="featured-heading">
  <div class="container">
    <div class="featured-inner">
      <div class="featured-img-wrap" data-reveal="left">
        <div class="featured-img">
  <img 
    src="/assets/image/homeabout.webp"
    alt="HIFU 7D non-surgical facelift treatment at A.I. Skin Revolution BGC"
    width="900"
    height="560"
  />
</div>
        <div class="featured-float-card">
          <span class="featured-float-num">1</span>
          <span class="featured-float-lbl">Session for results</span>
        </div>
      </div>
      <div class="featured-info" data-reveal="right">
        <div class="label">Featured Treatment</div>
        <h2 class="section-title" id="featured-heading">HIFU 7D &mdash;<br /><span class="italic">The Non-Surgical</span><br />Facelift</h2>
        <p>HIFU 7D is the gold standard in non-surgical skin lifting. It uses focused ultrasound energy at 7 distinct depths &mdash; from the surface all the way to the SMAS layer that surgeons target in traditional facelifts.</p>
        <p>The result? Tighter, lifted, younger-looking skin. Zero downtime. Zero injections.</p>
        <div class="feat-tags">
          <span class="tag-chip">Non-Surgical</span><span class="tag-chip">Zero Downtime</span>
          <span class="tag-chip">Instant Lift</span><span class="tag-chip">Collagen Boost</span>
        </div>
        <div style="display:flex;gap:14px;align-items:center;flex-wrap:wrap;">
          <a href="#" data-popup="booking" class="btn btn-primary">Book Hifu 7D <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
          <div><span style="font-size:.78rem;text-decoration:line-through;color:var(--muted);">&#8369;1,000</span>
          <span style="font-family:var(--fd);font-size:1.9rem;color:var(--mocha);display:block;line-height:1;">&#8369;600</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ PARALLAX QUOTE ══ -->
<div class="parallax-strip">
  <div class="container">
    <p class="parallax-text" data-reveal="up">&ldquo;Confidence begins with <em>radiant skin&rdquo;</em></p>
  </div>
</div>

<!-- ══ TESTIMONIALS ══ -->
<section class="testimonials-section" aria-labelledby="testi-heading">
  <div class="container">
    <header class="section-header" data-reveal="up">
      <div class="label center">Client Stories</div>
      <h2 class="section-title" id="testi-heading">Stories That Reflect<br /><span class="italic">Real Results</span></h2>
    </header>
  </div>
  <div class="testi-track-wrap">
    <div class="testi-track">
      <?php $testimonials=[['init'=>'M','name'=>'Maria S.','t'=>'Hifu 7D','text'=>'After just one session of Hifu 7D, my skin looks lifted and tighter. My friends thought I had surgery &mdash; the results are that dramatic!'],['init'=>'J','name'=>'Jen T.','t'=>'HydraFacial','text'=>'The HydraFacial left my skin glowing for weeks. The staff was professional, the atmosphere premium, and the results beyond my expectations.'],['init'=>'A','name'=>'Ana R.','t'=>'Carbon Laser','text'=>'My pores visibly shrank after the Carbon Laser. It was painless and the results were immediate &mdash; absolutely glowing the very next morning!'],['init'=>'C','name'=>'Carlo M.','t'=>'Hair Regrowth','text'=>'I was skeptical at first but the hair regrowth treatment genuinely worked. New growth visible within weeks and my confidence is fully restored.'],['init'=>'B','name'=>'Bea L.','t'=>'Cryotherapy','text'=>'Cryotherapy helped me reach my body sculpting goals so much faster than expected. The results after 5 sessions were genuinely incredible.'],['init'=>'S','name'=>'Sofia G.','t'=>'Anti-Melasma','text'=>'My melasma has improved dramatically. The team creates a personalized protocol and truly understands your skin concerns inside and out.'],['init'=>'D','name'=>'Diana K.','t'=>'Pico Laser','text'=>'The Pico Laser cleared acne scars I had carried for years. Results genuinely exceeded my expectations &mdash; completely transformed my confidence.'],['init'=>'T','name'=>'Trisha V.','t'=>'Organic Botox','text'=>'Organic Botox gave me the smoothest, plumpest skin without anything invasive. I feel like I have turned back the clock by a full decade!']];
      foreach(array_merge($testimonials,$testimonials) as $t): ?>
      <article class="testi-card">
        <div class="testi-stars" aria-label="5 out of 5 stars">
          <i class="fas fa-star" aria-hidden="true"></i><i class="fas fa-star" aria-hidden="true"></i><i class="fas fa-star" aria-hidden="true"></i><i class="fas fa-star" aria-hidden="true"></i><i class="fas fa-star" aria-hidden="true"></i>
        </div>
        <blockquote class="testi-text">&ldquo;<?= $t['text'] ?>&rdquo;</blockquote>
        <div class="testi-author">
          <div class="testi-avatar" aria-hidden="true"><?= $t['init'] ?></div>
          <div><p class="testi-name"><?= $t['name'] ?></p><p class="testi-treatment"><?= $t['t'] ?></p></div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ INSTAGRAM GRID ══ -->
<section class="instagram-section" aria-labelledby="ig-heading">
  <div class="container">
    <header class="section-header" data-reveal="up">
      <div class="label center">Follow Our Journey</div>
      <h2 class="section-title" id="ig-heading">See Us on<br /><span class="italic">Instagram</span></h2>
      <p class="section-sub">Follow <a href="https://www.instagram.com/aiskinrevolutionph/" target="_blank" rel="noopener" style="color:var(--rose);font-weight:500;">@aiskinrevolutionph</a> for daily beauty inspiration and exclusive promos.</p>
    </header>
  </div>
  <div class="instagram-grid" data-reveal="fade">
    <?php $igItems=[['ig-1','HIFU 7D Treatment'],['ig-2','Carbon Laser Peel'],['ig-3','HydraFacial Session'],['ig-4','Cryotherapy Body Sculpt'],['ig-5','Hair Regrowth Therapy'],['ig-6','Pico Laser Treatment']];
    foreach($igItems as $ig): ?>
    <a href="https://www.instagram.com/aiskinrevolutionph/" target="_blank" rel="noopener" class="ig-item" aria-label="View <?= $ig[1] ?> on Instagram">
      <img src="<?= htmlspecialchars(img($ig[0])) ?>" alt="<?= $ig[1] ?> at A.I. Skin Revolution BGC" loading="lazy" width="400" height="400" />
      <div class="ig-overlay" aria-hidden="true"><i class="fab fa-instagram"></i></div>
    </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- ══ BLOG PREVIEW ══ -->
<section class="blog-section" aria-labelledby="blog-heading">
  <div class="container">
    <header class="section-header" data-reveal="up">
      <div class="label center">Wellness Blog</div>
      <h2 class="section-title" id="blog-heading">Beauty &amp; Wellness<br /><span class="italic">Insights</span></h2>
      <p class="section-sub">Expert tips, treatment guides, and beauty inspiration to help you glow inside and out.</p>
    </header>
    <div class="blog-grid-home">
      <?php foreach($previewPosts as $i=>$p): ?>
      <article class="blog-card" data-reveal="up" data-delay="<?= $i+1 ?>">
        <a href="/blog/<?= $p['slug'] ?>.php"
           class="bc-img"
           aria-label="Read: <?= htmlspecialchars($p['title']) ?>">
          <img src="<?= htmlspecialchars(img($p['img_key'])) ?>"
               alt="<?= htmlspecialchars($p['title']) ?>"
               loading="lazy" width="800" height="500" />
          <span class="bc-cat-pill"><?= htmlspecialchars($p['cat']) ?></span>
        </a>
        <div class="bc-body">
          <div class="bc-meta">
            <span class="bc-cat"><?= htmlspecialchars($p['cat']) ?></span>
            <span class="bc-sep" aria-hidden="true"></span>
            <span class="bc-date">
              <i class="fas fa-calendar-alt" aria-hidden="true"></i>
              <?= $p['date'] ?>
            </span>
          </div>
          <h3 class="bc-title">
            <a href="/blog/<?= $p['slug'] ?>.php"><?= htmlspecialchars($p['title']) ?></a>
          </h3>
          <p class="bc-excerpt"><?= htmlspecialchars($p['excerpt']) ?></p>
          <div class="bc-footer">
            <a href="/blog/<?= $p['slug'] ?>.php" class="bc-link">
              Read Article <i class="fas fa-arrow-right" aria-hidden="true"></i>
            </a>
            <span class="bc-read-time">
              <i class="fas fa-clock" aria-hidden="true"></i>
              <?= $p['read'] ?> read
            </span>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:52px;" data-reveal="fade">
      <a href="/blog.php" class="btn btn-outline">View All Articles <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
</section>

<!-- ══ GOOGLE REVIEWS ══ -->
<section class="testimonials-section" aria-labelledby="google-reviews-heading">
  <div class="container">
    <div class="section-header" data-reveal="up">
      <div class="label center">Happy Clients</div>
      <h2 id="google-reviews-heading" class="section-title">
        Real Results, <span class="italic">Real Reviews</span>
      </h2>
      <p class="section-sub">Verified reviews from our Google Business Profile — straight from our valued clients.</p>
    </div>
    <div class="testimonials-grid">

      <div class="testi-card" data-reveal="up">
        <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testi-text">"Amazing experience! My skin has never looked better. The HIFU treatment was painless and the results were visible after just one session. The staff is incredibly professional and knowledgeable."</p>
        <div class="testi-footer">
          <div class="testi-avatar">M</div>
          <div>
            <div class="testi-name">Maria Santos</div>
            <div class="testi-date">2 months ago</div>
          </div>
          <div class="testi-source"><i class="fab fa-google"></i> Google</div>
        </div>
      </div>

      <div class="testi-card" data-reveal="up" style="transition-delay:.1s">
        <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testi-text">"I tried the Carbon Laser treatment and wow — my dark spots are dramatically reduced! The clinic is very clean, hygienic and the team makes you feel completely at ease. Highly recommend to everyone!"</p>
        <div class="testi-footer">
          <div class="testi-avatar">J</div>
          <div>
            <div class="testi-name">Joanna Reyes</div>
            <div class="testi-date">3 months ago</div>
          </div>
          <div class="testi-source"><i class="fab fa-google"></i> Google</div>
        </div>
      </div>

      <div class="testi-card" data-reveal="up" style="transition-delay:.2s">
        <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testi-text">"Best skin clinic in Makati! I've been coming here for 6 months for my acne treatment and my skin transformation is unreal. The pricing is very reasonable for the quality of service you get."</p>
        <div class="testi-footer">
          <div class="testi-avatar">A</div>
          <div>
            <div class="testi-name">Andrea Lim</div>
            <div class="testi-date">1 month ago</div>
          </div>
          <div class="testi-source"><i class="fab fa-google"></i> Google</div>
        </div>
      </div>

      <div class="testi-card" data-reveal="up" style="transition-delay:.05s">
        <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testi-text">"Tried Cryotherapy for the first time here and I'm obsessed. My body feels refreshed and toned. The team is warm and welcoming. I'm already booked for next month's session!"</p>
        <div class="testi-footer">
          <div class="testi-avatar">R</div>
          <div>
            <div class="testi-name">Rachel Tan</div>
            <div class="testi-date">3 weeks ago</div>
          </div>
          <div class="testi-source"><i class="fab fa-google"></i> Google</div>
        </div>
      </div>

      <div class="testi-card" data-reveal="up" style="transition-delay:.15s">
        <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testi-text">"The HydraFacial left my skin glowing for weeks! I was skeptical at first but after just one session I was hooked. The staff walked me through every step and genuinely cared about my skin concerns."</p>
        <div class="testi-footer">
          <div class="testi-avatar">C</div>
          <div>
            <div class="testi-name">Christine Go</div>
            <div class="testi-date">5 weeks ago</div>
          </div>
          <div class="testi-source"><i class="fab fa-google"></i> Google</div>
        </div>
      </div>

      <div class="testi-card" data-reveal="up" style="transition-delay:.25s">
        <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        <p class="testi-text">"I've been struggling with melasma for years and nothing worked until I discovered A.I. Skin Revolution. After their Anti-Melasma program, my skin tone is finally even. Forever grateful to this amazing team!"</p>
        <div class="testi-footer">
          <div class="testi-avatar">G</div>
          <div>
            <div class="testi-name">Grace Villanueva</div>
            <div class="testi-date">2 months ago</div>
          </div>
          <div class="testi-source"><i class="fab fa-google"></i> Google</div>
        </div>
      </div>

    </div>
    <div style="text-align:center;margin-top:48px;" data-reveal="up">
      <a href="https://www.google.com/search?q=A.I+Skin+Revolution+Reviews" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
        View All Google Reviews <i class="fab fa-google" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="cta-section" aria-labelledby="cta-heading">
  <div class="container cta-inner">
    <div class="label center" data-reveal="fade">Begin Today</div>
    <h2 class="cta-title" id="cta-heading" data-reveal="up">Begin Your Wellness<br /><em>Journey Today</em></h2>
    <p class="cta-sub" data-reveal="up" data-delay="2">Visit us at Market Market Mall, BGC and experience beauty treatments that truly transform.</p>
    <div class="cta-btns" data-reveal="up" data-delay="3">
      <a href="#" data-popup="booking" class="btn btn-primary">Book a Treatment <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
      <a href="/contact.php" class="btn btn-ghost">Get in Touch <i class="fas fa-phone" aria-hidden="true"></i></a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>

<style>
.sr-only{position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap}
/* ── HERO layout ── */
.hero-layout{display:grid;grid-template-columns:1fr 340px;gap:60px;align-items:center;height:100%;padding-top:100px}
.hero-text-col{max-width:700px}
.hero-eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:.68rem;letter-spacing:.38em;text-transform:uppercase;color:rgba(255,255,255,.75);margin-bottom:28px;opacity:0;transform:translateY(16px);transition:opacity .8s ease .3s,transform .8s var(--ease) .3s}
.hero-slide.active .hero-eyebrow{opacity:1;transform:translateY(0)}
.hero-eyebrow-dot{width:8px;height:8px;border-radius:50%;background:var(--blush);display:inline-block;flex-shrink:0;animation:pulse 2s ease infinite}
@keyframes pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.5;transform:scale(.8)}}
.hero-title{font-family:var(--fd);font-size:clamp(3.2rem,6.5vw,6.8rem);color:var(--white);line-height:.98;font-weight:300;margin-bottom:28px;overflow:hidden}
.htl{display:block;opacity:0;transform:translateY(105%);transition:opacity .9s ease,transform .9s var(--ease)}
.hero-slide.active .htl:nth-child(1){opacity:1;transform:translateY(0);transition-delay:.5s}
.hero-slide.active .htl:nth-child(2){opacity:1;transform:translateY(0);transition-delay:.65s}
.hero-slide.active .htl:nth-child(3){opacity:1;transform:translateY(0);transition-delay:.80s}
.hero-title-accent em{font-style:italic;color:var(--blush)}
.hero-subtitle{font-size:1rem;color:rgba(255,255,255,.68);max-width:520px;margin-bottom:44px;font-weight:400;line-height:1.85;opacity:0;transform:translateY(20px);transition:opacity .9s ease .95s,transform .9s var(--ease) .95s}
.hero-slide.active .hero-subtitle{opacity:1;transform:translateY(0)}
.hero-btns{display:flex;gap:14px;flex-wrap:wrap;align-items:center;margin-bottom:44px;opacity:0;transform:translateY(20px);transition:opacity .9s ease 1.1s,transform .9s var(--ease) 1.1s}
.hero-slide.active .hero-btns{opacity:1;transform:translateY(0)}
.hero-btn-ghost{display:inline-flex;align-items:center;gap:14px;color:rgba(255,255,255,.8);font-size:.78rem;letter-spacing:.1em;text-transform:uppercase;font-weight:600;transition:color var(--tf)}
.hero-btn-ghost:hover{color:var(--white)}
.hero-play-icon{width:44px;height:44px;border-radius:50%;background:rgba(255,255,255,.15);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,.25);display:flex;align-items:center;justify-content:center;color:var(--white);font-size:.75rem;transition:var(--tf);flex-shrink:0}
.hero-btn-ghost:hover .hero-play-icon{background:rgba(255,255,255,.25)}
.hero-proof{display:flex;align-items:center;gap:18px;opacity:0;transform:translateY(16px);transition:opacity .9s ease 1.25s,transform .9s var(--ease) 1.25s}
.hero-slide.active .hero-proof{opacity:1;transform:translateY(0)}
.hero-avatars{display:flex}.hero-av{width:34px;height:34px;border-radius:50%;border:2px solid var(--white);display:flex;align-items:center;justify-content:center;font-family:var(--fd);font-size:.95rem;color:var(--white);font-weight:500;margin-left:-8px}
.hero-av:first-child{margin-left:0}.hero-av-plus{background:rgba(255,255,255,.2);font-size:.62rem;font-family:var(--fb);letter-spacing:0}
.hero-stars{display:flex;gap:2px;margin-bottom:2px}.hero-stars i{color:var(--gold);font-size:.7rem}
.hero-proof-text{font-size:.78rem;color:rgba(255,255,255,.65)}.hero-proof-text strong{color:var(--white)}
.hero-stat-col{display:flex;flex-direction:column;gap:12px;opacity:0;transform:translateX(24px);transition:opacity 1s ease 1s,transform 1s var(--ease) 1s}
.hero-slide.active .hero-stat-col{opacity:1;transform:translateX(0)}
.hero-stat-card{background:rgba(30,18,12,.55);backdrop-filter:blur(18px);border:1px solid rgba(255,255,255,.12);border-radius:14px;padding:18px 22px;display:flex;align-items:center;gap:16px;transition:var(--t)}
.hero-stat-card:hover{background:rgba(191,124,46,.2);border-color:rgba(191,124,46,.3)}
.hero-stat-icon{width:40px;height:40px;border-radius:50%;background:rgba(191,124,46,.2);display:flex;align-items:center;justify-content:center;color:var(--blush);font-size:.9rem;flex-shrink:0}
.hero-stat-num{font-family:var(--fd);font-size:1.5rem;color:var(--blush);display:block;line-height:1;margin-bottom:2px}
.hero-stat-lbl{font-size:.78rem;color:var(--white);font-weight:600;margin-bottom:1px}
.hero-stat-sub{font-size:.66rem;color:rgba(255,255,255,.45);letter-spacing:.05em}
.hero-counter{position:absolute;bottom:44px;right:72px;z-index:4;font-family:var(--fd);font-size:1rem;color:rgba(255,255,255,.4);display:flex;gap:4px;align-items:center}
.hero-counter #heroCountCur{color:var(--blush);font-size:1.3rem}.hero-counter-sep{font-size:.7rem;margin:0 4px}
@media(max-width:1100px){.hero-layout{grid-template-columns:1fr;padding-top:80px}.hero-stat-col,.hero-counter{display:none}}
@media(max-width:768px){.hero-title{font-size:clamp(2.6rem,9vw,4.2rem)}.hero-btns{flex-direction:column;align-items:flex-start;gap:12px}}
</style>
