var config = {
  apiKey: "AIzaSyDamIkhjk3G0MMqPrdVAA6W9rrBBxNtD7o",
  authDomain: "gen121-375d3.firebaseapp.com",
  databaseURL: "https://gen121-375d3.firebaseio.com",
  projectId: "gen121-375d3",
  storageBucket: "gen121-375d3.appspot.com",
  messagingSenderId: "436760463331"
};
firebase.initializeApp(config);

const database = firebase.firestore();
const table = document.querySelector('#tableResult');
const form = document.querySelector('#addForm');

database.collection('subject').get().then((snapshot)=>{
    snapshot.forEach(doc=>{
    	getdataSubject(doc);
    });
});

form.addEventListener('submit',(e)=>{
    e.preventDefault();
    if(form.nameSubject.value!=''||form.codeSubject.value!=''||form.dateSubjectStart.value!=''
    ||form.dateSubjectEnd.value!=''||form.timeSubjectStart.value!=''||form.timeSubjectEnd.value!=''){
        database.collection('subject').add({
            nameSubject:form.nameSubject.value,
            codeSubject:form.codeSubject.value,
            dateSubjectStart:form.dateSubjectStart.value,
            dateSubjectEnd:form.dateSubjectEnd.value,
            timeSubjectStart:form.timeSubjectStart.value,
            timeSubjectEnd:form.timeSubjectEnd.value
        }).then(()=>location.reload(true));
    }else{
        alert("Don't be empty!");
    }
});

function getdataSubject(doc){
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    cell1.innerHTML = doc.data().nameSubject;
    cell2.innerHTML = doc.data().codeSubject;
    cell3.innerHTML = doc.data().dateSubjectStart;
    cell4.innerHTML = doc.data().dateSubjectEnd;

    let btn = document.createElement('button');
    btn.textContent = 'Delete';
    btn.setAttribute('class','btn btn-danger');
    btn.setAttribute('data-id',doc.id);
    cell5.appendChild(btn);

    btn.addEventListener('click',(e)=>{
        let id = e.target.getAttribute('data-id');
        database.collection('subject').doc(id).delete().then(()=>location.reload(true));
    });
}