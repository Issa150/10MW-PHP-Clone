--Locations
    INSERT INTO Locations (id, name, country, city, address) VALUES
    (1, 'University of Cambridge', 'United Kingdom', 'Cambridge', '4 Mill Ln, Cambridge CB2 1RX'),
    (2, 'Massachusetts Institute of Technology', 'United States', 'Cambridge', '77 Massachusetts Ave, Cambridge, MA 02139'),
    (3, 'University of Oxford', 'United Kingdom', 'Oxford', 'Oxford OX1 2JD'),
    (4, 'Harvard University', 'United States', 'Cambridge', '1 Harvard Yard, Cambridge, MA 02138'),
    (5, 'California Institute of Technology', 'United States', 'Pasadena', '1200 E California Blvd, Pasadena, CA 91125'),
    (6, 'University of Tokyo', 'Japan', 'Tokyo', '7 Chome-3-1 Hongo, Bunkyo City, Tokyo 113-8654'),
    (7, 'ETH Zurich', 'Switzerland', 'Zurich', 'Rämistrasse 101, 8092 Zürich'),
    (8, 'University of Cambridge (Sidgwick Site)', 'United Kingdom', 'Cambridge', 'Sidgwick Ave, Cambridge CB3 9DA'),
    (9, 'University of Chicago', 'United States', 'Chicago', '5801 S Ellis Ave, Chicago, IL 60637'),
    (10, 'Imperial College London', 'United Kingdom', 'London', 'South Kensington Campus, London SW7 2AZ');

--Members
    INSERT INTO Members (id, first_name, last_name, user_name, password, email, gender, birth_date, image_profile, country, city, location_id, role) VALUES
    (1, 'John', 'Doe', 'johndoe', 'password123', 'johndoe@example.com', 'male', '1990-05-15', 'profile1.jpg', 'United States', 'New York', 4, 'student'),
    (2, 'Jane', 'Smith', 'janesmith', 'password456', 'janesmith@example.com', 'female', '1995-09-20', 'profile2.jpg', 'United Kingdom', 'London', 10, 'teacher'),
    (3, 'Michael', 'Johnson', 'michaeljohnson', 'password789', 'michaeljohnson@example.com', 'male', '1985-03-01', 'profile3.jpg', 'Japan', 'Tokyo', 6, 'admin'),
    (4, 'Emily', 'Davis', 'emilydavis', 'password321', 'emilydavis@example.com', 'female', '1992-11-10', 'profile4.jpg', 'Switzerland', 'Zurich', 7, 'student'),
    (5, 'David', 'Wilson', 'davidwilson', 'password654', 'davidwilson@example.com', 'male', '1988-06-25', 'profile5.jpg', 'United Kingdom', 'Oxford', 3, 'teacher'),
    (6, 'Olivia', 'Anderson', 'oliviaanderson', 'password987', 'oliviaanderson@example.com', 'female', '1993-04-05', 'profile6.jpg', 'United States', 'Pasadena', 5, 'student'),
    (7, 'William', 'Thompson', 'williamthompson', 'password159', 'williamthompson@example.com', 'male', '1991-08-15', 'profile7.jpg', 'United Kingdom', 'Cambridge', 1, 'admin'),
    (8, 'Sophia', 'Lee', 'sophialee', 'password753', 'sophialee@example.com', 'female', '1994-12-01', 'profile8.jpg', 'United States', 'Cambridge', 2, 'student'),
    (9, 'Alexander', 'Nguyen', 'alexandernguyen', 'password951', 'alexandernguyen@example.com', 'male', '1987-02-28', 'profile9.jpg', 'United States', 'Chicago', 9, 'teacher'),
    (10, 'Isabella', 'Patel', 'isabellapatel', 'password357', 'isabellapatel@example.com', 'female', '1996-07-18', 'profile10.jpg', 'United Kingdom', 'Cambridge', 8, 'student');
---------------------------------------
---------    Reserve    ----------------
---------------------------------------
-- Locations table
INSERT INTO Locations (name, country, city, address) VALUES
('University of California, Berkeley', 'USA', 'Berkeley', '200 California Hall #1500, Berkeley, CA 94720-1500'),
('Massachusetts Institute of Technology', 'USA', 'Cambridge', '77 Massachusetts Ave, Cambridge, MA 02139'),
('Stanford University', 'USA', 'Stanford', '450 Serra Mall, Stanford, CA 94305'),
('University of Oxford', 'UK', 'Oxford', 'University of Oxford, Oxford OX1 2JD'),
('University of Cambridge', 'UK', 'Cambridge', 'The Old Schools, Trinity Lane, Cambridge CB2 1TN'),
('Harvard University', 'USA', 'Cambridge', 'Massachusetts Hall, 1 Harvard Yard, Cambridge, MA 02138'),
('California Institute of Technology', 'USA', 'Pasadena', '1200 E California Blvd, Pasadena, CA 91125'),
('University of Chicago', 'USA', 'Chicago', '5801 S Ellis Ave, Chicago, IL 60637'),
('Princeton University', 'USA', 'Princeton', 'Princeton, NJ 08544'),
('Yale University', 'USA', 'New Haven', 'New Haven, CT 06520');

-- StudyFields table
INSERT INTO StudyFields (name, location_id) VALUES
('Computer Science', 1),
('Electrical Engineering', 2),
('Mechanical Engineering', 3),
('Mathematics', 4),
('Physics', 5),
('Economics', 6),
('Chemistry', 7),
('Biology', 8),
('Political Science', 9),
('Psychology', 10);

-- AcademicYears table
INSERT INTO AcademicYears (start_date, end_date) VALUES
('2021-09-01', '2022-08-31'),
('2022-09-01', '2023-08-31'),
('2023-09-01', '2024-08-31'),
('2024-09-01', '2025-08-31'),
('2025-09-01', '2026-08-31'),
('2026-09-01', '2027-08-31'),
('2027-09-01', '2028-08-31'),
('2028-09-01', '2029-08-31'),
('2029-09-01', '2030-08-31'),
('2030-09-01', '2031-08-31');

-- Members table
INSERT INTO Members (first_name, last_name, user_name, password, email, gender, birth_date, created_at, image_profile, country, city, location_id, role) VALUES
('John', 'Doe', 'johndoe', 'password123', 'john.doe@example.com', 'male', '1990-01-01', '2021-01-01 00:00:00', 'profile.jpg', 'USA', 'Berkeley', 1, 'student'),
('Jane', 'Doe', 'janedoe', 'password123', 'jane.doe@example.com', 'female', '1995-05-10', '2021-01-02 10:00:00', 'profile.jpg', 'USA', 'Berkeley', 1, 'student'),
('Alice', 'Smith', 'alicesmith', 'password123', 'alice.smith@example.com', 'non-binary', '1992-12-15', '2021-01-03 20:20:20', 'profile.jpg', 'USA', 'Stanford', 3, 'student'),
('Bob', 'Johnson', 'bobjohnson', 'password123', 'bob.johnson@example.com', 'male', '1985-07-22', '2021-01-04 05:05:05', 'profile.jpg', 'UK', 'Oxford', 4, 'admin'),
('Charlie', 'Brown', 'charliebrown', 'password123', 'charlie.brown@example.com', 'male', '1998-09-09', '2021-01-05 13:37:00', 'profile.jpg', 'USA', 'Cambridge', 2, 'teacher'),
('Emma', 'Watson', 'emmawatson', 'password123', 'emma.watson@example.com', 'female', '1990-04-15', '2021-01-06 23:45:20', 'profile.jpg', 'UK', 'Cambridge', 5, 'student'),
('Ella', 'Johnson', 'ellajohnson', 'password123', 'ella.johnson@example.com', 'female', '2000-11-11', '2021-01-07 15:15:15', 'profile.jpg', 'USA', 'Princeton', 9, 'student'),
('Fred', 'Smith', 'fredsmith', 'password123', 'fred.smith@example.com', 'male', '1988-05-27', '2021-01-08 08:08:08', 'profile.jpg', 'USA', 'Chicago', 8, 'teacher'),
('Grace', 'Davis', 'gracedavis', 'password123', 'grace.davis@example.com', 'female', '1997-02-18', '2021-01-09 10:10:10', 'profile.jpg', 'USA', 'New Haven', 10, 'student'),
('Henry', 'Miller', 'henrymiller', 'password123', 'henry.miller@example.com', 'male', '1993-08-04', '2021-01-10 12:12:12', 'profile.jpg', 'USA', 'Pasadena', 7, 'teacher');

-- Classes table
INSERT INTO Classes (name, study_field_id, start_date, end_date, location_id) VALUES
('Introduction to Computer Science', 1, '2021-09-01', '2022-12-15', 1),
('Data Structures and Algorithms', 1, '2022-01-03', '2022-05-13', 1),
('Introduction to Electrical Engineering', 2, '2021-09-01', '2022-12-15', 2),
('Circuits and Systems', 2, '2022-01-03', '2022-05-13', 2),
('Introduction to Mechanical Engineering', 3, '2021-09-01', '2022-12-15', 3),
('Dynamics and Controls', 3, '2022-01-03', '2022-05-13', 3),
('Introduction to Mathematics', 4, '2021-09-01', '2022-12-15', 4),
('Calculus I', 4, '2022-01-03', '2022-05-13', 4),
('Introduction to Physics', 5, '2021-09-01', '2022-12-15', 5),
('Classical Mechanics', 5, '2022-01-03', '2022-05-13', 5);

-- ClassGroup table
-- No records to insert

-- Notes table
INSERT INTO Notes (class_id, semester, academic_year_id, note, grade, passed) VALUES
(1, '1', 1, 'Great job on understanding the basics of programing! Keep up the good work!', 'partial', 'yes'),
(1, '2', 1, 'Your code is well-organized and easy to understand. Keep practicing and improving your skills!', 'semi-final', 'yes'),
(2, '1', 1, 'You did well on the midterm exam. Keep reading and practicing the algorithms, and also improve your understanding of the time complexity.', 'partial', 'yes'),
(2, '2', 1, 'Excellent job on solving the algorithmic problems! You have a solid understanding of the concepts. Keep working hard!', 'final', 'yes'),
(3, '1', 1, 'Your understanding of electrical circuits is improving. Keep up the good work!', 'partial', 'yes'),
(3, '2', 1, 'Great job on understanding the concepts of electrical circuits. Keep practicing and improving your skills!', 'semi-final', 'yes'),
(4, '1', 1, 'You did well on the midterm exam. Keep reading and practicing the concepts, and also improve your understanding of the applications.', 'partial', 'yes'),
(4, '2', 1, 'Excellent job on understanding the concepts of electrical circuits. Keep working hard!', 'final', 'yes'),
(5, '1', 1, 'Your understanding of mechanical systems is improving. Keep up the good work!', 'partial', 'yes'),
(5, '2', 1, 'Great job on understanding the concepts of mechanical systems. Keep practicing and improving your skills!', 'semi-final', 'yes');

-- Students table
-- No records to insert

-- Teachers table
INSERT INTO Teachers (member_id, class_id) VALUES
(5, 1),
(5, 2),
(8, 3),
(8, 4),
(10, 5),
(10, 6);

-- RoleChanges table
-- No records to insert

-- TeacherClasses table
INSERT INTO TeacherClasses (member_id, class_id, semester) VALUES
(5, 1, '1'),
(5, 1, '2'),
(5, 2, '1'),
(5, 2, '2'),
(8, 3, '1'),
(8, 3, '2'),
(8, 4, '1'),
(8, 4, '2'),
(10, 5, '1'),
(10, 5, '2'),
(10, 6, '1'),
(10, 6, '2');

-- TeacherFiles table
INSERT INTO TeacherFiles (member_id, class_id, semester, file_name, file_path, uploaded_at) VALUES
(5, 1, '1', 'Lecture 1.pdf', '/files/lecture-1.pdf', '2021-09-01 09:00:00'),
(5, 1, '1', 'Lecture 1.ppt', '/files/lecture-1.ppt', '2021-09-01 09:00:00'),
(5, 1, '2', 'Lecture 2.pdf', '/files/lecture-2.pdf', '2021-09-08 09:00:00'),
(5, 1, '2', 'Lecture 2.ppt', '/files/lecture-2.ppt', '2021-09-08 09:00:00'),
(8, 3, '1', 'Lecture 1.pdf', '/files/lecture-1.pdf', '2021-09-01 09:00:00'),
(8, 3, '1', 'Lecture 1.ppt', '/files/lecture-1.ppt', '2021-09-01 09:00:00'),
(8, 3, '2', 'Lecture 2.pdf', '/files/lecture-2.pdf', '2021-09-08 09:00:00'),
(8, 3, '2', 'Lecture 2.ppt', '/files/lecture-2.ppt', '2021-09-08 09:00:00'),
(10, 5, '1', 'Lecture 1.pdf', '/files/lecture-1.pdf', '2021-09-01 09:00:00'),
(10, 5, '1', 'Lecture 1.ppt', '/files/lecture-1.ppt', '2021-09-01 09:00:00'),
(10, 5, '2', 'Lecture 2.pdf', '/files/lecture-2.pdf', '2021-09-08 09:00:00'),
(10, 5, '2', 'Lecture 2.ppt', '/files/lecture-2.ppt', '2021-09-08 09:00:00');
-- ---------------------------------------------------------------------------
-- ---------------------  French ------------------------------------
-- ---------------------------------------------------------------------------

INSERT INTO Locations (name, country, city, address) VALUES ("Ecole Polytechnique Fédérale de Lausanne", "France", "Lausanne", "Station 14"), ("Université de Technologie de Troyes", "France", "Troyes", "12 Rue Marie Curie"), ("Telecom SudParis", "France", "Évry-Courcouronnes", "9 Rue Charles Fourier");

INSERT INTO StudyFields (name, location_id) VALUES ("Computer Science", 1), ("Data Science", 2), ("Software Engineering", 3);

INSERT INTO AcademicYears (start_date, end_date) VALUES ("2021-09-01", "2022-06-30"), ("2022-09-01", "2023-06-30"), ("2023-09-01", "2024-06-30");

INSERT INTO Members (first_name, last_name, user_name, password, email, gender, birth_date, created_at, image_profile, country, city, location_id, role) VALUES ("Jean", "Dupont", "jeandupont", "password123", "jeandupont@example.com", "male", "1998-01-01", "2021-09-01 10:00:00", "jeandupont.jpg", "France", "Lausanne", 1, "student"), ("Marie", "Curie", "mariecurie", "password123", "mariecurie@example.com", "female", "1999-01-01", "2021-09-01 10:00:00", "mariecurie.jpg", "France", "Troyes", 2, "student"), ("Pierre", "Hermite", "pierrehermite", "password123", "pierrehermite@example.com", "male", "2000-01-01", "2021-09-01 10:00:00", "pierrehermite.jpg", "France", "Évry-Courcouronnes", 3, "student");

INSERT INTO Classes (name, study_field_id, start_date, end_date, location_id) VALUES ("Introduction to Programming", 1, "2021-09-01", "2021-12-15", 1), ("Data Structures and Algorithms", 2, "2021-09-01", "2021-12-15", 2), ("Software Design Patterns", 3, "2021-09-01", "2021-12-15", 3);

INSERT INTO ClassGroup (name, class_id, study_field_id, start_date, end_date, location_id) VALUES ("Group A", 1, 1, "2021-09-01", "2021-12-15", 1), ("Group B", 2, 2, "2021-09-01", "2021-12-15", 2), ("Group C", 3, 3, "2021-09-01", "2021-12-15", 3);

INSERT INTO Notes (class_id, semester, academic_year_id, note, grade, passed) VALUES (1, "1", 1, "Lecture 1: Introduction to Programming - 10/20", "partial", "no"), (2, "1", 1, "Lecture 1: Data Structures and Algorithms - 15/20", "partial", "yes"), (3, "1", 1, "Lecture 1: Software Design Patterns - 17/20", "partial", "yes");

INSERT INTO Students (member_id, study_field_id, class_id, group_id, semester, academic_year_id, notes_id) VALUES (1, 1, 1, 1, "1", 1, 1), (2, 2, 2, 2, "1", 1, 2), (3, 3, 3, 3, "1", 1, 3);

INSERT INTO Teachers (member_id, class_id) VALUES (4, 1), (5, 2), (6, 3);

INSERT INTO RoleChanges (member_id, old_role, new_role, changed_by, changed_at) VALUES (1, "student", "teacher", 4, "2021-09-01 14:00:00"), (2, "student", "teacher", 5, "2021-09-01 15:00:00"), (3, "student", "teacher", 6, "2021-09-01 16:00:00");

INSERT INTO TeacherClasses (member_id, class_id, semester) VALUES (4, 1, "1"), (5, 2, "6"), (6, 3, "1");

INSERT INTO TeacherFiles (member_id, class_id, semester, file_name, file_path, uploaded_at) VALUES (4, 1, "1", "Introduction to Programming - Slides.pdf", "/files/introduction-to-programming-slides.pdf", "2021-09-01 10:00:00"), (5, 2, "1", "Data Structures and Algorithms - Slides.pdf", "/files/data-structures-and-algorithms-slides.pdf", "2021-09-01 11:00:00"), (6, 3, "1", "Software Design Patterns - Slides.pdf", "/files/software-design-patterns-slides.pdf", "2021-09-01 12:00:00");