<?php
$page = 'blog';
require_once 'blog/_data.php';
require_once 'includes/header.php';

$search    = trim($_GET['search'] ?? '');
$catFilter = trim($_GET['cat']    ?? 'all');
$perPage   = 6;
$pageNum   = max(1, (int)($_GET['p'] ?? 1));

// Filter posts
$filtered = array_values(array_filter($allPosts, function($p) use ($search, $catFilter) {
  $matchSearch = !$search || stripos($p['title'],$search)!==false || stripos($p['excerpt'],$search)!==false;
  $matchCat    = $catFilter==='all' || $p['cat']===$catFilter;
  return $matchSearch && $matchCat;
}));

$totalFiltered = count($filtered);
$totalPages    = max(1, (int)ceil($totalFiltered / $perPage));
$pageNum       = min($pageNum, $totalPages);
$offset        = ($pageNum - 1) * $perPage;
$pagePosts     = array_slice($filtered, $offset, $perPage);

$cats      = array_unique(array_column($allPosts,'cat'));
$catCounts = array_count_values(array_column($allPosts,'cat'));
$recent    = array_slice($allPosts, 0, 4);

// Build pagination query string helper
function pageUrl($p, $cat, $search) {
  $q = [];
  if ($cat && $cat !== 'all') $q['cat'] = $cat;
  if ($search) $q['search'] = $search;
  if ($p > 1)  $q['p'] = $p;
  return '/blog.php' . ($q ? '?'.http_build_query($q) : '');
}
?>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="container page-hero-inner">
    <div class="label" data-reveal="fade">A.I. Skin Revolution BGC</div>
    <h1 class="page-title" data-reveal="up">Wellness <span class="italic">Blog</span></h1>
    <p style="color:var(--muted);max-width:540px;margin-top:12px;" data-reveal="up" data-delay="2">
      Expert tips, treatment guides, and beauty inspiration to help you glow inside and out.
    </p>
    <nav class="breadcrumb" aria-label="Breadcrumb" data-reveal="up" data-delay="3">
      <a href="/">Home</a>
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
      <span>Blog</span>
    </nav>
  </div>
</div>

<!-- BLOG CONTENT -->
<section style="background:var(--cream);padding:80px 0 120px;">
  <div class="container">

    <!-- Category filter pills -->
    <nav style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:52px;" data-reveal="fade" aria-label="Filter blog by category">
      <a href="/blog.php<?= $search?'?search='.urlencode($search):'' ?>"
         class="filter-btn <?= $catFilter==='all'?'active':'' ?>">All Posts</a>
      <?php foreach($cats as $cat): ?>
      <a href="<?= htmlspecialchars(pageUrl(1,$cat,$search)) ?>"
         class="filter-btn <?= $catFilter===$cat?'active':'' ?>"><?= htmlspecialchars($cat) ?></a>
      <?php endforeach; ?>
    </nav>

    <div class="blog-layout">

      <!-- MAIN POSTS -->
      <main>
        <?php if(empty($pagePosts)): ?>
        <div style="text-align:center;padding:80px 40px;background:var(--white);border-radius:var(--r-lg);box-shadow:var(--shadow-sm);">
          <div style="width:64px;height:64px;border-radius:50%;background:var(--cream-2);display:flex;align-items:center;justify-content:center;margin:0 auto 20px;color:var(--rose);">
            <i class="fas fa-magnifying-glass" style="font-size:1.4rem;" aria-hidden="true"></i>
          </div>
          <h2 style="color:var(--mocha);margin-bottom:10px;font-size:1.5rem;">No articles found</h2>
          <p style="color:var(--muted);margin-bottom:28px;">Try a different search term or browse all categories.</p>
          <a href="/blog.php" class="btn btn-primary">View All Articles <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <?php else: ?>
        <div class="blog-main-grid">
          <?php foreach($pagePosts as $i => $post): ?>
          <article class="blog-card" data-cat="<?= htmlspecialchars($post['cat']) ?>" data-reveal="up" data-delay="<?= ($i%2)+1 ?>">
            <a href="/blog/<?= $post['slug'] ?>.php"
               class="bc-img"
               aria-label="Read: <?= htmlspecialchars($post['title']) ?>">
              <img src="<?= htmlspecialchars(img($post['img_key'])) ?>"
                   alt="<?= htmlspecialchars($post['title']) ?>"
                   loading="lazy" width="800" height="500" />
              <span class="bc-cat-pill"><?= htmlspecialchars($post['cat']) ?></span>
            </a>
            <div class="bc-body">
              <div class="bc-meta">
                <span class="bc-cat"><?= htmlspecialchars($post['cat']) ?></span>
                <span class="bc-sep" aria-hidden="true"></span>
                <span class="bc-date">
                  <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                  <?= $post['date'] ?>
                </span>
              </div>
              <h2 class="bc-title">
                <a href="/blog/<?= $post['slug'] ?>.php"><?= htmlspecialchars($post['title']) ?></a>
              </h2>
              <p class="bc-excerpt"><?= htmlspecialchars($post['excerpt']) ?></p>
              <div class="bc-footer">
                <a href="/blog/<?= $post['slug'] ?>.php" class="bc-link">
                  Read Article <i class="fas fa-arrow-right" aria-hidden="true"></i>
                </a>
                <span class="bc-read-time">
                  <i class="fas fa-clock" aria-hidden="true"></i>
                  <?= $post['read'] ?> read
                </span>
              </div>
            </div>
          </article>
          <?php endforeach; ?>
        </div>

        <?php
        // ── PAGINATION — only show when there are multiple pages ──
        if ($totalPages > 1):
        ?>
        <nav style="display:flex;justify-content:center;gap:8px;margin-top:52px;" aria-label="Blog pagination">
          <?php if($pageNum > 1): ?>
          <a href="<?= htmlspecialchars(pageUrl($pageNum-1,$catFilter,$search)) ?>"
             style="width:42px;height:42px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:var(--white);border:1.5px solid var(--border);color:var(--mocha);transition:var(--tf);"
             aria-label="Previous page">
            <i class="fas fa-chevron-left" style="font-size:.75rem;" aria-hidden="true"></i>
          </a>
          <?php endif; ?>

          <?php for($pg=1;$pg<=$totalPages;$pg++): ?>
          <a href="<?= htmlspecialchars(pageUrl($pg,$catFilter,$search)) ?>"
             style="width:42px;height:42px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.88rem;font-weight:500;transition:var(--tf);<?= $pg===$pageNum ? 'background:var(--rose);color:var(--white);box-shadow:0 4px 16px rgba(191,124,46,.35);' : 'background:var(--white);color:var(--mocha);border:1.5px solid var(--border);' ?>"
             aria-label="Page <?= $pg ?>"
             <?= $pg===$pageNum ? 'aria-current="page"' : '' ?>>
            <?= $pg ?>
          </a>
          <?php endfor; ?>

          <?php if($pageNum < $totalPages): ?>
          <a href="<?= htmlspecialchars(pageUrl($pageNum+1,$catFilter,$search)) ?>"
             style="width:42px;height:42px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:var(--white);border:1.5px solid var(--border);color:var(--mocha);transition:var(--tf);"
             aria-label="Next page">
            <i class="fas fa-chevron-right" style="font-size:.75rem;" aria-hidden="true"></i>
          </a>
          <?php endif; ?>
        </nav>
        <?php endif; // end pagination ?>

        <?php endif; // end posts check ?>
      </main>

      <!-- SIDEBAR -->
      <aside class="blog-sidebar" aria-label="Blog sidebar">

        <!-- Search widget -->
        <div class="sidebar-widget">
          <h3 class="sidebar-head">Search Articles</h3>
          <form class="search-row search-form-js" method="GET" action="/blog.php" role="search">
            <input type="text" name="search" class="search-input"
                   placeholder="Search articles..."
                   value="<?= htmlspecialchars($search) ?>"
                   aria-label="Search blog articles" />
            <?php if($catFilter !== 'all'): ?>
            <input type="hidden" name="cat" value="<?= htmlspecialchars($catFilter) ?>" />
            <?php endif; ?>
            <button type="submit" class="search-btn" aria-label="Search">
              <i class="fas fa-magnifying-glass" aria-hidden="true"></i>
            </button>
          </form>
        </div>

        <!-- Recent Posts widget -->
        <div class="sidebar-widget">
          <h3 class="sidebar-head">Recent Posts</h3>
          <?php foreach($recent as $r): ?>
          <div class="recent-item">
            <div class="recent-thumb">
              <img src="<?= htmlspecialchars(img($r['img_key'])) ?>"
                   alt="<?= htmlspecialchars($r['title']) ?>"
                   width="120" height="120" loading="lazy" />
            </div>
            <div>
              <a href="/blog/<?= $r['slug'] ?>.php" class="recent-title"><?= htmlspecialchars($r['title']) ?></a>
              <p class="recent-date"><?= $r['date'] ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Categories widget -->
        <div class="sidebar-widget">
          <h3 class="sidebar-head">Categories</h3>
          <div class="cat-list">
            <a href="/blog.php" class="cat-row <?= $catFilter==='all'?'active':'' ?>">
              All Posts <span class="cat-count"><?= count($allPosts) ?></span>
            </a>
            <?php foreach($catCounts as $cat => $cnt): ?>
            <a href="<?= htmlspecialchars(pageUrl(1,$cat,'')) ?>"
               class="cat-row <?= $catFilter===$cat?'active':'' ?>">
              <?= htmlspecialchars($cat) ?> <span class="cat-count"><?= $cnt ?></span>
            </a>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Book CTA widget -->
        <div class="sidebar-widget" style="background:linear-gradient(135deg,var(--rose),var(--salmon-dark));border:none;text-align:center;">
          <div style="width:52px;height:52px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
            <i class="fas fa-calendar-check" style="color:var(--white);font-size:1.1rem;" aria-hidden="true"></i>
          </div>
          <h3 style="color:var(--white);font-family:var(--fd);font-size:1.4rem;margin-bottom:8px;font-weight:400;">Ready to Glow?</h3>
          <p style="color:rgba(255,255,255,.78);font-size:.85rem;margin-bottom:20px;">
            Book your personalised treatment at A.I. Skin Revolution today.
          </p>
          <a href="#" data-popup="booking" class="btn btn-white" style="font-size:.75rem;padding:12px 24px;">
            Book Now <i class="fas fa-arrow-right" aria-hidden="true"></i>
          </a>
        </div>
      </aside>

    </div><!-- /blog-layout -->
  </div>
</section>

<!-- NEWSLETTER -->
<section style="background:var(--cream-2);padding:80px 0;text-align:center;" aria-labelledby="newsletter-heading">
  <div class="container">
    <div class="label center" data-reveal="fade">Stay In The Loop</div>
    <h2 id="newsletter-heading" style="font-family:var(--fd);font-size:clamp(2rem,4vw,2.8rem);color:var(--mocha);margin-bottom:12px;" data-reveal="up">
      Get Wellness Tips in<br /><span class="italic">Your Inbox</span>
    </h2>
    <p style="color:var(--muted);max-width:460px;margin:0 auto 36px;" data-reveal="up" data-delay="2">
      Subscribe for the latest beauty tips, exclusive promos, and treatment spotlights from A.I. Skin Revolution.
    </p>
    <form style="display:flex;gap:10px;justify-content:center;max-width:420px;margin:0 auto;" data-reveal="up" data-delay="3"
      onsubmit="this.querySelector('.sub-btn').innerHTML='<i class=\'fas fa-check\'></i> Subscribed!';this.querySelector('.sub-btn').disabled=true;event.preventDefault();">
      <input type="email" placeholder="your@email.com" required
        style="flex:1;padding:14px 20px;border:1.5px solid var(--border);border-radius:60px;font-family:var(--fb);font-size:.88rem;outline:none;background:var(--white);"
        aria-label="Email address for newsletter" />
      <button type="submit" class="btn btn-primary sub-btn" style="white-space:nowrap;">Subscribe</button>
    </form>
    <p style="font-size:.74rem;color:var(--muted);margin-top:14px;">No spam, ever. Unsubscribe anytime.</p>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
