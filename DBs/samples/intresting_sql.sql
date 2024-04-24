-- selecting student infos from "members" plus their study field name through "students"
    SELECT m.id,m.first_name,m.last_name,m.country,m.city, m.location_id, s.study_field_id, sf.name
    FROM members m
    INNER JOIN students s
    INNER JOIN studyfields sf
    ON m.id = s.member_id AND s.study_field_id = sf.id
    WHERE m.role = "student"
    ---------------
    -- not good idea but it is possibgle to update using join!!
    -- Update members table
        UPDATE members m
        INNER JOIN students s
        ON m.id = s.member_id
        SET m.city = 'NewCity', m.country = 'NewCountry'
        WHERE m.role = "student" AND s.study_field_id = 1; -- replace 1 with the desired study_field_id

        -- Update students table
        UPDATE students s
        INNER JOIN members m
        ON m.id = s.member_id
        INNER JOIN studyfields sf
        ON s.study_field_id = sf.id
        SET s.study_field_id = 2 -- replace 2 with the desired new study_field_id
        WHERE m.role = "student" AND sf.name = 'OldStudyFieldName'; -- replace 'OldStudyFieldName' with the desired old study field name

-- Selecting Teachers info, and associated "class_id", "domain"
    SELECT m.first_name,m.last_name, t.class_id,c.name AS 'Class', sf.name AS 'Domain'
    FROM members m
    INNER JOIN teachers t
    INNER JOIN studyfields sf
    INNER JOIN classes c
    ON m.id = t.member_id AND t.class_id = c.id AND c.study_field_id = sf.id
    WHERE m.role = "teacher"

-- Inserting multy  rows into "students"
    INSERT INTO `students` 
    (`id`, `member_id`, `study_field_id`, `class_id`, `group_id`, `semester`, `academic_year_id`, `notes_id`) VALUES 
    (NULL, '17', '17', '49', NULL, '1', '16', NULL), 
    (NULL, '17', '17', '50', NULL, '1', '16', NULL);