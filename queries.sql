
-- create
CREATE TABLE Groupmates (
  groupId INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  adress TEXT NOT NULL
);

-- insert
INSERT INTO Groupmates VALUES (1, 'Dima', 22, 'Moskovskaya, bld. 2, appt. 89');
INSERT INTO Groupmates VALUES (2, 'Angy', 21, 'Vozrozhdeniya, bld. 85');
INSERT INTO Groupmates VALUES (3, 'Sveta', 21, 'Kosmonavtov Ul., bld. 49, appt. 64');
INSERT INTO Groupmates VALUES (4, 'Igor', 21, 'Raskovoy Per., bld. 27');
INSERT INTO Groupmates VALUES (5, 'Liza', 20, 'Uritskogo, bld. 29, appt. 1');
INSERT INTO Groupmates VALUES (6, 'Pavel', 22, 'Panovo Mkrn, bld. 17, appt. 180');
INSERT INTO Groupmates VALUES (7, 'Inna', 22, 'Mikrorayon 19, bld. 6/Б, appt. 64');
INSERT INTO Groupmates VALUES (8, 'Grak', 21, 'Kolpino / Oktyabrskaya Ul., bld. 69/39, appt. 279');
INSERT INTO Groupmates VALUES (9, 'Kirill', 23, 'Volzhskoy Flotilii Nab., bld. 39, appt. 32');

-- fetch 
SELECT * FROM Groupmates;
