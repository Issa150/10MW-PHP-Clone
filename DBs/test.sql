1. **StudyFields table**
    - id (INT, PRIMARY KEY, NOT NULL, AUTO_INCREMENT)
    - name (VARCHAR(255), NOT NULL)
    - class_id (INT, NOT NULL)
    - FOREIGN KEY (class_id) REFERENCES Classes(id) ON DELETE CASCADE ON UPDATE CASCADE

2. **Classes table**
    - id (INT, PRIMARY KEY, NOT NULL, AUTO_INCREMENT)
    - name (VARCHAR(255), NOT NULL)
    - start_date (DATE, NOT NULL)
    - end_date (DATE, NOT NULL)
    - location_id (INT, NOT NULL)
    - FOREIGN KEY (study_field_id) REFERENCES StudyFields(id) ON DELETE CASCADE ON UPDATE CASCADE
    - FOREIGN KEY (location_id) REFERENCES Locations(id) ON DELETE CASCADE ON UPDATE CASCADE

3. **Students table**
    - id (INT, PRIMARY KEY, NOT NULL, AUTO_INCREMENT)
    - member_id (INT, NOT NULL)
    - academic_year_id (INT, NOT NULL)
    - study_field_id (INT, NOT NULL)
    - FOREIGN KEY (member_id) REFERENCES Members(id) ON DELETE CASCADE ON UPDATE CASCADE
    - FOREIGN KEY (academic_year_id) REFERENCES AcademicYears(id) ON DELETE CASCADE ON UPDATE CASCADE
    - FOREIGN KEY (study_field_id) REFERENCES StudyFields(id) ON DELETE CASCADE ON UPDATE CASCADE
/*
Based on the current table schema, a student can only have one study field. 

This is because in the `Students` table, the `study_field_id` is a foreign key 
referencing the `id` in the `StudyFields` table. This foreign key is associated 
with each student record, and it can only reference one record in the `StudyFields` table.

If you want a student to have multiple study fields, you would need to create a new table that allows for a many-to-many relationship between students and study fields. Here's an example of what that might look like:

*/


-- In this schema, the Students table includes a study_field_id column, 
-- which is a foreign key referencing the StudyFields table. 
-- This ensures that each student is associated with only one study field in a given year.

-- The Classes table includes a study_field_id column as well, which allows for multiple classes
--  to be associated with the same study field. The class_id column in the Students table is a foreign key
--  referencing the Classes table, which allows for many students to be associated with the same class.
