const CACHE_NAME = 'chess-school';  // Измените версию при обновлении
const urlsToCache = [
  '/chess-school/',
  '/chess-school/index.html',
  '/chess-school/branches.html',
  '/chess-school/tournaments.html',
  '/chess-school/registration.html',
  '/chess-school/styles.css',
  '/chess-school/images/main/Logo-Photoroom.png',
  '/chess-school/images/main/Tel.jpg',
  '/chess-school/images/main/School1.jpg',
  '/chess-school/images/main/phon.jpg',
  '/chess-school/images/icons/web_logo(192).jpg',
  '/chess-school/images/icons/web_logo(512).jpg'   // Исправленное имя файла
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
      .catch(err => console.log('Cache addAll error:', err))
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        return response || fetch(event.request);
      })
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cache => {
          if (cache !== CACHE_NAME) {
            return caches.delete(cache);
          }
        })
      );
    })
  );
});