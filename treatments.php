<?php
$page = 'treatments';
require_once 'includes/header.php';

$treatments = [

[
'cat'=>'face',
'badge'=>'Most Popular',
'img'=>'treatment1.avif',
'name'=>'Ultramax HIFU 7D Lift',
'cat_lbl'=>'Face Care',
'icon'=>'fas fa-circle-dot',
'alt'=>'HIFU 7D non surgical facelift treatment',
'title'=>'Ultramax HIFU 7D skin lifting treatment',

'desc'=>'A powerful non-surgical lifting treatment that uses focused ultrasound energy to tighten deep skin layers and stimulate collagen production for a firmer, lifted appearance.',

'tags'=>['Skin Tightening','Lifting','Anti Aging','Non Surgical'],

'benefits'=>[
'No downtime required',
'Visible lift after one session',
'Boosts collagen production',
'Results last up to 12 months'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>' / area'
],

[
'cat'=>'face',
'badge'=>'',
'img'=>'treatment2.webp',
'name'=>'Carbon Laser Peel',
'cat_lbl'=>'Face Care',
'icon'=>'fas fa-laser-pointer',
'alt'=>'Carbon laser peel facial treatment',
'title'=>'Carbon laser skin brightening facial',

'desc'=>'A deep cleansing laser facial that removes impurities, tightens pores, and brightens dull skin using medical-grade carbon and laser technology.',

'tags'=>['Pore Minimizing','Brightening','Acne Treatment','Oil Control'],

'benefits'=>[
'Instant glowing skin',
'Reduces oil and acne',
'Tightens enlarged pores',
'No recovery time'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>''
],

[
'cat'=>'face',
'badge'=>'',
'img'=>'treatment3.webp',
'name'=>'Pico Laser Treatment',
'cat_lbl'=>'Face Care',
'icon'=>'fas fa-bolt',
'alt'=>'Pico laser pigmentation removal treatment',
'title'=>'Pico laser pigmentation and acne scar removal',

'desc'=>'Advanced picosecond laser technology targets pigmentation, acne scars and uneven tone while preserving surrounding skin.',

'tags'=>['Pigmentation','Acne Scars','Brightening','Tattoo Removal'],

'benefits'=>[
'Removes pigmentation',
'Improves acne scars',
'Minimal downtime',
'Visible results in few sessions'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>''
],

[
'cat'=>'face',
'badge'=>'',
'img'=>'treatment4.avif',
'name'=>'HydraFacial Treatment',
'cat_lbl'=>'Face Care',
'icon'=>'fas fa-droplet',
'alt'=>'Hydrafacial deep cleansing skin treatment',
'title'=>'Hydrafacial skin rejuvenation facial',

'desc'=>'A multi-step facial that cleanses, exfoliates and hydrates the skin while delivering nourishing serums for instant radiance.',

'tags'=>['Hydration','Deep Cleansing','Glow','Anti Aging'],

'benefits'=>[
'Instant skin glow',
'Deep pore cleansing',
'Improves hydration',
'Suitable for all skin types'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>''
],

[
'cat'=>'face',
'badge'=>'',
'img'=>'treatment5.jpg',
'name'=>'Anti Melasma Treatment',
'cat_lbl'=>'Face Care',
'icon'=>'fas fa-sun',
'alt'=>'Melasma pigmentation treatment',
'title'=>'Anti melasma pigmentation treatment',

'desc'=>'Specialized pigmentation treatment designed to reduce melasma, dark spots and uneven skin tone safely.',

'tags'=>['Pigmentation','Melasma','Brightening','Even Tone'],

'benefits'=>[
'Reduces dark patches',
'Improves skin clarity',
'Safe pigmentation treatment',
'Enhances natural glow'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>''
],

[
'cat'=>'face',
'badge'=>'',
'img'=>'treatment6.webp',
'name'=>'Organic Botox Treatment',
'cat_lbl'=>'Face Care',
'icon'=>'fas fa-leaf',
'alt'=>'Organic botox anti aging facial',
'title'=>'Natural organic botox facial treatment',

'desc'=>'A natural anti-aging facial designed to smooth fine lines and restore youthful elasticity without injections.',

'tags'=>['Anti Aging','Firming','Wrinkle Reduction','Natural'],

'benefits'=>[
'Smooths fine lines',
'Improves skin firmness',
'Natural anti aging treatment',
'No needles required'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>''
],

[
'cat'=>'face',
'badge'=>'',
'img'=>'treatment7.webp',
'name'=>'Acne Clarifying Facial',
'cat_lbl'=>'Face Care',
'icon'=>'fas fa-shield-halved',
'alt'=>'Acne treatment facial therapy',
'title'=>'Acne clarifying skin treatment',

'desc'=>'A targeted facial that eliminates acne-causing bacteria while calming inflammation and improving skin clarity.',

'tags'=>['Acne Treatment','Deep Cleansing','Oil Control','Clear Skin'],

'benefits'=>[
'Reduces breakouts',
'Controls oil production',
'Clears clogged pores',
'Improves skin texture'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>''
],

[
'cat'=>'face',
'badge'=>'',
'img'=>'treatment8.webp',
'name'=>'Collagen Induction Treatment',
'cat_lbl'=>'Face Care',
'icon'=>'fas fa-sparkles',
'alt'=>'Collagen boosting skin treatment',
'title'=>'Collagen induction therapy facial',

'desc'=>'Stimulates natural collagen production to improve skin firmness, texture and elasticity over time.',

'tags'=>['Collagen Boost','Firming','Anti Aging','Skin Renewal'],

'benefits'=>[
'Boosts collagen production',
'Improves skin texture',
'Reduces fine lines',
'Enhances skin elasticity'
],

'price'=>'&#8369;800',
'orig'=>'&#8369;1,500',
'per'=>''
],

[
'cat'=>'body',
'badge'=>'',
'img'=>'treatment9.jpeg',
'name'=>'Cryotherapy Body Sculpt',
'cat_lbl'=>'Body Care',
'icon'=>'fas fa-snowflake',
'alt'=>'Cryotherapy body sculpting treatment',
'title'=>'Cryotherapy fat reduction treatment',

'desc'=>'A non-invasive body sculpting treatment using cold therapy to reduce stubborn fat and tighten skin.',

'tags'=>['Fat Reduction','Body Sculpting','Skin Tightening','Slimming'],

'benefits'=>[
'Reduces stubborn fat',
'Tightens loose skin',
'Improves body contour',
'No downtime'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>''
],

[
'cat'=>'body',
'badge'=>'',
'img'=>'treatment10.webp',
'name'=>'EMS Body Sculpt',
'cat_lbl'=>'Body Care',
'icon'=>'fas fa-bolt-lightning',
'alt'=>'EMS muscle toning treatment',
'title'=>'EMS muscle toning and body sculpt',

'desc'=>'High intensity electromagnetic stimulation builds muscle and burns fat simultaneously.',

'tags'=>['Muscle Toning','Body Sculpt','Fat Burning','Fitness'],

'benefits'=>[
'Builds muscle mass',
'Burns fat cells',
'Improves body tone',
'Quick sessions'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>''
],

[
'cat'=>'body',
'badge'=>'',
'img'=>'treatment11.png',
'name'=>'RF Body Tightening',
'cat_lbl'=>'Body Care',
'icon'=>'fas fa-wave-square',
'alt'=>'Radiofrequency skin tightening treatment',
'title'=>'RF skin tightening body treatment',

'desc'=>'Radiofrequency energy stimulates collagen production and tightens loose skin.',

'tags'=>['RF Tightening','Firming','Body Contour','Skin Elasticity'],

'benefits'=>[
'Tightens loose skin',
'Improves body contour',
'Boosts collagen',
'Non invasive'
],

'price'=>'&#8369;800',
'orig'=>'&#8369;1,500',
'per'=>''
],

[
'cat'=>'body',
'badge'=>'',
'img'=>'treatment12.webp',
'name'=>'Infrared Sauna Pod',
'cat_lbl'=>'Body Care',
'icon'=>'fas fa-fire-flame-curved',
'alt'=>'Infrared sauna detox therapy',
'title'=>'Infrared sauna detox therapy session',

'desc'=>'Infrared heat therapy promotes detoxification, improves circulation and helps relax muscles.',

'tags'=>['Detox','Relaxation','Weight Loss','Wellness'],

'benefits'=>[
'Boosts circulation',
'Detoxifies the body',
'Relieves stress',
'Improves metabolism'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>''
],

[
'cat'=>'hair',
'badge'=>'',
'img'=>'treatment13.webp',
'name'=>'Hair Regrowth Treatment',
'cat_lbl'=>'Hair Care',
'icon'=>'fas fa-seedling',
'alt'=>'Hair regrowth therapy treatment',
'title'=>'Hair regrowth scalp treatment',

'desc'=>'Advanced scalp therapy designed to stimulate dormant hair follicles and promote thicker hair growth.',

'tags'=>['Hair Growth','Scalp Therapy','Hair Density','Follicle Activation'],

'benefits'=>[
'Stimulates hair follicles',
'Improves hair density',
'Strengthens hair roots',
'Promotes healthy growth'
],

'price'=>'&#8369;600',
'orig'=>'&#8369;1,000',
'per'=>''
],

[
'cat'=>'hair',
'badge'=>'New',
'img'=>'treatment14.webp',
'name'=>'Hair Renewal Diode Laser',
'cat_lbl'=>'Hair Care',
'icon'=>'fas fa-circle-radiation',
'alt'=>'Hair renewal diode laser therapy',
'title'=>'Hair renewal diode laser scalp therapy',

'desc'=>'A modern diode laser treatment that revitalizes hair follicles and improves scalp health.',

'tags'=>['Laser Therapy','Hair Renewal','Scalp Health','Hair Growth'],

'benefits'=>[
'Stimulates hair growth',
'Improves scalp health',
'Enhances hair thickness',
'Long lasting results'
],

'price'=>'&#8369;800',
'orig'=>'&#8369;1,500',
'per'=>''
]

];

$catLabels = ['all'=>'All Treatments','face'=>'Face Care','body'=>'Body Care','hair'=>'Hair Care'];
$catIcons  = ['all'=>'fas fa-th-large','face'=>'fas fa-face-grin-stars','body'=>'fas fa-person','hair'=>'fas fa-scissors'];
?>

<!-- ══ PAGE HERO ══ -->
<div class="page-hero" style="padding:160px 0 80px;">
  <div class="container page-hero-inner">
    <div class="label" data-reveal="fade">A.I. Skin Revolution BGC</div>
    <h1 class="page-title" data-reveal="up">
      Our <span class="italic">Treatments</span>
    </h1>
    <p style="color:var(--muted);max-width:580px;margin-top:16px;line-height:1.8;" data-reveal="up" data-delay="2">
      Discover our complete menu of advanced, non-invasive treatments for your face, body, and hair &mdash; every one tailored to your personal wellness goals.
    </p>
    <nav class="breadcrumb" aria-label="Breadcrumb" data-reveal="up" data-delay="3">
      <a href="/">Home</a>
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
      <span>Treatments</span>
    </nav>
  </div>
</div>

<!-- ══ CATEGORY OVERVIEW CARDS ══ -->
<div style="background:var(--white);padding:0 0 0 0;border-bottom:1px solid var(--border-soft);">
  <div class="container">
    <div class="tx-cat-strip" data-reveal="fade">
      <?php
      $catStats = [
        'face' => ['count'=>8,'icon'=>'fas fa-face-grin-stars','label'=>'Face Care','desc'=>'Lifting, brightening & rejuvenation'],
        'body' => ['count'=>4,'icon'=>'fas fa-person','label'=>'Body Care','desc'=>'Sculpting, tightening & slimming'],
        'hair' => ['count'=>2,'icon'=>'fas fa-scissors','label'=>'Hair Care','desc'=>'Regrowth & scalp restoration'],
      ];
      foreach($catStats as $key=>$cs): ?>
      <button class="tx-cat-btn" data-catlink="<?= $key ?>">
        <span class="tx-cat-icon"><i class="<?= $cs['icon'] ?>" aria-hidden="true"></i></span>
        <div>
          <strong class="tx-cat-name"><?= $cs['label'] ?></strong>
          <span class="tx-cat-desc"><?= $cs['desc'] ?></span>
        </div>
        <span class="tx-cat-count"><?= $cs['count'] ?></span>
      </button>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ══ TREATMENTS MAIN LIST ══ -->
<section style="background:var(--cream);padding:72px 0 120px;" aria-labelledby="tx-heading">
  <div class="container">

    <!-- Filter bar -->
    <div class="filter-bar" data-reveal="fade" id="tx-filter-bar" role="navigation" aria-label="Filter treatments by category">
      <?php foreach($catLabels as $val=>$lbl): ?>
      <button class="filter-btn <?= $val==='all'?'active':'' ?>" data-filter="<?= $val ?>">
        <i class="<?= $catIcons[$val] ?>" aria-hidden="true"></i>
        <?= $lbl ?>
      </button>
      <?php endforeach; ?>
    </div>

    <!-- Cards grid -->
    <h2 id="tx-heading" class="sr-only">All Treatments</h2>
    <div class="tx-grid">
      <?php foreach($treatments as $i=>$t):
        // Generate anchor ID from treatment name
        $anchorId = strtolower(preg_replace('/[^a-z0-9]+/i','-',trim($t['name'])));
      ?>
      <article class="tx-card tl-card" id="<?= htmlspecialchars($anchorId) ?>" data-cat="<?= $t['cat'] ?>" data-reveal="up" data-delay="<?= ($i%3)+1 ?>"
               itemscope itemtype="https://schema.org/Service">

        <!-- Image -->
        <div class="tx-card-img">
          <img 
src="/assets/image/<?= htmlspecialchars($t['img']) ?>"
alt="<?= htmlspecialchars($t['alt']) ?>"
title="<?= htmlspecialchars($t['title']) ?>"
loading="lazy"
width="600"
height="400"
/>
          <?php if($t['badge']): ?>
          <span class="tx-badge"><?= $t['badge'] ?></span>
          <?php endif; ?>
          <span class="tx-cat-pill"><?= $t['cat_lbl'] ?></span>
        </div>

        <!-- Body -->
        <div class="tx-card-body">
          <div class="tx-card-top">
            <div class="tx-card-icon" aria-hidden="true">
              <i class="<?= $t['icon'] ?>"></i>
            </div>
            <div>
              <p class="tx-card-cat"><?= $t['cat_lbl'] ?></p>
              <h3 class="tx-card-title" itemprop="name"><?= htmlspecialchars($t['name']) ?></h3>
            </div>
          </div>

          <p class="tx-card-desc" itemprop="description"><?= $t['desc'] ?></p>

          <!-- Benefits -->
          <ul class="tx-benefits" aria-label="Key benefits">
            <?php foreach($t['benefits'] as $b): ?>
            <li>
              <i class="fas fa-circle-check" aria-hidden="true"></i>
              <?= htmlspecialchars($b) ?>
            </li>
            <?php endforeach; ?>
          </ul>

          <!-- Tags -->
          <div class="tl-tags" style="margin-bottom:24px;">
            <?php foreach($t['tags'] as $tag): ?>
            <span class="tl-tag"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>

          <!-- Footer -->
          <div class="tx-card-footer">
            <div class="tx-price-wrap">
              <span class="price-orig"><?= $t['orig'] ?><?= $t['per'] ?></span>
              <span class="price-new"><?= $t['price'] ?><?php if($t['per']): ?><small style="font-size:.7rem;color:var(--muted);font-family:var(--fb);font-weight:400;"><?= $t['per'] ?></small><?php endif; ?></span>
            </div>
            <a href="#" data-popup="booking" class="btn btn-primary tx-book-btn"
               aria-label="Book <?= htmlspecialchars($t['name']) ?>">
              Book Now <i class="fas fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>

      </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ══ WHY CHOOSE US (compact) ══ -->
<section style="background:var(--cream-2);padding:80px 0;" aria-labelledby="tx-why-heading">
  <div class="container">
    <h2 id="tx-why-heading" class="section-title text-center" data-reveal="up" style="margin-bottom:48px;">
      Every Treatment. <span class="italic">Every Standard.</span>
    </h2>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px;" class="tx-why-grid-resp">
      <?php
      $points=[
        ['icon'=>'fas fa-shield-halved','t'=>'FDA-Approved Only','d'=>'Every technology and product used is fully certified and approved.'],
        ['icon'=>'fas fa-user-doctor','t'=>'Certified Specialists','d'=>'All treatments delivered by trained, certified wellness professionals.'],
        ['icon'=>'fas fa-clock','t'=>'Zero Downtime','d'=>'Walk in, get treated, walk out glowing — no recovery time needed.'],
        ['icon'=>'fas fa-chart-line','t'=>'Visible from Session 1','d'=>'Real, measurable results you can see and feel immediately.'],
      ];
      foreach($points as $i=>$p): ?>
      <div class="why-card" data-reveal="up" data-delay="<?= $i+1 ?>">
        <div class="why-icon"><i class="<?= $p['icon'] ?>" aria-hidden="true"></i></div>
        <h3 class="why-title"><?= $p['t'] ?></h3>
        <p class="why-desc"><?= $p['d'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ NOT SURE CTA ══ -->
<section style="background:linear-gradient(155deg,var(--salmon-dark) 0%,var(--rose) 60%,var(--gold-dark) 100%);padding:88px 0;text-align:center;position:relative;overflow:hidden;" aria-labelledby="tx-cta-heading">
  <div style="position:absolute;inset:0;background:repeating-linear-gradient(45deg,rgba(255,255,255,.02) 0px,rgba(255,255,255,.02) 1px,transparent 1px,transparent 40px);" aria-hidden="true"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="label center" style="color:rgba(255,255,255,.7);" data-reveal="fade">Free Consultation</div>
    <h2 id="tx-cta-heading" style="font-family:var(--fd);font-size:clamp(2rem,4vw,3.2rem);color:var(--white);margin-bottom:16px;" data-reveal="up">
      Not Sure Which Treatment<br /><em>Is Right for You?</em>
    </h2>
    <p style="color:rgba(255,255,255,.72);max-width:460px;margin:0 auto 40px;" data-reveal="up" data-delay="2">
      Book a free consultation and our specialists will assess your skin and recommend the perfect treatment plan for your goals.
    </p>
    <div data-reveal="up" data-delay="3">
      <a href="#" data-popup="booking" class="btn btn-white">
        Get a Free Consultation <i class="fas fa-arrow-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</section>

<style>
/* ── TREATMENT PAGE SPECIFIC STYLES ───────────────── */
.sr-only{position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap}
.text-center{text-align:center}

/* Category strip at top */
.tx-cat-strip{
  display:flex;
  border-top:1px solid var(--border-soft);
}
.tx-cat-btn{
  flex:1;display:flex;align-items:center;gap:16px;
  padding:28px 32px;cursor:pointer;
  border-right:1px solid var(--border-soft);
  background:transparent;
  transition:var(--t);
  text-align:left;
}
.tx-cat-btn:last-child{border-right:none}
.tx-cat-btn:hover{background:var(--cream)}
.tx-cat-icon{
  width:48px;height:48px;border-radius:50%;flex-shrink:0;
  background:linear-gradient(135deg,var(--rose),var(--salmon-dark));
  display:flex;align-items:center;justify-content:center;
  color:var(--white);font-size:1.05rem;
  transition:var(--t);
}
.tx-cat-btn:hover .tx-cat-icon{transform:scale(1.1)}
.tx-cat-name{display:block;font-size:.9rem;font-weight:600;color:var(--mocha);font-family:var(--fb);margin-bottom:3px}
.tx-cat-desc{font-size:.78rem;color:var(--muted);display:block}
.tx-cat-count{
  margin-left:auto;
  width:32px;height:32px;border-radius:50%;
  background:var(--cream);
  display:flex;align-items:center;justify-content:center;
  font-size:.78rem;font-weight:600;color:var(--rose);
  flex-shrink:0;
}

/* Filter bar */
.filter-bar{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:52px}
.filter-btn{
  display:inline-flex;align-items:center;gap:8px;
  padding:12px 24px;font-size:.75rem;letter-spacing:.08em;text-transform:uppercase;
  color:var(--muted);border:1.5px solid var(--border);border-radius:60px;
  transition:var(--tf);font-weight:500;font-family:var(--fb);cursor:pointer;
  background:transparent;
}
.filter-btn i{font-size:.8rem}
.filter-btn.active,.filter-btn:hover{background:var(--rose);color:var(--white);border-color:var(--rose);box-shadow:0 4px 16px rgba(191,124,46,.3)}

/* Cards grid */
.tx-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:28px;
}

/* Individual card */
.tx-card{
  background:var(--white);
  border-radius:var(--r-lg);
  overflow:hidden;
  box-shadow:var(--shadow-sm);
  border:1px solid var(--border-soft);
  transition:var(--t);
  display:flex;
  flex-direction:column;
}
.tx-card:hover{transform:translateY(-8px);box-shadow:var(--shadow)}

/* Card image */
.tx-card-img{
  position:relative;
  height:220px;
  overflow:hidden;
}
.tx-card-img img{
  width:100%;height:100%;object-fit:cover;
  transition:transform .7s var(--ease);
}
.tx-card:hover .tx-card-img img{transform:scale(1.07)}
.tx-badge{
  position:absolute;top:14px;right:14px;z-index:2;
  background:var(--gold-dark);color:var(--white);
  font-size:.62rem;letter-spacing:.15em;text-transform:uppercase;
  padding:5px 14px;border-radius:60px;font-weight:600;
}
.tx-cat-pill{
  position:absolute;bottom:14px;left:14px;z-index:2;
  background:rgba(26,15,10,.6);color:rgba(255,255,255,.85);
  backdrop-filter:blur(10px);
  font-size:.62rem;letter-spacing:.12em;text-transform:uppercase;
  padding:5px 14px;border-radius:60px;font-weight:500;
  border:1px solid rgba(255,255,255,.12);
}

/* Card body */
.tx-card-body{
  padding:28px;
  display:flex;flex-direction:column;
  flex:1;
}
.tx-card-top{
  display:flex;align-items:flex-start;gap:16px;
  margin-bottom:16px;
}
.tx-card-icon{
  width:44px;height:44px;border-radius:12px;flex-shrink:0;
  background:linear-gradient(135deg,rgba(191,124,46,.12),rgba(191,124,46,.1));
  border:1.5px solid var(--border);
  display:flex;align-items:center;justify-content:center;
  color:var(--rose);font-size:.95rem;
  transition:var(--t);
  margin-top:4px;
}
.tx-card:hover .tx-card-icon{
  background:linear-gradient(135deg,var(--rose),var(--salmon-dark));
  border-color:transparent;color:var(--white);
}
.tx-card-cat{font-size:.62rem;letter-spacing:.2em;text-transform:uppercase;color:var(--rose);margin-bottom:5px;font-weight:600}
.tx-card-title{font-size:1.18rem;color:var(--mocha);line-height:1.25}
.tx-card-desc{font-size:.85rem;color:var(--muted);line-height:1.7;margin-bottom:20px;flex:1}

/* Benefits list */
.tx-benefits{
  list-style:none;
  margin-bottom:18px;
  display:grid;grid-template-columns:1fr 1fr;gap:7px;
}
.tx-benefits li{
  display:flex;align-items:flex-start;gap:7px;
  font-size:.78rem;color:var(--text);
}
.tx-benefits li i{color:var(--rose);font-size:.7rem;margin-top:3px;flex-shrink:0}

/* Tags */
.tl-tags{display:flex;gap:6px;flex-wrap:wrap;}
.tl-tag{
  font-size:.63rem;letter-spacing:.08em;text-transform:uppercase;
  color:var(--rose);background:rgba(191,124,46,.1);
  padding:4px 12px;border-radius:60px;font-weight:500;
}

/* Price & book */
.tx-card-footer{
  display:flex;justify-content:space-between;align-items:center;
  padding-top:20px;
  border-top:1px solid var(--border-soft);
  margin-top:auto;
}
.tx-price-wrap{}
.price-orig{font-size:.78rem;text-decoration:line-through;color:var(--muted);display:block}
.price-new{font-family:var(--fd);font-size:1.55rem;color:var(--mocha);line-height:1}
.tx-book-btn{padding:11px 22px;font-size:.72rem}

/* Responsive */
@media(max-width:1100px){
  .tx-grid{grid-template-columns:1fr 1fr}
  .tx-cat-strip{flex-wrap:wrap}
  .tx-cat-btn{flex:1 1 33%}
  .tx-why-grid-resp{grid-template-columns:1fr 1fr!important}
}
@media(max-width:768px){
  .tx-grid{grid-template-columns:1fr}
  .tx-cat-strip{flex-direction:column}
  .tx-cat-btn{border-right:none;border-bottom:1px solid var(--border-soft)}
  .tx-benefits{grid-template-columns:1fr}
  .tx-why-grid-resp{grid-template-columns:1fr!important}
}
</style>

<?php require_once 'includes/footer.php'; ?>
