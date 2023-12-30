// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyDlU81EYwqNQG72rNSraVu5l2tU7xElT94",
    authDomain: "sendq-1ed35.firebaseapp.com",
    projectId: "sendq-1ed35",
    storageBucket: "sendq-1ed35.appspot.com",
    messagingSenderId: "1004700719091",
    appId: "1:1004700719091:web:429110137efef39d3c2486",
    measurementId: "G-GJR3TDD1SL"
  };
  const messaging = firebase.messaging();
  messaging.setBackgroundMessageHandler(function(payload) {
      console.log("Message received.", payload);
      const title = "Hello world is awesome";
      const options = {
          body: "Your notificaiton message .",
          icon: "/firebase-logo.png",
      };
      return self.registration.showNotification(
          title,
          options,
      );
  });
  chrome.extension.sendRequest({
    title: 'giveSomeTitle', params: paramsToSend
  }, function(result) { 
    // Do Some action
});
