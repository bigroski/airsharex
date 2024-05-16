importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

firebase.initializeApp({
    apiKey: "AIzaSyDfp-2rqF972Hme5JO8Ei0Aiyvo3o3rIZI",
    projectId: "flowing-vision-184005",
    messagingSenderId: "852810134050",
    appId: "1:852810134050:web:a6c91417d04f1c6fd4107b",
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function({data:{title,body,icon}}) {
    return self.registration.showNotification(title,{body,icon});
});
