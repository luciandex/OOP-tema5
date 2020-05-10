# OOP-tema5

Sa se creeze:
- o clasa abstracta "Vehicle" care sa contina definitia a:
- 5 proprietati: engineStatus, speed, speedUnit, distance, vehicleType
- 5 metode: startEngine, stopEngine, setSpeed, move, averageTimePerDistance, __toString

- o clasa "Car" care sa extinda clasa "Vehicle" si sa implementeze particularitatile unei masini.
- o clasa "Plane" care sa extinda clasa "Vehicle" si sa implementeze particularitatile unui avion.
- o clasa "Boat" care sa extinda clasa "Vehicle" si sa implementeze particularitatile unei barci.

Functionalitate metode/proprietati:
- start/stopEngine vor controla statusul motorului (eg: on/off, started/stopped, etc)
- setSpeed va seta viteza (salvata in proprietatea speed)
- proprietateaspeedUnit va fi diferit in functie de tipul vehiculului (kilometru pe ora - km/h - pentru Car, nod - kt - pentru Plane, mila marina pe ora - nm/h - pentru Boat) - unitatea de masura nu poate fi modificata din afara claselor Car/Plane/Boat.
- move va adauga distanta trimisa ca parametru la distanta totala (salvata in proprietatea distance) parcursa.
- proprietatea vehicleType va reprezenta tipul vehiculului si nu poate fi modifcata din exteriorul claselor Car/Plane/Boat.
- averageTimePerDistance va calcula timpul mediu petrecut pentru instanta curenta pentru Car/Plane/Boat.
- averageTimePerDistance va calculeze timpul trecut pentru sesiunea curenta de condus
- __toString va afisa statusul curent al clasei din care este apelat. De exemplu, pentru o masina pornita cu viteza de 60 km/h care a parcurs distanta 120km metoda va intoarce un mesaj similar cu mesajul: "Vehicle Car has the engine started with the current speed at 60 km/h and traveled distance of 120 km in 2 h".

Sa se stabileasca functii de tip set si get pentru proprietatile necesare.
Sa se implementeze metoda magica __toString pentru toate clasele corect.
Sa se faca cel putin un apel catre o metoda din clasa parinte "Vehicle" folosind cuvantul cheie parent::
Sa se creeze o instanta a clasei Car care sa parcurga 120km cu viteza de 60km/h, in final sa se afiseze timpul petrecut pentru distanta parcursa data fiind viteza.
Sa se creeze o instanta a clasei Plane care sa parcurga 230kt cu viteza de 10kt, in final sa se afiseze timpul petrecut pentru distanta parcursa data fiind viteza.
Sa se creeze o instanta a clasei Boat care sa parcurga 340nm cu viteza de 60nm/h, in final sa se afiseze timpul petrecut pentru distanta parcursa data fiind viteza.

Sa se dea cate un exemplu pentru fiecare operatie.
