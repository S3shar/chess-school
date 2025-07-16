const CACHE_NAME = 'chess-school-v1';
const urlsToCache = [
  '/',
  '/index.php',
  '/branches.php',
  '/tournaments.php',
  '/registration.php',
  '/styles.css',
  '/images/main/Logo-Photoroom.png',
  '/images/main/Tel.jpg',
  '/images/main/School1.jpg',
  '/images/main/phon.jpeg'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(urlsToCache))
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => response || fetch(event.request))
  );
});