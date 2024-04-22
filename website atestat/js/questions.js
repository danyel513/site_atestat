
let questions = [
    {
    numb: 1,
    question: "Un șir de 22 de caractere se declara astfel:",
    answer: "char s[23];",
    options: [
      "char[22];",
      "char s;",
      "char s[21];",
      "char s[23];"
    ]
  },
    {
    numb: 2,
    question: "Care dintre urmatoarele secvente citeste un sir de caractere?",
    answer: "cin.get(s);",
    options: [
      "cin.get(s);",
      "cin>>s; cout>>s;",
      "cin.get<<(s);",
      "cin.get s;"
    ]
  },
    {
    numb: 3,
    question: "Functia islower( int ch ) verifica:",
    answer: "dacă un caracter este literă mică",
    options: [
      "daca un sir contine litere mici",
      "daca sirul citit contine doar caractere ch",
      "daca caracterul citit este egal cu ch",
      "dacă un caracter este literă mică"
    ]
  },
    {
    numb: 4,
    question: "In urma executiei functiei strlen(s), unde s memoreaza cuvantul pbinfo rezulta:",
    answer: "un numar egal cu 6",
    options: [
      "un numar egal cu 6",
      "un numar mai mic decat 6",
      "un cuvant de 6 litere",
      "0 adica fals deoarece s este un caracter"
    ]
  },
    {
    numb: 5,
    question: "Functia strncpy(s1,s2,5)",
    answer: "copiaza 5 caractere din sirul s2 in sirul s1",
    options: [
      "copiaza sirul s2 in s1 incepand cu al 5-lea cacracter",
      "copiaza 5 caractere din sirul s2 in sirul s1",
      "compara 5 caractere, iar daca sunt identice returneaza 1",
      "copiaza 5 caractere din sirul s1 in sirul s2"
    ]
  },
  {
    numb: 6,
    question: "Secventa strcpy( t, s+x+1 ); strcpy( s+x, t);",
    answer: "elimină din șirul s (presupus citit) caracterul de poziția x",
    options: [
      "inverseaza cele doua siruri s si t",
      "copiaza sirul s in sirul t",
      "cauta caracterul de pe pozitia x",
      "elimină din șirul s (presupus citit) caracterul de poziția x"
    ]
  },
  {
    numb: 7,
    question: "Cum funcționează recursivitatea?",
    answer: "se foloseste autoapelul unei functii in mod repetat",
    options: [
      "se folosesc vectori pentru parcurgere pe nivele",
      "se foloseste autoapelul unei functii in mod repetat",
      "se parcurge un subprogram de doau ori",
      "se foloseste o structura repetitiva"
    ]
  },
  {
    numb: 8,
    question: "Recursivitatea directa presupune:",
    answer: "în definiția funcției F aparitia apelul funcției F",
    options: [
      "în definiția funcției F aparitia apelul funcției F",
      "in structura functiei F apare o singura data apelul subprogramului",
      "în definiția funcției F apare apelul funcției G, iar în definiția funcției G apare apelul lui F",
      "in compozitia funtiei f apare functia G de doua ori"
    ]
  }, 
  {
    numb: 10,
    question: "Care e diferenta dintre variabilele globale si cele locale?",
    answer: "Variabilele locale sunt salvate in interiorul uinei functii iar cele globale in antetul programului",
    options: [
      "Pentru variabilele globale se aloca mai mult spatiu decat pentru cele locale",
      "Variabilele locale pot fi folosite o singura data",
      "Variabilele locale sunt salvate in interiorul uinei functii iar cele globale in antetul programului",
      "Variabilele locale pot fi folosite doar in programul principal main {int main()}"
    ]
  },
  {
    numb: 11,
    question: "Parametrii formali:",
    answer: "apar in definirea unei functii/unui subprogram",
    options: [
      "nu pot fi modificati si nu pot fi transmisi",
      "reprezinta variabile globale",
      "apar in apelul unui subprogram",
      "apar in definirea unei functii/unui subprogram"
    ]
  },
  {
    numb: 12,
    question: "Transmiterea prin referinta a parametrilor reprezinta:",
    answer: "modificarea valorii unei variabile in intregul program",
    options: [
      "modificarea valorii unei variabile in intregul program",
      "transformarea unei variabile locale intr-o variabila globala de tip caracter",
      "folosirea variabilei doar in interiorul functiei",
      "copierea unei variabile locale in una globala"
    ]
  }, 
  {
    numb: 13,
    question: "ofstream reprezinta tipul unei variabile caracteristice:",
    answer: "fluxului de iesire",
    options: [
      "fluxului de intrare si iesire",
      "fluxului de intrare",
      "fluxului de iesire",
      "nu exista acest tip de variabile"
    ]
  },
  {
    numb: 14,
    question: "Secventa corecta pentru a afisa in fisier numarul intreg 25 este:",
    answer: "g<<25; unde g este numele variabilei",
    options: [
      "ofstream (g.txt)<<25;",
      "cout(g.out)<<25;",
      "g<<25; unde g este numele fisierului de iesire",
      "g<<25; unde g este numele variabilei"
    ]
  },      
];