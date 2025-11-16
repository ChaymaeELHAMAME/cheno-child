// ==========================
// Slider "crop" horizontal + auto-slide
// ==========================
document.addEventListener("DOMContentLoaded", () => {
  console.log("✅ JavaScript du thème enfant chargé !");

  // Récupère le conteneur du slider
  const slider = document.getElementById("cropSlider");
  if (!slider) return; // si la section n’existe pas, on sort
// toutes les cartes
  const cards = slider.querySelectorAll(".crop-card"); 
  // les petits points de navigation         
  const dots = document.querySelectorAll(".crop-dots .dot");    

  // Met à jour le dot actif en fonction de la carte la plus centrée à l’écran
  function updateDots() {
    const rects = [...cards].map(c => c.getBoundingClientRect());
    const idx = rects.reduce((best, r, i) => {
      const center = (r.left + r.right) / 2;                    // centre de la carte sur l’axe X
      const dist = Math.abs(center - window.innerWidth / 2);    // distance par rapport au centre de l’écran
      return dist < best.dist ? { i, dist } : best;
    }, { i: 0, dist: Infinity }).i;

    // Active le dot correspondant
    dots.forEach((d, j) => d.classList.toggle("is-active", j === idx));
  }

  //  clic sur les dots pour scroller vers la carte associée
  dots.forEach((d, i) => {
    d.addEventListener("click", () => {
      cards[i].scrollIntoView({ behavior: "smooth", inline: "center" });
    });
  });

  // Quand on scroll → recalcul du dot actif (avec requestAnimationFrame pour les perf)
  slider.addEventListener("scroll", () => requestAnimationFrame(updateDots));
  window.addEventListener("resize", updateDots);
  updateDots(); // premier calcul au chargement

  // Auto-slide toutes les 4 secondes (carrousel automatique)
  let current = 0;
  setInterval(() => {
    current = (current + 1) % cards.length;
    cards[current].scrollIntoView({ behavior: "smooth", inline: "center" });
  }, 4000);
});


// ==========================
// Slider "crop" avec drag à la souris (version améliorée)
// ==========================
document.addEventListener("DOMContentLoaded", () => {
  const slider = document.getElementById("cropSlider");
  if (!slider) return;

  const cards = slider.querySelectorAll(".crop-card");
  const dots  = document.querySelectorAll(".crop-dots .dot");

  // Active le bon dot selon la carte la plus centrée
  function updateDots() {
    const rects = [...cards].map(c => c.getBoundingClientRect());
    const idx = rects.reduce((best, r, i) => {
      const center = (r.left + r.right) / 2;
      const dist = Math.abs(center - window.innerWidth / 2);
      return dist < best.dist ? { i, dist } : best;
    }, { i: 0, dist: Infinity }).i;

    dots.forEach((d, j) => d.classList.toggle("is-active", j === idx));
  }

  // Clic sur un dot → centre la carte correspondante
  dots.forEach((d, i) => {
    d.addEventListener("click", () => {
      cards[i].scrollIntoView({
        behavior: "smooth",
        inline: "center",
        block: "nearest"
      });
    });
  });

  // Drag à la souris 
  let isDown = false, startX = 0, startLeft = 0;

  slider.addEventListener("mousedown", (e) => {
    isDown = true;
    startX = e.pageX - slider.offsetLeft;  // position de départ de la souris
    startLeft = slider.scrollLeft;         // scroll initial
  });
  slider.addEventListener("mouseleave", () => (isDown = false));
  slider.addEventListener("mouseup",    () => (isDown = false));
  slider.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 1.2;      // facteur de vitesse
    slider.scrollLeft = startLeft - walk; // fait défiler horizontalement
  });

  // MAJ dot actif au scroll / resize
  slider.addEventListener("scroll", () => requestAnimationFrame(updateDots));
  window.addEventListener("resize", updateDots);
  updateDots();
});


// ==========================
// Slogan scroller en ping-pong (va à gauche/droite en boucle)
// ==========================
(function () {
  const scroller = document.getElementById('sloganScroller');
  if (!scroller) return;

  const line = scroller.querySelector('.mega-slogan__line');
  if (!line) return;

  // Variables pour l’animation
  let rafId = null;
  let lastTs = 0;
  let dir = 1;                     // 1 => va à droite, -1 => gauche
  let speed = 60;                  // vitesse en px/s
  let paused = false;
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const maxScroll = () => Math.max(0, line.scrollWidth - scroller.clientWidth);

  // Animation frame par frame
  function step(ts) {
    if (paused || reduceMotion) return;
    if (!lastTs) lastTs = ts;
    const dt = (ts - lastTs) / 1000;  // delta temps en secondes
    lastTs = ts;

    scroller.scrollLeft += dir * speed * dt;

    const max = maxScroll();
    // rebond à gauche/droite (= ping-pong)
    if (scroller.scrollLeft <= 0) {
      scroller.scrollLeft = 0;
      dir = 1;
    } else if (scroller.scrollLeft >= max) {
      scroller.scrollLeft = max;
      dir = -1;
    }

    rafId = requestAnimationFrame(step);
  }

  function start() {
    if (reduceMotion) return;        // si l’utilisateur préfère moins d’animations
    cancelAnimationFrame(rafId);
    lastTs = 0;
    rafId = requestAnimationFrame(step);
  }
  function stop() {
    cancelAnimationFrame(rafId);
    lastTs = 0;
  }

  // Pause au survol de la souris
  scroller.addEventListener('mouseenter', () => { paused = true; });
  scroller.addEventListener('mouseleave', () => { paused = false; start(); });

  // Drag à la souris
  let isDown = false, startX = 0, startLeft = 0;
  scroller.addEventListener('mousedown', (e) => {
    isDown = true; paused = true;
    scroller.classList.add('is-dragging');
    startX = e.pageX; startLeft = scroller.scrollLeft;
  });
  ['mouseleave','mouseup'].forEach(evt => scroller.addEventListener(evt, () => {
    if (!isDown) return;
    isDown = false;
    scroller.classList.remove('is-dragging');
    paused = false; start();
  }));
  scroller.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    scroller.scrollLeft = startLeft - (e.pageX - startX);
  });

  // Touch (mobile)
  scroller.addEventListener('touchstart', (e) => {
    paused = true; isDown = true;
    startX = e.touches[0].pageX; startLeft = scroller.scrollLeft;
  }, { passive: true });
  scroller.addEventListener('touchmove', (e) => {
    if (!isDown) return;
    scroller.scrollLeft = startLeft - (e.touches[0].pageX - startX);
  }, { passive: true });
  scroller.addEventListener('touchend', () => {
    isDown = false; paused = false; start();
  });

  // Molette verticale → scroll horizontal 
  let resumeT;
  scroller.addEventListener('wheel', (e) => {
    if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
      scroller.scrollLeft += e.deltaY;
      paused = true;
      clearTimeout(resumeT);
      resumeT = setTimeout(() => { paused = false; start(); }, 900);
    }
  }, { passive: true });

  // Recalcule au resize
  window.addEventListener('resize', () => { start(); });

  // Démarre l’animation
  start();
})();


// ==========================
// Modal vidéo (ancienne version) avec data-yt sur .video-card
// ==========================
(function(){
  const modal   = document.getElementById('videoModal');
  const frameCt = document.getElementById('videoFrame');
  if (!modal || !frameCt) return;

  // Récupère l’ID depuis une URL complète ou garde l’ID si déjà propre
  function getYtId(input){
    if (!input) return '';
    // urls youtube
    let m = input.match(/youtu\.be\/([a-zA-Z0-9_-]{6,})/);
    if (m) return m[1];
    // urls youtube.com/watch?v=XXXX
    m = input.match(/[?&]v=([a-zA-Z0-9_-]{6,})/);
    if (m) return m[1];
    // sinon, suppose que c’est déjà un ID
    return input.split('?')[0];
  }

  // Construit l’URL embed avec autoplay
  function buildSrc(id){
    return 'https://www.youtube.com/embed/' + id +
           '?autoplay=1&rel=0&modestbranding=1&controls=1';
  }

  // Ouvre le modal et injecte l’iframe
  function openModal(urlOrId){
    const id = getYtId(urlOrId);
    frameCt.innerHTML =
      '<iframe src="'+ buildSrc(id) +'" ' +
      'allow="autoplay; encrypted-media" allowfullscreen frameborder="0" ' +
      'style="width:100%;height:100%;display:block"></iframe>';
    modal.hidden = false;
    document.body.style.overflow = 'hidden';
  }

  // Ferme le modal et supprime l’iframe (stop vidéo)
  function closeModal(){
    modal.hidden = true;
    frameCt.innerHTML = '';
    document.body.style.overflow = '';
  }

  // Ouverture : clic sur une carte vidéo
  document.addEventListener('click', (e) => {
    const card = e.target.closest('.video-card');
    if (!card) return;
    if (card.contains(e.target)) {
      e.preventDefault();
      openModal(card.getAttribute('data-yt'));
    }
  });

  // Fermeture : clic sur backdrop ou bouton [data-close]
  modal.addEventListener('click', (e) => {
    if (e.target.hasAttribute('data-close') ||
        e.target.classList.contains('video-modal__backdrop')) {
      closeModal();
    }
  });

  // Fermeture : touche Échap
  window.addEventListener('keydown', (e) => {
    if (!modal.hidden && e.key === 'Escape') closeModal();
  });
})();


// ==========================
// Slider témoignages (.testi__slider) avec dots + autoplay
// ==========================
(function(){
  const wrap = document.querySelector('.testi__slider');
  if(!wrap) return;
// conteneur scrollable
  const track = wrap.querySelector('.testi__track'); 
  // chaque témoignage               
  const slides = [...wrap.querySelectorAll('.testi__item')];     
  // conteneur des dots   
  const nav = wrap.querySelector('.testi__nav');                    

  // créer dynamiquement les dots
  slides.forEach((_,i)=>{
    const b = document.createElement('button');
    b.type = 'button';
    b.setAttribute('aria-label', `Go to slide ${i+1}`);
    b.addEventListener('click', ()=> goTo(i));
    nav.appendChild(b);
  });

  let index = 0;
   // param via data-autoplay="true"
  let autoplay = wrap.dataset.autoplay === 'true';   
  // délai entre slides              
  let interval = parseInt(wrap.dataset.interval || '6000',10);      
  let timer = null;

  function goTo(i){
    // boucle infinie
    index = (i + slides.length) % slides.length;                    
    track.scrollTo({ left: index * track.clientWidth, behavior: 'smooth' });
    updateNav();
  }
  function updateNav(){
    [...nav.children].forEach((b,j)=> b.classList.toggle('is-active', j===index));
  }
  function next(){ goTo(index+1); }

  // Sync au scroll (swipe / drag)
  let handle;
  track.addEventListener('scroll', ()=>{
    cancelAnimationFrame(handle);
    handle = requestAnimationFrame(()=>{
      index = Math.round(track.scrollLeft / track.clientWidth);
      updateNav();
    });
  });

  // Navigation clavier ← / →
  track.addEventListener('keydown', (e)=>{
    if(e.key==='ArrowRight') next();
    if(e.key==='ArrowLeft') goTo(index-1);
  });

  // Gestion de l’autoplay
  function start(){ if(autoplay){ stop(); timer = setInterval(next, interval); } }
  function stop(){ if(timer) clearInterval(timer); }
  wrap.addEventListener('mouseenter', stop);
  wrap.addEventListener('mouseleave', start);
  window.addEventListener('resize', ()=> goTo(index));

  // Initialisation
  goTo(0); start();
})();


// ==========================
// Menu langues (lang-switch) : ouvrir/fermer dropdown + navigation clavier
// ==========================
document.addEventListener('DOMContentLoaded', function () {
  const sw   = document.querySelector('.lang-switch');
  if (!sw) return;
  const btn  = sw.querySelector('.lang-btn');
  const menu = sw.querySelector('.lang-menu');

  function setOpen(open){
    sw.classList.toggle('is-open', open);
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
  }

  // Toggle du menu au clic sur le bouton
  btn.addEventListener('click', (e) => {
    e.preventDefault();
    setOpen(!sw.classList.contains('is-open'));
  });

  // Fermeture si clic en dehors
  document.addEventListener('click', (e) => {
    if (!sw.contains(e.target)) setOpen(false);
  });

  // Fermeture avec Échap
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') setOpen(false);
  });

  // Navigation clavier dans les liens du menu (haut / bas)
  menu.addEventListener('keydown', (e) => {
    const items = [...menu.querySelectorAll('a')];
    const i = items.indexOf(document.activeElement);
    if (e.key === 'ArrowDown'){
      (items[i+1] || items[0]).focus();
      e.preventDefault();
    }
    if (e.key === 'ArrowUp')  {
      (items[i-1] || items.at(-1)).focus();
      e.preventDefault();
    }
  });
});


// ==========================
// Scroll horizontal avec drag + dots pour section projets (.projectsViewport)
// ==========================
document.addEventListener('DOMContentLoaded', () => {
  const vp   = document.getElementById('projectsViewport');
  if (!vp) return;
   // contenu grande largeur
  const img  = vp.querySelector('.projects-slide');         
  const dots = document.querySelectorAll('.scroll-dots .dot');

  // --- Drag souris pour scroller horizontalement ---
  let isDown = false, startX = 0, startLeft = 0;

  vp.addEventListener('mousedown', (e) => {
    isDown = true;
    vp.classList.add('is-dragging');
    startX = e.pageX;
    startLeft = vp.scrollLeft;
  });
  ['mouseleave','mouseup'].forEach(evt =>
    vp.addEventListener(evt, () => { isDown = false; vp.classList.remove('is-dragging'); })
  );
  vp.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const walk = (e.pageX - startX) * 1.2;
    vp.scrollLeft = startLeft - walk;
  });

  // Molette verticale → scroll horizontal (trackpad)
  vp.addEventListener('wheel', (e) => {
    if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) vp.scrollLeft += e.deltaY;
  }, { passive: true });

  // MAJ des 3 dots (gauche / centre / droite)
  function updateDots(){
    const max = vp.scrollWidth - vp.clientWidth;
    if (max <= 0) return;
    // 0 → 1
    const prog = vp.scrollLeft / max;                  
    const idx  = prog < 0.34 ? 0 : (prog < 0.67 ? 1 : 2);
    dots.forEach((d,i)=>{
      d.classList.toggle('is-active', i===idx);
      d.setAttribute('aria-selected', i===idx ? 'true' : 'false');
    });
  }
  vp.addEventListener('scroll', () => requestAnimationFrame(updateDots));
  window.addEventListener('resize', updateDots);
  updateDots();

  // Clic sur un dot → se positionne à gauche/centre/droite
  dots.forEach((d,i)=>{
    d.addEventListener('click', () => {
      const max = vp.scrollWidth - vp.clientWidth;
      const targets = [0, 0.5, 1];
      vp.scrollTo({ left: max * targets[i], behavior: 'smooth' });
    });
  });
});


// ==========================
// Modal vidéo (version 2) créé dynamiquement, basé sur .video-card[data-yt]
// ==========================
document.addEventListener('DOMContentLoaded', () => {
  // Helper pour extraire un ID YouTube depuis un ID ou une URL
  const extractYoutubeId = (input) => {
    if (!input) return null;
    // Si c'est déjà un ID "propre"
    if (/^[a-zA-Z0-9_-]{6,}$/.test(input) && !/http/.test(input)) return input;

    // Essaye de parser comme URL
    try {
      const url = new URL(input);
      // youtu.be/<id>
      if (url.hostname.includes('youtu.be')) return url.pathname.slice(1);
      // youtube.com/watch?v=<id>
      if (url.searchParams.get('v')) return url.searchParams.get('v');
      // youtube.com/embed/<id>
      const m = url.pathname.match(/\/embed\/([^/?]+)/);
      if (m) return m[1];
    } catch(e) { /* pas une URL */ }
    return null;
  };

  // Création du modal dans le DOM
  const modal = document.createElement('div');
  modal.className = 'video-modal';
  modal.setAttribute('role', 'dialog');
  modal.setAttribute('aria-modal', 'true');
  modal.innerHTML = `
    <div class="video-modal__dialog">
      <button class="video-modal__close" type="button" aria-label="Close">×</button>
      <!-- iframe injectée ici -->
    </div>
  `;
  document.body.appendChild(modal);

  const dialog  = modal.querySelector('.video-modal__dialog');
  const closeBtn = modal.querySelector('.video-modal__close');

  // Ouvrir le modal avec un ID YouTube
  const openModal = (ytId) => {
    if (!ytId) return;
    document.documentElement.style.overflow = 'hidden';
    modal.classList.add('is-open');

    const src = `https://www.youtube.com/embed/${ytId}?autoplay=1&rel=0&modestbranding=1`;
    const iframe = document.createElement('iframe');
    iframe.src = src;
    iframe.allow = 'autoplay; encrypted-media; picture-in-picture';
    iframe.allowFullscreen = true;
    dialog.appendChild(iframe);
    closeBtn.focus();
  };

  // Fermer modal + retirer iframe
  const closeModal = () => {
    modal.classList.remove('is-open');
    document.documentElement.style.overflow = '';
    const iframe = dialog.querySelector('iframe');
    if (iframe) iframe.remove();
  };

  // Fermeture via bouton ×
  closeBtn.addEventListener('click', closeModal);
  // Fermeture via clic en dehors (overlay)
  modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });
  // Fermeture via Échap
  document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && modal.classList.contains('is-open')) closeModal(); });

  // Ajout des handlers sur toutes les .video-card
  document.querySelectorAll('.video-card').forEach(card => {
    const raw = card.getAttribute('data-yt');
    const ytId = extractYoutubeId(raw);
    const trigger = card.querySelector('.video-card__btn') || card;

    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      openModal(ytId);
    });
  });
});


// ==========================
// Menu mobile (hamburger) : ouverture / fermeture du off-canvas
// ==========================
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('.hamburger');
  const mm  = document.getElementById('mobileMenu');
  if (!btn || !mm) return;

  const open = () => {
    // rend le menu visible
    mm.hidden = false;    
    // ajoute la classe pour la transition CSS                                  
    requestAnimationFrame(() => mm.classList.add('is-open')); 
    btn.setAttribute('aria-expanded', 'true');
     // pour bloquer le body
    document.documentElement.classList.add('menu-open');    
  };
  const close = () => {
    mm.classList.remove('is-open');
    btn.setAttribute('aria-expanded', 'false');
    document.documentElement.classList.remove('menu-open');
     // laisse le temps à l’animation
    setTimeout(() => (mm.hidden = true), 250);             
  };

  // Clic sur l’icône hamburger
  btn.addEventListener('click', () => {
    (btn.getAttribute('aria-expanded') === 'true') ? close() : open();
  });
  // Clic sur l’overlay ou élément [data-close]
  mm.addEventListener('click', (e) => {
    if (e.target.matches('.mobile-menu__overlay,[data-close]')) close();
  });
  // Fermeture via Échap
  document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && btn.getAttribute('aria-expanded') === 'true') close(); });
});


// ==========================
// Sous-menus dans le menu mobile : accordéons avec chevron
// ==========================
document.addEventListener('DOMContentLoaded', () => {
  const panel = document.querySelector('.mobile-menu__panel');
  if (!panel) return;

  // Pour chaque <li class="menu-item-has-children">
  panel.querySelectorAll('.menu-item-has-children > a').forEach(a => {
    const href = a.getAttribute('href') || '';
    const isHeading = href === '' || href === '#' || href === '#!';   

    const li  = a.parentElement;
    const sub = li.querySelector(':scope > .sub-menu');               

    if (!sub) return;

    // Sous-menu fermé par défaut
    sub.style.display = 'none';
    li.classList.add('is-collapsed');

    // Bouton chevron pour ouvrir/fermer
    const toggle = document.createElement('button');
    toggle.type = 'button';
    toggle.className = 'mobile-sub-toggle';
    toggle.setAttribute('aria-label','Toggle submenu');
    toggle.innerHTML = '▾';

    // petit style inline basique (le reste dans ton CSS)
    toggle.style.marginLeft = '8px';
    toggle.style.background = 'transparent';
    toggle.style.border = '0';
    toggle.style.color = '#f7b500';
    toggle.style.fontSize = '14px';
    toggle.style.cursor = 'pointer';

    a.after(toggle);

    const open = () => { sub.style.display = ''; li.classList.remove('is-collapsed'); toggle.style.transform='rotate(180deg)'; };
    const close= () => { sub.style.display = 'none'; li.classList.add('is-collapsed'); toggle.style.transform=''; };

    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      (sub.style.display === 'none') ? open() : close();
    });

    // Si le lien parent est juste un "titre", on lui donne aussi le comportement toggle
    if (isHeading) {
      a.style.pointerEvents = 'auto';
      a.addEventListener('click', (e) => {
        e.preventDefault();
        (sub.style.display === 'none') ? open() : close();
      });
    }
  });
});


// ==========================
// Section .works__grid : drag horizontal sur mobile
// ==========================
document.addEventListener('DOMContentLoaded', () => {
  const scroller = document.querySelector('.works__grid');
  if (!scroller) return;

  let isDown = false, startX = 0, startLeft = 0;

  scroller.addEventListener('mousedown', (e) => {
    if (window.innerWidth > 860) return;   // seulement en mobile/tablette
    isDown = true;
    startX = e.pageX;
    startLeft = scroller.scrollLeft;
    scroller.classList.add('is-dragging');
  });
  ['mouseleave','mouseup'].forEach(ev =>
    scroller.addEventListener(ev, () => { isDown = false; scroller.classList.remove('is-dragging'); })
  );
  scroller.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    scroller.scrollLeft = startLeft - (e.pageX - startX) * 1.2;
  });
});


// ==========================
// Section .values__grid : slider cartes valeurs + dots (.values-dots)
// ==========================
document.addEventListener('DOMContentLoaded', () => {
  const slider = document.querySelector('.values__grid');
  if (!slider) return;

  const cards = slider.querySelectorAll('.value-card');           // les cartes
  const dots  = document.querySelectorAll('.values-dots .dot');   // les indicateurs
  if (!cards.length || !dots.length) return;

  // Centre une carte donnée
  function goTo(i){
    const card = cards[i];
    if (!card) return;
    card.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
  }

  // Active le bon dot selon la carte la plus centrée
  function updateDots(){
    const rects = [...cards].map(c => c.getBoundingClientRect());
    const idx = rects.reduce((best, r, i) => {
      const center = (r.left + r.right) / 2;
      const dist   = Math.abs(center - window.innerWidth / 2);
      return dist < best.dist ? { i, dist } : best;
    }, { i:0, dist: Infinity }).i;

    dots.forEach((d,j) => d.classList.toggle('is-active', j === idx));
  }

  // Click sur un dot → on scrolle vers la carte correspondante
  dots.forEach((d,i) => {
    d.addEventListener('click', () => goTo(i));
  });

  // MAJ lors du scroll / resize
  slider.addEventListener('scroll', () => {
    window.requestAnimationFrame(updateDots);
  });
  window.addEventListener('resize', updateDots);

  // Premier état
  updateDots();
});
