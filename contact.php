<?php
$page = 'contact';
require_once 'includes/header.php';
?>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="container page-hero-inner">
    <div class="label">Book Your Visit</div>
    <h1 class="page-title">Book Your <span class="italic">Appointment</span></h1>
    <p style="color:var(--muted);max-width:520px;margin-top:12px;">
      We'd love to hear from you. Reach out to reserve your slot or ask us anything about our treatments.
    </p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
      <span>Contact</span>
    </nav>
  </div>
</div>

<!-- CONTACT MAIN -->
<section style="background:var(--cream);padding:100px 0 120px;">
  <div class="container">
    <div class="contact-grid">

      <!-- INFO -->
      <div>
        <div class="label">Get In Touch</div>
        <h2 style="font-size:clamp(2rem,4vw,2.6rem);color:var(--mocha);margin-bottom:18px;">
          Let&rsquo;s Start Your<br /><span class="italic">Wellness Journey</span>
        </h2>
        <p style="color:var(--muted);margin-bottom:44px;line-height:1.85;">
          Whether you want to book a session, ask about a specific treatment, or simply learn more about what we offer &mdash; we're here for you. Reach out through any of the channels below.
        </p>

        <?php
        $info=[
          ['icon'=>'fas fa-map-marker-alt','label'=>'Visit Us','value'=>'H23C+HXM, Legazpi Street<br />Legazpi Village, Makati City<br />Metro Manila, Philippines','href'=>false],
          ['icon'=>'fas fa-phone','label'=>'Call or Text','value'=>'+63 915 396 0598','href'=>'tel:+639153960598'],
          ['icon'=>'fas fa-envelope','label'=>'Email Us','value'=>'aiskinrevolutionbgc@gmail.com','href'=>'mailto:aiskinrevolutionbgc@gmail.com'],
          ['icon'=>'fab fa-whatsapp','label'=>'WhatsApp','value'=>'+63 915 396 0598','href'=>'https://wa.me/639153960598'],
          ['icon'=>'fas fa-clock','label'=>'Clinic Hours','value'=>'Monday &mdash; Sunday: 10:00 AM &ndash; 9:00 PM','href'=>false],
        ];
        foreach($info as $i=>$item): ?>
        <div class="contact-info-card" data-reveal="left" data-delay="<?= $i+1 ?>">
          <div class="ci-icon"><i class="<?= $item['icon'] ?>" aria-hidden="true"></i></div>
          <div>
            <p class="ci-label"><?= $item['label'] ?></p>
            <?php if($item['href']): ?>
            <a href="<?= $item['href'] ?>" class="ci-value"><?= $item['value'] ?></a>
            <?php else: ?><p class="ci-value"><?= $item['value'] ?></p><?php endif; ?>
          </div>
        </div>
        <?php endforeach; ?>

        <div style="margin-top:36px;" data-reveal="left" data-delay="6">
          <p style="font-size:.68rem;letter-spacing:.22em;text-transform:uppercase;color:var(--gold);margin-bottom:16px;font-weight:700;">Follow Us</p>
          <div class="contact-socials" style="display:flex;gap:12px;">
            <a href="https://www.facebook.com/aiskinrevolutionph" target="_blank" rel="noopener" class="social-btn" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/aiskinrevolutionph/" target="_blank" rel="noopener" class="social-btn" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.tiktok.com/@aiskinrevolutionph" target="_blank" rel="noopener" class="social-btn" aria-label="TikTok"><i class="fab fa-tiktok" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <!-- FORM -->
      <div class="contact-form-box" data-reveal="right">
        <h2 style="font-size:1.9rem;">Reservation Form</h2>
        <p>Fill in the details below and we will confirm your appointment as soon as possible.</p>
        <form id="contactForm" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="cf-name">Full Name <span class="req">*</span></label>
              <input id="cf-name" type="text" class="form-ctrl" placeholder="Your full name" required />
            </div>
            <div class="form-group">
              <label class="form-label" for="cf-email">Email Address <span class="req">*</span></label>
              <input id="cf-email" type="email" class="form-ctrl" placeholder="your@email.com" required />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="cf-phone">Phone Number <span class="req">*</span></label>
              <input id="cf-phone" type="tel" class="form-ctrl" placeholder="+63 9XX XXX XXXX" required />
            </div>
            <div class="form-group">
              <label class="form-label" for="cf-treatment">Treatment</label>
              <select id="cf-treatment" class="form-ctrl">
                <option value="">Select a Treatment</option>
                <optgroup label="Face Care">
                  <option>Hifu 7D</option><option>Carbon Laser</option><option>Pico Laser</option>
                  <option>Organic Botox</option><option>Anti-Melasma</option><option>Hydrafacial</option>
                  <option>Eyebag Treatment</option><option>Acne Clarifying Therapy</option>
                </optgroup>
                <optgroup label="Body Care">
                  <option>Cryotherapy</option><option>EMS Express</option><option>Inbfit Body Treatment</option><option>Sauna Pod</option>
                </optgroup>
                <optgroup label="Hair Care">
                  <option>Hair Regrowth Treatment</option><option>Hair Renewal Diode Laser</option>
                </optgroup>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="cf-date">Preferred Date <span class="req">*</span></label>
              <input id="cf-date" type="date" class="form-ctrl" required />
            </div>
            <div class="form-group">
              <label class="form-label" for="cf-time">Preferred Time <span class="req">*</span></label>
              <input id="cf-time" type="time" class="form-ctrl" required />
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="cf-msg">Message / Treatment Request</label>
            <textarea id="cf-msg" class="form-ctrl" placeholder="Tell us about any health conditions or special requests..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;font-size:.88rem;">
            Confirm Reservation <i class="fas fa-check-circle" aria-hidden="true"></i>
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- MAP -->
<section style="background:var(--cream-2);padding:80px 0;" aria-labelledby="map-heading">
  <div class="container">
    <div class="section-header" data-reveal="up" style="margin-bottom:48px;">
      <div class="label center">Find Us</div>
      <h2 id="map-heading" class="section-title">
        We&rsquo;re at <span class="italic">Legazpi Village, Makati City</span>
      </h2>
    </div>
    <div data-reveal="up" style="border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow);height:420px;">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6960218491764!2d121.04716527580786!3d14.553280585906517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9002f1b7e5d%3A0x60a83f0f4c5c1fc2!2sMarket!%20Market!%2C%20Taguig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph"
        width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="A.I. Skin Revolution BGC location map"></iframe>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
