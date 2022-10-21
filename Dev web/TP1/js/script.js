const result=5
console.log('mon résultat est ' + 5)
console.log('mon résultat est', 5)

const Bob = {
    nom: "Bob",
    age: "18",
    genre : "Homme"
}

class Personne {
    constructor(nom, age, genre) {
        this.nom = nom
        this.age = age
        this.genre = genre
    }

    getObject() {
        return this.obj
    }

}

const Lea = new Personne('Lea', 18, "Femme")
const Jean = new Personne('Jean', 21, "Homme")
const Chovy = new Personne('Chovy', 20, "Homme")

const tableau1 = [Bob, Lea, Jean, Chovy]

const tableau2 = [{
    nom: "Bob",
    age: "18"
    }, {
    nom: "Lea",
    age: "19"
    }]
    tableau2.map(element => element.nom)

function User(Utilisateur) {
    for(i = 0;i<tableau1.length-1;i++){
        console.log(Utilisateur[i].nom + " " + Utilisateur[i].age + " " + Utilisateur[i].genre)
    }
    return 0;
}

function User2(elements) {
    Array(elements => array.forEach(element => {
        elements.nom + elements.age + elements.genre
    }));
}

console.log('test : ' + Chovy.age)
console.log(User(tableau2));
console.log(User2(tableau1))