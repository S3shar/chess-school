self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open('dbd-cache').then((cache) => {
      return cache.addAll([
        '/index.html',
        '/features.html',
        '/characters.html',
        '/map.html',
        '/manifest.json',
        '/style.css',
        '/images/icons/web_logo(192).jpg',
        '/images/icons/web_logo(512).jpg',
        'images/main/inst-logo-Photoroom.png',
        'images/main/Logo-Photoroom.png',
        'images/main/phon.jpeg',
        'images/main/School1.jpg',
        'images/main/somechess.jpg',
        'images/main/Tel.jpg',
        'images/main/telegram-logo-Photoroom.jpg',
        'images/registration/Phon_register.jpg',
        'images/registration/Phon-register1.jpg'
      ]);
    })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request).then((resp) => {
      return resp || fetch(event.request);
    })
  );
});