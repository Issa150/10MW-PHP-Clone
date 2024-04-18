
-- ordered
    -- Locations table
    CREATE TABLE Locations (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        country VARCHAR(255) NOT NULL,
        city VARCHAR(255) NOT NULL,
        address VARCHAR(255) NOT NULL
    );

    -- StudyFields table
    CREATE TABLE StudyFields (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        location_id INT NOT NULL,
        FOREIGN KEY (location_id) REFERENCES Locations(id) ON DELETE CASCADE ON UPDATE CASCADE
    );

    -- AcademicYears table
    CREATE TABLE AcademicYears (    
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        start_date DATE NOT NULL,
        end_date DATE NOT NULL
    );

    -- Members table
    CREATE TABLE Members (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        user_name VARCHAR(255) ,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        gender ENUM('male', 'female', 'other') NOT NULL,
        birth_date DATE NOT NULL,
        created_at DATETIME NOT NULL,
        image_profile VARCHAR(255),
        country VARCHAR(255),
        city VARCHAR(255),
        location_id INT,
        role ENUM('student', 'teacher', 'admin') NOT NULL DEFAULT 'student',
        FOREIGN KEY (location_id) REFERENCES Locations(id) ON DELETE SET NULL ON UPDATE CASCADE
    );

    -- Classes table
    CREATE TABLE Classes (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        study_field_id INT NOT NULL,
        start_date DATE NOT NULL,
        end_date DATE NOT NULL,
        location_id INT NOT NULL,
        FOREIGN KEY (study_field_id) REFERENCES StudyFields(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (location_id) REFERENCES Locations(id) ON DELETE CASCADE ON UPDATE CASCADE
    );

    -- ClassGroup table
    CREATE TABLE ClassGroup (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        class_id INT NOT NULL,
        study_field_id INT NOT NULL,
        start_date DATE NOT NULL,
        end_date DATE NOT NULL,
        location_id INT NOT NULL,
        FOREIGN KEY (class_id) REFERENCES Classes(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (study_field_id) REFERENCES StudyFields(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (location_id) REFERENCES Locations(id) ON DELETE CASCADE ON UPDATE CASCADE
    );

    -- Notes table
    CREATE TABLE Notes (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        class_id INT NOT NULL,
        semester ENUM('1', '2') NOT NULL,
        academic_year_id INT NOT NULL,
        note TEXT,
        grade ENUM('partial', 'semi-final', 'final') NOT NULL,
        passed ENUM('yes', 'no') NOT NULL,
        FOREIGN KEY (class_id) REFERENCES Classes(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (academic_year_id) REFERENCES AcademicYears(id) ON DELETE CASCADE ON UPDATE CASCADE
    );

    -- Students table
    CREATE TABLE Students (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        member_id INT NOT NULL,
        study_field_id INT NOT NULL,
        class_id INT NOT NULL,
        group_id INT,
        semester ENUM('1', '2') NOT NULL,
        academic_year_id INT NOT NULL,
        notes_id INT,
        FOREIGN KEY (member_id) REFERENCES Members(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (study_field_id) REFERENCES StudyFields(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (class_id) REFERENCES Classes(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (group_id) REFERENCES ClassGroup(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (academic_year_id) REFERENCES AcademicYears(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (notes_id) REFERENCES Notes(id) ON DELETE CASCADE ON UPDATE CASCADE
    );

    -- Teachers table
    CREATE TABLE Teachers (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        member_id INT NOT NULL,
        class_id INT,
        FOREIGN KEY (member_id) REFERENCES Members(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (class_id) REFERENCES Classes(id) ON DELETE CASCADE ON UPDATE CASCADE
    );

    -- RoleChanges table
    CREATE TABLE RoleChanges (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        member_id INT NOT NULL,
        old_role ENUM('student', 'teacher', 'admin') NOT NULL,
        new_role ENUM('student', 'teacher', 'admin') NOT NULL,
        changed_by INT NOT NULL,
        changed_at DATETIME NOT NULL,
        FOREIGN KEY (member_id) REFERENCES Members(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (changed_by) REFERENCES Members(id) ON DELETE CASCADE ON UPDATE CASCADE
    );

    -- TeacherClasses table
    CREATE TABLE TeacherClasses (
        member_id INT NOT NULL,
        class_id INT NOT NULL,
        semester ENUM('1', '2') NOT NULL,
        PRIMARY KEY (member_id, class_id, semester),
        FOREIGN KEY (member_id) REFERENCES Members(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (class_id) REFERENCES Classes(id) ON DELETE CASCADE ON UPDATE CASCADE
    );

    -- TeacherFiles table
    CREATE TABLE TeacherFiles (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        member_id INT NOT NULL,
        class_id INT NOT NULL,
        semester ENUM('1', '2') NOT NULL,
        file_name VARCHAR(255) NOT NULL,
        file_path VARCHAR(255) NOT NULL,
        uploaded_at DATETIME NOT NULL,
        FOREIGN KEY (member_id) REFERENCES Members(id) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (class_id) REFERENCES Classes(id) ON DELETE CASCADE ON UPDATE CASCADE
    );


