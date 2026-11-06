// FILE HELPING ME LINK THIS TO FIREBASE, AS REQUIRED BY THE ASSIGNMENT BRIEF

import { initializeApp } from "firebase/app";
import { initializeFirestore, persistentLocalCache, persistentMultipleTabManager,
         collection, getDocs, query, orderBy } from "firebase/firestore";
         
// MY FIREBASE CONFIGURATION FILE 
const firebaseConfig = {
  apiKey: "AIzaSyAo1S6ZHMua9ldTbFysvAou-p4N-kparN4",
  authDomain: "courses-e3345.firebaseapp.com",
  projectId: "courses-e3345",
  storageBucket: "courses-e3345.firebasestorage.app",
  messagingSenderId: "647843551985",
  appId: "1:647843551985:web:5308ef540bb824aee96750",
  measurementId: "G-BJ23NF15WM"
};

const app = initializeApp(firebaseConfig);

// THIS PERSISTENT LOCAL CACHE WILL LET FIRESTORE SERVE COURSE WHILE OFFLINE 
const db = initializeFirestore(app, {
  localCache: persistentLocalCache({ tabManager: persistentMultipleTabManager() })
});

export async function getCourses() {
  const snap = await getDocs(query(collection(db, "courses"), orderBy("code")));
  return snap.docs.map(d => d.data());
}