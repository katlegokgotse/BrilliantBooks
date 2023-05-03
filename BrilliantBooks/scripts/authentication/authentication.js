// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import { getAuth,  createUserWithEmailAndPassword } from "firebase/firebase-auth"; 
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCapMXz9tGAnR-u9NHEQDaAWTxuURdOh_M",
  authDomain: "brilliantbooks-c5740.firebaseapp.com",
  projectId: "brilliantbooks-c5740",
  storageBucket: "brilliantbooks-c5740.appspot.com",
  messagingSenderId: "272913443023",
  appId: "1:272913443023:web:177a314268849324302fba",
  measurementId: "G-B7GSY7QWL3"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth(app);

import { getAuth,} from "firebase/auth";
let userLoginEmailAddress = document.getElementById("userEmailAddress");
let userLoginPassword = document.getElementById("userLoginPassword");

createUserWithEmailAndPassword();

createUserWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed in 
    const user = userCredential.user;
    // ...
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    // ..
  });