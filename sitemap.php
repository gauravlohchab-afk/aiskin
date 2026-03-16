<?php
$page = 'sitemap';

// Add sitemap meta to header metas — handled inline
$metas['sitemap'] = [
  'title' => 'Sitemap — A.I. Skin Revolution BGC',
  'desc'  => 'Full sitemap of A.I. Skin Revolution BGC website — all pages, treatments and blog articles listed for easy navigation.'
];

require_once 'includes/header.php';

$sections = [
  [
    'icon'  => 'fas fa-house',
    'label' => 'Main Pages',
    'color' => 'var(--rose)',
    'pages' => [
      ['url'=>'/','title'=>'Homepage','desc'=>'Hero slider, treatments overview, before & after, testimonials'],
      ['url'=>'/about.php','title'=>'About Us','desc'=>'Our story, values, clinic photos and team credentials'],
      ['url'=>'/treatments.php','title'=>'Our Treatments','desc'=>'Full menu of face, body and hair treatments with pricing'],
      ['url'=>'/blog.php','title'=>'Wellness Blog','desc'=>'Expert skincare tips, treatment guides and beauty insights'],
      ['url'=>'/contact.php','title'=>'Contact & Booking','desc'=>'Reservation form, clinic location and contact details'],
      ['url'=>'/sitemap.php','title'=>'Sitemap','desc'=>'Complete site navigation and page index'],
    ],
  ],
  [
    'icon'  => 'fas fa-face-grin-stars',
    'label' => 'Face Care Treatments',
    'color' => 'var(--rose)',
    'pages' => [
      ['url'=>'/treatments.php','title'=>'HIFU 7D Lift','desc'=>'Non-surgical facelift using focused ultrasound at 7 depths'],
      ['url'=>'/treatments.php','title'=>'Carbon Laser Peel','desc'=>'Hollywood peel — deep pore cleanse and instant glow'],
      ['url'=>'/treatments.php','title'=>'Pico Laser Treatment','desc'=>'Pigmentation, acne scars and tattoo removal'],
      ['url'=>'/treatments.php','title'=>'HydraFacial','desc'=>'Multi-step cleanse, exfoliate and hydrate facial'],
      ['url'=>'/treatments.php','title'=>'Anti-Melasma Treatment','desc'=>'Targeted brightening and dark spot correction'],
      ['url'=>'/treatments.php','title'=>'Organic Botox','desc'=>'Plant-based non-injection wrinkle smoothing'],
      ['url'=>'/treatments.php','title'=>'Acne Clarifying Facial','desc'=>'Blue LED acne treatment and brightening'],
      ['url'=>'/treatments.php','title'=>'Collagen Induction','desc'=>'Stimulates natural collagen for firmer, plumper skin'],
    ],
  ],
  [
    'icon'  => 'fas fa-person',
    'label' => 'Body Care Treatments',
    'color' => 'var(--gold-dark)',
    'pages' => [
      ['url'=>'/treatments.php','title'=>'Cryotherapy Body Sculpt','desc'=>'Cold therapy for fat reduction and skin tightening'],
      ['url'=>'/treatments.php','title'=>'EMS Express Body Toning','desc'=>'Electromagnetic muscle stimulation and sculpting'],
      ['url'=>'/treatments.php','title'=>'Inbfit RF Body Treatment','desc'=>'Radiofrequency body contouring and skin tightening'],
      ['url'=>'/treatments.php','title'=>'Infrared Sauna Pod','desc'=>'Detox, relaxation and calorie-burning sauna session'],
    ],
  ],
  [
    'icon'  => 'fas fa-scissors',
    'label' => 'Hair Care Treatments',
    'color' => 'var(--mocha-light)',
    'pages' => [
      ['url'=>'/treatments.php','title'=>'Hair Regrowth Treatment','desc'=>'Follicle activation and density restoration therapy'],
      ['url'=>'/treatments.php','title'=>'Hair Renewal Diode Laser','desc'=>'Diode laser for scalp health and hair vitality'],
    ],
  ],
  [
    'icon'  => 'fas fa-newspaper',
    'label' => 'Blog Articles',
    'color' => 'var(--mocha)',
    'pages' => [
      ['url'=>'/blog/hifu-skin-tightening.php','title'=>'HIFU Skin Tightening: The Non-Surgical Facelift Guide','desc'=>'June 10, 2025 · 8 min read · Face Treatments'],
      ['url'=>'/blog/laser-transforming-skincare.php','title'=>'How Laser Technology is Transforming Skincare Treatments','desc'=>'June 6, 2025 · 7 min read · Beauty Technology'],
      ['url'=>'/blog/wellness-lifestyle-skin.php','title'=>'How Overall Wellness and Lifestyle Affect Your Skin Health','desc'=>'May 28, 2025 · 7 min read · Wellness'],
      ['url'=>'/blog/hair-care-natural-growth.php','title'=>'Hair Care Tips to Promote Natural Hair Growth','desc'=>'May 20, 2025 · 8 min read · Hair Care'],
      ['url'=>'/blog/daily-skincare-tips.php','title'=>'10 Daily Skincare Tips for Healthy and Glowing Skin','desc'=>'May 10, 2025 · 6 min read · Skin Care Tips'],
      ['url'=>'/blog/daily-skincare-routine.php','title'=>'Daily Skincare Routine for Healthy and Glowing Skin','desc'=>'April 28, 2025 · 6 min read · Skin Care'],
      ['url'=>'/blog/tighten-loose-skin.php','title'=>'How to Tighten Loose Skin on the Body Without Surgery','desc'=>'April 10, 2025 · 7 min read · Body Care'],
    ],
  ],
];
?>

<!-- PAGE HERO -->
<div class="page-hero" style="padding:150px 0 72px;">
  <div class="container page-hero-inner">
    <div class="label" data-reveal="fade">Site Navigation</div>
    <h1 class="page-title" data-reveal="up">
      Website <span class="italic">Sitemap</span>
    </h1>
    <p style="color:var(--muted);max-width:520px;margin-top:14px;line-height:1.8;" data-reveal="up" data-delay="2">
      A complete index of all pages, treatments, and blog articles on the A.I. Skin Revolution website.
    </p>
    <nav class="breadcrumb" aria-label="Breadcrumb" data-reveal="up" data-delay="3">
      <a href="/">Home</a>
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
      <span>Sitemap</span>
    </nav>
  </div>
</div>

<!-- SITEMAP CONTENT -->
<section style="background:var(--cream);padding:80px 0 120px;">
  <div class="container">

    <!-- Quick counts bar -->
    <div class="sm-stats-row" data-reveal="fade">
      <?php
      $total = array_sum(array_map(fn($s)=>count($s['pages']), $sections));
      $counts = [
        ['icon'=>'fas fa-file','label'=>'Total Pages','count'=>$total],
        ['icon'=>'fas fa-sparkles','label'=>'Treatments','count'=>14],
        ['icon'=>'fas fa-newspaper','label'=>'Blog Articles','count'=>7],
        ['icon'=>'fas fa-map-marker-alt','label'=>'Location','count'=>'BGC'],
      ];
      foreach($counts as $c): ?>
      <div class="sm-stat">
        <div class="sm-stat-icon"><i class="<?= $c['icon'] ?>" aria-hidden="true"></i></div>
        <span class="sm-stat-num"><?= $c['count'] ?></span>
        <span class="sm-stat-lbl"><?= $c['label'] ?></span>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Sections -->
    <div class="sm-sections">
      <?php foreach($sections as $si=>$sec): ?>
      <div class="sm-section" data-reveal="up" data-delay="<?= ($si%3)+1 ?>">
        <div class="sm-section-head">
          <div class="sm-section-icon" style="background:linear-gradient(135deg,<?= $sec['color'] ?>,<?= $sec['color'] ?>aa);">
            <i class="<?= $sec['icon'] ?>" aria-hidden="true"></i>
          </div>
          <div>
            <h2 class="sm-section-title"><?= $sec['label'] ?></h2>
            <span class="sm-section-count"><?= count($sec['pages']) ?> page<?= count($sec['pages'])!==1?'s':'' ?></span>
          </div>
        </div>

        <ul class="sm-list" role="list">
          <?php foreach($sec['pages'] as $p): ?>
          <li class="sm-item">
            <a href="<?= $p['url'] ?>" class="sm-link" <?= $p['url']==='#'?'':''; ?>>
              <div class="sm-link-inner">
                <div>
                  <span class="sm-page-title"><?= htmlspecialchars($p['title']) ?></span>
                  <span class="sm-page-desc"><?= htmlspecialchars($p['desc']) ?></span>
                </div>
                <i class="fas fa-arrow-right sm-arrow" aria-hidden="true"></i>
              </div>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- XML Sitemap link -->
    <div style="text-align:center;margin-top:72px;padding:40px;background:var(--white);border-radius:var(--r-lg);box-shadow:var(--shadow-sm);border:1px solid var(--border-soft);" data-reveal="fade">
      <i class="fas fa-code" style="font-size:2rem;color:var(--rose);margin-bottom:16px;display:block;" aria-hidden="true"></i>
      <h3 style="font-size:1.2rem;color:var(--mocha);margin-bottom:8px;">XML Sitemap for Search Engines</h3>
      <p style="color:var(--muted);font-size:.88rem;margin-bottom:24px;">For search engine crawlers and SEO tools, view the structured XML sitemap.</p>
      <a href="/sitemap.xml" class="btn btn-outline" target="_blank" rel="noopener">
        <i class="fas fa-external-link-alt" aria-hidden="true"></i>
        View XML Sitemap
      </a>
    </div>

  </div>
</section>

<style>
/* ── SITEMAP PAGE STYLES ─── */
.sm-stats-row{
  display:flex;gap:0;
  background:var(--white);border-radius:var(--r-lg);
  box-shadow:var(--shadow-sm);border:1px solid var(--border-soft);
  overflow:hidden;margin-bottom:60px;
}
.sm-stat{
  flex:1;padding:28px 32px;text-align:center;
  border-right:1px solid var(--border-soft);
}
.sm-stat:last-child{border-right:none}
.sm-stat-icon{
  width:44px;height:44px;border-radius:50%;
  background:linear-gradient(135deg,rgba(191,124,46,.12),rgba(191,124,46,.08));
  display:flex;align-items:center;justify-content:center;
  margin:0 auto 12px;color:var(--rose);font-size:1rem;
}
.sm-stat-num{display:block;font-family:var(--fd);font-size:2rem;color:var(--mocha);line-height:1;margin-bottom:4px}
.sm-stat-lbl{font-size:.7rem;letter-spacing:.15em;text-transform:uppercase;color:var(--muted)}

.sm-sections{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:28px;
}
/* Make first section (Main Pages) full width */
.sm-sections .sm-section:first-child{grid-column:1 / -1}

.sm-section{
  background:var(--white);
  border-radius:var(--r-lg);
  overflow:hidden;
  box-shadow:var(--shadow-sm);
  border:1px solid var(--border-soft);
}
.sm-section-head{
  display:flex;align-items:center;gap:16px;
  padding:24px 28px;
  border-bottom:1px solid var(--border-soft);
  background:var(--cream);
}
.sm-section-icon{
  width:44px;height:44px;border-radius:12px;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  color:var(--white);font-size:1rem;
}
.sm-section-title{font-size:1rem;color:var(--mocha);margin-bottom:2px}
.sm-section-count{font-size:.72rem;color:var(--muted);letter-spacing:.05em}

.sm-list{padding:8px 0}
.sm-item{border-bottom:1px solid var(--border-soft)}
.sm-item:last-child{border-bottom:none}
.sm-link{
  display:block;padding:14px 28px;
  text-decoration:none;
  transition:var(--tf);
}
.sm-link:hover{background:var(--cream)}
.sm-link-inner{
  display:flex;align-items:center;justify-content:space-between;gap:16px;
}
.sm-page-title{
  display:block;font-size:.88rem;color:var(--mocha);font-weight:500;
  margin-bottom:3px;transition:color var(--tf);
}
.sm-link:hover .sm-page-title{color:var(--rose)}
.sm-page-desc{font-size:.76rem;color:var(--muted);line-height:1.4}
.sm-arrow{
  font-size:.7rem;color:var(--muted);flex-shrink:0;
  transition:transform var(--tf),color var(--tf);
}
.sm-link:hover .sm-arrow{transform:translateX(4px);color:var(--rose)}

/* Responsive */
@media(max-width:900px){
  .sm-sections{grid-template-columns:1fr}
  .sm-sections .sm-section:first-child{grid-column:auto}
  .sm-stats-row{flex-wrap:wrap}
  .sm-stat{flex:1 1 50%;border-bottom:1px solid var(--border-soft)}
  .sm-stat:last-child{border-right:1px solid var(--border-soft)}
}
@media(max-width:480px){
  .sm-stat{flex:1 1 100%}
}
</style>

<?php require_once 'includes/footer.php'; ?>
